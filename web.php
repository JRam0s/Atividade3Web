<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aluno', function () {

    $alunos = "<ul>
        <li>Carlos Eduardo</li>
        <li>Maria Cláudia</li>
        <li>João Pedro</li>
        </ul>";

    echo $alunos;
})->name('aluno');


Route::get('/limite/{total}', function ($total) {

    $dados = array(
        "Carlos Eduardo",
        "Maria Cláudia",
        "João Pedro"
    );

    $cont = 0;
    $alunos = "<ul>";
    foreach($dados as $nome){
        $alunos = $alunos."<li>$nome</li>";
        $cont++;
        if($cont==$total){break;}
    }

    $alunos = $alunos."</ul>";
    echo "<h1>$alunos</h1>";
})->where('total', '[0-9]+')->name('aluno_listagem');

Route::get('/matricula/{matricula}', function ($matricula) {

    $dados = array(
        1 => "Gil",
        2 => "Eduardo",
        3 => "JV",
        4 => "Luiz"
    );

    $cont = 0;
    $alunos = "<ul>";
    foreach($dados as $nome){
        $cont++;
        if($dados[$matricula] == $dados[$cont]){
            echo "<h4>$nome</h4>";
        }
    }

    $alunos = $alunos."</ul>";
})->name('aluno_matricula');

Route::post("aluno/add", function(Request $request){

    echo $request->turma;
});

