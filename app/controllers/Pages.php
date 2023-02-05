<?php
class Pages extends Controller
{
    public $postModel;
    public function __construct()
    {
    }

    public function index()
    {

        $data = [
            'title' => 'ThomalexMVC',
        ];
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
        ];
        $this->view('pages/about', $data);
    }
}
