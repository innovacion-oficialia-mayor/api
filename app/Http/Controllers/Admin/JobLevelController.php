<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\JobLevel;
use App\Http\Resources\Admin\JobLevelResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;

class JobLevelController extends Controller {
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

    return JobLevelResource::collection(JobLevel::orderBy('name',  $sortBy)
           ->get())
           ->additional([
             'message' => [
               'type' => 'success',
               'code' => Response::HTTP_OK,
               'description' => "",
             ]
    ]);
  }
}
