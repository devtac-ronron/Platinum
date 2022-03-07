<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $user = null;

    public function __construct()
    {
        auth()->setDefaultDriver('api');
        $this->checkIfAuthenticatedUser();
    }

    public function checkIfAuthenticatedUser()
    {
        try {
          $this->user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
           return response()->json(['error' => $e->getMessage()]);
        } 
    }
}
