@extends('layout.master')
@section('title','Thêm ngành')
@section('content')


    
    <div style="margin:auto" class="col-md-8 order-md-1">
        
        <h4 class="mb-3">Thêm ngành </h4>
    <form method="POST" class="needs-validation">
        @csrf
        <div class="row">
        <div class="col-md-6 mb-3">
        <label for="firstName"></label>    <input class="form-control" type="number" name="MaN" placeholder="Nhập mã ngành"><br>
        <label for="firstName"></label><input class="form-control" type="text" name="name" placeholder="Nhập tên ngành"><hr>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Thêm</button>
    </div>
    </div>
    </form>
</div>
@endsection
