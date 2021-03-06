<?php

namespace App\http\controllers;

class pagesController extends Controller
{

    public function getIndex()
    {
        return view ('pages.index');
        #Process variable or pararmeter
        #Talk to the model (DB)
        #Receive from te model
        #Compile or porcess data from the model (Sql written in model)
        #Pass the data to the correct view (html written in view)
    }

    public function getAbout()
    {
        $first="Patty";
        $last="Bagwell";
        $fullname=$first." ".$last;
        $email='patty.bagwell@okbu.edu';
        $data=[];
        $data['email']=$email;
        $data['fullname']=$fullname;
        #This is one method to bring in a variable into a view
        #return view ('pages.about')->with("fullname",$fullname);
        #below is a shortcut method for the above method with multiple variable being passed in
        #return view ('pages.about')->withFullname($fullname)->withEmail($email);
        #or can pass in an array of data
        return view ('pages.about')->withData($data);

    }

    public function getContact()
    {
        return view('pages.contact');
    }
}
