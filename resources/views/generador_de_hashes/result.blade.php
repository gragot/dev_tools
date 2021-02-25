@extends('layouts.app')
@section('contenido')
    @include('generador_de_hashes.elementos.formulario')
    <br>

    <div class="alert alert-primary" role="alert">
        <strong>MD5:</strong> <?= $md5 ?>
    </div>

    <div class="alert alert-primary" role="alert">
        <strong>SHA1:</strong> <?= $sha1 ?>
    </div>

    <div class="alert alert-primary" role="alert">
        <strong>SHA2:</strong> <?= $sha2 ?>
    </div>

    <div class="alert alert-primary" role="alert">
        <strong>BCRYPT:</strong> <?= $bcrypt ?>
    </div>
@endsection
