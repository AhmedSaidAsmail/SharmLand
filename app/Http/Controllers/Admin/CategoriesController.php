<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyModels\Admin\Sort;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Admin\UploadImageController;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $Categories = Sort::all();
        return view('Admin.Sort', ['Categories' => $Categories, 'activeCategory' => 1]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, ['name'         => 'required',
            'basicsort_id' => 'required',
            'title'        => 'required',
            'arrangement'  => 'integer',
            'img'          => 'image']);
        $sort = $request->all();
        if ($request->hasFile('img')) {
            $file        = Input::file('img');
            $sort['img'] = UploadImageController::Upload($file, "/images/sorts/", 250);
        }
        try {
            Sort::create($sort);
        } catch (\Exception $e) {
            $request->session()->flash('addStatus', $e->getMessage());
        }


        return redirect(route('Category.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $Category = Sort::find($id);
        return view('Admin.SortUpdate', ['Sort' => $Category, 'activeCategory' => 1]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, ['name'          => 'required',
            'main_category' => 'required',
            'title'         => 'required',
            'arrangement'   => 'integer',
            'img'           => 'image']);
        $Sort     = $request->all();
        $category = Sort::find($id);
        if ($request->hasFile('img')) {
            $file        = Input::file('img');
            $Sort['img'] = UploadImageController::Upload($file, "/images/sorts/", 250);
        }
        $category->update($Sort);
        return redirect(route('Category.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $Category = Sort::find($id);
        try {
            (!is_null($Category)) ? $Category->delete() : "";
            Session::flash('deleteStatus', "Category No: {$id} is Deleted !!");
        } catch (\Exception $e) {
            Session::flash('deleteStatus', $e->getMessage());
        }
        return redirect(route('Category.index'));
    }

}