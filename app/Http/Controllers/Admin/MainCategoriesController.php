<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyModels\Admin\Basicsort;
use App\Http\Controllers\Admin\CategoriesController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Admin\UploadImageController;

class MainCategoriesController extends Controller {

    protected $_instance;
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
            UploadImageController::removeImg();
            $request->session()->flash('errorDetails', $e->getMessage());
            $request->session()->flash('errorMsg', "Oops something went wrong !!");
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
        $path         = "/images/basicsorts/";
        $exImg        = $Maincategory->img;
        if ($request->hasFile('img')) {
            $file             = Input::file('img');
            $Basicsort['img'] = UploadImageController::Upload($file, $path, 250);
        }
        try {
            $Maincategory->update($Basicsort);
            (isset($exImg)) ? UploadImageController::removeExImg($exImg, $path) : '';
        } catch (\Exception $e) {
            UploadImageController::removeImg();
            $request->session()->flash('errorDetails', $e->getMessage());
            $request->session()->flash('errorMsg', "Oops something went wrong !!");
        }

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
        $path         = "/images/basicsorts/";
        $exImg        = $MainCategory->img;
        // to dlete all sub Categories and it's Items
        foreach ($MainCategory->sorts as $category) {
            if (is_null($this->_instance)) {
                $this->_instance = new CategoriesController();
            }
            $this->_instance->destroy($category->id);
        }
        $MainCategory->delete();
        (isset($exImg)) ? UploadImageController::removeExImg($exImg, $path) : '';
        Session::flash('deleteStatus', "Main Category No: {$id} is Deleted !!");
        return redirect(route('MainCategory.index'));
    }

}