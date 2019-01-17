<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kycs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('mobilenumber')->unique();
            $table->date('date_of_birth');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('nationality');
            $table->string('city');
            $table->string('state');
            $table->string('document_type')->nullable(); // id : [1,2,3]
            $table->text('document_file')->nullable();
            $table->string('zip_code');
            $table->string('wallet_type')->nullable(); // id : [1,2,3]
            $table->string('wallet_address')->unique();
            $table->integer('status')->default(1)->nullable(); // 1 = pending, 2 = progress, 3 = approve, 4 = reject
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kycs');
    }
}
