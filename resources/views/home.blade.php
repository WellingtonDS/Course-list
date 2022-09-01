@extends ('layout.site')
@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de cursos</h3>
        <div class="row">
            @foreach($cursos as $curso)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img style="height: 150px;" src="{{asset($curso->imagem)}}">
                        <span class="card-title">{{$curso->titulo}}</span>
                    </div>
                    <div class="card-content">
                        <h5>{{$curso->titulo}}</h5>
                        <p>{{$curso->descricao}}</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Ver mais...</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row center">
            {{$cursos->links()}}
        </div>
    </div>
    

 @endsection
