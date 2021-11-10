<?php

namespace App\Http\Controllers;

use App\Imports\ShareImport;
use App\Models\Share;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class MainController extends Controller
{
    //
	public function showForex(  ) {
//		$shares=Share::latest()->take(5)->get()->toArray();
//		return view('forex/show',compact('shares'));
		return view('forex/show');
	}

	public function showCrypto(  ) {
//		$cryptoes=Share::all()->take(5)->toArray();
//		return view('crypto/show',compact('cryptoes'));
		return view('crypto/show');
	}

	public function showChart($nick_name = null) {
		return view('charts/show',compact('nick_name'));
	}

	public function showUpload(  ) {
		return view('import');
	}

	public function saveUpload( Request $request ) {
		$path=storage_path('app\public\exce.xlsx');
		$path2=public_path('exce.xlsx');
		$spreadsheet1 = \PhpOffice\PhpSpreadsheet\IOFactory::load($path2);
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet2 = $reader->load($path2);
		$d=$spreadsheet2->getSheet(0)->toArray();
		Share::truncate();
		foreach ($d as $item){
			Share::create([
				'name' => $item[0],
				'nick_name' => $item[1],
				'signal' => $item[2],
				'price' => $item[3],
				'date' => now(),
				]
			);
		}
		dd(1);
		return response()->json(['success'=>'updated']);
	}
}
