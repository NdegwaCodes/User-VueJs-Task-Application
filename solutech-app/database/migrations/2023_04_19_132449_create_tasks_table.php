<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('tasks', function (Blueprint $table) {
        $table->id();
        $table->string('name', 100);
        $table->string('description', 255);
        $table->dateTime('due_date');

        // references id on statuses table
        $table->unsignedBigInteger('status_id'); //->nullable();
        $table->foreign('status_id')->references('id')->on('statuses'); //->onDelete('set null');

        $table->timestamps();   
        $table->softDeletes();

        // add an index to the foreign key column
        // $table->index('status_id'); 
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
