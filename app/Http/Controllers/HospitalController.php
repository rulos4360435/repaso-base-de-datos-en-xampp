<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalControlador extends Controller
{
    public function example()
    {
        Hospital::create([
            'sede' => 'norte',
            'ciudad' => 'cali'
        ]);

        return Hospital::all();
    }
}
