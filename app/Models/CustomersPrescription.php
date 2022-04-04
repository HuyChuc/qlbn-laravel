<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomersPrescription extends Model
{
    protected $table = 'customers_prescription';

    protected $fillable = [
        'full_name',
        'T1',
        'T2',
        'T3',
        'T4',
        'T5',
        'T6',
        'T7',
        'T8',
        'T9',
        'T10',
        'T11',
        'T12',
        'T13',
        'T14',
        'T15',
        'T16',
        'T17',
        'T18',
        'T19',
        'T20',
        'N1',
        'N2',
        'N3',
        'N4',
        'N5',
        'N6',
        'N7',
        'N8',
        'N9',
        'N10',
        'N11',
        'N12',
        'N13',
        'N14',
        'N15',
        'N16',
        'N17',
        'N18',
        'N19',
        'N20',
        'customer_code',
        'visit_date',
        'CANBENH',
        'CAPBAC',
        'DONVI',
        'DONTHUOC',
        'customer_id',
        'customer_history_id',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/customers-prescriptions/'.$this->getKey());
    }
}
