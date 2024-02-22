<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function procesar(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email',
            'liga' => 'required',
            'equipoLocal' => 'required',
            'equipoVisitante' => 'required',
            'nivelApuesta' => 'required',
        ]);

        // Si la validación falla, Laravel automáticamente redirigirá de vuelta al formulario
        // y mostrará los errores de validación. No es necesario escribir código adicional para esto.

        // Si la validación pasa, puedes continuar con el procesamiento del formulario
        // y realizar cualquier acción necesaria con los datos.

        // Por ejemplo, puedes acceder a los datos del formulario así:
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $correo = $request->input('correo');
        $liga = $request->input('liga');
        $equipoLocal = $request->input('equipoLocal');
        $equipoVisitante = $request->input('equipoVisitante');
        $nivelApuesta = $request->input('nivelApuesta');

        // Realiza cualquier acción que necesites con los datos del formulario

        // Devuelve una respuesta adecuada, como una redirección
        return response()->json(['message' => 'Formulario enviado correctamente']);
    }
}
