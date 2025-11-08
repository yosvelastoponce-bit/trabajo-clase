<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte PDF</title>
    <style>

    h1 { 
    text-align: center; 
    color: #1a4a75; /* Azul oscuro corporativo */
    /* border-bottom: 3px solid #1a4a75; */
    padding-bottom: 10px;
    margin-bottom: 30px;
    font-size: 24px;}

    .report-table { 
    width: 100%; 
    border-collapse: collapse; /* Bordes unidos */
    box-shadow: 0 0 20px rgba(0, 0, 0, 1); /* Sombra suave para efecto flotante */
    }
    
    /* 4. Encabezados de Columna (TH) */
    .report-table th { 
        background-color: #407fb6ff; /* Fondo azul oscuro */
        color: white; /* Letra blanca */
        padding: 12px 15px;
        text-align: left;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 14px;
    }
    
    /* 5. Celdas de Datos (TD) */
    .report-table td { 
        padding: 10px 15px;
        border-bottom: 1px solid #ddd; /* Separador de fila más sutil */
        font-size: 14px;
    }
    
    /* 6. Estilo Cebra (Filas Alternas) */
    .report-table tbody tr:nth-child(even) { 
        background-color: rgba(215, 211, 211, 1); /* Gris muy claro para filas pares */
    }
    
    .report-table tbody tr:hover {
        background-color: rgba(242, 10, 10, 1); /* Resaltar fila al pasar el mouse (útil para pruebas en HTML, menos relevante en PDF estático) */
    }
    
    /* 7. Texto de Sin Resultados */
    .no-data {
        text-align: center;
        padding: 20px;
        color: #888;
        font-style: italic;
    }
    </style>
</head>
<body>
    <h1>Hola, este es un reporte de estudiante en PDF</h1>
    
    <body class="report-table">
        <h1>Reporte</h1>
        <div class="report-table" >
            <table >
                <thead class="report-table">
                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRES</th>
                        <th>PRI_APE</th>
                        <th>SEG_APE</th>
                        <th>DNI</th>
                    </tr>
                </thead>
                <tbody class="report-table">
                    @foreach ( $estudiantes as $estudiante)
                    <tr class="reporte-table td"
                        <td>{{ $estudiante->codigo }}</td>
                        <td>{{ $estudiante->nombres }}</td>
                        <td>{{ $estudiante->pri_ape }}</td>
                        <td>{{ $estudiante->seg_ape }}</td>
                        <td>{{ $estudiante->dni }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
    <h1>Yosvel Asto Ponce</h1>

    <!-- {{ $estudiantes }} -->
    
</body>
</html>