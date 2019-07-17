<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tour;
use App\TourHour;
use App\TourDay;
use App\FotoTravel;
use App\TravelKategori;
use App\UserAgent;
use Validator;
use Auth;

class GuestController extends Controller
{

    public function index(){
        if (Auth::check()) {
            if (Auth::user()->email_verified_at == "") {
                return redirect('home');
            }
        }
        $cat = TravelKategori::all();
        return view('index',compact('cat'));
    }


    public function formPassword(){
        return view('auth.passwords.setPassword');
    }

    public function updatePassword(Request $request)
    {   
        $validator = Validator::make($request->all(), [   
           'password' => 'required|min:6|confirmed',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/');
    }

    public function pageTour($id){
        $data = Tour::find($id);
        $foto = FotoTravel::select('*')->where('id_tour','=',$id)->get();
        $userAgent = UserAgent::find($data->id_agen);
        $days = TourDay::select('*')->where('id_tour', '=', $data->id_tour)->get();
        $hours = TourHour::select('*')->where('id_tour', '=', $data->id_tour)->get();
        return view('pages.detail_tour',compact('data','foto','userAgent','days','hours'));
    }

    public function tour(){
        $data = Tour::select('*')
                ->get();
                
        return view('pages.tour',compact('data'));
    }

    public function book(Request $request){
        $id = $request->id_tour;
        $orang = $request->orang;
        $data = Tour::find($id);
        $foto = FotoTravel::select('*')->where('id_tour','=',$id)->get();
        $userAgent = UserAgent::find($data->id_agen);
        $days = TourDay::select('*')->where('id_tour', '=', $data->id_tour)->get();
        $hours = TourHour::select('*')->where('id_tour', '=', $data->id_tour)->get();

        $total = $orang * $data->biaya;
        return view('pages.book',compact('orang','data','foto','userAgent','days','hours','total'));
    }
}
