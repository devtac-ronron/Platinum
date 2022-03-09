<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\ModuleController;
use Illuminate\Http\Request;

class PlatinumController extends ModuleController
{
    protected $modelName = 'Platinum';

    public function importFiles(Request $request)
    {
       $this->repo->import($_FILES['file']);
    }
}
