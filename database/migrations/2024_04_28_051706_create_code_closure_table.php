<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodeClosureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_closure', function (Blueprint $table) {
            $table->id();
            $table->date('requisition_date');
            $table->date('code_closed_on');
            $table->string('region');
            $table->string('zone');
            $table->string('territory');
            $table->string('location');
            $table->date('selection_distributor_date');
            $table->string('customer_type');
            $table->integer('salt');
            $table->integer('flour');
            $table->integer('edible_oil');
            $table->integer('rice');
            $table->integer('dairy');
            $table->integer('tea');
            $table->string('distribution_name');
            $table->string('proprietor_name');
            $table->text('reason_closure');
            $table->string('business');
            $table->date('claim_month');
            $table->string('type_claim');
            $table->text('claim_details');
            $table->decimal('amount', 10, 2);
            $table->decimal('grand_total', 10, 2);
            $table->string('account_name');
            $table->string('bank_name');
            $table->string('ac_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('code_closure');
    }
}