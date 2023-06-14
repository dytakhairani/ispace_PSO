<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();
        return view('home', compact('user'));
    }

    public function matkul()
    {
        $user = Auth::user();
        $folder = Folder::whereIn('folderSemester', [1, 2, 3, 4, 5, 6])->get();
        return view('home', compact('user','folder'));
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->input('keyword');
        $user = Auth::user();

    		// mengambil data dari table pegawai sesuai pencarian data
		$posts = DB::table('folder')
		->where('folderNama','like',"%".$cari."%")
        ->get();

    		// mengirim data pegawai ke view index
		return view('search-results-home', compact('user','posts'));

	}
}
