@extends('layouts.app')
@section('contenido')

    <p><input id="archivo" type="file"></p>
    <p><button id="enviar-archivo-por-ajax" class="btn btn-primary">Enviar</button></p>

    <p id="resultado"></p>

@endsection

@section('js')

<script>
    $('#enviar-archivo-por-ajax').click(function() {

        var archivo = document.getElementById('archivo');
        var archivo = archivo.files[0];
        var data = new FormData();
        data.append('archivo', archivo);

        $.ajax({
            url: "{{ route('infofile.action') }}",
            type: 'POST', // Al ser un archivo no podemos enviarlo por GET, tenemos que especificar POST
            contentType: false, // Necesario para poder enviar el archivo por ajax
            data: data, // Indicamos el archivo
            processData: false, // Necesario para poder enviar el archivo por ajax
            success: function(response) {
                $('#resultado').html(response);
            }
        });
    });
</script>

@endsection
