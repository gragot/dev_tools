<?php

namespace App\Http\Controllers;

/**
 * Class ResaltadorDeCodigoPHPController
 */
class CreadorDeHashController extends Controller
{
    const LIST_ITEM_ACTIVE = 'CreadorDeHash';

    function creadorDeHashesForm() {
        return view('generador_de_hashes.form', [
            'pass' => '',
            'listItemActive' => self::LIST_ITEM_ACTIVE
        ]);
    }

    function creadorDeHashesAction()
    {
    	$pass = $_POST['pass'];
        return view('generador_de_hashes.result', [
            'pass' => $pass,
            'md5' => md5($pass),
            'sha1' => sha1($pass),
            'sha2' => hash('sha256', $pass),
            'bcrypt' => password_hash($pass, PASSWORD_BCRYPT)
        ]);
    }
}
