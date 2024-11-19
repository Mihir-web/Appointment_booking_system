<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Akaunting\Sortable\Traits\Sortable;
  
class Testimonials extends Model
{
    use HasFactory, Sortable;
    // use ;
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
   

    protected $fillable = [
        'client_first_name',
        'client_last_name',
        'gender',
        'message',
        'rating',
        'is_active',
        'is_delete',
    ];

    protected  $table = 'testimonials';
}