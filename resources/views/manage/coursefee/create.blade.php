@extends('layout.master')
@section('title','Thêm tiền học')
@section('content')
    

<div class="col-md-8 order-md-1">
    <h4 class="mb-3">Thêm </h4>
    <form class="needs-validation" method="POST">
    @csrf
    <div >
        <label for="state">Ngành</label>
        <select class="custom-select d-block w-100" name="MaN" id="MaN" required="">
            <option value="">Chọn...</option>
            @foreach ($branch as $item)
            <option value="{{$item->MaN}}">{{$item->name}}</option>
            @endforeach
        </select>                
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
        <label for="firstName">Số học phí</label>
        <input type="number" class="form-control" name="SoHP" id="SoHP" placeholder="Số học phí" required>
    </div>
    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Thêm</button>
    </form>
</div>@endsection