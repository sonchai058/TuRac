<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'customer';

    /**
     * Run the migrations.
     * @table customer
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('UserID')->comment('ไอดีลูกค้า');
            $table->string('TitleCode', 10)->nullable()->comment('\'คำนำหน้าชื่อ\'');
            $table->string('CodeId', 45)->comment('รหัสผู้ว่าจ้าง');
            $table->string('NameEn', 50)->nullable()->comment('ชื่ออังกฤษ');
            $table->string('LastNameEn', 50)->nullable()->comment('นามสกุลอังกฤษ');
            $table->string('NameTh', 50)->comment('\'ชื่อ\'');
            $table->string('LastNameTh', 50)->nullable()->comment('\'นามสกุล\'');
            $table->string('SexCode', 3)->nullable()->comment('\'เพศ\'');
            $table->text('Address')->nullable()->comment('\'ที่อยู่ หมู่บ้าน อาคาร\'');
            $table->string('PostCodeID', 5)->comment('\'รหัสไปรษณีย์\'');
            $table->enum('UserType', ['1', '2'])->comment('ประเภท นิติบุคคล บุคคลธรรมดา');
            $table->string('TaxID', 15)->comment('เลขที่ผู้เสียภาษี');
            $table->string('Phone1', 15)->nullable()->comment('เบอร์โทรติดต่อ 1');
            $table->string('Phone2', 15)->nullable()->comment('เบอร์โทรติดต่อ 2');
            $table->string('AccountName', 45)->nullable()->comment('เลขบัญชีธนาคาร');
            $table->enum('OfficeType', ['1', '2', '3'])->nullable()->comment('ประเภทสำนักงาน');
            $table->string('OfficeCode', 45)->nullable()->comment('รหัสสำนักงาน');
            $table->string('officeName', 100)->nullable()->comment('ชื่อสำนักงาน');
            $table->integer('AccChartID');
            $table->dateTime('DateTimeAdd')->comment('วันเวลาเพิ่ม');
            $table->integer('UserAdd')->comment('ผู้เพิ่ม');
            $table->dateTime('DateTimeUpdate')->comment('วันเวลาแก้ไข');
            $table->integer('UserUpdate')->comment('ผู้แก้ไข');
            $table->dateTime('tsDateTimeUpdate')->comment('วันเวลาดึงข้อมูล');
            $table->integer('tsUserUpdate')->comment('ผู้ดึงข้อมูล');
            $table->integer('OrgID')->nullable()->comment('องค์กรที่สังกัด');
            $table->integer('GrpID')->nullable()->comment('กลุ่มที่สังกัด');
            $table->enum('Allow', ['ปกติ', 'ระงับ', 'ลบ/บล็อก'])->nullable()->comment('\'สถานะใช้งาน\'');

            $table->index(["AccChartID"], 'fk_customer_account_chart1_idx');


            $table->foreign('AccChartID', 'fk_customer_account_chart1_idx')
                ->references('AccChartID')->on('account_chart_tuacc')
                ->onDelete('no action')
                ->onUpdate('no action');
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
