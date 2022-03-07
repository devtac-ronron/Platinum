<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class BaseRepository implements RepositoryInterface
{
    protected $model = '';

    protected $objectClass;

    const MODEL_BASE_PATH = 'App\\Models\\';

    public function __construct()
    {
        $modelName = self::MODEL_BASE_PATH . $this->objectClass;
        $this->model = new $modelName;
    }

    public function createRecord(array $data)
    {
        $this->model->id = generateGUID();
        $this->model->fill($data);
        $this->model->save();

        if ($this->model->save()) {
            return true;
        }

        return false;
    }

    public function updateRecord($data)
    {
        return $data;
    }

    public function showRecord($id)
    {
        $model = $this->model->where('id', $id)->first();

        return $model;
    }

    public function deleteRecord($id)
    {
        return $id;
    }

    public function showAllRecords()
    {
        $model = $this->model->all();

        return $model;
    }

    public function searchRecord($searchData, $getRecordsBy = null)
    {
        $queryModel = $this->model;
        if (!empty($getRecordsBy) && !empty($searchData)) {
            $fields = explode(',', $getRecordsBy);
            foreach ($fields as $field) {
                $queryModel = $queryModel->orWhere($field, 'LIKE', '%' . $searchData . '%');
            }
            $queryModel = $queryModel->get();
        }

        return $queryModel;
    }
}