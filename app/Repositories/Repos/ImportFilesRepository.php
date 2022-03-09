<?php

namespace App\Repositories\Repos;

use App\Repositories\BaseRepository;
use Maatwebsite\Excel\Facades\Excel;

class ImportFilesRepository extends BaseRepository
{
    protected $objectClass = 'ImportFile';

    const IMPORT_BASE_PATH = '\App\\Imports\\';

    public function import($files, $imports)
    {
        $imports = self::IMPORT_BASE_PATH . $imports;
        $data = [
            'filename' => $files['name'],
            'tmp' => $files['tmp_name'],
            'ext' => $files['type'],
            'path' => $files['name']
        ];

        $this->createRecord($data);

        $result = Excel::import(new $imports, $files['tmp_name']);
        if($result) {
            return 'Successfully';
        }

        return null;
    }

    public function createRecord($data)
    {
        parent::createRecord($data);
    }
}
