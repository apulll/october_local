<?php namespace Apul\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateApulContactA extends Migration
{
    public function up()
    {
        Schema::create('apul_contact_a', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 20);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('apul_contact_a');
    }
}
