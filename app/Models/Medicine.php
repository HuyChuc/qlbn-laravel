<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'medicine';

    protected $fillable = [
        'code',
        'name',
        'mfg_date',
        'exp_date',
        'made_in',
        'medication_components',
        'notes',
        'ID',
    
    ];
    
    
    protected $dates = [
        'mfg_date',
        'exp_date',
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/medicines/'.$this->getKey());
    }
}
