@extends('layouts.base')

@section('base_content')

    <div class="wrapper">
        @include('layouts.partial.topbar')
        @include('layouts.partial.sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('layouts.partial.footer')
    </div>
@stop
