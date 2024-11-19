<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Akaunting\Sortable\Traits\Sortable;
  
class financing_leads extends Model
{
    use HasFactory, Sortable;
    // use ;
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    public $sortable = [
        'id',
        'first_name',
        'last_name',
    ];

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'varStatus',
        'ip_address',
        'is_delete', 
        'created_at', 
        'updated_at'
    ];

    protected  $table = 'financing_leads';
}