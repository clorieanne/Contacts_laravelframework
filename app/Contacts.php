<?php

namespace contacts;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
	public $table = 'contacts';
    public $fillable = ['name', 'number', 'description'];
}
