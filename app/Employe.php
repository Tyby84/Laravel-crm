<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    //
		protected $fillable=[
				'name',
				'location',
			];
	public function company(){
		return $this->hasMany('App\Company');
	}
}
