<?php

namespace App\Http\Controllers;

use App\Contracts\IPostRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $postRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(IPostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin', ['posts' => $this->postRepository->allRecent(5)]);
    }
}
