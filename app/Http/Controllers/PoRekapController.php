<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PoRekapController extends Controller
{
	public function index()
	{
		$rekap = DB::table('tb_po_rekaps')
		->select('tb_po_rekaps.*')
		->orderBy('tb_po_rekaps.id','ASC')
		->get();

		return view('tbl', compact('rekap'));

	}
}
