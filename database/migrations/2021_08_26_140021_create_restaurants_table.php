<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('name', 60);
            $table->string('address');
            $table->char('pIva', 11);
            $table->string('logo')->nullable();
            $table->float('shipping', 4, 2);
            $table->float('shippingFree', 5, 2)->nullable();

            $table->string('slug', 80)->unique();

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
        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropForeign('restaurants_user_id_foreign');
            $table->dropColumn('user_id');
        });
        
        Schema::dropIfExists('restaurants');
    }

    // public function down()
    // {
    //     Schema::table('posts', function (Blueprint $table) {
    //         $table->dropForeign('posts_category_id_foreign');
    //         $table->dropColumn('category_id');
    //     });
    // }
}
