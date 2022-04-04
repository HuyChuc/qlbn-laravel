<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomersHistory extends Model
{
    protected $table = 'customers_history';

    protected $fillable = [
        'name',
        'age',
        'customer_code',
        'visit_date',
        'KHAMBENH',
        'BENHSU',
        'LYDO',
        'customer_id',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/customers-histories/'.$this->getKey());
    }
}
