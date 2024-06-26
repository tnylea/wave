<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;

class KeyValue extends Model
{
    protected $table = 'key_values';

    public $timestamps = false;

    protected $fillable = [
        'type',
        'keyvalue_id',
        'keyvalue_type',
        'key',
        'value',
    ];

    public function keyvalue()
    {
        return $this->morphTo();
    }
}