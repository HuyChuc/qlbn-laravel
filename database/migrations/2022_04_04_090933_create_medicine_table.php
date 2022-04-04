<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine', function (Blueprint $table) {
            $table->string('code', 100);
            $table->string('name')->nullable();
            $table->timestamp('mfg_date')->nullable()->comment('ngày sản xuất');
            $table->timestamp('exp_date')->nullable()->comment('hạn sử dụng');
            $table->string('made_in')->nullable()->comment('nơi sản xuất');
            $table->string('medication_components')->nullable()->comment('thành phần thuốc');
            $table->text('notes')->nullable()->comment('ghi chú');
            $table->string('ID', 100)->unique('thuoc_un');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicine');
    }
}
