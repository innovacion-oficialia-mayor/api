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

class FactorController extends Controller {
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
      'q' => 'bail|nullable|string|max:256',
      'sortOrder' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
    ]);

    $q = Arr::get($query, 'q', '');
    $sortOrder = Arr::get($query, 'sortOrder', 'asc');

    return FactorResource::collection(Factor::with('heading')
    ->where('name', 'like', "%${q}%")
    ->orderBy('id', $sortOrder)
    ->get())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => 'Factor list.',
    ]]);
  }

  public function questionsHeadingShow(Request $request, $id) {
    /**
     * Valida los parámetros de la ruta.
     */
    Validator::make(['id' => $id], [
      'id' => 'bail|required|integer|min:1',
    ])->validated();

    /**
     * Valida los parámetros de consulta de la ruta.
     */
    $query = $this->validate($request, [
      'limit' => 'bail|nullable|integer|min:1',
      'sortOrder' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
    ]);

    $limit  = Arr::get($query, 'limit', 1);
    $sortOrder = Arr::get($query, 'sortOrder', 'asc');

    return FactorResource::collection(Factor::with([
      'heading' => function($query) use ($sortOrder) {
        $query->orderBy('id', $sortOrder);
      },
      'questions' => function($query) use ($sortOrder) {
        $query->orderBy('id', $sortOrder);
      },
      'questions.options' => function($query) use ($sortOrder) {
        $query->orderBy('id', $sortOrder);
      },
      ])
      ->where('heading_id', $id)
      ->orderBy('id', $sortOrder)
      ->paginate($limit)
      ->withQueryString())
      ->additional([
        'message' => [
          'type' => 'success',
          'code' => Response::HTTP_OK,
          'description' => 'Factors by heading with your questions and options.',
      ]]);
  }
}
