<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuKien extends Model
{
    protected $table = 'sukien';
    public $timestamps = false;
    
    public function ve()
    {
        return $this->hasMany(Ve::class,'SUKIEN_ID','ID');
    }
}


