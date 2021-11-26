@extends('layout')

@section('cabecalho')
  Cadastrar Comerciantes
@endsection

@section('conteudo')
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nome" class="">Nome do Comerciante</label>
                <input type="text" class="form-control" name="nome" id="nome">
                <label for="nome_img">Adicionar Img</label>
                <input type="file" class="custom-file-input" name="nome_img" id="nome_img">
                <!--<input type="text" class="form-control" name="nome_img" id="nome_img">-->
            </div>
            <button class="btn btn-primary mt-2">Adicionar</button>
        </form>
    </div>
@endsection
