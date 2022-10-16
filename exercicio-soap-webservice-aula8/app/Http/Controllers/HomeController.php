<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SoapClient;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function getCep(Request $request)
    {
        $client = new SoapClient("https://apps.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl");

        return view("retorno", ["resultado" => $client->consultaCEP(["cep" => $request->input("cep")])]);
    }
}
