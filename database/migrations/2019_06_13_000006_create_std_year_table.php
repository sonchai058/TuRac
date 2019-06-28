<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStdYearTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'std_year';

    /**
     * Run the migrations.
     * @table std_year
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('YearID')->comment('ไอดีปีงบประมาณ
');
            $table->string('Name', 100)->nullable()->comment('ชื่อ
');
            $table->dateTime('DateTimeAdd')->comment('วันเวลาเพิ่ม
');
            $table->integer('UserAdd')->comment('ผู้เพิ่ม
');
            $table->dateTime('DateTimeUpdate')->comment('วันเวลาแก้ไข
');
            $table->integer('UserUpdate')->nullable()->comment('ผู้แก้ไข
');
            $table->enum('Allow', ['ปกติ', 'ระงับ', 'ลบ/บล็อค'])->nullable()->default('ปกติ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
