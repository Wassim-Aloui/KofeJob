<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{

    public function index()
    {
        $skills = Skill::all();
        $len = count($skills);
        return view('Admin.Skills.index', compact('skills', 'len'));
    }

    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(Request $request)
    {
        // Validate skill data
        $validatedData = $request->validate([
            'name' => 'required|string|unique:skills|min:3|max:50',
        ]);

        // Attempt to create the skill
        try {
            $skill = Skill::create($validatedData);
            return redirect()->route('admin.skills.index')->with('success', 'Skill created successfully.');
        } catch (\Exception $e) {
            // Handle any exceptions (e.g., database errors)
            return back()->withInput()->withErrors(['error' => 'Skill creation failed.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit(Skill $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $this->validate($request, [
            'name' => 'required|unique:skills,name,'.$skill->id.'|max:50|min:3',
        ]);

        $skill->update($request->all());

        return redirect()->route('admin.skills.index')
            ->with('success', 'Skill updated successfully');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

//        return redirect()->route('admin.skills.index')
//            ->with('success', 'Skill deleted successfully');
        $this->index();
    }
}
