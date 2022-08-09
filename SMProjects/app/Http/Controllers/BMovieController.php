<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\MOdels\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BMovieController extends Controller
{
    public function Movieindex(){
        $movie=Movie::all();
        return view('admin.page.listMovie', compact('movie'));
    }

    public function getAddMovie(){
        $categories=Category::all();
        return view('admin.page.addMovie', ['categories'=>$categories]);
    }

    public function postAddMovie(Request $request){
        if($request->isMethod('POST')){
            $validator=Validator::make($request->all(),[
                'movie_name'=>'required',
                'movie_description'=>'required',
                'release_date'=>'required',
                'director'=>'required',
                'main_character'=>'required',
                'price'=>'required',
                'movie_img'=>'required|image|mimes:jpg,png,jpeg|max:5000',
            ]);

            if($validator->fails()){
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            $movie= new Movie;
            $movie->movie_name=$request->movie_name;
            $movie->movie_description=$request->movie_description;
            $movie->release_date=$request->release_date;
            $movie->director=$request->director;
            $movie->main_character=$request->main_character;
            $movie->price=$request->price;
            $movie->category_id=$request->category_id;
            if($request->file('movie_img')){
                $file=$request->file('movie_img');
                $filename=date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('public/image'),$filename);
                $movie['movie_img']=$filename;
            }
            else{
                $filename='noname.jpg';
            }
            $movie->save();
            return redirect()->route('admin.movie.index')->with('success','Add new Movie Successfully!');
        }
    }

    public function getEditMovie($movie_id){
        $categories=Category::all();
        $data['movie']=Movie::find($movie_id);
        return view('admin.page.editMovie',$data,compact('categories'));
    }

    public function postEditMovie(Request $request,$movie_id){
        if($request->isMethod('POST')){
            $validator=Validator::make($request->all(),[
                'movie_name'=>'required',
                'movie_description'=>'required',
                'release_date'=>'required',
                'director'=>'required',
                'main_character'=>'required',
                'price'=>'required',
                'movie_img'=>'required|image|mimes:jpg,png,jpeg|max:5000',
            ]);

            if($validator->fails()){
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            $movie=Movie::find($movie_id);
            $movie->movie_name=$request->movie_name;
            $movie->movie_description=$request->movie_description;
            $movie->release_date=$request->release_date;
            $movie->director=$request->director;
            $movie->main_character=$request->main_character;
            $movie->price=$request->price;
            $movie->category_id=$request->category_id;
            if($request->file('movie_img')){
                $file=$request->file('movie_img');
                $filename=date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('public/image'),$filename);
                $movie['movie_img']=$filename;
            }
            else{
                $filename='noname.jpg';
            }
            $movie->save();
            return redirect()->route('admin.movie.index')->with('success','Edit the Movie Successfully!');
        }
    }

    public function deleteMovie($movie_id){
        $movie=Movie::find($movie_id);
        $movie->delete();
        return back();
    }
}
