<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollow extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;

    const NEWS_TRUE = 1;
    const NEWS_FALSE = 0;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function organisation()
    {
        return $this->belongsTo('App\Organisation');
    }

    public function dataSet()
    {
        return $this->belongsTo('App\DataSet');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
