<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return abort(404, "No Page");
    }

    public function create() {
        return abort(404, "No Page");
    }

    public function store(Request $request) {
        return abort(404, "No Page");
    }

    public function show($id) {
        return view('article.index', [
            'articles' => Category::findOrFail($id)->articles()->paginate(30),
        ]);
    }

    public function edit($id) {
        return abort(404, "No Page");
    }

    public function update(Request $request, $id) {
        return abort(404, "No Page");
    }

    public function destroy($id) {
        return abort(404, "No Page");
    }
}
