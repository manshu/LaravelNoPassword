<?php namespace App\Http\Controllers\Backend;

use Acme\Transformers\PostsTransformer;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
class PagesController extends Controller
{
    protected $postsTransformer;

    /**
     * PagesController constructor.
     * @param $postsTransformer
     */
    public function __construct(PostsTransformer $postsTransformer)
    {
        $this->postsTransformer = $postsTransformer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate();
        return Response::json([
            'pagination' => [
                'total' => $posts->total(),
                'per_page' => $posts->perPage(),
                'current_page' => $posts->currentPage(),
                'last_page' => $posts->lastPage(),
                'from' => $posts->firstItem(),
                'to' => $posts->lastItem()
            ],
            'data' => $this->postsTransformer->transformCollection($posts->all())
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        if (! $posts)
        {
            return Response::json([
                'error' => [
                    'message' => 'Post does not exist',
                    'code' => '404'
                ]
            ], 404);
        }
        return Response::json([
            'data' => $this->postsTransformer->transform($posts)
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    

    
}
