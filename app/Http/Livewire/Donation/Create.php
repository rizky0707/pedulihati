<?php

namespace App\Http\Livewire\Donation;

use App\Donation;
use App\Category;
use Livewire\Component;
// use App\Http\Controllers\DonationContoller;

class Create extends Component
{
    public $jenis_donasi,$keterangan,$nama,$jumlah;

    public function store()
    {
       $this->validate([
           'category_id' => 'required',
           'keterangan' => 'required',
           'nama' => 'required',
           'jumlah' => 'required'
       ]);
    }
   

    public function render()
    {
        $category = Category::all();
        return view('livewire.donation.create', compact('category'));
    }

   
}
