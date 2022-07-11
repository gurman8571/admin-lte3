<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professional;
use App\Models\Skill;
use App\Models\ProfessionalSkill;
use App\Models\Image;

class ProfessionalController extends Controller
{

    public function masterdata()
    {
        $skills=Skill::where('status',1)->pluck('name','id');
          return $skills;
    }


    public function Index(Type $var = null)
    {
        $professionals=Professional::paginate(6);
        return view('Professionals.index',compact('professionals'));
    }

    public function add()
    {
        $skills=$this->masterdata();
        //dd($skills);
        return view('Professionals.Create', compact('skills'));
    }

    public function Create(request $req)
    {

        //$validatedData=$req->validate([
        //    'email' =>'required',
        //    'name'=>'required',
        //    'address'=>'required',
        //    'role'=>'required',
        //    'image'=>['required','image','mimes:jpg,png,jpeg,gif'],
//
        //    ]);
        //dd($req->all());
        $professional=new Professional;
        $professional->name=$req->name;
        $professional->email=$req->email;
        $professional->mobile=$req->mobile;
        $professional->address=$req->address;
        $imagename = time().'-'.".".$req->image->extension();
        //dd($imagename);
        $dest_path='public/images/Professionals';
        //$imagename = time().'-'.".".$req->logo->extension();
        $req->image->storeAs($dest_path, $imagename) ;
        $professional->image=$imagename;
        $professional->save();
        $skillids=$req->skill;
        $professional->skills()->attach($skillids);

        return redirect()->route('professional.index');

    }

    public function Detail($id)
    {
        $professional=Professional::with(['skills'])->find($id);
        $skills=$this->masterdata();
        $images=Image::where('user_id',$id)->get(['image','status','id']);
       // dd( $professional);
        return view('Professionals.Details', compact('professional','skills','images'));
    }

    public function Delete($id)
    {
        $professional=Professional::with(['skills'])->find($id);
        if ( $professional->image) {


            $dest=public_path()."\storage/images/Professionals"."/".basename($professional->image);
            unlink($dest);
        }
        $professional->delete();
        $professional->skills()->detach();
        return back()->with('delete', 'Profile has been deleted!');
    }

    public function update(request $req)
    {
          //$validatedData=$req->validate([
        //    'email' =>'required',
        //    'name'=>'required',
        //    'address'=>'required',
        //    'role'=>'required',
        //    'image'=>['required','image','mimes:jpg,png,jpeg,gif'],
//
        //    ]);
        //dd($req->all());

        $professional=Professional::find($req->id);
        $professional->name=$req->name;
        $professional->email=$req->email;
         $professional->mobile=$req->mobile;
        $professional->address=$req->address;
        $professional->update();

        return back()->with('update', 'Profile has been updated!');


    }

    public function update_status($id)
    {
        $professional=Professional::find($id);
        $status =0;
        if ($professional->status == 0) {
            $status =1;
         }

         $professional->status=$status;
         $professional->save();
        return back();

    }

    public function add_skill(request $req)
    {
        $professional=Professional::find($req->id);
        $skillids=$req->skill;
        $professional->skills()->attach($skillids);
        return back();

    }
    public function Delete_skill($professional_id,$skill_id)
    {

        $professional=Professional::find($professional_id);

        $professional->skills()->detach($skill_id);
        return back();

    }
       public function upload_images(request $req)
       {
        //dd($req->id);
        $image=new Image;
        $image->user_id=$req->id;

        $imagename = time().'-'.".".$req->image->extension();
        //dd($imagename);
        $dest_path='public/images/Professionals';
        //$imagename = time().'-'.".".$req->logo->extension();
        $req->image->storeAs($dest_path, $imagename) ;
        //dd($imagename);
        $image->image=$imagename;

        $image->save();
        return back()->with('upload', 'image has been uploaded!');



       }

       public function Delete_image($id)
       {

        $image=Image::find($id);

        $dest=public_path()."\storage/images/Professionals"."/".basename($image->image);
        unlink($dest);
        $image->delete();
        return back()->with('delete', 'Image has been deleted!');

       }

}
