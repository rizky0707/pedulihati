<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;
use App\Role;
use App\User;
use Auth;
use App\Category;
use Livewire\Component;
use Carbon\Carbon;
use DB;

class DonationController extends Controller
{
    public function admin()
    {
        //Menampilkan data Hari Ini
        // $count_owned = Owned::where('user_id', \Auth::user()->id)->count();
        $donasis = Donation::where('user_id', \Auth::user()->id)->whereDate('created_at', Carbon::today())->get();
        $count_users = DB::table('role_user')->where('role_id', '3')->count();
        $total_donasi = Donation::sum('jumlah');
        // dd($total_donasi);
        $data = compact('donasis', 'count_users', 'total_donasi');
        return view('home', $data);
    }

    public function AdminIndex()
    {
        $donasis = Donation::all();
        return view('admin.users.donations.index', compact('donasis'));
    }

    public function create()
    {
        $category = Category::all();
        return view('donation.create', compact('category'));
    }

    public function store(Request $request, Donation $donation)
    {
        // $this->validate($request, [
        //     'jenis_donasi' => 'required',
        // ]);

        // dd($request);
        $donation = Donation::create([
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'keterangan' => $request->keterangan,
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'transfer_bank' => $request->transfer_bank
        ]);
        return redirect('/invoice');
        // $new_category = Donation::create([
        //     'category_id' => $request->category_id,
        //     'keterangan' => $request->keterangan,
        //     'nama' => $request->nama,
        //     'jumlah' => $request->jumlah,
        //     'transfer_bank' => $request->transfer_bank
        //     ]);
            
        // return redirect('/invoice');

    }

    public function invoice()
    {
        $donasi = Donation::latest()->limit(1)->where('user_id', \Auth::user()->id)->get();
        // dd($donasi);
        return view('invoice', compact('donasi'));
    }

    public function pdf($id)
    {
        $pdf = Donation::latest()->findOrFail($id);
        $data = compact('pdf');
        $pdf = \PDF::loadView('invoice-pdf', $data);
        return $pdf->download('invoice.pdf');
    }
}
