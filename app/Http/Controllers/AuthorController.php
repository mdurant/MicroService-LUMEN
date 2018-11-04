<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
  use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    //metodos para lister todos, listar autor, crear, editar, eliminar

    /**
     * Retorna la lista de autores
     */
      public function index(){

        $authors = Author::all();

        return $this->successResponse($authors);
      }
      /**
     * Crea la Instancia de autores
     */
      public function store(Request $request){

          $rules =[
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255',
          ];
          $this->validate($request, $rules);

          $author = Author::create($request->all());

          return $this->successResponse($author, Response::HTTP_CREATED);
      }
      /**
     * Mustra la Información de 1 author
     */
      public function show($author){

        $author = Author::findOrFail($author);//Si no encuentra, retorna una excepción model find excepcion

        return $this->successResponse($author);


      }
      /**
     * Actualizar autores
     */
      public function update(Request $request, $author){

      }
    /**
     * Elimina autores
     */
      public function destroy($author){

      }

    //
}
