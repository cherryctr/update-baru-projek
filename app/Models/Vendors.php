<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    use HasFactory;


    // 

    protected $primaryKey = 'id';

    public function jasas()
	{
	    return $this->belongsTo(Jasas::class);
	}
}



