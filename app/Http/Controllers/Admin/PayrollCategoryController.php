<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PayrollCategory;
use App\Http\Resources\Admin\PayrollCategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;

class PayrollCategoryController extends Controller {
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
    $valQuery = Validator::make($request->query(), [
      'sortBy' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
    ]);

    $query = $valQuery->validated();

    $sortBy = Arr::get($query, 'sortBy', 'asc');

    return PayrollCategoryResource::collection(PayrollCategory::with([
    'types' => function($query) use ($sortBy) {
      $query->orderBy('name', $sortBy);
    }])
    ->orderBy('name', $sortBy)
    ->get())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => "",
    ]]);
  }
}
