<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use App\Models\Admin\Role;
use App\Http\Resources\Admin\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Helpers;

class UserController extends Controller {
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
    $query = $this->validate($request, [
      'filter' => ['bail', 'nullable', 'string', Rule::in(['fullname', 'payroll'])],
      'q' => 'bail|nullable|string|max:256',
      'limit' => 'bail|nullable|integer|min:1',
      'sortOrder' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
    ]);

    $filter = Arr::get($query, 'filter', 'fullname');
    $q = Helpers::trim(Arr::get($query, 'q', ''));
    $limit  = Arr::get($query, 'limit', 15);
    $sortOrder = Arr::get($query, 'sortOrder', 'asc');

    return UserResource::collection(User::with([
      'role', 'gender', 'job', 'jobLevel', 'payrollTypeCategory.type',
      'payrollTypeCategory.category', 'dependencyArea.dependency',
      'dependencyArea.area',
    ])
    ->where($filter, 'like', "%${q}%")
    ->orderBy('fullname', $sortOrder)
    ->paginate($limit)
    ->withQueryString())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => 'User list.',
    ]]);
  }

  public function store(Request $request) {
    /**
     * Valida los campos de la petición.
     */
    $input = $this->validate($request, [
      'fullname' => 'bail|required|string|max:256',
      'payroll' => 'bail|required|string|min:5|max:10|unique:App\Models\Admin\User',
      'phone'  => 'bail|required|string|min:10|max:10',
      'email'   => 'bail|nullable|email|max:256|unique:App\Models\Admin\User',
      'role_id' => 'bail|required|integer|min:1|exists:App\Models\Admin\Role,id',
      'gender_id' => 'bail|required|integer|min:1|exists:App\Models\Admin\Gender,id',
      'job_id' => 'bail|required|integer|min:1|exists:App\Models\Admin\Job,id',
      'job_level_id' => 'bail|required|integer|min:1|exists:App\Models\Admin\JobLevel,id',
      'payroll_type_category_id' => 'bail|required|integer|min:1|exists:App\Models\Admin\PayrollTypesCategory,id',
      'dependency_area_id' => 'bail|required|integer|min:1|exists:App\Models\Admin\DependencyArea,id',
      'password' => ['bail', 'nullable', Password::defaults(), 'confirmed'],
      'active' => 'bail|nullable|boolean',
      'entered_at' => 'bail|required|date_format:Y/m/d,Y-m-d',
    ]);

    if (Role::find($input['role_id'])->name == 'admin')
      $this->validate($request,[
        'email' => 'required',
        'password' => 'required',
      ]);

    $input['id'] = Str::uuid();
    $input['fullname'] = Str::of(Helpers::trim($input['fullname']))->title();

    if (Arr::exists($input, 'password'))
      $input['password'] = Hash::make($input['password']);

    $id = User::create($input)->id;

    return (new UserResource(User::with([
      'role', 'gender', 'job', 'jobLevel', 'payrollTypeCategory.type',
      'payrollTypeCategory.category', 'dependencyArea.dependency',
      'dependencyArea.area',
    ])
    ->findOrFail($id)))
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_CREATED,
        'description' => 'Registered a new user.',
    ]])
    ->response()
    ->setStatusCode(Response::HTTP_CREATED);
  }

  public function show(Request $request, $id) {
    /**
     * Valida los parámetros de la ruta.
     */
    Validator::make(['id' => $id], [
      'id' => 'bail|required|uuid',
    ])->validated();

    return (new UserResource(User::with([
      'role', 'gender', 'job', 'jobLevel', 'payrollTypeCategory.type',
      'payrollTypeCategory.category', 'dependencyArea.dependency',
      'dependencyArea.area',
    ])
    ->findOrFail($id)))
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => 'User data.',
    ]]);
  }

  public function update(Request $request, $id) {
    /**
     * Valida los parámetros de la ruta.
     */
    Validator::make(['id' => $id], [
      'id' => 'bail|required|uuid',
    ])->validated();

    /**
     * Valida los campos de la petición.
     */
    $input = $this->validate($request, [
      'fullname' => 'bail|nullable|string|max:256',
      'payroll' => 'bail|nullable|string|min:5|max:10|unique:App\Models\Admin\User',
      'phone'  => 'bail|nullable|string|min:10|max:10',
      'email'   => 'bail|nullable|email|max:256|unique:App\Models\Admin\User',
      'role_id' => 'bail|nullable|integer|min:1|exists:App\Models\Admin\Role,id',
      'gender_id' => 'bail|nullable|integer|min:1|exists:App\Models\Admin\Gender,id',
      'job_id' => 'bail|nullable|integer|min:1|exists:App\Models\Admin\Job,id',
      'job_level_id' => 'bail|nullable|integer|min:1|exists:App\Models\Admin\JobLevel,id',
      'payroll_type_category_id' => 'bail|nullable|integer|min:1|exists:App\Models\Admin\PayrollTypesCategory,id',
      'dependency_area_id' => 'bail|nullable|integer|min:1|exists:App\Models\Admin\DependencyArea,id',
      'password' => ['bail', 'nullable', Password::defaults(), 'confirmed'],
      'active' => 'bail|nullable|boolean',
      'entered_at' => 'bail|nullable|date_format:Y/m/d,Y-m-d',
    ]);

    if (Arr::exists($input, 'fullname'))
      $input['fullname'] = Str::of(Helpers::trim($input['fullname']))->title();

    if (Arr::exists($input, 'password'))
      $input['password'] = Hash::make($input['password']);

    $user = User::findOrFail($id);

    $user->update($input);

    return (new UserResource(User::with([
      'role', 'gender', 'job', 'jobLevel', 'payrollTypeCategory.type',
      'payrollTypeCategory.category', 'dependencyArea.dependency',
      'dependencyArea.area',
    ])
    ->find($id)))
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => 'Modified user data.',
    ]]);
  }

  public function dependencyAreaShow(Request $request, $id) {
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
      'filter' => ['bail', 'nullable', 'string', Rule::in(['fullname', 'payroll'])],
      'q' => 'bail|nullable|string|max:256',
      'limit' => 'bail|nullable|integer|min:1',
      'sortOrder' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
    ]);

    $filter = Arr::get($query, 'filter', 'fullname');
    $q = Helpers::trim(Arr::get($query, 'q', ''));
    $limit  = Arr::get($query, 'limit', 15);
    $sortOrder = Arr::get($query, 'sortOrder', 'asc');

    return UserResource::collection(User::with([
      'role', 'gender', 'job', 'jobLevel', 'payrollTypeCategory.type',
      'payrollTypeCategory.category', 'dependencyArea.dependency',
      'dependencyArea.area',
    ])
    ->where('dependency_area_id', $id)
    ->where($filter, 'like', "%${q}%")
    ->orderBy('fullname', $sortOrder)
    ->paginate($limit)
    ->withQueryString())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => 'User list.',
    ]]);
  }
}
