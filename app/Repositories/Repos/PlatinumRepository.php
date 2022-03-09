<?php

namespace App\Repositories\Repos;

use App\Repositories\ImportFilesRepository;
use Maatwebsite\Excel\Facades\Excel;

class PlatinumRepository extends ImportFilesRepository
{
    public $objectClass = 'Platinum';

    public function import($file)
    {
        Excel::import(new ImportFilesRepository, $file['tmp_name']);
        return redirect('/')->with('success', 'All good!');
    }

}
