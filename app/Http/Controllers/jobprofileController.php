<?php

namespace App\Http\Controllers;

use App\Models\joblist;
use Illuminate\Http\Request;

class jobprofileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $job)
    {
        $job_=joblist::with(["employer", "tags"])->find($job);
        return view("job-profile",[
            "job" => $job_
        ]);
    }
}
