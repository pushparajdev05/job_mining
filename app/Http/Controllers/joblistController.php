<?php

namespace App\Http\Controllers;

use App\Mail\jobMail;
use App\Models\joblist;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class joblistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = joblist::with(["employer","tags"])->latest()->get();

        $tags = tag::all();

        return view("home",[
            "jobs" => $jobs,
            "tags" => $tags,
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

        self::validationAndAction($request,"create");
        return redirect("/");

    }

    /**
     * Display the specified resource.
     */
    public function show(joblist $job)
    {
        return view(
            "result",
            [
                "jobs" => [$job]
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(joblist $job)
    {

        return view("edit-job",
        [
            "job" => $job
        ]
    );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, joblist $job)
    {
        self::validationAndAction($request,"update", $job);

        return redirect("/");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(joblist $job)
    {
        $job->delete();

        return redirect("/");
    }

    public function validationAndAction(Request $request,$action, $job = null)
    {
       $attr = $request->validate([
            "title" => ["required"],
            "salary" => ["required"],
            "rating" => ["required"],
            "location" => ["required", Rule::in(['On-Site', 'Remote', 'Hybrid'])],
            "schedule" => ["required", Rule::in(['Full Time', 'Part Time', 'Day Shift', 'Evening Shift', 'Night Shift'])],
            "Address" => ["required"],
            "url" => ["required", "url"],
            "tags" => ["required"]
        ]);


        $tags = array_splice($attr, -1, 1);
        $tag_arr = explode(",",$tags["tags"]);
        if($action == "update")
        {
            $job->update($attr);
        }
        else
        {
            $employer_id = Auth::user()->employer->id;
            $job = joblist::create($attr + ["employer_id" => "$employer_id"]);

        }

        $tag_id = [];
        foreach($tag_arr as $tag)
        {
            $trimedTag = ["name" => trim($tag)];
            $tag_id[]=tag::firstOrCreate($trimedTag,$trimedTag)->id;

        }
        if($action == "update")
        {
            $job->tags()->sync($tag_id);

        }
        else
        {

        $job->tags()->syncWithoutDetaching($tag_id);
        Mail::to("rajubai0610@gmail.com")->send(new jobMail($job));
        }
    }

}
