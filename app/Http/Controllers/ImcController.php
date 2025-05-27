<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImcModel;
use App\Models\FaixaModel;
use Illuminate\Support\Facades\Auth;

class ImcController extends Controller
{
    public function index()
    {

        $resultado = [
            "imc" => "",
            "faixa" => ""
        ];

        return view('imc.index')->with('resultado', $resultado);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $peso = $data["peso"];
        $altura = $data["altura"];
        $nome = $data["nome"];

        $resultado = $this->calcularImc($peso, $altura);

        $idFaixa = FaixaModel::where('categoria', $resultado["faixa"])->value('idFaixa');

        $imcModel = new ImcModel();

        $imcModel->nome = $nome;
        $imcModel->altura = $altura;
        $imcModel->peso = $peso;
        $imcModel->idFaixa = $idFaixa;
        $imcModel->idUsers = Auth::id();

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('images/user', $imageName, 'local');

            //$image->move(public_path('assets/images/'),$imageName);
      
            $imcModel->url = 'storage/app/private/images/user/' . $imageName; 

        } else {
            return back()->with('error', 'Falha ao carregar a imagem.');
        }

        $imcModel->save();

        return view('imc.index')->with('resultado', $resultado);
    }


    public function calcularImc($peso, $altura)
    {
        $imc = $peso / ($altura ** 2);

        $resultado["imc"] = round($imc, 2);


        switch (true) {
            case ($imc < 18.5):
                $resultado["faixa"] = "Abaixo";
                break;
            case ($imc >= 18.5 && $imc < 25):
                $resultado["faixa"] = "normal";
                break;
            case ($imc >= 25 && $imc < 30):
                $resultado["faixa"] = "obsidade grau I";
                break;
            default:
                $resultado["faixa"] = "obsidade grau II";
        }

        return $resultado;
    }
}
