<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_branches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('shop_id')->unsigned()->nullable();
            $table->string('branch_code')->nullable();
            $table->bigInteger('manager_id')->unsigned()->nullable();
            $table->string('contact_no')->nullable();
            $table->string('address')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('thana')->nullable();
            $table->integer('postal_code')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('shop_id')->references('id')
                ->on('shops')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('manager_id')->references('id')
                ->on('users')
                ->onUpdate('cascade')
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
        Schema::dropIfExists('shop_branches');
    }
}
