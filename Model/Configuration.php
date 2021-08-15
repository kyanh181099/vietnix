<?php

namespace vietnixcachePlugin\Model;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
	protected $table    = 'vietnixcache_configuration';
	//protected $fillable = ['action', 'request', 'response'];


	public static function instance()
	{
		return new self();
	} 

	public static function getActiveConfig()
	{
		return self::where('isUsed','1')->first();
	}

}