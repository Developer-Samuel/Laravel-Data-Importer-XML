<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\XmlService;

class DataController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function import()
    {
        try {
            XmlService::import();
            return back()->with('success', 'Data was added successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to update user data. Please check the XML file format or try again later.']);
        }
    }
}
