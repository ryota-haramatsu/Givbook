<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests\BookRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BooksController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        $books = Book::latest('created_at')->paginate(10);
        $books->load('user');
    
        $keyword = $request->input('keyword');
        $results = Book::where('title','like','%'.$keyword.'%')->get();  
        
        return view('index')->with('books',$books)->with('keyword',$keyword)->with('results',$results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [    
            'title' => 'required',
            'comment' => 'required',
            'image' => 'required|file',
        ];
        $validated = $this->validate($request, $rules);  
 

       if ($request->file('image')->isValid()) {
           $book = new Book;
        
           $book->title = $request->title;
           $book->comment = $request->comment;
           $book->user_id = $request->user_id;
           
           $time = Carbon::now();
           $filename = $request->file('image')->storeAs('public/upload',$time.'_'.Auth::user()->id . '.jpg');

           $book->image = basename($filename);
           $book->save();
       }
    
         return redirect(url('books'))->with('message', '本を追加しました。');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::findOrFail($id);

        // $count = Book::count();
        
        // return view('user', compact('user','count'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('edit', compact('book'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [    
            'title' => 'required',
            'comment' => 'required',
            'image' => 'required|file',
        ];

        $validated = $this->validate($request, $rules);  
        
        $book = Book::findOrFail($request->book_id);
        $book->title = $request->title;
        $book->comment = $request->comment;
        $time = Carbon::now();
        $filename = $request->file('image')->storeAs('public/upload',$time.'_'.Auth::user()->id . '.jpg');
        $book->image = basename($filename);
        $book->save();
        return redirect('books')->with('update_message','本を修正しました。');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('books')->with('delete_message','本を削除しました。');
    }
}
