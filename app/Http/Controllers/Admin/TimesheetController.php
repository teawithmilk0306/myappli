<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    //以下を追記
  public function add()
  {
      return view('admin.timesheet.create');
  }
}
