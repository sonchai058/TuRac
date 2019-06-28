<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountChartTuTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'account_chart_tu';

    /**
     * Run the migrations.
     * @table account_chart_tu
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('AccChartID')->comment('ไอดีแผนผังบัญชี
');
            $table->integer('AccChartParentrtID')->nullable()->comment('ไอดีหัวข้อแผนผังบัญชี
');
            $table->string('AccChartNumber', 100)->comment('เลขผังบัญชี');
            $table->string('NameTh', 100)->nullable()->comment('ชื่อ
');
            $table->string('NameEn', 100)->nullable();
            $table->text('Detail')->nullable()->comment('รายละเอียด
');
            $table->enum('Type', ['เคบิต', 'เดรดิต', 'all'])->nullable()->comment('ประเภทผังบัญชี');
            $table->enum('ChartType', ['ได้', 'ไม่ได้'])->nullable()->comment('สามารถลงบัญชีได้/ไม่ได้');
            $table->string('Format', 5)->nullable()->comment('รูปแบบผังบัญชี');
            $table->dateTime('DateTimeAdd')->comment('วันเวลาเพิ่ม
');
            $table->integer('UserAdd')->comment('ผู้เพิ่ม
');
            $table->dateTime('DateTimeUpdate')->comment('วันเวลาแก้ไข
');
            $table->integer('UserUpdate')->comment('ผู้แก้ไข
');
            $table->enum('Allow', ['ปกติ', 'ระงับ', 'ลบ/บล็อก'])->nullable()->default('ปกติ')->comment('สถานะใช้งาน
');
            $table->text('remark')->nullable()->comment('หมายเหตุ');
            $table->integer('MappingID')->nullable()->comment('เชื่อมโยงกับผังบัญชี');
            $table->integer('YearID')->nullable()->comment('ปีงบประมาณ');
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
