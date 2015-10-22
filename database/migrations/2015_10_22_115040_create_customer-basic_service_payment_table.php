<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerBasicServicePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer-basic_service_payment', function (Blueprint $table)
        {
            $table->integer('customer_id')  ->unsigned()  ->index();
            $table->integer('cbs_id')  ->unsigned()  ->index();     //cbs_id = customer-basic_service_id
            $table->timestamps();

            //Foreign Keys
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('cbs_id')->references('id')->on('customer-basic_service');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer-basic_service_payment');
    }
}
