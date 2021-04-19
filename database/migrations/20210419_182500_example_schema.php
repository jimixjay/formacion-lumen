<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ExampleSchema extends Migration
{
    public function up()
    {
        $query = 'SELECT * FROM example WHERE name IS NOT NULL';

        $result = DB::select($query);

        $query = 'SELECT count(*) as total FROM example';

        $result = DB::selectOne($query);
    }

    public function down()
    {

    }
}
