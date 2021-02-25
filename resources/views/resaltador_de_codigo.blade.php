@extends('layouts.app')
@section('contenido')

<form>
    <div class="container-fluid">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron" style="padding: 2em;">
            <div class="row dflex" style="">

                <div class="col-lg-12 columna_codigo">
                    <textarea id="codigo" class="form-control" style="height: 200px" placeholder="Codigo..."></textarea>
                </div>

                <div class="col-lg-6 d-none columna_codigo_resaltado">
                    <div id="codigo_resaltado" class="form-control"></div>
                </div>

            </div>

            <input type="button" class="btn btn-md btn-primary" value="Remarcar sintaxis" data-action=remarcar_sintaxis>
            <input id="boton_copiar" type="button" class="btn btn-md btn-primary" value="Copiar" data-action="copiar" style="display: none;">
        </div>
    </div>
</form>

<textarea style="display: none" id="codigo_resaltado_html"></textarea>


@endsection

@section('js')

<script>
    function Controller() {
        var self = this;

        $('[data-action=remarcar_sintaxis]').click(function() {

            var codigo = $('#codigo');
            var codigo_resaltado = $('#codigo_resaltado');
            var codigo_resaltado_html = $('#codigo_resaltado_html');
            var columna_codigo_resaltado = $('.columna_codigo_resaltado');
            var columna_codigo = $('.columna_codigo');
            var boton_copiar = $('#boton_copiar');

            boton_copiar.show();

            $.ajax({
                url: '{{ route('resaltador_de_codigo.action') }}',
                method: 'post',
                dataType: 'json',
                data: {
                    codigo: codigo.val()
                },
                success: function(data) {

                    codigo_resaltado.html(data.codigo_resaltado);
                    codigo_resaltado_html.html(data.codigo_resaltado_html);

                    $('#boton_copiar').click(function() {
                        codigo_resaltado_html.show();
                        codigo_resaltado_html.select();
                        document.execCommand('copy');
                        codigo_resaltado_html.hide();
                    });

                    if(columna_codigo_resaltado.hasClass('d-none')) {

                        columna_codigo.removeClass('col-lg-12').addClass('col-lg-6');
                        setTimeout(function () {
                            columna_codigo_resaltado.removeClass('d-none');
                        }, 500)

                    }
                }
            });

            return false;
        });
    }

    new Controller();
</script>

@endsection
