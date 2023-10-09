<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ruta;
use Illuminate\Support\Str;
use Image;

class RutaController extends Controller
{
    public function index(){
		$rutas = Ruta::all();
		return view("admin.ruta.index",compact("rutas"));
	}
	public function create(){
		return view ('admin.ruta.create');
	}

	public function store(Request $request){
		$ruta = new Ruta ($request->all());
		if($request->hasFile('urlfoto')){

			$imagen = $request->file('urlfoto');
			$nuevonombre = 'ruta_'.time().'.'.$imagen->guessExtension();
			Image::make($imagen->getRealPath())
			->fit(900,400,function($constraint){ $constraint->upsize(); })
			->save( public_path('/img/ruta/'.$nuevonombre));

			$ruta->urlfoto = $nuevonombre;
		}
		$ruta->slug  = Str::slug($request->nombre);
		$ruta->save();
		return redirect('/admin/ruta');

	}
}
