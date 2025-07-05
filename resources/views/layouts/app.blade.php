{{-- @extends('layouts.base')

@section('childContent')
    @include('layouts.partials.header')

    @yield('content')

    <footer>
        @section('footerLinks')
            <a href="#"> Link Youtube</a><br>
            <a href="#"> Link Gmail</a><br>
        @show
    </footer>

    @hasSection('footerLinksIndex')
        @yield('footerLinksIndex')
    @endif

@endsection
 --}}

@props(['title' => '', 'footerLinks' => ''])

 <x-base-layout :title="$title">
    <x-layouts.header></x-layouts.header>
    {{$slot}}    {{-- Recebendo de index.blade.php --}}

 </x-base-layout>