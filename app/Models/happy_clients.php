<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Akaunting\Sortable\Traits\Sortable;
  
class happy_clients extends Model
{
    use HasFactory, Sortable;
    // use ;
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
   

    protected $fillable = [
        'photo',
        'message',
        'display_order',
        'is_active',
        'is_delete',
    ];

    protected  $table = 'happy_clients';
}