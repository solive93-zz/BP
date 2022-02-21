<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSqlFileSeeder extends Seeder
{
    const SQL_FILE_PATH = 'sql/database.sql';

    public function run(): void
    {
        $sql = file_get_contents(self::SQL_FILE_PATH);
        DB::unprepared($sql);
    }
}
