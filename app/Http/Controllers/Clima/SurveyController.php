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
use Illuminate\Support\Facades\Validator;

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
      'sortOrder' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
      'limit' => 'bail|nullable|integer|min:1',
    ]);

    $sortOrder = Arr::get($query, 'sortOrder', 'desc');
    $limit  = Arr::get($query, 'limit', 15);

    return SurveyResource::collection(Survey::orderBy('created_at', $sortOrder)
    ->paginate($limit)
    ->withQueryString())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => 'Survey list.',
    ]]);
  }

  public function store(Request $request) {
    /**
     * Valida los campos de la petición.
     */
    $input = $this->validate($request, [
      'percentage_users' => 'bail|nullable|integer|min:12|max:100',
      'started_at' => 'bail|required|date_format:Y/m/d,Y-m-d|after_or_equal:today',
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
        'description' => 'Registered a new survey.',
    ]])
    ->response()
    ->setStatusCode(Response::HTTP_CREATED);
  }

  public function destroy(Request $request, $id) {
    /**
     * Valida los parámetros de la ruta.
     */
    Validator::make(['id' => $id], [
      'id' => 'bail|required|uuid',
    ])->validated();

    $survey = Survey::findOrFail($id);

    $survey->delete();

    return (new SurveyResource($survey))
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => 'The survey was deleted.',
    ]]);
  }
}
