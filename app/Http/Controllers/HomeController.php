<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function matkul()
    {
        $folder = Folder::whereIn('folderSemester', [1, 2, 3, 4, 5, 6])->get();
        return view('home', compact('folder'));
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->input('keyword');

    		// mengambil data dari table pegawai sesuai pencarian data
		$posts = DB::table('folder')
		->where('folderNama','like',"%".$cari."%")
        ->get();

    		// mengirim data pegawai ke view index
		return view('search-results-home', compact('posts'));

	}
}
