<?php

namespace SundaySim;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = ['id', 'pageTitle', 'footerContent', 'address', 'phone', 'fax', 'email', 'map'];

    public function setPageTitleAttribute($value)
    {
        $this->attributes['pageTitle'] = $value ?: null;
    }
    
    public function setFooterContentAttribute($value)
    {
        $this->attributes['footerContent'] = $value ?: null;
    }

    public function setAddressAttribute($value)
    {
        $this->attributes['address'] = $value ? 1:0;
    }

    
}
