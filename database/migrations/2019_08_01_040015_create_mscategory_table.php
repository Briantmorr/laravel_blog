<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Mscategory;

class CreateMscategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mscategory', function (Blueprint $table) {
            $table->integer('id')->index()->unsigned();
            $table->string('name', 40);
        });

        Mscategory::create(['id' => Mscategory::BACK_END, 'name' => 'Back End']);
        Mscategory::create(['id' => Mscategory::FRONT_END, 'name' => 'Front End']);
        Mscategory::create(['id' => Mscategory::DEV_OPS, 'name' => 'Dev Ops']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mscategory');
    }
}
