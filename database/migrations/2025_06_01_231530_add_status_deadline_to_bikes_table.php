<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('bikes', function (Blueprint $table) {
            $table->string('status')->default('oczekuje'); // status naprawy
            $table->date('deadline')->nullable(); // termin ukończenia naprawy
        });
    }
    public function down()
    {
        Schema::table('bikes', function (Blueprint $table) {
            $table->dropColumn(['status', 'deadline']);
        });
    }

};
