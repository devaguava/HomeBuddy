<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Quote;
use App\Models\Service;
use App\Models\Worker;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'about'=>About::first(),
            'service'=>Service::get(),
            'contact'=>Contact::first(),
            'worker'=>Worker::get()
        ];
        return view('user_view.index');
    }

    public function about(){
        $about = About::first();
        // $about->foto = 'http://127.0.0.1:8000' . Storage::url('public/foto/') . $about->foto;
        $data = [
            'service'=>Service::get(),
            'contact'=>Contact::first(),
            'worker'=>Worker::get()
        ];
        return view('user_view.about', $data, compact('about'));
    }

    public function contact(){
        $contact = Contact::first();
        return view('user_view.contact', compact('contact'));
    }

    public function worker(){
        $worker = Worker::get();
        // $worker->foto = 'http://127.0.0.1:8000' . Storage::url('public/foto/') . $worker->foto;
        return view('user_view.worker', compact('worker'));
    }

    public function quote(){
        $quote = Quote::get();
        // $worker->foto = 'http://127.0.0.1:8000' . Storage::url('public/foto/') . $worker->foto;
        return view('user_view.quote', compact('quote'));
    }

    public function service(){
        $service = Service::get();
        // $service->foto = 'http://127.0.0.1:8000' . Storage::url('public/foto/') . $service->foto;
        return view('user_view.service', compact('service'));
    }

    public function serviceRefinement(){
        $service = Service::get();
        // $service->foto = 'http://127.0.0.1:8000' . Storage::url('public/foto/') . $service->foto;
        return view('user_view.service-refinement');
    }

    public function serviceCleaning(){
        $service = Service::get();
        // $service->foto = 'http://127.0.0.1:8000' . Storage::url('public/foto/') . $service->foto;
        return view('user_view.service-cleaning');
    }

    public function serviceTransport(){
        $service = Service::get();
        // $service->foto = 'http://127.0.0.1:8000' . Storage::url('public/foto/') . $service->foto;
        return view('user_view.service-transport');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
