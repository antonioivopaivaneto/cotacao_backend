<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Jobs\SendMailCotacaoJob;
use Illuminate\Http\Request;

class EnviarEmailController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {



        $dados = 'teste';
        dispatch(new SendMailCotacaoJob($dados ));


    }
}
