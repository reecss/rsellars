<?php

class ContactController extends \BaseController {

    protected $layout = 'layouts.master';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->layout->title = 'Contact';
        $this->layout->content_class = 'content--contact';
        $this->layout->content = View::make('contact/index');
    }

}
