<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Http\Requests\UpdateNoticeRequest;
use App\Http\Requests\StoreNoticeRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('notices.index', [
            'notices' => Notice::latest()->paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('notices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoticeRequest $request): RedirectResponse
    {
        Notice::create($request->validated());

        return redirect()->route('notices.index')
            ->withSuccess('New notice is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notice $notice): View
    {
        return view('notices.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notice $notice): View
    {
        return view('notices.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoticeRequest $request, Notice $notice): RedirectResponse
    {
        $notice->update($request->validated());

        return redirect()->back()
            ->withSuccess('Notice is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notice $notice): RedirectResponse
    {
        $notice->delete();

        return redirect()->route('notices.index')
            ->withSuccess('Notice is deleted successfully.');
    }
}
