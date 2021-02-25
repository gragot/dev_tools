@extends('layouts.app')
@section('contenido')

<form id="base64Encode" action="{{ route('base_64.ToBase64') }}" method="post">
	<div class="container-fluid">
		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron" style="padding: 2em; color: forestgreen;">
			<div style="padding-bottom: 16px"><strong>ENCODE</strong></div>
			<div class="row dflex" style="">
				<div class="col-lg-12 columna_codigo">
					<textarea id="base64" name="string" class="form-control" style="height: 200px" placeholder="Texto ..."></textarea>
				</div>
				<div class="col-lg-6 d-none columna_resultado">
					<div class="form-control resultado" style="height: 100%"></div>
				</div>
			</div>
			<button id="to-base-64" type="button" class="btn btn-md btn-primary">To base 64</button>
		</div>
	</div>
</form>

<form id="base64Decode" method="post">
	<div class="container-fluid">
		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron" style="padding: 2em; color: forestgreen;">
			<div style="padding-bottom: 16px"><strong>DECODE</strong></div>
			<div class="row dflex" style="">
				<div class="col-lg-12 columna_codigo">
					<textarea id="base64" name="base64" class="form-control" style="height: 200px" placeholder="Texto en Base 64 ..."></textarea>
				</div>
				<div class="col-lg-6 d-none columna_resultado">
					<div class="form-control resultado" style="height: 100%"></div>
				</div>
			</div>
			<button id="base64ToText" class="btn btn-md btn-primary"><i class="fas fa-file-pdf" style="margin-right: 10px"></i>Decodificar a Texto</button>
			<button id="base64ToPDF" class="btn btn-md btn-primary"><i class="fas fa-file-pdf" style="margin-right: 10px"></i>Decodificar a PDF</button>
		</div>
	</div>
</form>

@endsection

@section('js')

<script>

    $('#base64ToPDF').click(function () {
        var form = $(this).closest('form');
        form.attr('action', "{{ route('base_64.ToPDF') }}");
        form.submit();
	    return false;
    });

    $('#base64ToText').click(function () {

        var form = $(this).closest('form');
        var resultado = form.find('.resultado');
        var columna_codigo_resaltado = form.find('.columna_resultado');
        var columna_codigo = form.find('.columna_codigo');
        var boton_copiar = form.find('#boton_copiar');

        boton_copiar.show();


        $.ajax({
            url: "{{ route('base_64.toText') }}",
            data: form.serialize(),
            method: 'post',
            dataType: 'json',
            success: function(data) {

                var data = data.result;

                console.log(data);

                resultado.html(data);


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

    $('#to-base-64').click(function() {

        console.log(1);

        var form = $(this).closest('form');
        var resultado = form.find('.resultado');
        var columna_codigo_resaltado = form.find('.columna_resultado');
        var columna_codigo = form.find('.columna_codigo');
        var boton_copiar = form.find('#boton_copiar');

        boton_copiar.show();

        $.ajax({
            url: form.attr('action'),
            method: 'post',
            dataType: 'json',
            data: form.serialize(),
            success: function(data) {
                var data = data.result;

                console.log(data);

                resultado.html(data);


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


</script>

@endsection
