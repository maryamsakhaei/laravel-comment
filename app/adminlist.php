<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class adminlist extends Model
{
    use Notifiable;
    protected $table='adminlist';
    public $timestamps = false;

    protected $fillable = [
        'mobile','email','name'
    ];
}
