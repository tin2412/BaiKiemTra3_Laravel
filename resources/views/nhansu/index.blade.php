@extends('master.master')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <img src="{{$nhansu->gioithieu}}" class="card-img-top" alt="Ảnh nhân sự">
                <div class="card-body">
                    <h5 class="card-title"><strong>Họ tên: </strong>{{$nhansu->hoten}}</h5>
                    <p class="card-text"><strong>Bằng cấp:</strong> {{$nhansu->bangcap}}</p>
                    <p class="card-text"><strong>Kỹ năng:</strong> {{$nhansu->kinang}}</p>
                    <p class="card-text"><strong>Giới thiệu:</strong> {{$nhansu->thongtingioithieu}}</p>
                    <p class="card-text"><strong>Kinh nghiệm:</strong> {{$nhansu->kinhnghiem}} năm</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
