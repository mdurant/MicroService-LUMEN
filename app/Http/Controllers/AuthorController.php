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

      }
      /**
     * Mustra la Información de 1 author
     */
      public function show($author){

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
