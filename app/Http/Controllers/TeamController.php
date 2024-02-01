<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function viewTeam(Request $request){

        $teams = Team::all();


        return view('admin',compact('teams'));
        

    }
    public function createTeam(Request $request){

        Team::create([

              'name' => $request -> name,
        ]);

    }
    public function updateTeam(Request $request, $id){

        Book::findOrFail($id)->update([

            'name' => $request-> name,

        ]);

        return redirect('/admin');

    }
    public function deleteTeam($id){

        Team::destroy($id);
    
    
    
        return redirect('/admin');
    
      }
      public function searchByName(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Perform the search
        $name = $request->input('name');
        $teams = Team::where('name', 'like', "%$name%")->get();

        // Return the search results
        return response()->json(['teams' => $teams]);
    }
    public function sortBy(Request $request)
    {
        // Validate the request
        $request->validate([
            'order' => 'required|in:asc,desc',
        ]);

        // Retrieve the teams and sort them accordingly
        $order = $request->input('order');
        $teams = Team::orderBy('name', $order)->get();

        // Return the sorted teams
        return response()->json(['teams' => $teams]);
    }
}
