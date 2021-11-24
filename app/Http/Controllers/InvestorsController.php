<?php

namespace App\Http\Controllers;
use App\Investors;
use Illuminate\Http\Request;

class InvestorsController extends Controller
{
        public function index(){
            $investors = Investors::orderByRaw('id')->get();
        return view('investors.index',['investors'=>$investors]);
    }
    public function create(){
        return view('investors.create');
    }
    public function store(Request $request){
        $this ->validate($request, [
            'name' => 'required',
            'address'=> 'required',
            'phone'=> 'required',
            'investment'=> 'required',
        ]);

        Investors::create( [
            'name' => $request['name'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'investment' => $request['investment'],
        ]);

        return redirect('/investors')->with('info', 'Added a new investor.');
        }
}