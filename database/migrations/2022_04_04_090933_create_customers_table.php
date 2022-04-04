<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->string('code', 10)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('phone', 14)->nullable();
            $table->string('full_name', 150)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('group', 10)->nullable();
            $table->string('NHOMBENH')->nullable();
            $table->string('dob')->nullable();
            $table->string('id', 100)->unique('customers_un');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
