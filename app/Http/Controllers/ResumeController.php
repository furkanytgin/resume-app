<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateResumeRequest;
use App\Http\Requests\UpdateResumeRequest;
use PDF;
class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->is_admin == '1'){
            $resumes = Resume::all();
        }
        else{
            $resumes = Resume::where('user_id', auth()->user()->id)->get();
        }

        return view('resumes.index', compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resumes.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateResumeRequest $request)
    {
        $title = $request->title;
        Resume::create([
            'title' => $title,
            'slug' => Str::slug($title),
            'user_id' => $request->user_id,
            'summary' => $request->summanry,
            'education' => $request->education,
            'skills' => $request->skills,
            'experience' => $request->experience,
            'interest' => $request->interest,
            'theme' => $request->theme,

        ]);

        return to_route('resumes.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {
        $theme = 'resumes.user-resumes.'. $resume->theme;
        return view( $theme , compact('resume'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resume $resume)
    {
        return view('resumes.edit' ,compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResumeRequest $request, Resume $resume)
    {



        $resume->title = $request->title;
        $resume->slug = Str::slug($request->title);
        $resume->summary = $request->summary;
        $resume->education = $request->education;
        $resume->skills = $request->skills;
        $resume->experience = $request->experience;
        $resume->interest = $request->interest;
        $resume->theme = $request->theme;
        $resume->save();

        return to_route('resumes.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        $resume->delete();
        return to_route('resumes.index');
    }

    public function downloadPDF(Request $request, $id)
{

    $resume = Resume::where('id', $id)->firstOrFail();
    $theme = 'resumes.user-resumes.'. $resume->theme;

    $pdf = PDF::loadView($theme, compact('resume'))->setOptions(['defaultFont' => 'sans-serif']);
    return $pdf->download($theme);
}

}
