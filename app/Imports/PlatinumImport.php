<?php

namespace App\Imports;

use App\Models\Platinum;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PlatinumImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!empty($row) && $row !== null) {
            return new Platinum([
                'id' => generateGUID(),
                'title' => $row['title'],
                'code' => $row['code'],
                'song_by' => $row['song_by'],
                'status' => $row['status']
            ]);
        } else {
            return null;
        }
    }
}
