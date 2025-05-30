<?php

namespace App\Http\Controllers;

use App\Models\joblist;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class joblistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = joblist::all();
        return view("home",[
            "jobs" => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("post-job");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            "title" => ["required"],
            "salary" => ["required"],
            "rating" => ["required"],
            "location" => ["required",Rule::in(['On-Site','Remote','Hybrid'])],
            "schedule" => ["required", Rule::in(['Full Time', 'Part Time', 'Day Shift', 'Evening Shift', 'Night Shift'])],
            "url" => ["required","url"],
            "tags" => ["required"]
        ]);
        $tags = array_splice($attr, -1, 1);

        $joblist = joblist::create($attr);

        // tags attach to joblist
        $tag_arr = explode($tags["tags"],",");
        $tag_id = [];
        foreach($tag_arr as $tag)
        {
            $trimedTag = ["name" => trim($tag)];
            $tag_id[]=tag::firstOrCreate($trimedTag,$trimedTag)["id"];
        }

        $joblist->tags()->attach($tag_id);


    }

    /**
     * Display the specified resource.
     */
    public function show(joblist $job)
    {
        return view(
            "result",
            [
                "job" => $job
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(joblist $joblist)
    {
        return view("edit-job");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, joblist $joblist)
    {
        $attr = $request->validate([
            "title" => ["required"],
            "salary" => ["required"],
            "rating" => ["required"],
            "location" => ["required",Rule::in(['On-Site','Remote','Hybrid'])],
            "schedule" => ["required", Rule::in(['Full Time', 'Part Time', 'Day Shift', 'Evening Shift', 'Night Shift'])],
            "url" => ["required","url"],
            "tags" => ["required"]
        ]);

        $tags = array_splice($attr, -1, 1);

        $joblist->update($attr);

        $tag_arr = explode($tags["tags"],",");
        $tag_id = [];
        foreach($tag_arr as $tag)
        {
            $trimedTag = ["name" => trim($tag)];
            $tag_id[]=tag::firstOrCreate($trimedTag,$trimedTag)["id"];
        }

        $joblist->tags()->sync($tag_id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(joblist $joblist)
    {
        
    }
}
