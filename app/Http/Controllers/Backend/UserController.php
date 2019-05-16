<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if($id==1){
        $data = User::all();
        }
        elseif($id==2){
        $data = User::where('user_level_id',1)->get();
        }
         elseif($id==3){
        $data = User::where('user_level_id',2)->get();
        }
         elseif($id==4){
        $data = User::where('user_level_id',3)->get();
        }
        else
            "Không có nhé ^^";
        return view('backend.user.users_list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        if($id==1){
            return view('backend.user.addadmin');
        }
        elseif($id==2){
             $region = Region::all();
            $hospital = Hospital::all();
            $department = Department::all();
         return view('backend.user.adddoctor',compact('region','hospital','department'));
    }
    elseif($id==3){
        $region = Region::all();
            $hospital = Hospital::all();
            $department = Department::all();
         return view('backend.user.adduser',compact('region','hospital','department'));
    }
    else
        echo "không hợp lệ";
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->birthday = $request->birthday;
        /*$image = array();
        if($request->hasFile('image')) {
        foreach($request->image as $key=>$file) {
        $name = time() $key.'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/image/project/');
        $file->move($destinationPath, $name); $image[$key] = 'image/project/'.$name; // print_r($image[$key]);
        }
        $data->image = json_encode($image);
        }
        */
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/user/');
            $image->move ($destinationPath, $image_name);
            $data->image = 'images/user/'.$image_name;
        }
        $data->content = $request->content;
        $data->description = $request->description;
        $data->sex = $request->sex;
         $data->phone = $request->phone;
         $data->address = $request->address;
         $data->user_level_id = $request->user_level_id;
        $data->save();
         if($request->user_level_id==1)
        {
        return redirect('admin/user/2/list')->with('status','Thêm thành công');
        }
        elseif ($request->user_level_id==2)
        {
        return redirect('admin/user/3/list')->with('status','Thêm thành công');
        }
        elseif ($request->user_level_id==3)
        {
        return redirect('admin/user/4/list')->with('status','Thêm thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data = User::find($id);
        return view('backend.user.view_user',compact('data'));
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
        $data = User::find($id);
        //Để load khóa ngoại
        //Ví dụ
        //$data = Hospital::find($id);
        //$region = Region::where('id',$data->id_region)->get();
        //$data sẽ ra chi tiết bệnh viện đó, còn $region sẽ ra bệnh viện đó có miền gì
        //compact cả 2 return view('...',compact($data,$region));
        //khi do region bên view sẽ vào vòng lặp foreach in ra :D, nó sẽ load hết miền có id trùng với id_region của bệnh viện, có cả tên. có gì tui làm thử ùi tui hỏi ông. tks nhaok:D
        return view('backend.user.edituser',compact('data'));
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
        $data = User::find($id);
         $data->name = $req->name;
        $data->email = $req->email;
        $data->birthday = $req->birthday;
 if($req->hasFile('image'))
        {
            $image = $req->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/user/');
            $image->move ($destinationPath, $image_name);
            $data->image = 'images/user/'.$image_name;
        }
        $data->content = $req->content;
        $data->description = $req->description;
        $data->sex = $req->sex;
         $data->phone = $req->phone;
         $data->address = $req->address;
         $data->user_level_id = $req->user_level_id;
        $data->save();
        if($req->user_level_id==1)
        {
        return redirect('admin/user/2/list')->with('status','Sửa thành công');
        }
        elseif ($req->user_level_id==2)
        {
        return redirect('admin/user/3/list')->with('status','Sửa thành công');
        }
        elseif ($req->user_level_id==3)
        {
        return redirect('admin/user/4/list')->with('status','Sửa thành công');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
     $data->delete();
     return redirect('admin/user/1/list')->with('status','Xóa thành công');
    }
}
