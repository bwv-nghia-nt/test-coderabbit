<?php

use App\Traits\DatabaseCommonTrait;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    use DatabaseCommonTrait;

    public const TABLE_NAME = 'users';

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->tinyInteger('user_flag');

            // Common columns and charset
            $this->commonColumns($table);
            $this->commonCharset($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists(self::TABLE_NAME);
    }
};
