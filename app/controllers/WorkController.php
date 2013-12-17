<?php

class WorkController extends \BaseController {

    protected $layout = 'layouts.master';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->layout->title = 'Work';
        $this->layout->content_class = 'content--work';
        $this->layout->content = View::make('work/index');
    }

}
