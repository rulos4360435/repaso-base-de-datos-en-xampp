<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

Route::get('/test-simple', function () {
    return '¡Hola! La ruta funciona';
    $results = [];
    
    // Probar conexión PRINCIPAL (base_datos_1)
    try {
        DB::connection()->getPdo();
        $results['primary'] = [
            'status' => '✅ CONEXIÓN EXITOSA',
            'database' => DB::connection()->getDatabaseName(),
            'message' => 'Conexión principal (base_datos_1) funciona correctamente'
        ];
    } catch (\Exception $e) {
        $results['primary'] = [
            'status' => '❌ ERROR DE CONEXIÓN',
            'database' => env('DB_DATABASE'),
            'message' => $e->getMessage()
        ];
        
        // Log del error
        Log::error('Error conexión principal: ' . $e->getMessage());
    }

    // Probar conexión SECUNDARIA (base_datos_2)
    try {
        DB::connection('mysql_second')->getPdo();
        $results['secondary'] = [
            'status' => '✅ CONEXIÓN EXITOSA',
            'database' => DB::connection('mysql_second')->getDatabaseName(),
            'message' => 'Conexión secundaria (base_datos_2) funciona correctamente'
        ];
    } catch (\Exception $e) {
        $results['secondary'] = [
            'status' => '❌ ERROR DE CONEXIÓN',
            'database' => env('DB_SECOND_DATABASE'),
            'message' => $e->getMessage()
        ];
        
        // Log del error
        Log::error('Error conexión secundaria: ' . $e->getMessage());
    }

    // Devolver resultados en formato JSON
    return response()->json($results);
});
