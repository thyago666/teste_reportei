<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Commits;
use DB;

class gitController extends Controller
{
    public function index(Request $request){

  $login = $request->login;     
  $response = Http::get('https://api.github.com/users/'.$login.'/repos')->json();

    foreach($response as $nome){
   $commits = Http::get('https://api.github.com/repos/thyago666/'.$nome["name"].'/commits')->json();
   $repositorio = $nome["name"];

   foreach($commits as $elementos){
    $chave = isset($elementos['sha']) ? $elementos['sha'] : [];
    $mensagem = isset($elementos['commit']['message']) ? $elementos['commit']['message'] : [];
    $data = isset($elementos['commit']['author']['date']) ? $elementos['commit']['author']['date'] : [];
    $dataFormatada = explode("T", $data);
    
    $verifica = Commits::where('chave',$chave)->get()->count();

if($verifica == 0){
    $dados = new Commits([
        'chave'=>$chave,
        'loginUser'=>$login,
        'repositorio'=>$repositorio,
        'mensagem'=>$mensagem,
        'data_commit'=>$dataFormatada[0]
                        ]);
        $dados->save();
                }
       }
    }
    $dataAtual = date('Y-m-d');
    $dataRetro = date('Y-m-d', strtotime('-90 days', strtotime($dataAtual)));

    $qtds = DB::select("SELECT COUNT(repositorio) as quantidade, repositorio, data_commit
    FROM commits
    WHERE DATE(data_commit) BETWEEN '$dataRetro' and '$dataAtual' AND loginUser = '$login'
    group by repositorio,data_commit");
    return view('dados',compact('qtds'));
}

}
