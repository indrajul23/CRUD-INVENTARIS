<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;

class Post extends Controller
{
    /**
     * index function
     */
    public function index()
    {
        //model initialize
        $postModel = new PostModel();

        //pager initialize
        $pager = \Config\Services::pager();

        $data = array(
            'posts' => $postModel->paginate(2, 'post'),
            'pager' => $postModel->pager
        );

        return view('post-index', $data);
    }
}