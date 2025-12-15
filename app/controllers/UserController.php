<?php

 class UserController{


    public function register () {

        $data = [

            'title' => "rRegister"
        ];

        render('user/register', $data);

    }

    public function registerUser() {

        $data = [

            'title' => "Register"
        ];

        render ('user/register', $data);
    }
 }