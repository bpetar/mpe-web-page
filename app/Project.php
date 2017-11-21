<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
    	'name',
    	'description',    	
    	'tags',
    	'image',
    	'client',
    	'year',
    	'link',
        'fulldescription'
    ];
}
