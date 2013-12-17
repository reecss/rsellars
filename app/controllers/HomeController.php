<?php

class HomeController extends BaseController {

    protected $layout = 'layouts.master';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->layout->title = 'Home';
        $this->layout->content_class = 'content--home';
        $this->layout->content = View::make('home/index');
    }

}
