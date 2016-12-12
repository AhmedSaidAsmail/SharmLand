<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyModels\Admin\Basicsort;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
class BasicsortController extends Controller {
    public $_error = [];
    public function show() {
        $Bsorts = Basicsort::all();
        return view('Admin.Basicsort', ['Bsorts' => $Bsorts, 'activeMaincategory' => 1]);
    }
    public static function showone($id) {
        $Bsorts = Basicsort::find($id);
        return $Bsorts;
    }
    public function store(Request $request) {
        $this->validate($request, ['name'        => 'required',
            'title'       => 'required',
            'arrangement' => 'integer',
            'img'         => 'image']);
        $basicSort = $request->all();
        if ($request->hasFile('img')) {
            $file             = Input::file('img');
            $basicSort['img'] = self::uploadImg($file);
        }
        try {
            Basicsort::create($basicSort);
        }
        catch (\Exception $e) {
            $request->session()->flash('addStatus', "This Main Category is existed !!");
        }


        return redirect('admin/MainCategory');
    }
    public function update($id) {
        $MainCategory = Basicsort::find($id);
        return view('Admin.BasicsortUpdate', ['basicSort' => $MainCategory]);
    }
    public function edit($id, Request $request) {
        $this->validate($request, ['name'        => 'required',
            'title'       => 'required',
            'arrangement' => 'integer',
            'img'         => 'image']);
        $Basicsort    = $request->all();
        $Maincategory = Basicsort::find($id);
        if ($request->hasFile('img')) {
            $file             = Input::file('img');
            $Basicsort['img'] = self::uploadImg($file);
        }
        $Maincategory->update($Basicsort);
        return redirect('admin/MainCategory');
    }
    public function delete($id) {
        $MainCategory = Basicsort::find($id);
        $MainCategory->delete();
        Session::flash('deleteStatus', "Main Category No: {$id} is Deleted !!");
        return redirect('admin/MainCategory');
    }
    private static function uploadImg($file) {

        $filename = md5(uniqid(mt_rand())) . "." . $file->getClientOriginalExtension();
        $path     = public_path() . "/images/basicsorts/thumb/" . $filename;
        $thumb    = Image::make($file->getRealPath())->resize(200, null, function ($ratio) {
            $ratio->aspectRatio();
        });
        $thumb->save($path);
        $file->move(public_path() . "/images/basicsorts/", $filename);
        return $filename;
    }
}