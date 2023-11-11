<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventsUser extends Model
{
    use HasFactory;


    protected $table = 'event_user';


    protected $fillable = [

    ];

    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
