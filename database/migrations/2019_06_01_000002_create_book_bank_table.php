<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookBankTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'book_bank';

    /**
     * Run the migrations.
     * @table book_bank
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('BookBankID')->comment('ไอดีบัญชีเงินฝาก
');
            $table->integer('BankBranchID')->nullable()->comment('ไอดีสาขาธนาคาร
');
            $table->string('Name', 50)->nullable()->comment('ชื่อบัญชีเงินฝาก
');
            $table->string('Note', 50)->nullable();
            $table->dateTime('DateTimeAdd')->comment('วันเวลาเพิ่ม
');
            $table->integer('UserAdd')->comment('ผู้เพิ่ม
');
            $table->dateTime('DateTimeUpdate')->comment('วันเวลาแก้ไข
');
            $table->dateTime('tsDateTimeUpdate')->comment('วันเวลาดึงข้อมูล
');
            $table->integer('tsUserUpdate')->comment('ผู้ดึงข้อมูล
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
