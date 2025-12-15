<?php

 class UserController{


  
    public function register() {

      var_dump($_POST);
    }

    public function showRegisterForm() {

        $data = [

            'title' => "Register"
        ];

        render('user/register', $data);

    }
 }