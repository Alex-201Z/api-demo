<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use http\Env\Response;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    function liste(){
        return response()->json(Produit::all());
    }
    function detail($id){
        return Response() -> json(Produit::find($id));
    }
}
