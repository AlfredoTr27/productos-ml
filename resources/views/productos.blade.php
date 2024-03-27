<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

</head>
<body>
    <div class="container">
        <h1>Lista de Productos</h1>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí deberías reemplazar este contenido por la parte dinámica generada por tu framework o backend -->
                <tr>
                    <td>1</td>
                    <td>Producto 1</td>
                    <td>$10.99</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Producto 2</td>
                    <td>$20.49</td>
                    <td>30</td>
                </tr>
                <!-- Aquí termina la parte dinámica -->
            </tbody>
        </table>
    </div>
</body>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #444;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            background-color: #fff;
            border: 5px solid #000000;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #3498db;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</html>
