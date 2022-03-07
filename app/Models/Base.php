<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Base extends Model
{
    use HasFactory, Notifiable;

    use SoftDeletes;

    public $incrementing = false;

    protected $baseFillable = ['id', 'name', 'description', 'created_by', 'updated_by', 'deleted_by'];

    protected $cstmFillable = [];

    public function __contruct(array $attributes = [])
    {
        $this->fillable = $this->baseFillable;

        parent::__construct($attributes);
    }

}