<?php

namespace App\Http\Controllers;

// TODO: Añadir la opcion de subir un archivo y transformar a base64, ahora mismo solo se puede transformar texto

class Base64Controller extends Controller
{
	const LIST_ITEM_ACTIVE = 'Base64';

	function form() {
	    return view('base64', [
	        'listItemActive' => self::LIST_ITEM_ACTIVE
        ]);
	}

	function base64ToPDF() {
		header('Content-Disposition: attachment;filename="test.pdf"');
		header('Content-Type: application/force-download');
		echo base64_decode($_POST['base64']);
	}

	function toBase64() {
		$texto = $_POST['string'];
		echo json_encode(['result' => base64_encode($texto)]);
		exit;
	}

	function base64toText() {
		$base64 = $_POST['base64'];
		echo json_encode(['result' => base64_decode($base64)]);
		exit;
	}
}
