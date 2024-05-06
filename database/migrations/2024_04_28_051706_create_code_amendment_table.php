<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodeAmendmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_amendment', function (Blueprint $table) {
            $table->id();
            $table->date('requisition_date');
            $table->string('region');
            $table->string('depot');
            $table->string('business');
            $table->string('customer_name');
            $table->string('contact_person');
            $table->string('address_one');
            $table->string('address_two');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('category');
            $table->string('customer_type');
            $table->string('payment_mode');
            $table->string('metro');
            $table->string('route');
            $table->string('territory');
            $table->string('district');
            $table->string('upazilla');
            $table->string('union');
            $table->string('hat_bazar');
            $table->string('nid');
            $table->text('reason_amendment');
            $table->string('field_name');
            $table->string('current_data');
            $table->string('amendment');
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
        Schema::dropIfExists('code_amendment');
    }
}