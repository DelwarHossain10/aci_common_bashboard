<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributorPendingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributor_pending', function (Blueprint $table) {
            $table->id();
            $table->string('code_creation');
            $table->string('distributor_form');
            $table->string('business_infor');
            $table->string('documents_comments');
            $table->string('code_closure');
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
        Schema::dropIfExists('distributor_pending');
    }
}
