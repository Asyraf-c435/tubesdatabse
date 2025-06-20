<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::with(['user', 'reportable'])
            ->latest()
            ->get();
            
        return view('reports.index', compact('reports'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'reportable_type' => 'required|string',
            'reportable_id' => 'required|integer'
        ]);

        $allowedTypes = ['App\Models\Course', 'App\Models\Lesson', 'App\Models\Comment', 'App\Models\User'];
        $type = $request->query('reportable_type');
        $id = $request->query('reportable_id');
        
        if (!in_array($type, $allowedTypes)) {
            abort(400, 'Invalid report type');
        }

        $reportable = $type::findOrFail($id);
        return view('reports.create', compact('reportable'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string|max:2000',
            'reportable_type' => 'required|string',
            'reportable_id' => 'required|integer'
        ]);

        $allowedTypes = ['App\Models\Course', 'App\Models\Lesson', 'App\Models\Comment', 'App\Models\User'];
        $type = $validated['reportable_type'];
        $id = $validated['reportable_id'];
        
        if (!in_array($type, $allowedTypes)) {
            abort(400, 'Invalid report type');
        }

        $reportable = $type::findOrFail($id);

        Report::create([
            'user_id' => Auth::id(),
            'content' => $validated['content'],
            'reportable_type' => $type,
            'reportable_id' => $id,
            'state' => 0
        ]);

        return back()->with('success', 'Report submitted!');
    }

    public function updateState(Request $request, $id)
    {
        $report = Report::findOrFail($id);
        
        $validated = $request->validate([
            'state' => 'required|integer|between:-1,1'
        ]);

        $report->update(['state' => $validated['state']]);

        return back()->with('success', 'Report state updated!');
    }
}