<?php

namespace App\Http\Controllers;

use App\Models\joblist;
use Illuminate\Http\Request;

class searchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if(isset($request->search_job))
        {
            $jobtitle=$request->search_job;
            $jobs=joblist::with(["employer", "tags"])
            ->where("title", "like", "%" . $jobtitle . "%")
            ->get();
            return view("result", [
                "jobs" => $jobs
            ]);
        }
        return redirect("/");
    }
}
