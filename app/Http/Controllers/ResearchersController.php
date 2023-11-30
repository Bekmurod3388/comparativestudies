<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Researchers;

class ResearchersController extends Controller
{
    public function index(){
        return view('admin.researchers.index', [
            'researchers' => Researchers::all()
        ]);
    }
    public function create(){
        return view('admin.researchers.create');
    }
    public function update(){
        return view('admin.researchers.update');
    }
    
    public function destroy(Researchers $researcher) {
        $researcher->delete();
        return redirect('/dashboard/researchers')->with('message', 'Listing deleted successfully!');
    }
}
