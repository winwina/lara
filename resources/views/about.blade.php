@extends('template.index')
@section('content')
Kontak saya 
<ul>
    <li>0876547890</li>
    <li>0876547899</li>
    <li>0876547887</li>
</ul>

@if(count($kontak))
<ul>
    @foreach($kontak as $kontak)
    <li>{{ $kontak }}</li>
    @endforeach
    
</ul>
    @else
        kontak tidak ditemukan
    @endif
@stop