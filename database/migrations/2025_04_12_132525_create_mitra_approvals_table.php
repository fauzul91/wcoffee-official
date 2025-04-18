<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mitra_approvals', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik');
            $table->string('nib');
            $table->string('siup');
            $table->string('link_gmaps');
            $table->string('deskripsi_mitra');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->boolean('is_notified')->default(false);
            $table->foreignId('mitra_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitra_approvals');
    }    
};
