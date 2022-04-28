<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class GenderController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    //
  }

  public function index() {
    //
  }

  public function show(Request $request, $id) {
    /**
     * Valida los parámetros de la ruta.
     */
    $valParam = Validator::make(['id' => $id], [
      'id' => 'bail|required|integer|min:1',
    ]);

    /**
     * Valida los parámetros de consulta de la ruta.
     */
    $valQuery = Validator::make($request->query(), [
      'sortBy' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
    ]);

    $input = $valParam->validated();
    $query = $valQuery->validated();
  }
}
