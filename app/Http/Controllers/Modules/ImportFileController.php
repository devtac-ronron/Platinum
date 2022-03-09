<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\ModuleController;
use Illuminate\Http\Request;

class ImportFileController extends ModuleController
{
    protected $modelName = 'ImportFiles';

    public function importFiles(Request $request)
    {
       $this->repo->import($_FILES['file'], 'PlatinumImport');
    }
}
