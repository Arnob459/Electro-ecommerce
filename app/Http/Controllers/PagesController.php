<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Promotion;
use App\Models\Slider;



class PagesController extends Controller
{
    //

    public function index(){
        $promotions = Promotion::all();
        $sliders = Slider::all();

        return view('frontend.frontend',compact('promotions','sliders'));
    }

    public function Dashboard(){
        return view('admin.dashboard');
    }

    public function PromotionList(){
        $promotions = Promotion::all();
        return view ('admin.frontend.promotion.list',compact('promotions'));
    }

    public function PromotionCreate(){
        return view('admin.frontend.promotion.create');
    }

    public function PromotionStore(Request $request){

        $this->validate($request, [
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'link' => 'required|string|max:255',
        ]);
        $promotion = new Promotion;

        $image = $request->file('picture');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->picture->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;
        $promotion->picture = $img_url;

        // $pic_file = $request->file('picture');
        // Storage::putFile('public/img/', $pic_file);
        // $voucher->picture = "storage/img/".$pic_file->hashName();

        $promotion->link = $request->link;
        $promotion->save();

        return redirect()->route('promotion.list')->with('success','New Promotion Create Successfully');

    }

    public function PromotionEdit($id) {
        $promotion = Promotion::find($id);
        return view('admin.frontend.promotion.edit', compact('promotion'));
    }
    public function PromotionUpdate(Request $request, $id){

        $promotion = Promotion::find($id);

        $image = $request->file('picture');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->picture->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;

        $promotion->picture = $img_url;
        $promotion->link = $request->link;

        $promotion->save();

        return redirect()->route('promotion.list')->with('success','Promotion Information Updated Successfully');
    }
    public function PromotionDelete($id){
        $promotion = Promotion::find($id);
        $promotion ->delete();
        return redirect()->route('promotion.list')->with('success','Promotion Deleted Successfully');

    }

    //Slider

    public function SliderList(){
        $sliders = Slider::all();
        return view ('admin.frontend.slider.list',compact('sliders'));
    }

    public function SliderCreate(){
        return view('admin.frontend.slider.create');
    }

    public function SliderStore(Request $request){

        $this->validate($request, [
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $slider = new Slider;

        $image = $request->file('picture');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->picture->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;
        $slider->picture = $img_url;

        // $pic_file = $request->file('picture');
        // Storage::putFile('public/img/', $pic_file);
        // $voucher->picture = "storage/img/".$pic_file->hashName();

        $slider->save();

        return redirect()->route('slider.list')->with('success','New slider Create Successfully');

    }

    public function SliderEdit($id) {
        $slider = Slider::find($id);
        return view('admin.frontend.slider.edit', compact('slider'));
    }
    public function SliderUpdate(Request $request, $id){

        $slider = Slider::find($id);

        $image = $request->file('picture');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->picture->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;

        $slider->picture = $img_url;
        $slider->save();

        return redirect()->route('slider.list')->with('success','slider Information Updated Successfully');
    }
    public function SliderDelete($id){
        $slider = Slider::find($id);
        $slider ->delete();
        return redirect()->route('slider.list')->with('success','slider Deleted Successfully');

    }

            //About
            public function AboutView(){
                $main = Page::first();

                return view('admin.frontend.about.view',compact('main'));
            }

            public function AboutUpdate(Request $request){

                $this->validate($request, [
                    'welcome_text' => 'required|string|max:255',
                    'site_name' => 'required|string|max:2048'

                ]);

                $main = Page::first();
                $main->welcome_text = $request->welcome_text;
                $main->site_name = $request->site_name;

                if($request->file('logo')){
                    $img_file = $request->file('logo');
                    $img_file->storeAs('public/img/','logo.' . $img_file->getClientOriginalExtension());
                    $main->logo = 'storage/img/logo.' . $img_file->getClientOriginalExtension();
                }
                $main->save();
                return redirect()->route('about.view')->with('success', "About has been updated successfully");
            }




}
