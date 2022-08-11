<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailTemplatesTable extends Migration
{
    public function up()
    {
        Schema::create('mail_templates', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('mailable_types_id');
            $table->string('mailable');
            $table->text('subject')->nullable();
            $table->longtext('html_template');
            $table->longtext('text_template')->nullable();
            $table->timestamps();
        });
    }
}
