<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateTable extends Controller
{
    public function table(){
        if (!Schema::hasTable('Products1')){ // Schema là một lớp giúp chúng ta tạo cấu trúc của database
            Schema::create('Products1',function($table){
                $table->increments('id');
                $table->string('name');
                $table->string('image');
                $table->string('description');
                $table->integer('quantity');
                $table->date('date');
                $table->timestamps();
            });
        }
        if 
    }
}
