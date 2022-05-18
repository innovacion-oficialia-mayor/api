<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class HomeController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    //
  }

  public function index() {
    return [
      'data' => [
        'app' => 'api-om',
        'description' => 'Una API RESTful de sistemas web para Oficialía Mayor.',
        'license' => [
          'name' => 'AGPLv3',
          'link' => 'https://www.gnu.org/licenses/agpl-3.0.en.html',
        ],
        'repo' => 'https://github.com/innovacion-oficialia-mayor/api',
        'author' => [
          'name' => 'Ricardo García Jiménez',
          'email' => 'ricardogj08@riseup.net',
          'social' => 'https://cawfee.club/ricardogj08',
          'repos' => [
            'https://github.com/ricardogj08',
            'https://git.disroot.org/ricardogj08',
          ],
        ],
      ],
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => ''
      ]
    ];
  }
}
