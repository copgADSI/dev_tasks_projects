<?php

namespace App\Http\Controllers;

use App\Models\Evidence;
use Illuminate\Http\Request;

/**
 * Class EvidenceController
 * @package App\Http\Controllers
 */
class EvidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evidence = Evidence::paginate();

        return view('evidence.index', compact('evidence'))
            ->with('i', (request()->input('page', 1) - 1) * $evidence->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evidence = new Evidence();
        return view('evidence.create', compact('evidence'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Evidence::$rules);

        $evidence = Evidence::create($request->all());

        return redirect()->route('evidence.index')
            ->with('success', 'Evidence created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evidence = Evidence::find($id);

        return view('evidence.show', compact('evidence'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evidence = Evidence::find($id);

        return view('evidence.edit', compact('evidence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Evidence $evidence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evidence $evidence)
    {
        request()->validate(Evidence::$rules);

        $evidence->update($request->all());

        return redirect()->route('evidence.index')
            ->with('success', 'Evidence updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $evidence = Evidence::find($id)->delete();

        return redirect()->route('evidence.index')
            ->with('success', 'Evidence deleted successfully');
    }
}
