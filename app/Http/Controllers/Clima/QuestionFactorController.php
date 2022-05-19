<?php

namespace App\Http\Controllers\Clima;

use App\Http\Controllers\Controller;
use App\Models\Clima\Factor;
use App\Http\Resources\Clima\FactorResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class QuestionFactorController extends Controller {
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
      'limit' => 'bail|nullable|integer|min:1',
    ]);

    $sortBy = Arr::get($query, 'sortBy', 'asc');
    $limit  = Arr::get($query, 'limit', 15);

    return FactorResource::collection(Factor::with(['heading',
    'questions' => function($query) use ($sortBy) {
      $query->orderBy('id', $sortBy);
    },
    'questions.options' => function($query) use ($sortBy) {
      $query->orderBy('id', $sortBy);
    },
    ])
    ->orderBy('id', $sortBy)
    ->paginate($limit)
    ->withQueryString())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => '',
    ]]);
  }

  public function heading(Request $request, $id){
    /**
     * Valida los parámetros de la ruta.
     */
    $param = Validator::make(['id' => $id], [
      'id' => 'bail|required|integer|min:1',
    ])->validated();

    /**
     * Valida los parámetros de consulta de la ruta.
     */
    $query = $this->validate($request, [
      'sortBy' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
      'limit' => 'bail|nullable|integer|min:1',
    ]);

    $sortBy = Arr::get($query, 'sortBy', 'asc');
    $limit  = Arr::get($query, 'limit', 1);

    return FactorResource::collection(Factor::with([
    'heading' => function($query) use ($sortBy) {
      $query->orderBy('id', $sortBy);
    },
    'questions' => function($query) use ($sortBy) {
      $query->orderBy('id', $sortBy);
    },
    'questions.options' => function($query) use ($sortBy) {
      $query->orderBy('id', $sortBy);
    },
    ])
    ->where('heading_id', $param['id'])
    ->orderBy('id', $sortBy)
    ->paginate($limit)
    ->withQueryString())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => '',
    ]]);
  }
}
