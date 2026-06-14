<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::latest()->get();

        return view(
            'pages.index',compact('pages')
        );
    }

    public function create()
    {
        return view(
            'pages.create'
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:pages,slug',
            'content' => 'nullable',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable|max:500',
            'status' => 'required|in:draft,published',
        ]);
    Page::create([
        'title' => $request->title,
        'slug' => $request->slug,
        'content' => $request->content,
        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description,
        'status' => $request->status,
    ]);

    return redirect()

        ->route('pages.index')
        ->with(
            'success',
            'Página creada correctamente.'
        );

    }

    public function edit(Page $page)
    {
        return view(
            'pages.edit',
            compact('page')
        );
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:pages,slug,' . $page->id,
            'content' => 'nullable',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable|max:500',
            'status' => 'required|in:draft,published',
        ]);

        $page->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('pages.index')
            ->with(
                'success',
                'Página actualizada correctamente.'
            );
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()
            ->route('pages.index')
            ->with(
                'success',
                'Página eliminada correctamente.'
            );
    }

}
