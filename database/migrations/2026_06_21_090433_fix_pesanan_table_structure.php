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
        // Set id_pesanan as Primary Key and Auto Increment
        \Illuminate\Support\Facades\DB::statement('ALTER TABLE pesanan MODIFY id_pesanan BIGINT(20) AUTO_INCREMENT PRIMARY KEY');
        
        // Make permintaan_nama_domain nullable since it's optional in the form
        \Illuminate\Support\Facades\DB::statement('ALTER TABLE pesanan MODIFY permintaan_nama_domain VARCHAR(255) NULL');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove auto_increment (dropping primary key is harder if there are foreign keys, so we just remove auto_increment)
        \Illuminate\Support\Facades\DB::statement('ALTER TABLE pesanan MODIFY id_pesanan BIGINT(20) NOT NULL');
        \Illuminate\Support\Facades\DB::statement('ALTER TABLE pesanan MODIFY permintaan_nama_domain VARCHAR(255) NOT NULL');
    }
};
