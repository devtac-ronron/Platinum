<?php

namespace App\Repositories;

use App\Models\Platinum;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportFilesRepository implements ToModel, WithHeadingRow
{
    const MODEL_BASE_PATH = 'App\\Models\\';

    protected $model;

    protected $objectClass;

    protected $dataRow;

    protected $row;

    public function __construct()
    {
        $modelName = self::MODEL_BASE_PATH . $this->objectClass;
        $this->model = $modelName;
    }

    public function model(array $row)
    {
        if(!empty($row)) {
            return new Platinum([
                'id' => generateGUID(),
                'title' => $row['title'],
                'code' => $row['code'],
                'song_by' => $row['song_by'],
                'status' => $row['status']
            ]);
        }
    }
}
