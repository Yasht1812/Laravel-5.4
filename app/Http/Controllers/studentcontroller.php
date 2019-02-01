<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class studentcontroller extends Controller {
   public function insertform() {
      return view('register');
   }
	
   public function insert(Request $request) {
      $name = $request->input('name');
      
      
      DB::insert('insert into students (name) values(?)',[$name]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}