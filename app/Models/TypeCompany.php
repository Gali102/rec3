<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCompany extends Model
{
    use CrudTrait, HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title'
    ];
}
