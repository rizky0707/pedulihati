<?php

namespace App\Http\Livewire\Donation;
use App\Donation;
use Livewire\Component;

class Edit extends Component
{   
    public $donationId,$jenis_donasi,$keterangan,$nama,$jumlah;

    public function mount($id)
    {
       $donation = Donation::find($id);
       
       if($donation)
       {
           $this->donationId = $donation->id;
           $this->jenis_donasi = $donation->jenis_donasi;
           $this->keterangan = $donation->keterangan;
           $this->nama = $donation->nama;
           $this->jumlah = $donation->jumlah;
       }
    }

    public function render()
    {
        return view('livewire.donation.edit');
    }
}
