@extends('layout.master')
@section('title','Sửa ngành')
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
    <div style="margin-left:500px">
       <h1>Sửa ngành</h1>
      
        {{-- @if($branch != NULL) --}}
         <form  method="POST" >
             
        @csrf
        <input readonly value="{{$data[0]->MaN}}" type="text" name="MaN" placeholder="Nhập mã ngành"><br>
        <input value="{{$data[0]->name}}" type="text" name="name" placeholder="Nhập tên ngành">
        <button type="submit">Sửa</button>
    </form>
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