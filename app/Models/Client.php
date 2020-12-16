<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clients';

    protected $fillable = [
		'name',
		'email',
		'tel',
		'photo'
	];

	public function getTelAttribute()
	{
		return brazil_phone_number_format($this->attributes['tel']);
	}

	public function setTelAttribute($value)
    {
        $this->attributes['tel'] = preg_replace("/[^0-9]/", "", $value);
    }

}
