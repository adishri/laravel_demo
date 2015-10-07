<?php

namespace App;


use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','venue','event_start_time','duration','date'];

    public function setDateAttribute($date)
    {
        $this->attributes['date'] = Carbon::createFromFormat('y-m-d',$date);
    }

//    protected $dates = ['date'];
//$users = DB::table('users')
//->orderBy('name', 'desc')
//->get();
//    public function scopeIdDescending($query)
//    {
//        return $query->order_By('id','DESC');
//    }

}
