<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index() {
        return view('article.index', [
            'articles' => Article::paginate(30),
        ]);
    }

    public function create() {
        $this->authorize('user', Article::class);

        return view('article.create');
    }

    public function store(Request $request) {
        $this->authorize('user', Article::class);

        $this->validate($request, [
            'title' => [ 'required' ],
            'category' => [ 'required' ],
            'story' => [ 'required' ],
            'photo' => [ 'required' ],
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->description = $request->story;

        if ($request->hasFile('photo')) { // must be true
            $image = $request->file('photo');
            $filename = time() . '-' . $image->getClientOriginalName();

            Storage::putFileAs('public/images/', $image, $filename);
            $article->image = 'public/images/'. $filename;
        }

        $article->user_id = Auth::id();
        $article->category_id = $request->category;
        $article->save();

        return redirect()->route('article.show', [ 'article' => $article->id ]);
    }

    public function show($id) {
        return view('article.show', [
            'article' => Article::findOrFail($id),
        ]);
    }

    public function edit($id) {
        return abort(404, "No Page");
    }

    public function update(Request $request, $id) {
        return abort(404, "No Page");
    }

    public function destroy($id) {
        $this->authorize('delete_article', Article::findOrFail($id));

        Article::destroy($id);
        return redirect()->route('user.dashboard');
    }
}
