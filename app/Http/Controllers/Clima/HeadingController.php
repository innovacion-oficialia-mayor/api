<?php

namespace App\Http\Controllers\Clima;

use App\Http\Controllers\Controller;
use App\Models\Clima\Heading;
use App\Http\Resources\Clima\HeadingResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;

class HeadingController extends Controller {
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
      'limit' => 'bail|nullable|integer|min:1',
      'sortOrder' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
    ]);

    $q = Arr::get($query, 'q', '');
    $limit  = Arr::get($query, 'limit', 1);
    $sortOrder = Arr::get($query, 'sortOrder', 'asc');

    return HeadingResource::collection(Heading::where('name', 'like', "%${q}%")
    ->orderBy('name', $sortOrder)
    ->paginate($limit)
    ->withQueryString())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => 'Heading list.',
    ]]);
  }
}
