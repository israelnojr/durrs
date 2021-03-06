<?php

namespace DurrsConstructions\Http\Controllers;

use Illuminate\Http\Request;
use DurrsConstructions\feedback;
use DurrsConstructions\emailList;
use DurrsConstructions\quotation;
use DurrsConstructions\marketSection;
use DurrsConstructions\maintenanceSection;

class LandingPageController extends Controller
{
    public function landing()
    {
       if(marketSection::count() >= 3 ){
            $marketsection = marketSection::all()->random(3);

            $maintenancesection = maintenanceSection::all()->take(6);
            $maintenancesectionCount = maintenanceSection::count() > 0;
            $marketsectionCount = marketSection::count() > 2;
            return view('welcome', compact('maintenancesection','maintenancesectionCount','marketsectionCount','marketsection'));
        }

        if(MaintenanceSection::count() >= 0){
            $maintenancesection = maintenanceSection::all()->take(6);
            $maintenancesectionCount = maintenanceSection::count() > 0;
            $marketsectionCount = marketSection::count() > 2;
            return view('welcome', compact('maintenancesection','maintenancesectionCount','marketsectionCount'));
        }
        $marketsectionCount = marketSection::count() > 2;
        $maintenancesectionCount = maintenanceSection::count() > 0;
        return view('welcome', compact('maintenancesectionCount','marketsectionCount'));
    }

    public function Projects()
    {
        return view('projects');
    }

    public function About()
    {
        return view('about');
    }

    public function Service()
    {
        $marketsection = marketSection::all();
        return view('service', compact('marketsection'));
    }

    public function showService($slug)
    {
        $showMarketsection = marketSection::where('slug',$slug)->first();
        return view('show-service', compact('showMarketsection'));
    }

    public function showMaintenance($slug)
    {
        $maintenancesection = maintenanceSection::where('slug',$slug)->first();
        return view('show-maintenance', compact('maintenancesection'));
    }

    public function Contact()
    {
        return view('contact');
    }

    public function emailSubscribe(Request $request)
    {
        $this->validate($request,[
            'email' => 'required | email',
        ]);
        $email = new emailList();
        $email->email = $request->email;
        $email->save();
        return redirect()->back()->with('success', 'You\'ve Succesfffully Subscribed');
    }

    public function getQuotaion(Request $request)
    {
        $this->validate($request,[
            'service' => 'required',
            'phone' => 'required',
            'fullname' => 'required',
            'company' => 'required',
            'message' => 'required',
            'email' => 'required | email',
        ]);
        $quotaion = new quotation();
        $quotaion->service = $request->service;
        $quotaion->phone = $request->phone;
        $quotaion->fullname = $request->fullname;
        $quotaion->company = $request->company;
        $quotaion->email = $request->email;
        $quotaion->message = $request->message;
        $quotaion->save();
        return redirect()->back()->with('success', 'We\'ll get back to you');
    }

    public function getFeedback(Request $request)
    {
        $this->validate($request,[
            'fullname' => 'required',
            'company' => 'required',
            'message' => 'required',
        ]);
        $feedback = new feedback();
        $feedback->fullname = $request->fullname;
        $feedback->company = $request->company;
        $feedback->message = $request->message;
        $feedback->save();
        return redirect()->back()->with('success', 'Thanks For Yor Feedback');
    }   

    

}
