<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Role;
use App\Http\Resources\Admin\RoleResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;

class RoleController extends Controller {
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

    return RoleResource::collection(Role::all()->sortBy([['name', $sortBy]]))
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

    $input = $valParam->validated();

    return (new RoleResource(Role::findOrFail($id)))
           ->additional([
            'message' => [
              'type' => 'success',
              'code' => Response::HTTP_OK,
              'description' => "",
            ]
    ]);
  }
}
