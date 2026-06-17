<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('candidatures', function (Blueprint $table) {
            $table->string('cv_path')->nullable()->after('message');
            $table->string('cv_original_name')->nullable()->after('cv_path');
            $table->string('cv_mime_type')->nullable()->after('cv_original_name');
            $table->integer('cv_size')->nullable()->after('cv_mime_type');
        });
    }

    public function down(): void
    {
        Schema::table('candidatures', function (Blueprint $table) {
            $table->dropColumn(['cv_path', 'cv_original_name', 'cv_mime_type', 'cv_size']);
        });
    }
};
