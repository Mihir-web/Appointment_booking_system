<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class contact_info extends Model

{
    use HasFactory;
    // use ;
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    

    protected $fillable = [
        'id',
        'name',
        'email',
        'address',
        'phone_no',
        'whatsapp_no',
        'facebook',
        'instagram',
        'meta_title',
        'meta_description',
        'created_at', 
        'updated_at'
    ];

    protected  $table = 'contact_info';
}