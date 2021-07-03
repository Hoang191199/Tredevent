<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    protected $table = 've';
    public $timestamps = false;

    public function ve()
    {
        return $this->belongsTo(SuKien::class,'SUKIEN_ID','ID');
    }
}
