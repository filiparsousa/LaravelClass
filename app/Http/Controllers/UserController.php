<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(){
       return view('users.index', [
        'users'=>DB::table('users') ->orderBy('name')->paginate('10')
       ]
    );
    }

    // vamos criar uma função em que vamos criar uma view do user.edit e ele vai buscar no model o utilizador com aquele ID
    public function edit($id)
    {
        return view ('users.edit',['user'=>User::findOrFail($id)]);
    }

    // quando for editado e sumbetido, vai encontrar o id e atualiza-lo. Apos subsmeter, vai direcionar a pagina principal (index)
    public function update(Request $id)
    {
            
        User::findOrFail($id->id)->update($id->all());
        return redirect()->route('user.index');
             
     
    }

    public function delete($id)
    {
        User::destroy ($id);
        return redirect()->route('user.index');
    }
   
     

}
