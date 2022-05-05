<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use App\Http\Resources\Admin\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class UserController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    //
  }

  public function store(Request $request) {
    /**
     * Valida los campos de la petición.
     */
    $input = $this->validate($request, [
      'payroll' => 'bail|required|string|min:5|max:10|unique:App\Models\Admin\User',
      'email'   => 'bail|nullable|string|max:255|email|unique:App\Models\Admin\User',
      'role_id' => 'bail|required|integer|min:1|exist:App\Models\Admin\Job,id',
      'gender_id' => 'bail|required|integer|min:1|exist:App\Models\Admin\Gender,id',
      'job_id' => 'bail|required|integer|min:1|exist:App\Models\Admin\Job,id',
      'job_level_id' => 'bail|required|integer|min:1|exist:App\Models\Admin\JobLevel,id',
      'payroll_type_category_pivot' => 'bail|required|integer|min:1|exist:App\Models\Admin\PayrollTypeCategory,id',
      'dependency_area_pivot' => 'bail|required|integer|min:1|exist:App\Models\Admin\DependencyArea,id',
      'name' => 'bail|required|string|min:1|max:60',
      'firstsurname'  => 'bail|required|min:1|max:60',
      'secondsurname' => 'bail|required|min:1|max:60',
      'phone'  => 'bail|required|min:10|max:10',
      'active' => 'bail|required|boolean',
    ]);

    $input['id'] = Str::uuid();

    return User::create($input);
  }
}
