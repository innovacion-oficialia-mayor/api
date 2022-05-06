<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Dependency;
use App\Http\Resources\Admin\DependencyResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;

class DependencyController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    //
  }

  public function index(Request $request) {
    /**
     * Valida los parámetros de consulta de la ruta.
     */
    $query = $this->validate($request, [
      'sortBy' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
    ]);

    $sortBy = Arr::get($query, 'sortBy', 'asc');

    return DependencyResource::collection(Dependency::with(['type',
    'areas' => function($query) use ($sortBy) {
      $query->orderBy('name', $sortBy);
    }])
    ->orderBy('name', $sortBy)
    ->get())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => '',
    ]]);
  }
}
