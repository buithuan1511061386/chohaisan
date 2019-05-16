<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view('backend.category.category_list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Category;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->content = $request->content;
        $data->save();
         return redirect('admin/category')->with('status','Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Khong vao dc route nay
        // dd($id);
        $data = Category::find($id);
        //Để load khóa ngoại
        //Ví dụ
        //$data = Hospital::find($id);
        //$region = Region::where('id',$data->id_region)->get();
        //$data sẽ ra chi tiết bệnh viện đó, còn $region sẽ ra bệnh viện đó có miền gì
        //compact cả 2 return view('...',compact($data,$region));
        //khi do region bên view sẽ vào vòng lặp foreach in ra :D, nó sẽ load hết miền có id trùng với id_region của bệnh viện, có cả tên. có gì tui làm thử ùi tui hỏi ông. tks nhaok:D
        return view('backend.category.editcategory',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     // dd($request->all())
    //   $data = Region::find($id);
    //   $data->name = $request->get('name');
    //   $data->save();

    //   return redirect('admin/region');
    // }
    public function update_post(Request $req, $id)
    {
        // dd($req->all());
        $data = Category::find($id);
        $data->name = $req->name;
        $data->description = $req->description;
        $data->content = $req->content;
        $data->save();
        return redirect('admin/category')->with('status','Sửa thành công');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::find($id);
     $data->delete();

     return redirect('admin/category')->with('status','Xóa thành công');
    }
}
