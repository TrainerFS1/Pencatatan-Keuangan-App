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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->string('category');
<<<<<<< HEAD
<<<<<<< HEAD
            $table->decimal('amount', 15, 2);
            $table->date('due_date');
            $table->string('status')->default('Belum Lunas');
            $table->text('description')->nullable();
            $table->timestamps();
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $table->decimal('amount', 10, 2);
            $table->date('due_date');
            $table->string('status');
            $table->text('description')->nullable();
            $table->timestamps();

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        });
    }

    /**p
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
