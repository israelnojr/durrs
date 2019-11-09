<?php

namespace DurrsConstructions\Http\Controllers\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DurrsConstructions\Http\Controllers\Controller;
use DurrsConstructions\maintenanceSection;
class MaintenanceSectionController extends Controller
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
       $maintenanceSection = maintenanceSection::all();
       return view('backend.maintenance.index', compact('maintenanceSection'));
   }

   public function create()
   {
       return view('backend.maintenance.create');
   }


   public function store(Request $request, maintenanceSection $maintenanceSection)
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
            if (!file_exists('uploads/maintenancesection'))
            {
                mkdir('uploads/maintenancesection', 0777 , true);
            }
            $image->move('uploads/maintenancesection', $imagename);
        }else {
            $imagename = 'default.png';
        }

        $maintenanceSection = new maintenanceSection();
        $maintenanceSection->title = $request->title;
        $maintenanceSection->desc = $request->desc;
        $maintenanceSection->slug = $slug;
        $maintenanceSection->image = $imagename;
        $maintenanceSection->save();

        return redirect()->route('maintenancesection.index')->with('success', 'Maintenance Section Succesfffully Added');
   }

    public function edit($slug)
   {
    $maintenanceSection = maintenanceSection::find($slug);
       return view('backend.maintenance.edit', compact('maintenanceSection'));
   }

   public function update(Request $request, $slug)
   {
       $this->validate($request,[
           'title' => 'required',
           'desc' => 'required',
           'image' => 'required|mimes:jpeg,jpg,bmp,png',
       ]);
       $maintenancesection = maintenanceSection::find($slug);
       $image = $request->file('image');
       $slug = str_slug($request->title);
       if (isset($image))
       {
           $currentDate = Carbon::now()->toDateString();
           $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
           if (!file_exists('uploads/maintenancesection'))
           {
               unlink('uploads/maintenancesection'.$maintenancesection->image);
           }
           $image->move('uploads/maintenancesection', $imagename);
       }else {
           $imagename = 'default.png';
       }

       $maintenancesection->title = $request->title;
       $maintenancesection->desc = $request->desc;
       $maintenancesection->image = $imagename;
       $maintenancesection->icon = $request->icon;
       $maintenancesection->save();
       return redirect()->route('maintenancesection.index')->with('success', 'maintenance Section Succesfffully updated');
   }

   public function destroy($id)
    {
        $maintenancesection = maintenanceSection::find($id);
        if (file_exists('uploads/maintenancesection/'.$maintenancesection->image))
        {
            unlink('uploads/maintenancesection/'.$maintenancesection->image);
        }
        $maintenancesection->delete();
        return redirect()->back()->with('success','Maintenance Section Succesfffully Deleted');
    }
}
