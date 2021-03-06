<?php

namespace App\Http\Controllers\Portal;
use App\Http\Controllers\Controller;
use request,auth,redirect;
use App\Http\Models\Blog;



class BlogController extends Controller
{
    /**
     * blog list
     * @return Response
     */
    public function index (){
      return view('portal.blogs.index')->with('blogs'=>Blog::paginate(15));
    }
    /**
     * information of blog by id
     * @param $id int
     * @return arr response
     */
    public function information(Request $request, $id){
      return view('portal.blogs.information',['blogs'=>Blog::find($id),
                                              'tag'=>Tag::where('bid'=>$id)->get(),
                                              'comments'=>Comment::where('bid'=>$id)->get()])
    }
}
