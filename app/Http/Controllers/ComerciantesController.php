<?php
namespace App\Http\Controllers;

use App\Comerciante;
use Illuminate\Http\Request;

class comerciantesController extends Controller
{
    public function index(Request $request)
    {        
        $comerciantes = Comerciante::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');
        $request->session()->remove('mensagem'); 

        return view('comerciantes.index', compact('comerciantes', 'mensagem'));

        
    } //fim da função index

    public function view(Request $request)
    {        
        $comerciantes = Comerciante::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');
        $request->session()->remove('mensagem'); 

        return view('comerciantes.view', compact('comerciantes', 'mensagem'));

        
    } //fim da classe view


    public function create()
    {
        return view('comerciantes.create');
    }


    public function store(Request $request)
    {
        
        $nomeImagem = time().'.'.$request->nome_img->getClientOriginalExtension();
        $request->nome_img->move(public_path('/img'), $nomeImagem);
        
        $nome = $request->nome;
        $descCom = $request->desc_com;
        $comerciante = Comerciante::create(['nome' =>$nome,
         'desc_com' => $descCom,
         'nome_img' => $nomeImagem]);
        $request->session()->flash('mensagem', "Comerciante {$comerciante->nome} cadastrado com sucesso");
        

        return redirect('/');
    }

    public function destroy(Request $request)
    {
         
        Comerciante::destroy($request->id); 
        
        $request->session()->flash('mensagem', "O Comerciante $request->nome foi removido");

        return redirect('/');
    }
} 