<?php


namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function create()
    {
        $pages = Page::with('contentBlocks')->get();
        return view('admin.pages.create', compact('pages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text_content' => 'nullable|string',
            'image_content' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $page = new Page();
        $page->title = $request->title;
        $page->slug = Str::slug($request->title);
        $page->save();

        if ($request->text_content) {
            $page->addContentBlock('text', $request->text_content);
        }

        if ($request->hasFile('image_content')) {
            $image = $request->file('image_content');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads/images'), $imageName);
            $page->addContentBlock('image', 'uploads/images/' . $imageName);
        }

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }

    public function index()
    {
        $pages = Page::with('contentBlocks')->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function destroy($id)
    {
        $page = Page::with('contentBlocks')->findOrFail($id);

        foreach ($page->contentBlocks as $block) {
            $page->removeContentBlock($block->id);
        }

        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Page deleted successfully.');
    }

}

