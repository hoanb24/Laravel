<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateAccount extends Controller
{
    public function table(){
        if (!Schema::hasTable('Account1')){ // Schema là một lớp giúp chúng ta tạo cấu trúc của database/ git là một verson controll
            Schema::create('Account1',function($table){
                $table->increments('id');
                $table->string('email');
                $table->string('password');
                $table->boolean('verify');
                $table->boolean('role');
            });
        }
        if (!Schema::hasTable('table_name')){
            Schema::create('Account1');
        }
    }
}
