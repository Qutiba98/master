
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id(); // ينشئ عموداً رئيسياً من نوع bigint مع زيادة تلقائية
            $table->string('name'); // ينشئ عموداً من نوع varchar(255) لتخزين اسم المخزون
            $table->integer('location_id'); // ينشئ عموداً من نوع int لتخزين معرف الموقع
            $table->string('space'); // ينشئ عموداً من نوع varchar(255) لتخزين مساحة التخزين
            $table->timestamps(); // ينشئ عمودين لتوقيت الإنشاء والتحديث (اختياري ولكن شائع الاستخدام)
        });
    }

    /**
     * التراجع عن التهجير.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}
