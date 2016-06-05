<?php namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function show()
    {
        return view('blog.show');
    }
}
