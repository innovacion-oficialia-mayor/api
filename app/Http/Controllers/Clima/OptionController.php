<?php

namespace App\Http\Controllers\Clima;

use App\Http\Controllers\Controller;
use App\Models\Clima\Option;
use App\Http\Resources\Clima\OptionResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;

class OptionController extends Controller {
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

    return OptionResource::collection(Option::where('body', 'like', "%${q}%")
    ->orderBy('id', $sortOrder)
    ->get())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => 'Option list.',
    ]]);
  }
}
