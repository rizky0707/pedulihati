<?php

namespace App\Http\Livewire\Donation;

use App\Donation;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public function render()
    {
        // use WithPagination; 

        return view('livewire.donation.index', [
            'donations' => Donation::latest()->paginate(5)
        ]);
    }
}
