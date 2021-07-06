<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class userslist extends Model
{
    use Notifiable;
    protected $table='userslist';
    public $timestamps = false;

    protected $fillable = [
        'mobile','email', 'password','name'
    ];
}
