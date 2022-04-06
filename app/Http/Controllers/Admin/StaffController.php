<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class StaffController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    //
  }

  public function searchStaff() {
    return 'Buscando empleados';
  }
}
