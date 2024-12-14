<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gst Billing Parties Type (single Record)</title>
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
                        <th>Parties Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($parties as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->parties_type_name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</body>
</html>