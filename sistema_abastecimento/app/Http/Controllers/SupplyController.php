<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Suplly;
use App\Models\User;
use App\Models\Car;

class SupplyController extends Controller
{
    /**
     * Função que manda a lista de abastecimento e usuários para index
     */
    public function index(){

        //requisitando a busca no welcome
        $search = request('search');

        //verificando se existe algum abastecimento com os parametros da busca
        if ($search) {
            $supllys = Suplly::where(['dt_supply', '=' , $search])->get();
        }else{
            $supllys = Suplly::all();
        }

        
        $users = User::all();
        
        //Retornando a view com a exibição de abastecimentos, usuários e a busca
        return view('welcome',['supllys' => $supllys, 'search' => $search],['users' => $users]);
    }

    /**
     * Função que retorna a view de formulário e passa as chaves estrangeiras
     */
    public function create($id_user){

        $users = User::where('id', $id_user)->get()->toArray();
        $cars = Car::where('id_user', $id_user)->get()->toArray();
        
        /* DEBUG
        echo "<pre>";
            var_dump($cars);
        echo "</pre>";
        */
        return view('suplly.create',['users' => $users],['cars' => $cars]);
    }

    /**
     * Função que salva os dados no banco de dados
     */
    public function store(Request $request)
    {   
        //Instanciando para pegar os dados
        $suplly = new Suplly;

        //Pegando os dados do formulario por meio do request
        $suplly->value = $request->value;
        $suplly->km_atually = $request->km_atually;
        $suplly->qtd_liters = $request->qtd_liters;
        $suplly->value_per_liters = $request->value_per_liters;
        $suplly->latitude = $request->latitude;
        $suplly->longitude = $request->longitude;
        $suplly->id_user = $request->id_user;
        $suplly->id_car = $request->id_car;

        //Salvando os dados no banco
        $suplly->save();

        //Retornando para o index com flash message
        return redirect('/')->with('msg','Evento criado com sucesso');
        


    }

}
