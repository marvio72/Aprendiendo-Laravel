<h1>{{$titulo}}</h1>
<p>(acción index del controlador PeliculaController)</p>

@if(isset($pagina))
<h3> La página es {{$pagina}}</h3>
@endif

<h2>Por action</h2>
<a href="{{action('PeliculaController@detalle') }}">Ir al detalle</a>
<br>
<h2>Por route</h2>
{{-- Tambien se puede hacer por el nombre del route --}}
<a href="{{ route('detalle.pelicula')}}">Ir al detalle</a>

{{-- Ingresando un parametro --}}
{{-- <a href="{{ route('detalle.pelicula', ['id' => 12]) }}">Ir al detalle</a> --}}
