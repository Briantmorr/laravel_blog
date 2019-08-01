<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Msstatus extends Model
{
    // Local Variables
    const DRAFT = 1;
    const PUBLISHED = 2;
    const ACTIVE = 3;
    const INACTIVE = 4;

    protected $table = 'msstatus';
    public $incrementing = false;
    public $timestamps = false;

    public $fillable = ['id', 'name'];

    protected $casts = [
        'id' => 'integer'
    ];

    public $fields = [
        'id' => 'msstatus.id',
        'name' => 'msstatus.name'
    ];
}
