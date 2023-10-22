<?php

use Illuminate\Support\Facades\Route;

// tem que dar 'use' em todos os controllers que for usar pro código
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreMadokaController;
use App\Http\Controllers\ParametrosController;
use App\Http\Controllers\CompreMadokaController;
use App\Http\Controllers\MegucaController;
use App\Http\Controllers\MedukaController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ContatoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// verbos HTTP

// só usou get aqui mas tem mais
// post (romelixo ensinou já quem diria)
// put
// patch
// delete
// option

// o uso do método é:
// Route::verbo($uri, $callback);
// $uri é a rota do deregue
// $callback é o método que vai ser usado quando rodar a função (ai entra na parada de controller e tudo mais)



Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre', [SobreMadokaController::class, 'sobre'])->name('site.sobre');
Route::get('/compre', [CompreMadokaController::class, 'compre'])->name('site.compre');
Route::get('/login', function () { return 'Login'; })->name('site.login');

// pode chamar exatamente o mesmo nome com exatamente o mesmo nome, porque Larafodasse
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::prefix('/app')->group(function() {
    // esse comando faz tipo um 'array' de rotas, todos sob o mesmo prefix
    //a função sempre vai ser de callback mesmo, e ela recebe as rotas que a gente quer usar

    Route::get('/meguca', [MegucaController::class, 'meguca'])->name('servico.meguca');
    Route::get('/meduka', [MedukaController::class, 'meduka'])->name('servico.meduka');
    Route::get('/produtos', [ProdutosController::class, 'soul'])->name('servico.produtos');
});


Route::get('/rota1', function () { echo 'Homuhomu kyuuun~~'; })->name('site.rota1');

Route::get('/rota2', function () {
    //quando for fazer por controller é assim, chama o método, depois puxa a rota pelo nome (tem que setar o nome)
    return redirect()->name('site.rota1');
})->name('site.rota2');

/*
outra forma:
Route::redirect('/rota2', '/rota1');
o redirect() recebe primeiro a rota que leva o redirect, e depois pra onde o usuário vai
*/

Route::fallback(function () {
    // aqui é a página do que seria o 404, de sempre, controller tudo, normalmente tem toda uma página e pá
    return 'não tem essa xereca, volta pro index aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<a href="'
    . route('site.index').'">qui</a>';
});


// espaço das coisas de verdade pra coisa whatever







































// mesmo se já tiver uma rota com um nome X, o fato dela pedir parâmetro já diferencia pro Larajhonson
Route::get('/teste/{nome}/{idade?}', [ParametrosController::class, 'parametro'])
->where('idade', '[0-9]+')->where('nome', '[a-zA-Z]+');
// expressão regular ebaaaaaaaaaaa >:(
// where é do Lara, primeiro parâmetro é o nome da entrada, segundo é a expressão
// se os where não baterem, a rota só não processa e fodasse



/* se fosse pra usar as rotas sem controllers teria que criar uma function dentro e tudo mais

Route::get('/', function () {
        return '<a href="https://www.youtube.com/watch?v=OrgpX-_bFqM" target="_blank">omg madoka hii</a>';
});

Route::get('/sobre-madoka', function () {
    return '<a href="https://madoka.fandom.com/wiki/Madoka_Magica_Wiki" target="_blank">omg madoka hii lemme read bout you</a>';
});

Route::get('/compre-madoka', function () {
    return '<a href="https://www.amazon.com.br/Puella-Magi-Madoka-Magica-Complete/dp/1975316274" target="_blank">omg madoka hii lemme buy ur manga</a>';
});

*/