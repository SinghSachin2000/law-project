<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blogs;
use Illuminate\Support\Facades\DB;
class BlogController extends Controller
{
    function  indexblog(Request $request){
      $categories = Category::all();

      $categoryName = $request->input('category');
      if ($categoryName) {
        $blogsdata = Blogs::where('category', $categoryName)->paginate(4);
    } else {
     
        $blogsdata = Blogs::paginate(4);
    }

      $latestblog = Blogs::orderBy('publish_date', 'desc')->limit(4)->get(); 

      $categoryCounts = Blogs::select('category', DB::raw('count(*) as total'))
      ->groupBy('category')
      ->get(); 

        return view('blogs',['categories'=>$categories,'blogsdata'=>$blogsdata,
      'latestblog'=>$latestblog,
      'categoryCounts' => $categoryCounts]);
       }

     
public function indexshowblog($id)
{
  $categories = Category::all();
  $categoryCounts = Blogs::select('category', DB::raw('count(*) as total'))
      ->groupBy('category')
      ->get(); 
    $blog = Blogs::findOrFail($id);
    $blog->content = json_decode($blog->content, true);
    $latestblog = Blogs::orderBy('publish_date', 'desc')->limit(3)->get(); 
    return view('fullblog', ['blog' => $blog,'categories'=>$categories, 'categoryCounts' => $categoryCounts, 'latestblog'=>$latestblog,]);
}

}
