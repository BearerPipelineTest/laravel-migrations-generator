<?php

/** @noinspection PhpIllegalPsrClassPathInspection */

/** @noinspection PhpUnused */

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use KitLoong\MigrationsGenerator\Enum\Driver;

class ExpectedCreateQuotedNameForeign_DB_Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quoted-name-foreign-[db]', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('quoted-name-id');

            // SQLite does not support alter add foreign key.
            // https://www.sqlite.org/omitted.html
            if (DB::getDriverName() !== Driver::SQLITE()->getValue()) {
                $table->foreign('quoted-name-id')->references('id')->on('quoted-name-[db]');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quoted-name-foreign-[db]');
    }
}
