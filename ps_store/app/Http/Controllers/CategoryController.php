<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Alert;

class CategoryController extends Controller
{
	public function index() {
		$categorys = Category::where('parent_id',null)->get();
	    return view('admin.category.index',compact('categorys'));
	}

	// input category
	public function store(Request $request) {
		$category = new Category;
		$category->slug = $request->slug;
		$category->name = $request->name;
		$category->parent_id = $request->parent_id;
		$category->icon = $request->icon;
		$category->save();
		Alert::success('Success Message', 'Data berhasil ditambah');
		return redirect('admin/category');
	}

	// edit category
	public function edit(Request $request,$id) {
		$category = Category::find($id);
		$categorys = Category::where('parent_id',null)->get();
		return view('admin.category.edit', compact('category','categorys'));
	}

	public function update(Request $request,$id) {
		$category = Category::find($id);
		$category->slug = $request->slug;
		$category->name = $request->name;
		$category->parent_id = $request->parent_id;
		$category->icon = $request->icon;
		$category->save();
		Alert::success('Success Message', 'Data berhasil diperbaharui');
		return redirect(route('category.index'));
	}

	public function destroy($id) {
		$category = Category::find($id);
		$category->delete();
		Alert::success('Success Message', 'Data berhasil dihapus');
		return redirect(route('category.index'));
	}
}