<?php

namespace App\Repositories\Repos;
use App\Repositories\BaseRepository;
use Illuminate\Http\Client\Request;

class UserRepository extends BaseRepository
{
    protected $objectClass = 'User';
}
