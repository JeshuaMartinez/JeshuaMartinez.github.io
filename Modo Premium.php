<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Proyecto Final Contabilidad.css">
	<title>Modo premium</title>
	<script>
        const problemas = [
            {
                activos: 150000,
                pasivos: 90000,
                reguladoraActivos: 30000,
                ingresos: 200000,
                gastos: 120000,
                respuesta: 30000
            },
            {
                activos: 200000,
                pasivos: 80000,
                reguladoraActivos: 40000,
                ingresos: 300000,
                gastos: 150000,
                respuesta: 80000
            },
            {
                activos: 250000,
                pasivos: 100000,
                reguladoraActivos: 50000,
                ingresos: 400000,
                gastos: 200000,
                respuesta: 100000
            },
            {
                activos: 300000,
                pasivos: 120000,
                reguladoraActivos: 60000,
                ingresos: 500000,
                gastos: 250000,
                respuesta: 120000
            },
            {
                activos: 350000,
                pasivos: 150000,
                reguladoraActivos: 70000,
                ingresos: 600000,
                gastos: 300000,
                respuesta: 130000
            }
        ];

        const problemaActual = problemas[Math.floor(Math.random() * problemas.length)];

        function verificarRespuesta() {
            const respuestaUsuario = parseFloat(document.getElementById("respuesta").value);
            if (respuestaUsuario === problemaActual.respuesta) {
                window.location.href = "Funciones Premium.php"; // Página de éxito
            } else {
                alert("Respuesta incorrecta. Inténtalo de nuevo.");
                window.location.reload(); // Recargar la página para otro problema
            }
        }

        window.onload = function() {
            document.getElementById("problema").innerHTML = `
                <table border="1" align="center" width="75%">
                    <tr>
                        <th>Concepto</th>
                        <th>Cantidad</th>
                    </tr>
                    <tr>
                        <td>Activos</td>
                        <td>$${problemaActual.activos}</td>
                    </tr>
                    <tr>
                        <td>Pasivos</td>
                        <td>$${problemaActual.pasivos}</td>
                    </tr>
                    <tr>
                        <td>Cuenta reguladora de activos (depreciación acumulada)</td>
                        <td>$${problemaActual.reguladoraActivos}</td>
                    </tr>
                    <tr>
                        <td>Ingresos</td>
                        <td>$${problemaActual.ingresos}</td>
                    </tr>
                    <tr>
                        <td>Gastos</td>
                        <td>$${problemaActual.gastos}</td>
                    </tr>
                </table>
                <br>
                <table align="center" border="1" width="75%">
    				<tr>
    					<td>
    				      ¿Cuál es el Capital Contable?
	    				</td>
    				</tr>
    			</table>
            `;
        }
    </script>
</head>
<body>
	<h1 align="center">
		¡Accede a funciones premium resolviendo este pequeño ejercicio!
	</h1>
    <div id="problema"></div>
    <br>
    <table align="center" width="30%">
    	<tr>
    		<td>
    			<input type="number" id="respuesta" placeholder="Ingresa tu respuesta" align="center">
    		</td>
    		<td>
    			<button onclick="verificarRespuesta()">Verificar</button>
    		</td>
    	</tr>
    </table>
</body>
</html>