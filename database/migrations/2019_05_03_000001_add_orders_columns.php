<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('payment_method')->nullabel();
            $table->string('vendor_order_id')->nullable();           
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->string('status')->nullabel();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'payment_method',
                'vendor_order_id',
                'status',
            ]);
        });
    }
};
