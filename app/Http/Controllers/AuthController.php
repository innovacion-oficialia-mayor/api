<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use App\Http\Resources\Admin\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller {
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth:api', ['except' => ['login']]);
  }

  /**
   * Get a JWT via given credentials.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function login(Request $request) {
    $credentials = $this->validate($request, [
      'email' => 'bail|required|email|max:255',
      'password' => 'bail|required|string|max:255',
    ]);

    $token = auth()->attempt($credentials);

    if ($token && auth()->user()->active)
      return $this->respondWithToken($token);

    return response()->json([
      'data' => [],
      'message' => [
        'type' => 'error',
        'code' => Response::HTTP_UNAUTHORIZED,
        'description' => 'Unauthorized.',
      ]
    ], Response::HTTP_UNAUTHORIZED);
  }

  /**
   * Get the authenticated User.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function me() {
    return (new UserResource(User::with([
      'role', 'gender', 'job', 'jobLevel', 'payrollTypeCategory.type',
      'payrollTypeCategory.category', 'dependencyArea.dependency',
      'dependencyArea.area',
    ])
    ->findOrFail(auth()->id())))
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => '',
    ]]);
  }

  /**
   * Log the user out (Invalidate the token).
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function logout() {
    auth()->logout();
    return response()->json(['message' => [
      'type' => 'success',
      'code' => Response::HTTP_OK,
      'description' => 'Successfully logged out.'
    ]]);
  }

  /**
   * Refresh a token.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function refresh() {
    return $this->respondWithToken(auth()->refresh());
  }

  /**
   * Get the token array structure.
   *
   * @param  string $token
   *
   * @return \Illuminate\Http\JsonResponse
   */
  protected function respondWithToken($token) {
    return response()->json([
      'data' => [
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => auth()->factory()->getTTL() / 60,
      ],
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => 'Successfully logged in.',
      ]]);
  }
}
