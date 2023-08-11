<?php

namespace App\Http\Controllers;

use App\Models\Units;
use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function showUnits(Semester $semester){
        $units = $semester->unitlist;

        return view('semesters.units', compact('semester', 'units'));


    }
    public function viewUnits($semester_slug){
        $semester = Semester::where('slug', $semester_slug)->first();

        if($semester){
            $units = Units::where('semester_id', $semester->id)->get();
            return view('pastpapers', compact ('semester', 'units'));
        }
        else{
            return redirect ('/');
        }
       

    }
    
}
