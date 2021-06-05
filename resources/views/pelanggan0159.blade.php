<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Pelanggan</title>
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
<th>Alamat</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php $no=1; ?>
@foreach ($pelanggan as $plg)
<tr>
<td>{{$no++}}</td>
<td>{{$plg->nama}}</td>
<td>{{$plg->alamat}}</td>
<td>
<a href="">Edit </a>
|
<a href=""> Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</body>
