<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\NewsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $news = NewsModel::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);
        $imgName = Uuid::uuid7()->toString() . '.' . $request->image->extension();
        $request->image->storeAs('news', $imgName, 'public');
        NewsModel::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imgName,
        ]);
        return redirect()->route('admin.news.index')->with('success', 'News item created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $news = NewsModel::findOrFail($id);
        if (!$news->is_active) {
            return redirect()->route('admin.news.index')->with('error', 'News item not found or inactive.');
        }
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $news = NewsModel::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);
        $news = NewsModel::findOrFail($id);
        $news->title = $request->title;
        $news->content = $request->content;
        if ($request->hasFile('image')) {
            if ($news->image && Storage::disk('public')->exists('news/' . $news->image)) {
                Storage::disk('public')->delete('news/' . $news->image);
            }
            
            $imgName = Uuid::uuid7()->toString() . '.' . $request->image->extension();
            $request->image->storeAs('news', $imgName, 'public');
            $news->image = $imgName;
        }
        $news->save();
        return redirect()->route('admin.news.index')->with('success', 'News item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $news = NewsModel::findOrFail($id);
        $news->is_active = false;
        $news->save();
        return redirect()->route('admin.news.index')->with('success', 'News item deleted successfully!');
    }
}
