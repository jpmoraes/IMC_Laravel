<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImcModel;

class DashboardController extends Controller
{
    public function index(){

        $showImc = ImcModel::orderBy('id', 'asc')->get();
        
        return view('imc.dashboard')->with('showImc', $showImc);
  
    }

    public function destroy(Request $request, $id){
        $deleteImc = ImcModel::findOrFail($id);
        $deleteImc->delete();

        return redirect('/dashboard');

    }

    public function update(Request $request, $id){
        $updateIMC = ImcModel::findOrFail($id);

        $updateIMC->nome = $request->novo_nome;
        $updateIMC->peso = $request->novo_peso;
        $updateIMC->altura = $request->novo_altura;

        $updateIMC->save();

        return redirect('/dashboard');
    }

}
