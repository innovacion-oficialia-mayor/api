<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    //
  }

  public function dependencyAreas(Request $request, $dependencyId, $areaId = null) {
    /**
     * Valida los parámetros de la ruta.
     */
    $valParam = Validator::make(['dependencyId' => $dependencyId, 'areaId' => $areaId], [
      'dependencyId' => 'bail|required|integer|min:1',
      'areaId'       => 'bail|nullable|integer|min:1',
    ]);

    /**
     * Valida los parámetros de consulta de la ruta.
     */
    $valQuery = Validator::make($request->query(), [
      'q'      => 'bail|nullable|String',
      'sortBy' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
    ]);

    $input = $valParam->validated();
    $query = $valQuery->validated();
  }

  public function show(Request $request, $id) {
    /**
     * Valida los parámetros de la ruta.
     */
    $valParam = Validator::make(['id' => $id], [
      'id' => 'bail|required|uuid',
    ]);

    $input = $valParam->validated();
  }
}
