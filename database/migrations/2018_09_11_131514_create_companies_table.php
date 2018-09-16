<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('address');
            $table->date('established_date');
            $table->string('logo_path');
            $table->string('license_number');
            $table->string('phone');
            $table->string('email')->unique();

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('company_category_id');

            // foreign keys
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('province_id')
                ->references('id')
                ->on('provinces');

            $table->foreign('company_category_id')
                ->references('id')
                ->on('company_categories')
                ->onDelete('cascade');

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
        Schema::dropIfExists('companies');
    }
}
