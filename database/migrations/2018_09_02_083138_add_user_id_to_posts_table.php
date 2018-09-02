<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable()->comment('id cua nguoi tao bai viet');
            $table->string('slug')->unique()->nullable(); // migrate những file chưa chạy , chạy rồi sẽ không chạy nữa,roll theo trình tự thời gian
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('user_id'); // rollback lại những file đã chạy
            $table->dropColumn('slug');
        });
    }
}
