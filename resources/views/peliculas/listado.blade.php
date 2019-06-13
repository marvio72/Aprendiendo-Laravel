<h1>{{$titulo}}</h1>
<h2>{{$listado[1]}}</h2>
<p>{{date('d-m-Y')}}</p>

{{-- Comentarios con Blade --}}

{{-- Mostrar cuando existe en php --}}
<?=isset($director) ? $director : 'No hay director'; ?>
<br>
{{-- Mostrar cuando existe en Blade --}}
{{$dir ?? 'No existe $dir'}}

<br>
{{-- Condicionales en blade --}}
@if ($titulo && count($listado) >= 4)
    <h1>El titulo existe y es este: {{$titulo}}, y el listado es mayour a 3</h1>
@elseif($titulo)
    <h1>El titulo existe pero el listado no es mayor a 3</h1>
@else 
    <h1>El titulo no existe</h1>
@endif

{{-- Bucles --}}

@for ($i = 1; $i <= 20; $i++)
    El numero es: {{$i}} <br>
@endfor

<hr>
<?php $contador = 1 ?>
@while ($contador <= 50)
    @if ($contador % 2 == 0)
        NUMERO PAR: {{$contador}} <br>
    @endif
    <?php $contador++; ?>
@endwhile

@foreach ($listado as $pelicula)
    <p>{{$pelicula}}</p>
@endforeach