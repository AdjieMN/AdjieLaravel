@extends('master.app')
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>

@section('content')
	@if(count($result))
		<section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Bordered Table</h3>
                        </div>

                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>id</th>
                                <th>Nama Kategori</th>
                                <th>Slug</th>
                                <th>Tanggal</th>
                            </tr>

                            @foreach($result as $cat)
                            <tr>
                                <td>{{$cat->id}}</td>
                                <td>{{$cat->namaKategori}}</td>
                                <td>{{$cat->slug}}</td>
                                <td>{{$cat->tanggal}}</td>
                            </tr>
                            @endforeach
        
                        </table>
                    </div>			
    @else
    <h1>Data Tidak Ditemukan</h1>
    @endif
				<div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                       </ul>
	            </div>
			</div>
		</div>
	</div>
@endsection

</body>
</html>