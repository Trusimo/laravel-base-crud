<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public function up()
{
    Schema::create('companies', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('series');
        $table->string('type');
        $table->timestamps();
    });
}
}
