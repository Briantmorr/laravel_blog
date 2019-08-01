<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Msstatus;

class CreateMsstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msstatus', function (Blueprint $table) {
            $table->integer('id')->index()->unsigned();
            $table->string('name', 40);
        });

        Msstatus::create(['id' => Msstatus::DRAFT, 'name' => 'Draft']);
        Msstatus::create(['id' => Msstatus::PUBLISHED, 'name' => 'Published']);
        Msstatus::create(['id' => Msstatus::ACTIVE, 'name' => 'Active']);
        Msstatus::create(['id' => Msstatus::INACTIVE, 'name' => 'Inactive']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msstatus');
    }
}
