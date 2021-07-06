<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class product extends Model
{
    use Notifiable;
    protected $table='product';
    public $timestamps = false;

    protected $fillable = [
        'product_id','name','variable1', 'variable2','variable3','variable4', 'variable5','negative_point',
        'possetive_point','photo'
    ];
}
