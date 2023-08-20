<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Promotion;
use App\Models\Slider;
use App\Models\Link;
use Illuminate\Support\Facades\Storage;
use Image;




class PagesController extends Controller
{
    //

    public function index(){
        $main = Page::first();
        $promotions = Promotion::all();
        $sliders = Slider::all();
        $links = Link::all();


        return view('frontend.frontend',compact('promotions','sliders','links','main'));
    }

    public function productDetails(){
        $main = Page::first();
        $promotions = Promotion::all();
        $sliders = Slider::all();
        $links = Link::all();
        return view('frontend.product_details',compact('promotions','sliders','links','main'));
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

        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $filename = time() . '_' . $image->getClientOriginalExtension();
            $imagePath = public_path( $filename);

            // Resize the image
            Image::make($image)->resize(500, 266)->save($imagePath);

            $promotion->picture =  $filename;
        }

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

        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $filename = time() . '_' . $image->getClientOriginalExtension();
            $imagePath = public_path( $filename);

            // Resize the image
            Image::make($image)->resize(500, 266)->save($imagePath);

            $promotion->picture =  $filename;
        }
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

        if ($request->hasFile('picture')) {
        $image = $request->file('picture');
        $filename = time() . '_' . $image->getClientOriginalExtension();
        $imagePath = public_path( $filename);

        // Resize the image
        Image::make($image)->fit(1920, 600)->save($imagePath);

        $slider = new Slider();
        $slider->picture =  $filename;
        $slider->save();
        return redirect()->route('slider.list')->with('success','New slider Create Successfully');
        }
    }

    public function SliderEdit($id) {
        $slider = Slider::find($id);
        return view('admin.frontend.slider.edit', compact('slider'));
    }
    public function SliderUpdate(Request $request, $id){
        $this->validate($request, [
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $slider = Slider::find($id);

        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $filename = time() . '_' . $image->getClientOriginalExtension();
            $imagePath = public_path( $filename);
            // Resize the image
            Image::make($image)->resize(1180, 500)->save($imagePath);

            $slider->picture =  $filename;
            $slider->save();
        }
        $slider->save();
        return redirect()->route('slider.list')->with('success','slider Information Updated Successfully');
    }
    public function SliderDelete($id){
        $slider = Slider::find($id);
        $slider ->delete();
        return redirect()->route('slider.list')->with('success','slider Deleted Successfully');

    }

    //Header
    public function HeaderView(){
        $main = Page::first();

        return view('admin.frontend.header.view',compact('main'));
    }

    public function HeaderUpdate(Request $request){

        $this->validate($request, [
            'track_text' => 'required|string|max:20',
            'welcome_text' => 'required|string|max:255',

        ]);

        $main = Page::first();
        $main->welcome_text = $request->welcome_text;
        $main->track_text = $request->track_text;
        $main->save();
        return redirect()->route('header.view')->with('success', "Header has been updated successfully");
        }

    //footer
    public function FooterView(){
        $main = Page::first();
        $links = Link::all();

        return view('admin.frontend.contact.view',compact('main','links'));
    }

    public function FooterUpdate(Request $request){

        $this->validate($request, [
            'footer_title' => 'required|string|max:50',
            'contact_title' => 'required|string|max:50',
            'contact_phone' => 'required|string|max:50',
            'contact_address_title' => 'required|string|max:50',
            'contact_address' => 'required|string|max:100',
            'copyright' => 'required|string|max:50',
        ]);

        $main = Page::first();

        $main->footer_title = $request->footer_title;
        $main->contact_title = $request->contact_title;
        $main->contact_phone = $request->contact_phone;
        $main->contact_address_title = $request->contact_address_title;
        $main->contact_address = $request->contact_address;
        $main->copyright = $request->copyright;

        $main->save();
        return redirect()->route('contact.view')->with('success', "Contact has been updated successfully");
    }

    public function LinkCreate(){

        return view('admin.frontend.contact.create');
    }

    public function LinkStore(Request $request){

        $this->validate($request, [
            'icon' => 'required|string|max:255',
            'link' => 'required|string|max:255',

        ]);
        $link = new Link;
        $link->icon = $request->icon;
        $link->link = $request->link;
        $link->save();

        return redirect()->route('contact.view')->with('success','Contact Icon Link Create Successfully');

    }

    public function LinkEdit($id) {
        $link = Link::find($id);
        return view('admin.frontend.contact.edit', compact('link'));
    }
    public function LinkUpdate(Request $request, $id){

        $link = Link::find($id);
        $link->icon = $request->icon;
        $link->link = $request->link;
        $link->save();

        return redirect()->route('contact.view')->with('success','Contact Information  Updated Successfully');
    }
    public function LinkDelete($id){
        $link = Link::find($id);
        $link ->delete();
        return redirect()->route('contact.view')->with('success','Contact Information Deleted Successfully');

    }



    //Logo
    public function LogoView(){
        $main = Page::first();
        return view('admin.frontend.logo.view',compact('main'));
    }

    public function LogoUpdate(Request $request){

        $this->validate($request, [
            'site_name' => 'required|string|max:20',
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048',
            'favicon' => 'image|mimes:jpeg,png,jpg,ico|max:1024',

        ]);

        $main = Page::first();
        $main->site_name = $request->site_name;

        if($request->file('logo')){
            // $img_file = $request->file('logo');
            // $img_file->storeAs('public/img/','logo.' . $img_file->getClientOriginalExtension());
            // $main->logo = 'storage/img/logo.' . $img_file->getClientOriginalExtension();


            $image = $request->file('logo');
            $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
            $request->logo->move(public_path(''),$img_name);
            $img_url =  $img_name;
            $main->logo = $img_url;

        }

        if($request->file('favicon')){

            $image = $request->file('favicon');
            $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
            $request->favicon->move(public_path(''),$img_name);
            $img_url =  $img_name;
            $main->favicon = $img_url;
        }
        $main->save();
        return redirect()->route('logo.view')->with('success', "Genaral has been updated successfully");
    }



}
