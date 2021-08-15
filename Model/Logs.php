<?php 

namespace vietnixcachePlugin\Model;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{

    protected $table    = 'vietnixcache_logs';
    protected $fillable = ['action', 'request', 'response'];

    public static function get()
    {
        if (self::isEmpty())
        {
            return new self();
        }

        return self::first();
    }

    public static function isEmpty()
    {
        return !(bool)self::count();
    }
}
