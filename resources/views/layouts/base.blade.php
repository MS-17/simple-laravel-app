<!DOCTYPE html>
<html>
    <head>
        <title>App</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            
            body {
                display: flex;
                flex-flow: column;
                flex-wrap: nowrap;
                /*margin-left: 100px;
                margin-right: 100px;*/
            }

            /* header */
            header {
                background-color: #f4f4f4;
                overflow: hidden;
                display: flex;
                flex-wrap: nowrap;
                justify-content: space-between;
            }

            .logo {
                padding: 14px 16px;
            }

            .topnav {
                margin-right: 10px;
            }

            /* Style the links inside the navigation bar */
            .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                color: black;
                font-size: 17px;
            }

            /* Change the color of links on hover */
            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            /* Add a color to the active/current link */
            .topnav a.active {
                background-color: #04AA6D;
                color: white;
            }

            /* user form */
            .user-form-container{
                display: flex;
                justify-content: center;
                margin-top: 100px;
            }
            
            .user-form{
                border-radius: 5px;
                background-color: #f2f2f2;
                border: 1px solid gray;
                padding: 20px;
                margin: 10px 0px;
                width: 400px;
             }

            input[type=text] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }


            /* users-table */
            .users-table table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            .users-table td, .users-table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            .users-table tr:nth-child(even){background-color: #f2f2f2;}

            .users-table tr:hover {background-color: #ddd;}

            .users-table th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }


            /* footer */
            footer {
                background-color: #f4f4f4;
                overflow: hidden;
                display: flex;
                flex-wrap: nowrap;
                justify-content: center;
                align-items: center;
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 6.5rem;
            }

            /* Style the links inside the navigation bar */
            .base-footer a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                color: black;
                font-size: 17px;
            }

            /* Change the color of links on hover */
            .base-footer a:hover {
                background-color: #ddd;
                color: black;
            }

            /* Add a color to the active/current link */
            .base-footer a.active {
                background-color: #04AA6D;
                color: white;
            }

        </style>
    </head>
    <body>
        <div class="page-base-container">
            @include('layouts.partials.header')
            <div class="user-form-container">
                @yield('user_form')
            </div>
            @yield('users_table')
            @include('layouts.partials.footer')
        </div>
    </body>
</html>



