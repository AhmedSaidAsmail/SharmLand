<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyModels\Admin\Basicsort;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Admin\UploadImageController;

class MainCategoriesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $Bsorts = Basicsort::all();
        return view('Admin.Basicsort', ['Bsorts' => $Bsorts, 'activeMaincategory' => 1]);
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
        $this->validate($request, ['name'        => 'required',
            'title'       => 'required',
            'arrangement' => 'integer',
            'img'         => 'image']);
        $basicSort = $request->all();
        if ($request->hasFile('img')) {
            $file             = Input::file('img');
            $basicSort['img'] = UploadImageController::Upload($file, "/images/basicsorts/", 250);
        }
        try {
            Basicsort::create($basicSort);
        } catch (\Exception $e) {
            $request->session()->flash('addStatus', $e->getMessage());
            $request->session()->flash('addMessage', "This Main Category is existed !!");
        }


        return redirect('admin/MainCategory');
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
        $MainCategory = Basicsort::find($id);
        return view('Admin.BasicsortUpdate', ['basicSort' => $MainCategory]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $this->validate($request, ['name'        => 'required',
            'title'       => 'required',
            'arrangement' => 'integer',
            'img'         => 'image']);
        $Basicsort    = $request->all();
        $Maincategory = Basicsort::find($id);
        if ($request->hasFile('img')) {
            $file             = Input::file('img');
            $Basicsort['img'] = UploadImageController::Upload($file, "/images/basicsorts/", 250);
        }
        $Maincategory->update($Basicsort);
        return redirect(route('MainCategory.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $MainCategory = Basicsort::find($id);
        $MainCategory->delete();
        Session::flash('deleteStatus', "Main Category No: {$id} is Deleted !!");
        return redirect(route('MainCategory.index'));
    }

}