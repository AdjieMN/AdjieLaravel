<!DOCTYPE html>
<html>
<head>
	<title>Categories</title>
</head>
<body>

<h2 align=center>Categories List</h2>
	<br><br>
	<table border= "1px" style="border-color: blue; color: black" width=100%>
		<thead>
			<tr>
				<th>id</th>
				<th>Nama Kategori</th>
				<th>Slug</th>
				<th>Tanggal</th>
				<th>Created at</th>
				<th>Updated at</th>
			</tr>
		</thead>
		<tbody>
			
			@foreach($categories as $kategori)
			<tr>

				<td>{{$kategori->id}}</td>
				<td>{{$kategori->namaKategori}}</td>
				<td>{{$kategori->slug}}</td>
				<td>{{$kategori->tanggal}}</td>
				<td>{{$kategori->created_at}}</td>
				<td>{{$kategori->updated_at}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
