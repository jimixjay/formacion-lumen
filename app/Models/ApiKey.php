<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    const COL_API_KEY_ID = 'api_key_id';
    const COL_KEY_VALUE = 'key_value';

    protected $connection = 'pgsql';
    protected $table = 'api_key';
    protected $primaryKey = 'api_key_id';
    protected $guarded = ['api_key_id'];
    protected $hidden = ['api_key_id'];

    public function getApiKeyId()
    {
        return $this->{self::COL_API_KEY_ID};
    }

    public function getKeyValue()
    {
        return $this->{self::COL_KEY_VALUE};
    }

}
