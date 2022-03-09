<?php

namespace App\Repositories\Repos;

use App\Imports\PlatinumImport;
use App\Repositories\BaseRepository;
use Maatwebsite\Excel\Facades\Excel;

class PlatinumRepository extends BaseRepository
{
    protected $objectClass = 'Platinum';

    public function import($file)
    {
        $result = Excel::import(new PlatinumImport, $file['tmp_name']);
        if($result) {
            return 'Successfully';
        }

        return null;
    }
}
