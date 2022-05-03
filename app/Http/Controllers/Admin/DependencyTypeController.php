<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\DependencyType;
use App\Http\Resources\Admin\DependencyTypeResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;

class DependencyTypeController extends Controller {
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

    return DependencyTypeResource::collection(DependencyType::all()
           ->sortBy([['name', $sortBy]]))
           ->additional([
            'message' => [
              'type' => 'success',
              'code' => Response::HTTP_OK,
              'description' => "",
            ]
    ]);
  }

  public function show(Request $request, $id) {
    /**
     * Valida los parámetros de la ruta.
     */
    $valParam = Validator::make(['id' => $id], [
      'id' => 'bail|required|integer|min:1',
    ]);

    $param = $valParam->validated();

    return (new DependencyTypeResource(DependencyType::findOrFail($param['id'])))
           ->additional([
            'message' => [
              'type' => 'success',
              'code' => Response::HTTP_OK,
              'description' => "",
            ]
    ]);
  }
}
