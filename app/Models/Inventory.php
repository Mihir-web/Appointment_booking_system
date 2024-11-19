<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Akaunting\Sortable\Traits\Sortable;
  
class Inventory extends Model
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
        'model',
        'is_active'
    ];

    protected $fillable = [
        'name',
        'alias',
        'trim',
        'alias_id',
        'car_type',
        'brand',
        'model',
        'exterior_color',
        'interior_color', 
        'km_driven', 
        'transmission_type', 
        'engine', 
        'photo', 
        'full_price', 
        'biweekly_price', 
        'biweekly_price_percentage', 
        'biweekly_installment_period', 
        'description', 
        'meta_title', 
        'meta_description', 
        'is_active', 
        'is_delete', 
        'created_at', 
        'updated_at'
    ];

    protected  $table = 'inventory';
}