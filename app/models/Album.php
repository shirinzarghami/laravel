<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Album extends Eloquent{

	//use UserTrait, RemindableTrait;

	protected $fillable=['artist','title'];
	public $timestamps= false;

	protected $table = 'album';


	//protected $hidden = array('password', 'remember_token');
	

}
