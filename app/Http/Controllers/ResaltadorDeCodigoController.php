<?php

namespace App\Http\Controllers;

/**
 * Class ResaltadorDeCodigoPHPController
 */

class ResaltadorDeCodigoController extends Controller
{
    const LIST_ITEM_ACTIVE = 'ResaltadorDeCodigo';

    function resaltadorDeCodigoForm() {
        return view('resaltador_de_codigo');
    }

    function resaltadorDeCodigoAction()
    {
        $data = request()->all();
        $result = array();
        $result['codigo_resaltado'] = highlight_string($data['codigo'], true);
        $result['codigo_resaltado_html'] = htmlspecialchars($result['codigo_resaltado']);

        return response()->json($result);
    }
}
