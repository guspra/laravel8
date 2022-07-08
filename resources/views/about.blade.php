@extends('layouts.main')

@section('bagianbody')
    <h1>HALAMAN ABOUT</h1>
    <h3>@php
        echo $name;
    @endphp</h3>
    <p><?= $email; ?></p>
    <img src="img/<?php echo $photo1;?>" alt="<?php echo $name;?>" width="500">
    <img src="img/{{ $photo2 }}" alt="<?php echo "bird2"?>" width="500">  
@endsection

