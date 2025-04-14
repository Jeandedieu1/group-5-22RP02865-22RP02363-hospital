<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 40px;
            text-align: center;
            padding-bottom: 60px; /* Add padding to give space for footer */
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
        }

        a {
            display: inline-block;
            text-decoration: none;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s;
            font-weight: bold;
        }

        a:hover {
            background-color: #2980b9;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #34495e;
            color: white;
            text-align: center;
            padding: 10px;
            border-top: 2px solid #2c3e50;
        }

        footer a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Welcome to Hospital Management System</h1>
    
    <a href="{{route('docter.index')}}">Add New Docter</a> | <a href="{{route('docter.showall')}}">View All Docters</a>

    <!-- Footer -->
    <footer>
        <a href="{{route('docter.index')}}">Add New Docter</a> | <a href="{{route('docter.showall')}}">View All Docters</a>
    </footer>
</body>
</html>
