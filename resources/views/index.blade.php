@extends('master.master')
@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        @foreach ($quanlynhansu as $qlnhansu)
        <h2 class="text-center mb-4">Tiêu đề : {{ $qlnhansu->team }}</h2>
            <div class="row row-cols-1 row-cols-md-4 justify-content-center">
                <?php
                $nhansuChunks = $qlnhansu->nhansu->chunk(4); // Chia danh sách thành viên thành các phần nhỏ có tối đa 4 thành viên mỗi phần
                ?>
                @foreach ($nhansuChunks as $chunk)
                    @foreach ($chunk as $nhansu)
                        <div class="col">
                            <div class="team-container mb-4">
                                <div class="team">
                                    <a href="{{ route('team.show',['id' => $nhansu->id]) }}"><img src="{{$nhansu->gioithieu}}" alt="{{$nhansu->hoten}}" class="img-fluid" style="max-width: 100%; height: auto;"></a></h2>
                                    <p class="mb-0">Họ tên: {{ $nhansu->hoten }}</p>
                                    <p>Kỹ năng: {{$nhansu->kinang}}</p>
                                    <p>Kinh nghiệm: {{$nhansu->kinhnghiem}} năm</p>
                                    <p>Giới thiệu: {{$nhansu->thongtingioithieu}}</p>
                                    <p>Bằng cấp: {{$nhansu->bangcap}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        @endforeach
    </div>
</section>
@endsection
