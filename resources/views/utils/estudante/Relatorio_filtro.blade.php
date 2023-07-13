<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório do Estudante {{ $estudante->name }}</title>
    <style>
        /* Estilos personalizados para Relatorio_filtro */
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
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Relatório do Estudante {{ $estudante->name }}</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Código de Estudante</th>
            <th>Curso</th>
            <th>Contacto</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{ $estudante->name }}</td>
            <td>{{ $estudante->code }}</td>
            <td>{{ $estudante->Courses->name }}</td>
            <td>{{ $estudante->contact }}</td>
            <td>{{ $estudante->email }}</td>
        </tr>
    </table>
</body>
</html>
