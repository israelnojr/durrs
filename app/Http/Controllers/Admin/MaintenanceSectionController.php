<?php

namespace DurrsConstructions\Http\Controllers\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DurrsConstructions\Http\Controllers\Controller;
use DurrsConstructions\MaintenanceSection;
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
       $maintenanceSection = MaintenanceSection::all();
       return view('backend.maintenance.index', compact('maintenanceSection'));
   }

   public function create()
   {
       return view('backend.maintenance.create');
   }


   public function store(Request $request, MaintenanceSection $maintenanceSection)
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

        $maintenanceSection = new MaintenanceSection();
        $maintenanceSection->title = $request->title;
        $maintenanceSection->desc = $request->desc;
        $maintenanceSection->slug = $slug;
        $maintenanceSection->image = $imagename;
        $maintenanceSection->save();

        return redirect()->route('maintenancesection.index')->with('success', 'Maintenance Section Succesfffully Added');
   }

    public function edit($slug)
   {
    $maintenanceSection = MaintenanceSection::find($slug);
       return view('backend.maintenance.edit', compact('maintenanceSection'));
   }

   public function update(Request $request, $slug)
   {
       $this->validate($request,[
           'title' => 'required',
           'desc' => 'required',
           'image' => 'required|mimes:jpeg,jpg,bmp,png',
       ]);
       $maintenancesection = MaintenanceSection::find($slug);
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
        $maintenancesection = MaintenanceSection::find($id);
        if (file_exists('uploads/maintenancesection/'.$maintenancesection->image))
        {
            unlink('uploads/maintenancesection/'.$maintenancesection->image);
        }
        $maintenancesection->delete();
        return redirect()->back()->with('success','Maintenance Section Succesfffully Deleted');
    }
}
