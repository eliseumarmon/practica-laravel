<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>

<body>
    <h1>Empleados</h1>
    @if ($empleados->isEmpty())
        <p>No hay usuarios disponibles.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Apellidos</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Fecha de contratación</th>
                </tr>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->emp_id }}</td>
                        <td>{{ $empleado->emp_lastname }}</td>
                        <td>{{ $empleado->emp_firstname }}</td>
                        <td>{{ $empleado->emp_birth_date->age }}</td>
                        <td>{{ $empleado->emp_hire_date->format("d/m/Y") }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>

</html>
