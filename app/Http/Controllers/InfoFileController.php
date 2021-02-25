<?php

namespace App\Http\Controllers;

class InfoFileController extends Controller {

	const LIST_ITEM_ACTIVE = 'InfoFile';

	function form() {
        return view('info_file.form', [
            'listItemActive' => self::LIST_ITEM_ACTIVE
        ]);
	}

	function getInfo()
	{
		$this->layout = false;
		$file = $_FILES['archivo'];
		$infoImagen = getimagesize($file['tmp_name']);

		return view('info_file.result', [
            'nombre' => $file['name'],
            'tipo' => $file['type'],
            'size' => $file['size'],
            'infoImagen' => [
                'resolucion' => $infoImagen[3],
                'tipo_mime' => $infoImagen['mime'],
            ]
        ]);
	}
}
