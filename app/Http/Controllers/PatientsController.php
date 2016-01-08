<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Patient;

class PatientsController extends Controller
{
    public function index() {
        $patients = Patient::all();
        return $patients;
    }
}
