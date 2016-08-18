<?php

namespace SundaySim;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['id', 'lang_name', 'status', 'is_default', 'position'];

    protected $status = ['status'];
    
    public function setNameAttribute($value)
    {
        $this->attributes['lang_name'] = $value ?: null;
    }
    
    public function setPositionAttribute($value)
    {
        $this->attributes['position'] = $value ?: null;
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value ? 1:0;
    }

    
}
