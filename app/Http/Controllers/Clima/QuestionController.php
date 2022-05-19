<?php

namespace App\Http\Controllers\Clima;

use App\Http\Controllers\Controller;
use App\Models\Clima\Question;
use App\Http\Resources\Clima\QuestionResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;

class QuestionController extends Controller {
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

    return QuestionResource::collection(Question::with(['factor', 'factor.heading',
    'options' => function($query) use ($sortBy) {
      $query->orderBy('id', $sortBy);
    }])
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
