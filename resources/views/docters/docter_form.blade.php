<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f6fa;
            padding: 30px;
            color: #2c3e50;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #34495e;
        }

        a {
            display: inline-block;
            margin-bottom: 20px;
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            background-color: #ffffff;
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        input[type="text"],
        input[type="email"],
        input[type="adress"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            color: white;
            background-color: #3498db;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #2980b9;
        }

        .alert {
            max-width: 600px;
            margin: 0 auto 20px auto;
            padding: 15px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        .alert-success {
            background-color: #2ecc71;
        }

        .alert-error {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @else
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
    @endif

    <h1>Docter Form</h1>
    <a href="{{route('docter.dashboard')}}">Dashboard</a>

    <form action="{{route('docter.store')}}" method="POST">
        @csrf
        @method('post')
        <label for="">Full Names:</label>
        <input type="text" name="names" id="names" placeholder="Enter Full Names"> <br> <br> 
        <label for="">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter Email"> <br><br> 
        <label for="">Phone:</label>
        <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" maxlength="10" minlength="10"> <br><br> 
        <label for="">Adress:</label>
        <input type="adress" name="address" id="address" placeholder="Enter Address"> <br><br> 

        <input type="submit" name="submit" id="submit" value="Submit">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="reset" id="reset" value="Cancle">
    </form>
</body>
</html>
