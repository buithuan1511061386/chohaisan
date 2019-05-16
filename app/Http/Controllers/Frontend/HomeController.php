<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

use App\Typeofnews;
use App\News;
use DateTime;
use DateInterval;
use DatePeriod;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$data = Region::all();
        return view('backend.region.region_list',compact('data'));*/
        $typeofnews= Typeofnews::all();
        return view('frontend.master.home',compact('typeofnews'));
    }
}
    /*public function about()
    {
        $typeofnews= Typeofnews::all();
        return view('frontend.home.about',compact('region','hospital','department','typeofnews'));
    }
    public function department()
    {
        $typeofnews= Typeofnews::all();
        return view('frontend.home.departments',compact('region','hospital','department','typeofnews'));
    }
       public function gallery()
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $typeofnews= Typeofnews::all();
        return view('frontend.home.gallery',compact('region','hospital','department','typeofnews'));
    }
    public function newlist(Request $request)
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $typeofnews = Typeofnews::all();
        $news = News::where('typeofnews_id',$request->id)->paginate(2);
        return view('frontend.home.newlist',compact('region','hospital','department','user','request','typeofnews','news'));
    }
    public function news()
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $typeofnews = Typeofnews::all();
        return view('frontend.home.news',compact('region','hospital','department','typeofnews'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function create()
    {
        return view('backend.region.addregion');
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 /*   public function regionlist(Request $request)
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $user = User::where('user_level_id',2)->where('region_id',$request->id)->paginate(2);
        $typeofnews= Typeofnews::all();
        return view('frontend.home.regionlist',compact('region','hospital','department','user','request', 'typeofnews'));
    }
        public function hospitallist(Request $request)
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $typeofnews= Typeofnews::all();
        $user = User::where('user_level_id',2)->where('hospital_id',$request->id)->paginate(2);

        return view('frontend.home.hospitallist',compact('region','hospital','department','user','request','typeofnews'));
    }
     public function departmentlist(Request $request)
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $typeofnews= Typeofnews::all();
        $user = User::where('user_level_id',2)->where('department_id',$request->id)->paginate(2);

        return view('frontend.home.departmentlist',compact('region','hospital','department','user','request','typeofnews'));
    }*/
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show($id)
    {
        //Lấy dữ kiện
        $data = User::find($id);
        $region = Region::all();
        $hospital = Hospital::all();
        $department = Department::all();
        $appointment = Appointment::where('doctor_id',$id)->get();
        $doctortime =Doctortime::where('user_id',$id)->get();
        $user = User::where('user_level_id',2)->get();
        $typeofnews= Typeofnews::all();
        //Lấy ngày giờ bác sĩ
        $array = array();
        foreach($doctortime as $item) {
            // $begin =new DateTime($item->time_start);
            $date = date('Y-m-d',strtotime("$item->date"));
            $begin = DateTime::createFromFormat('Y-m-d H:i:s', "$date $item->time_start");
            $end = DateTime::createFromFormat('Y-m-d H:i:s', "$date $item->time_end");
            $interval = DateInterval::createFromDateString('30 min');
            $timesDate = new DatePeriod($begin, $interval, $end);
            array_push($array,$timesDate);
        }
        $appointments = array();
        if($appointment != null){
            foreach($appointment as $day){
                $getDay = date('Y-m-d', strtotime("$day->date"));
                $datetime = date('Y-m-d H:i:s', strtotime("$getDay $day->time"));
                array_push($appointments,$datetime);
            }
        }
        $doctor = array();
        foreach($array as $timesDate){
            foreach($timesDate as $value){
                $item = $value->format('Y-m-d H:i:s');
                array_push($doctor,$item);
            }
        }
        $diff1 = array_diff($appointments,$doctor);
        $diff2 = array_diff($doctor,$appointments);
        $times = array_merge($diff1,$diff2);
        return view('frontend.home.doctordetail',compact('data','region','hospital','department','user','doctortime', 'typeofnews','times'));
    }
*/
   /* public function detail($id)
    {
        $data = News::find($id);
        $region = Region::all();
        $hospital = Hospital::all();
        $department = Department::all();
        $doctortime =Doctortime::where('user_id',$id)->get();
        $user = User::where('user_level_id',2)->get();
        $typeofnews= Typeofnews::all();
        return view('frontend.home.newsdetail',compact('data','region','hospital','department','user','doctortime', 'typeofnews'));
    }
*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function edit($id)
    {
        //Khong vao dc route nay
        // dd($id);
        $data = Region::find($id);
        //Để load khóa ngoại
        //Ví dụ
        //$data = Hospital::find($id);
        //$region = Region::where('id',$data->id_region)->get();
        //$data sẽ ra chi tiết bệnh viện đó, còn $region sẽ ra bệnh viện đó có miền gì
        //compact cả 2 return view('...',compact($data,$region));
        //khi do region bên view sẽ vào vòng lặp foreach in ra :D, nó sẽ load hết miền có id trùng với id_region của bệnh viện, có cả tên. có gì tui làm thử ùi tui hỏi ông. tks nhaok:D
        return view('backend.region.editregion',compact('data'));
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    // {
    //     // dd($request->all())
    //   $data = Region::find($id);
    //   $data->name = $request->get('name');
    //   $data->save();

    //   return redirect('admin/region');
    // }
    /*public function update_post(Request $req, $id)
    {
        // dd($req->all());
        $data = Region::find($id);
        $data->name = $req->name;
        $data->save();
        return redirect('admin/region')->with('status','Sửa thành công');
    }*/
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy($id)
    {
        $data = Region::find($id);
     $data->delete();

     return redirect('admin/region')->with('status','Xóa thành công');
    }*/

