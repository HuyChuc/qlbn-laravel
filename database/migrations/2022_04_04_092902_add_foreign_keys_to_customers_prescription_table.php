<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCustomersPrescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers_prescription', function (Blueprint $table) {
            $table->foreign(['customer_id'], 'customers_prescription_FK')->references(['id'])->on('customers');
            $table->foreign(['customer_history_id'], 'customers_prescription_FK_1')->references(['id'])->on('customers_history');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers_prescription', function (Blueprint $table) {
            $table->dropForeign('customers_prescription_FK');
            $table->dropForeign('customers_prescription_FK_1');
        });
    }
}
