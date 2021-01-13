@extends('layouts.base')

@section('body')
    <div class="h-screen flex overflow-hidden bg-gray-100">
        @include('layouts.sidebar-mobile')
        @include('layouts.sidebar-desktop')

        <div class="flex-1 overflow-auto focus:outline-none" tabindex="0">
            @include('layouts.header-bar')

            @yield('content')

            @isset($slot)
                {{ $slot }}
            @endisset

        </div>
    </div>
@endsection
