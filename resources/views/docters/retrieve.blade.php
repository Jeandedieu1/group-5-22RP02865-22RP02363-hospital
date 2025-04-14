<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Docters</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #2f3640;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-top: 20px;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        button {
            background-color: #e74c3c;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c0392b;
        }

        form {
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>Docters Avalible</h1>
    <a href="{{route('docter.dashboard')}}">Dashboard</a><br>
    <table border="1">
        <tr>
        <th>Docter ID</th>
        <th>Docter Names</th>
        <th>Email</th>
        <th>Phone </th>
        <th>Address</th>
        <th colspan="2">
            Action
        </th>
        </tr>
       @foreach($docters as $docter)
        <tr>
            <td>{{$docter->id}}</td>
            <td>{{$docter->names}}</td>
            <td>{{$docter->email}}</td>
            <td>{{$docter->phone}}</td>
            <td>{{$docter->address}}</td>
            <td><a href="{{route('docter.edit', ['docter'=>$docter])}}">Edit</a></td>
            <td>
            <form action="{{route('docter.destroy',['docter'=>$docter])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>    
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
