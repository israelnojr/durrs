<?php

namespace DurrsConstructions\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DurrsConstructions\marketSection;
use DurrsConstructions\Http\Controllers\Controller;

class marketsectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketSection = marketSection::all();
        return view('backend.marketsection.index', compact('marketSection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.marketsection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, marketSection $marketSection)
    {
        $this->validate($request,[
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/marketsection'))
            {
                mkdir('uploads/marketsection', 0777 , true);
            }
            $image->move('uploads/marketsection', $imagename);
        }else {
            $imagename = 'default.png';
        }

        $marketsection = new marketSection();
        $marketsection->title = $request->title;
        $marketsection->desc = $request->desc;
        $marketsection->slug = $slug;
        $marketsection->image = $imagename;
        $marketsection->save();
        return redirect()->route('marketsection.index')->with('success', 'Market Section Succesfffully Added');
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
        $marketSection = marketSection::find($id);
        // dd($marketSection->id);
        return view('backend.marketsection.edit', compact('marketSection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $marketsection = marketSection::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/marketsection'))
            {
                unlink('uploads/marketsection'.$marketsection->image);
            }
            $image->move('uploads/marketsection', $imagename);
        }else {
            $imagename = 'default.png';
        }

        $marketsection->title = $request->title;
        $marketsection->desc = $request->desc;
        $marketsection->image = $imagename;
        $marketsection->save();
        return redirect()->route('marketsection.index')->with('success', 'Market Section Succesfffully Added');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marketsection = marketSection::find($id);
        if (file_exists('uploads/marketsection/'.$marketsection->image))
        {
            unlink('uploads/marketsection/'.$marketsection->image);
        }
        $marketsection->delete();
        return redirect()->back()->with('success','Market Section Succesfffully Deleted');
    }
}
