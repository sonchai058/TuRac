<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookBranchTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'book_branch';

    /**
     * Run the migrations.
     * @table book_branch
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('BankBranchID')->comment('ไอดีสาขาธนาคาร
');
            $table->string('Name', 50)->nullable()->comment('ชื่อสาขา
');
            $table->string('Note', 50)->nullable()->comment('หมายเหตุ
');
            $table->text('Address')->nullable()->comment('ที่อยู่ หมู่บ้าน อาคาร
');
            $table->string('PostCodeID', 5)->nullable()->comment('รหัสไปรษณีย์
');
            $table->dateTime('DateTimeAdd')->comment('วันเวลาเพิ่ม
');
            $table->integer('UserAdd')->comment('ผู้เพิ่ม
');
            $table->dateTime('DateTimeUpdate')->comment('วันเวลาแก้ไข
');
            $table->integer('UserUpdate')->comment('ผู้แก้ไข
');
            $table->enum('Allow', ['ปกติ', 'ระงับ', 'ลบ/บล็อก'])->nullable()->comment('สถานะใช้งาน
');
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
