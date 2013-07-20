<?php

class Controller_Demo extends Controller
{
    public function action_index()
    {
        return Response::forge(View::forge('demo/index'));
    }
    
    public function action_showData()
    {
        $data = array('text' => 'Aichi');
        return Response::forge(View::forge('demo/showdata', $data));
    }
}