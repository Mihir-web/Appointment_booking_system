<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Akaunting\Sortable\Traits\Sortable;
  
class Inventory_Gallery extends Model
{
    use HasFactory, Sortable;
    // use ;
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    public $sortable = [
        'name',
        'display_order'
    ];

    protected $fillable = [
        'id',
        'photo',
        'parent_record_id',
        'display_order',
        'is_active',
        'is_delete',
        'created_at',
        'updated_at', 
    ];

    protected  $table = 'inventory_gallery';
}