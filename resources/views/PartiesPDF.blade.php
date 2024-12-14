<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
        }
        .table th,
        .table td {
            border: 1px solid #dee2e6;
            padding: 0.75rem;
            vertical-align: top;
        }
        .table thead th {
            vertical-align: bottom;
            background-color: #f8f9fa;
        }
        .table-bordered {
            border: 1px solid #dee2e6;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <h1 class="text-center">{{ $title }}</h1>
        <p>{{ $date }}</p>
        <p>I am Ali Zaib, a professional Laravel developer!</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Parties Type ID</th>
                    <th>Full Name</th>
                    <th>Phone No</th>
                    <th>Address</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($parties as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->parties_type_name}}</td>
                        <td>{{ $value->full_name }}</td>
                        <td>{{ $value->phone_no }}</td>
                        <td>{{ $value->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
</body>
</html>