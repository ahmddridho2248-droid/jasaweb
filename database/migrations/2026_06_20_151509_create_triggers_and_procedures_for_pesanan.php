<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add status column to pembayaran if it doesn't exist just to be safe, since it was requested
        if (!Schema::hasColumn('pembayaran', 'status')) {
            Schema::table('pembayaran', function (Blueprint $table) {
                $table->string('status')->default('menunggu');
            });
        }

        // Trigger: tr_setelah_ubah_pembayaran
        DB::unprepared("
            DROP TRIGGER IF EXISTS tr_setelah_ubah_pembayaran;
            CREATE TRIGGER tr_setelah_ubah_pembayaran
            AFTER UPDATE ON pembayaran
            FOR EACH ROW
            BEGIN
                IF NEW.status = 'lunas' THEN
                    UPDATE pesanan SET status_pesanan = 'diproses' WHERE id_pesanan = NEW.id_pesanan;
                END IF;
            END
        ");

        // Stored Procedure: sp_batalkan_pesanan_kedaluwarsa
        DB::unprepared("
            DROP PROCEDURE IF EXISTS sp_batalkan_pesanan_kedaluwarsa;
            CREATE PROCEDURE sp_batalkan_pesanan_kedaluwarsa()
            BEGIN
                UPDATE pesanan 
                SET status_pesanan = 'dibatalkan' 
                WHERE status_pesanan = 'menunggu' 
                AND created_at < NOW() - INTERVAL 3 DAY;
            END
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP TRIGGER IF EXISTS tr_setelah_ubah_pembayaran;");
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_batalkan_pesanan_kedaluwarsa;");
        
        if (Schema::hasColumn('pembayaran', 'status')) {
            Schema::table('pembayaran', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }
    }
};
