<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Review;
use App\Models\Category;


class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /* public function index()
    {
        return view('book-list');
    } */
    public function savereview(Request $req)
    {
        $var = new Review;
        $var->bName = $req->bName;
        $var->rName = $req->rName;
        $var->rComment = $req->rComment;
        $var->rRate = $req->rRate;
        $var->rSuggestion = $req->rSuggestion;
        $var->save();
        return $this->retrieveReview();
    }
    public function retrieveReview(){
    
        $review1 = DB::table('reviews')
            ->where('bName', '=' ,'The Rise of Kyoshi')
            ->get();
        return view('books/kyoshi', ['review1'=> $review1]); 
    }
    
    public function savereview2(Request $req)
    {
        $var = new Review;
        $var->bName = $req->bName;
        $var->rName = $req->rName;
        $var->rComment = $req->rComment;
        $var->rRate = $req->rRate;
        $var->rSuggestion = $req->rSuggestion;
        $var->save();
        return $this->retrieveReview();
    }
    public function retrieveReview2(){
    
        $review2 = DB::table('reviews')
            ->where('bName', '=' ,'Eternals (2021-) #1')
            ->get();
        return view('books/eternals', ['review2'=> $review2]); 
    }

    /* Aadmin */

    public function addCategory(Request $req)
    {
        $var = new Category;
        $var->category = $req->category;
        $var->save();
        return $this->retrieveCategory();
    }

    public function retrieveCategory(){
    
        $catData = DB::table('categories')
            ->orderBy('category', 'asc')->get();
        return view('admin-home', ['catData'=> $catData]); 
    }

    public function addBook(Request $req)
    {
        $var = new Book;
        $var->bName = $req->bName;
        $var->bAuthor = $req->bAuthor;
        $var->bDesc = $req->bDesc;
        $var->bInfo = $req->bInfo;
        $var->save();
        return $this->retrieveBook();
    }

    public function retrieveBook(){
    
        $bookData = DB::table('books')
            ->orderBy('id', 'asc')->get();
        return view('admin-addbook', ['bookData'=> $bookData]); 
    }

}
