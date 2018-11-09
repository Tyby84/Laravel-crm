<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
	protected $fillable=[
		'employes_id',
		'comp_name',
		'website',
	];
	public function employes(){
		return $this->belongsTo('App\Employe');
	}
}
