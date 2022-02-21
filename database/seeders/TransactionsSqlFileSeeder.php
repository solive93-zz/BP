<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsSqlFileSeeder extends Seeder
{
    private const SQL_FILE_PATH = 'database/sql/transactions.sql';

    public function run(): void
    {
        $sql = file_get_contents(self::SQL_FILE_PATH);
        DB::unprepared($sql);
    }
}
