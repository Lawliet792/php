<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\BahanStoreRequest;
use App\Http\Requests\BahanUpdateRequest;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Bahan::class);

        $search = $request->get('search', '');

        $bahans = Bahan::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.bahans.index', compact('bahans', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Bahan::class);

        return view('app.bahans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BahanStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Bahan::class);

        $validated = $request->validated();

        $bahan = Bahan::create($validated);

        return redirect()
            ->route('bahans.edit', $bahan)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Bahan $bahan): View
    {
        $this->authorize('view', $bahan);

        return view('app.bahans.show', compact('bahan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Bahan $bahan): View
    {
        $this->authorize('update', $bahan);

        return view('app.bahans.edit', compact('bahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        BahanUpdateRequest $request,
        Bahan $bahan
    ): RedirectResponse {
        $this->authorize('update', $bahan);

        $validated = $request->validated();

        $bahan->update($validated);

        return redirect()
            ->route('bahans.edit', $bahan)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Bahan $bahan): RedirectResponse
    {
        $this->authorize('delete', $bahan);

        $bahan->delete();

        return redirect()
            ->route('bahans.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
