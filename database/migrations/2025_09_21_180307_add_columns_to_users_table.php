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
        Schema::table('users', function (Blueprint $table) { 
            $table->boolean('active_subscription')->default(false);
            $table->boolean('is_not_banned')->default(true);
            $table->integer('votes')->nullable();
            $table->ipAddress('ip_address')->nullable();
            $table->json('settings')->nullable();
            $table->macAddress('device')->nullable(); 
            $table->nullableUuidMorphs('taggable'); 
            $table->softDeletes('deleted_at', precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('active_subscription');
            $table->dropColumn('is_not_banned');
            $table->dropColumn('votes');
            $table->dropColumn('ip_address');
            $table->dropColumn('settings');
            $table->dropColumn('device');
            $table->dropColumn('taggable');
            $table->dropColumn('deleted_at');
        });
    }
};
