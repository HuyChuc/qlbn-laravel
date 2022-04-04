<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_history', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('age')->nullable();
            $table->string('customer_code')->nullable();
            $table->string('visit_date')->nullable()->comment('ngày khám');
            $table->text('KHAMBENH')->nullable();
            $table->text('BENHSU')->nullable();
            $table->text('LYDO')->nullable();
            $table->string('id', 100)->unique('customers_history_un');
            $table->string('customer_id', 100)->nullable()->index('customers_history_FK');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_history');
    }
}
