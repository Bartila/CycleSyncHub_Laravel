<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('bikes', function (Blueprint $table) {
            if (!Schema::hasColumn('bikes', 'qr_code')) {
                $table->string('qr_code')->unique()->nullable()->after('phone');
            }
        });
    }

    public function down(): void
    {
        Schema::table('bikes', function (Blueprint $table) {
            $table->dropColumn('qr_code');
        });
    }
};
