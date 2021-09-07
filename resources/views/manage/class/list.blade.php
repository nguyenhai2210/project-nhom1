@extends('layout.master')
@section('title','Danh sách lớp học')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="../https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>
<body>
  <h1>Danh sách lớp</h1>
  <a href="{{url('manage/class/create')}}">Thêm</a>
<div class="col-md-8 order-md-1">
            <table class="table">
              <thead>
                <tr>
                  <th>Mã lớp</th>
                  <th>Tên lớp</th>
                  <th>Mã khóa</th>
                  <th>Mã ngành</th>
                  <th>Số lượng</th>
                  <th colspan="2">Hành động</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($class as $item)
                <tr>
                    <td>{{$item->MaL}}</td>
                    <td>{{$item->NameClass}}</td>
                    <td>{{$item->Mak}}</td>
                    <td>{{$item->MaN}}</td>
                    <td>{{$item->number}}</td>
                    <td>
                        <a href="{{url('manage/class/edit')}}">Sửa</a>
                    </td>
                    <td>
                        <a href="{{url('manage/class/delete')}}">Xóa</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">Không có dữ liệu</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>
@endsection