<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Years extends Model
{
    use HasFactory;
    // use ;
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    

    protected $fillable = [
        'year'
    ];

    protected  $table = 'years';
}