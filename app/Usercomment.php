<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Usercomment extends Model
{
    use Notifiable;
    protected $table='Usercomment';
    public $timestamps = false;

    protected $fillable = [
        'product_id','name','email', 
        'variable1','variable2', 'variable3','variable4','variable5','negative_point',
        'possetive_point'
    ];
}
