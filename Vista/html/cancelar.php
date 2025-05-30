<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Gestión Odontológica</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/Estilos.css">
    <script type="text/javascript" src="Vista/jquery/jquery-3.7.1-min.js"></script>
    <script src="Vista/jquery/jquery-ui-1.14.1.custom/jquery-ui.js" type="text/javascript"></script>
    <link href="Vista/jquery/jquery-ui-1.14.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <script src="Vista/js/script.js" type="text/javascript"></script>
</head>

<body>
    <div id="contenedor">
        <div id="encabezado">
            <h1>Sistema de Gestión Odontológica</h1>
        </div>
        <ul id="menu">
            <li><a href="index.php">inicio</a> </li>
            <li><a href="index.php?accion=asignar">Asignar</a> </li>
            <li><a href="index.php?accion=consultar">Consultar Cita</a> </li>
            <li class="active"><a href="index.php?accion=cancelar">Cancelar Cita</a> </li>
        </ul>
        <div id="contenido">
            <h2>Cancelar citas</h2>
            <form action="index.php?accion=cancelarCita" method="post"
                id="frmcancelar">
                <table>
                    <tr>
                        <td>Documento del Paciente </td>

                        <td><input type="text" name="cancelarDocumento"

                                id="cancelarDocumento"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit"
                                name="cancelarConsultar" value="Consultar" id="cancelarConsultar"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="paciente3"></div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    </div>
</body>

</html>