<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function createRecord(array $data);
    public function updateRecord(array $data);
    public function showRecord(int $id);
    public function deleteRecord(int $id);
    public function showAllRecords();
    public function searchRecord(string $data, string $getRecordsBy);
}
