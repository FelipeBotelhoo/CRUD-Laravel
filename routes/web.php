<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Pessoa;


Route::get('/', function () {
    $pessoas = Pessoa::all(); 
    
    return view('tabela-pessoa', ['pessoas' => $pessoas]);
});

Route::get('/adicionar-pessoa', function () {
    return view('/adicionar-pessoa');
});

Route::post('/cadastrar-pessoa', function (Request $dados) {
    Pessoa::create([
        'nome'=> $dados->nome,
        "email"=> $dados->email
    ]);
    return redirect('/')->with('success', 'Pessoa cadastrada com sucesso!');
});



Route::get('/editar-pessoa/{id}', function ($id) {
  $pessoa = Pessoa::findOrFail($id);
  return view('editar-pessoa', ['pessoa'=> $pessoa]);
});

Route::put('/atualizar-pessoa/{id}', function ( $id, Request $dados) {
    $pessoa = Pessoa::findOrFail($id);
    $pessoa ->nome = $dados->nome;
    $pessoa ->email = $dados->email;
    $pessoa->save();
    return redirect('/')->with('success', 'Pessoa atualizada com sucesso!');
 });

 Route::get('/remover-pessoa/{id}', function ( $id) {
    $pessoa = Pessoa::findOrFail($id);
   $pessoa->delete();
   return redirect('/')->with('success', 'Pessoa removida com sucesso!');
 });