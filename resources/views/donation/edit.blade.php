@include('landing.headerlive')

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <div class="shadow p-3 mb-5 bg-white rounded">
            <form wire:submit.prevent="update"> 
                <input type="hidden" wire:model="donationId">
                <div class="form-group">
                  <label for="jenis_donasi">Jenis Donasi</label>
                  <input type="text" class="form-control" wire:model="jenis_donasi"  placeholder="Jenis Donasi">
                  {{-- @error('jenis_donasi') <span class="error">{{ $message }}</span> @enderror --}}
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text"  class="form-control" wire:model="keterangan" placeholder="Keterangan">
                </div>
                <div class="form-group">
                    <label for="keterangan">Nama</label>
                    <input type="text" class="form-control" wire:model="nama"  placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Jumlah</label>
                    <input type="text" class="form-control"  wire:model="jumlah" placeholder="Jumlah">
                  </div>
                  <button type="submit" class="btn btn-primary">Create</button>              
             </form>

    </div>
    </div>
    <div class="col-md-6">
        <div class="shadow p-3 mb-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Transfer Bank</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Online Payment</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
              </div>
    </div>
    </div>
</div>
</div>
@include('landing.footerlive')
