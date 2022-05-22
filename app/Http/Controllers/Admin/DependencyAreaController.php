<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Dependency;
use App\Http\Resources\Admin\DependencyResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;

class DependencyAreaController extends Controller {
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
      'q' => 'bail|nullable|string|max:24',
      'sortOrder' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
    ]);

    $q = Arr::get($query, 'q', '');
    $sortOrder = Arr::get($query, 'sortOrder', 'asc');

    return DependencyResource::collection(Dependency::with(['type',
    'areas' => function($query) use ($sortOrder) {
      $query->orderBy('name', $sortOrder);
    }])
    ->where('name', 'like', "%${q}%")
    ->orderBy('name', $sortOrder)
    ->get())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => 'Dependency and area list.',
    ]]);
  }
}
