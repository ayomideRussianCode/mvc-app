<?php

class AdminController{

    public function __construct() {

        AuthMiddleware::requiredLogin();
    }

    public function dashboard() {

        $data = [
            'title' => 'Dashboard',
            'message' => 'Welcome to the Dashboard Page',
        ];

        render('admin/dashboard', $data, 'layouts/admin_layout');
    }

    public function admin(){

        $data = [
            'title' => 'Admin',
            'message' => 'Welcome to the Admin Page',
        ];

        render('admin/index', $data, 'layouts/admin_layout');

    }

    public function showProfile()
    {

        $data = [
            'title' => 'Profile',
            'message' => 'Welcome to the Profile Page',
        ];

        render('admin/users/profile', $data, 'layouts/admin_layout');
    }
}