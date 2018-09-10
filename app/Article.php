<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = ['name','text','img'];
    protected $quarded = ['*'];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'name' => 'boolean',
        'text' => 'array'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function getNameAttribute($value) {
        return 'Hello World - '.$value. ' - Hello World';
    }
    public function setNameAttribute($value){
        $this->attributes['name'] = ' | '.$value.' | ';
    }
}
