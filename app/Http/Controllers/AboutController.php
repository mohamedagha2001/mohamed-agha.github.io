<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateAboutRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about=About::find(1);
        return view('admin.about.index', get_defined_vars());  
      }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        $data=$request->validated();
        if($request->hasFile('image'))
        {
            Storage::delete("public/about/$about->image");
            $image=$request->image;
            $NewImageName=time().'-'.$image->getClientOriginalName();
            $data['image']=$NewImageName;
            $image->StoreAS('about',$NewImageName,'public');
        }
        if($request->hasFile('hero_img'))
        {
            Storage::delete( "public/about/$about->hero_img");
            $hero_img=$request->hero_img;
            $NewHeroImageName=time().'-'.$hero_img->getClientOriginalName();
            $data['hero_img']=$NewHeroImageName;
            $hero_img->StoreAS('about',$NewHeroImageName,'public');
        }
        $about->update($data);
        return redirect('/admin/about')->with('success','Your Information Has Been Updated Successfully');
    }
}
