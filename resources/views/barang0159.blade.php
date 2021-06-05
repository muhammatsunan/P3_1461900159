<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Barang</title>
<h3>Data Barang</h3>
<form action="{{route('barang.index')}}" method="GET">
    <div class="input-group">
<input type="text" class="form-control" name="cari" placeholder="Cari barang .." value="{{$request->cari}}">
<div class="input-group-append">
<button type="submit" class="btn btn-primary">Cari</button>
</div>
</div>
</form>
<br>
<style>
table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 3px solid #ddd;
}
thead {
background-color: #42d7f5;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
padding: 8px 16px ;
text-decoration: none;
}

</style>
</head>
<body>
<div style="overflow-x:auto;">
<a class="tambah" href="{{route( 'barang.create')}}">
Tambah Data </a>
<table>
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Harga</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php $no=1; ?>
@foreach ($barang as $brg)
<tr>
<td>{{$no++}}</td>
<td>{{$brg->nama}}</td>
<td>{{$brg->harga}}</td>
<td>
<a href="{{ url('barang/' . $brg->id . '/edit' ) }}">Edit </a>

<form action="{{ url('barang/' . $brg->id) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <button type="submit">Delete</button>
</td>
</tr>
@endforeach
</table>
</tbody>
</div>
</body>
