<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Person;
Use Log;

class PersonController extends Controller
{
    // https://carbon.now.sh/
    public function getAll(){
      $data = Person::get();
      return response()->json($data, 200);
    }

    public function create(Request $request){
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln($request);
        die();
      $data['usuario'] = $request['usuario'];
      $data['nombres'] = $request['nombres'];
      $data['apellidos'] = $request['apellidos'];
      $data['tipo_identificacion'] = $request['tipo_identificacion'];
      $data['numero_identificacion'] = $request['numero_identificacion'];
      $data['fecha_nacimiento'] = $request['fecha_nacimiento'];
      $data['contraseña'] = $request['contraseña'];
      Person::create($data);
      return response()->json([
          'message' => "Successfully created",
          'success' => true
      ], 200);
    }

    public function delete($id){
      $res = Person::find($id)->delete();
      return response()->json([
          'message' => "Successfully deleted",
          'success' => true
      ], 200);
    }

    public function get($id){
      $data = Person::find($id);
      return response()->json($data, 200);
    }

    public function update(Request $request,$id){
        $data['usuario'] = $request['usuario'];
        $data['nombres'] = $request['nombres'];
        $data['apellidos'] = $request['apellidos'];
        $data['tipo_identificacion'] = $request['tipo_identificacion'];
        $data['numero_identificacion'] = $request['numero_identificacion'];
        $data['fecha_nacimiento'] = $request['fecha_nacimiento'];
        $data['contraseña'] = $request['contraseña'];
        Person::find($id)->update($data);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
        }
}
