@extends('layout.app')
@section('title', 'Listagem de produtos')
@section('content')
  <h1>Produtos</h1>
  {{Form::open(['url'=>['produtos/buscar']])}}
  <div class="row">
    <div class="col-lg-12">
      <div class="input-group">
      {{Form::text('busca',$busca,['class'=>'form-control','required','placeholder'=>'Buscar'])}}
      <span class="input-group-btn">
        {{Form::submit('Buscar',['class'=>'btn btn-default'])}}
      </span>
      </div>
    </div>
  </div>
  {{Form::close()}}

  @if(Session::has('mensagem'))
    <div class="alert alert-success">{{Session::get('mensagem')}}</div>
  @endif

  <div class="row">
    @foreach ($produtos as $produto)
      <div class="col-md-3">
        <h4>{{$produto->titulo}}</h4>
          @if(file_exists("./img/produtos/" . md5($produto->id) . ".jpg"))
            <a class='thumbnail' href="{{ url('produtos/'.$produto->id) }}">
              {{Html::image(asset("img/produtos/" . md5($produto->id) . ".jpg"))}}
            </a>
          @else
            <a class='thumbnail' href="{{ url('produtos/'.$produto->id) }}">
              {{$produto->titulo}}
            </a>
          @endif
        
          @if(Auth::check())
           
            <a class='btn btn-warning' href=" {{url('produtos/'.$produto->id.'/edit')}} ">Editar</a>
            <a class="btn btn-danger" data-toggle="modal" id="mediumButton" data-target="#mediumModal"
            data-attr="">
            Excluir
        </a>
          @endif
      </div>
    @endforeach
  </div>
  {{ $produtos->links() }}
@endsection


 <!-- small modal -->
 <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
 aria-hidden="true">
 <div class="modal-dialog modal-sm" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>
         <div class="modal-body" id="smallBody">
             <div>
                 <!-- the result to be displayed apply here -->
             </div>
         </div>
     </div>
 </div>
</div>


<!-- medium modal -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>
         <div class="modal-body" id="mediumBody">
             <div><h2>Deseja realmente excluir?</h2>
              @if(Auth::check())
              {{Form::open(['route'=>['produtos.destroy',$produto->id],'method'=>'DELETE'])}}
              {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
              
            <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">Não</span>
          </button>
          {{Form::close()}}
            @endif
             </div>
         </div>
     </div>
 </div>
</div>