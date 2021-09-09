@include('landing.headerlive')
<div>
    <div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded ">
        <div class="col-md-8">
            <a href="{{route('donation.create')}}" class="btn btn-success btn-md">Create Data</a>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Jenis Donasi</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Nama</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($donations as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->jenis_donasi}}</td>
                <td>{{$item->keterangan}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jumlah}}</td>
                <td class="text-center">
                  <a href="{{route('donation.edit', $item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                  <button wireclick="destroy({{$item->id}})" class="btn btn-danger btn-sm">Delete</button>
                </td>

              </tr>

            @endforeach

        </tbody>

      </table>
      {{$donations->links()}}

    </div>
        </div>
</div>
</div>

@include('landing.footerlive')
