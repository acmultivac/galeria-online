@extends('layout')

@section('cabecalho')
Comerciantes do Bairro
@endsection


@section('conteudo')

<section id="titulo">
  <h1 class="text-center texto-titulo cor-identidade pt-5">Os melhores comércios da sua região, a um clique de distância</h1>
  <p class="text-center text-secondary pb-5">Pesquise os melhores serviços do seu bairro sem sair de casa, comodidade e praticidade.</p>
</section>
  
@if(!empty($mensagem))
<div class="alert alert-success">
  <strong>{{ $mensagem }}</strong>
</div>
@endif

<a class="btn btn-dark mb-2" href="/comerciantes/criar">Adicionar</a>

<section class="container-fluid bg-light" id="receitas">
  <div class="row justify-content-center">
    @foreach ($comerciantes as $comerciante)
       
      <article  class="card cor-bordacard card-estilo p-0 m-4 col-12 col-md-4">
        <img src="{{ asset('img/'.$comerciante->nome_img) }}" class="card-img-top card-imagem" alt="{{ $comerciante->nome_img }}">
        <div class="card-body">
            <h5 class="card-title">{{ $comerciante->nome }}</h5>
            <p class="card-text">{{ $comerciante->nome_img}}</p>
            <a href="#" class="btn cor-botao">preços</a>
            <form method="post" action="/comerciantes/remover/{{ $comerciante->id }}"
              onsubmit="return confirm('Tem certeza que deseja exlcuiir o comerciante?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-2">Remover</button>
            </form>
        </div>
      </article>
    @endforeach
  </div>
</section>
   
@endsection
    
@section('rodape')
  <footer class="bg-secondary p-3">
    <p class="text-light m-0 text-center">contato : <a  class="text-light" href="mailto:email@frutafruto.com.br">email@projetointegradorgrupo4</a></p>
    <p class="text-light text-center">Feito por : <a  class="text-light" href="mailto:email@frutafruto.com.br">Grupo Projeto Integrador 4</a></p>
  </footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  
@endsection

   
    <!-- LAYOUT antigo
    **************************************************************************
    ************************************************************************** >
  @section('conteudo')
  <section id="titulo">

  <h1 class="text-center texto-titulo cor-identidade pt-5">Os melhores comércios da sua região, a um clique de distância</h1>
  <p class="text-center text-secondary pb-5">Pesquise os melhores serviços do seu bairro sem sair de casa, comodidade e praticidade.</p>
  
</section>

@if(!empty($mensagem))
<div class="alert alert-success">
  <strong>{{ $mensagem }}</strong>
</div>
@endif

<a class="btn btn-dark mb-2" href="/comerciantes/criar">Adicionar</a>
<section class="container-fluid bg-light" id="comercios">
 
  <div class="row justify-content-center">
    <ul class="list-group">
      @foreach ($comerciantes as $comerciante)
        <li class="list-group-item">{{ $comerciante->nome }}</li>
      @endforeach
    </ul>
  </div>
    
</section>

  
    @endsection
    -->
