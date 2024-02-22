<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LigaColombia;
use App\Models\LigaInglesa;
use Exception;

class EquipoController extends Controller
{
    public function obtenerEquipos(Request $request)
    {
        try {
            $liga = $request->input('liga');

            if ($liga === 'Liga BetPlay') {
                $equipos = LigaColombia::pluck('name');
            } elseif ($liga === 'Premier League') {
                $equipos = LigaInglesa::pluck('name');
            } else {
                $equipos = [];
            }

            return response()->json($equipos);
        } catch (Exception $e) {
            // Manejar la excepción
            return response()->json(['error' => 'Error al obtener equipos: ' . $e->getMessage()], 500);
        }
    }
}
