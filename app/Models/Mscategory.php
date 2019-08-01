<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mscategory extends Model
{
    // Local Variables
    const BACK_END = 1;
    const FRONT_END = 2;
    const DEV_OPS= 3;

    protected $table = 'mscategory';
    public $incrementing = false;
    public $timestamps = false;

    public $fillable = ['id', 'name'];

    protected $casts = [
        'id' => 'integer'
    ];

    public $fields = [
        'id' => 'mscategory.id',
        'name' => 'mscategory.name'
    ];
}

