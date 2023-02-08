@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'mypage'を埋め込む --}}
@section('title', 'mypage')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My Dictionary</h2>
            </div>
        </div>
    </div>
@endsection