<?php
namespace Krts\Video\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    protected $viewPath = 'voyager-video';

    /**
     * Route: Gets all posts and passes data to a view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    }

    /**
     * Route: Gets a single posts and passes data to a view
     *
     * @param $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPost($slug)
    {
     
    }
}
