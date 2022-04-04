<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersPrescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_prescription', function (Blueprint $table) {
            $table->string('full_name')->nullable();
            $table->string('T1')->nullable();
            $table->string('T2')->nullable();
            $table->string('T3')->nullable();
            $table->string('T4')->nullable();
            $table->string('T5')->nullable();
            $table->string('T6')->nullable();
            $table->string('T7')->nullable();
            $table->string('T8')->nullable();
            $table->string('T9')->nullable();
            $table->string('T10')->nullable();
            $table->string('T11')->nullable();
            $table->string('T12')->nullable();
            $table->string('T13')->nullable();
            $table->string('T14')->nullable();
            $table->string('T15')->nullable();
            $table->string('T16')->nullable();
            $table->string('T17')->nullable();
            $table->string('T18')->nullable();
            $table->string('T19')->nullable();
            $table->string('T20')->nullable();
            $table->string('N1')->nullable();
            $table->string('N2')->nullable();
            $table->string('N3')->nullable();
            $table->string('N4')->nullable();
            $table->string('N5')->nullable();
            $table->string('N6')->nullable();
            $table->string('N7')->nullable();
            $table->string('N8')->nullable();
            $table->string('N9')->nullable();
            $table->string('N10')->nullable();
            $table->string('N11')->nullable();
            $table->string('N12')->nullable();
            $table->string('N13')->nullable();
            $table->string('N14')->nullable();
            $table->string('N15')->nullable();
            $table->string('N16')->nullable();
            $table->string('N17')->nullable();
            $table->string('N18')->nullable();
            $table->string('N19')->nullable();
            $table->string('N20')->nullable();
            $table->string('customer_code')->nullable();
            $table->string('visit_date')->nullable()->comment('ngày khám');
            $table->text('CANBENH')->nullable();
            $table->text('CAPBAC')->nullable();
            $table->text('DONVI')->nullable();
            $table->text('DONTHUOC')->nullable();
            $table->string('id', 100);
            $table->string('customer_id', 100)->nullable()->index('customers_prescription_FK');
            $table->string('customer_history_id', 100)->nullable()->index('customers_prescription_FK_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_prescription');
    }
}
