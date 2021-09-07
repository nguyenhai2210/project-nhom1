@extends('layout.master')
@section('title','Sửa số tiền học')
@section('content')
    

<div class="col-md-8 order-md-1">
    <h4 class="mb-3">Sửa </h4>
    <form class="needs-validation" method="POST">
    @csrf
    <div >
        <label for="state">Ngành</label>
        <select class="custom-select d-block w-100" name="MaN" id="MaN" required="">
            <option value="">Chọn...</option>
            @foreach ($branch as $item)
            <option  {{$class->MaN == $item->MaL?"selected":""}} value="{{$item->MaN}}">{{$item->name}}</option>
            @endforeach
        </select>                
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
        <label for="firstName">Số học phí</label>
        <input value="{{$coursefee->SoHP}}" type="number" class="form-control" name="SoHP" id="SoHP" placeholder="Số học phí" required>
    </div>
    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Sửa</button>
    </form>
</div>@endsection