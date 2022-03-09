<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportFile extends Model
{
    protected $table = 'import_files';

    use HasFactory;

    protected $fillable = [
        'id',
        'filename',
        'tmp',
        'ext',
        'path',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
