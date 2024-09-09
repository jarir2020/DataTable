<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Automation Limited</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Our Services</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="{{Route('login')}}">Login</a></li>
                <li><a href="{{Route('register')}}">Registration</a></li>
            </ul>
        </nav>
    </header>
