<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #063970;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        th {
            background-color: #fcb444;
            color: white;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Código de Estudante</th>
                <th>Curso</th>
                <th>Contacto</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudante1 as $estudante)
            <tr>
                <td>{{ $estudante->id }}</td>
                <td>{{ $estudante->name }}</td>
                <td>{{ $estudante->code }}</td>
                <td>{{ $estudante->Courses->name }}</td>
                <td>{{ $estudante->contact }}</td>
                <td>{{ $estudante->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
