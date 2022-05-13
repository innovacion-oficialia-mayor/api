<?php

namespace App\Http\Controllers\Clima;

use App\Http\Controllers\Controller;
use App\Models\Clima\Survey;
use App\Http\Resources\Clima\SurveyResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class SurveyController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    //
  }

  public function index(Request $request){
    /**
     * Valida los parámetros de consulta de la ruta.
     */
    $query = $this->validate($request, [
      'sortBy' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
    ]);

    $sortBy = Arr::get($query, 'sortBy', 'desc');

    return SurveyResource::collection(Survey::orderBy('created_at', $sortBy)
    ->paginate())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => '',
    ]]);
  }

  public function store(Request $request) {
    /**
     * Valida los campos de la petición.
     */
    $input = $this->validate($request, [
      'percentage_users' => 'bail|required|integer|min:12|max:100',
      'started_at' => 'bail|required|date_format:Y/m/d,Y-m-d',
      'finished_at' => 'bail|required|date_format:Y/m/d,Y-m-d|after:started_at',
    ]);

    $input['id'] = Str::uuid();

    $input['started_at']  = strtotime($input['started_at']);
    $input['finished_at'] = strtotime($input['finished_at']);

    return (new SurveyResource(Survey::create($input)))
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_CREATED,
        'description' => '',
    ]])
    ->response()
    ->setStatusCode(Response::HTTP_CREATED);
  }
}
