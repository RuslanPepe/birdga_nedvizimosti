<?php

namespace App\Http\Controllers;

class UserController
{
  public function viewPage($page){
    return view($page);
  }
}
