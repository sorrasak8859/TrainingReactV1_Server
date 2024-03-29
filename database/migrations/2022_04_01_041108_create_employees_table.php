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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('EmpCode', 10, 10)->unique();
            $table->string('Fullname')->nullable();
            $table->string('OrgTDesc3')->nullable();
            $table->string('OrgTDesc4')->nullable();
            $table->string('empgrpdesceng')->nullable();       
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
