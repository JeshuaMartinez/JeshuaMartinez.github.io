<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Proyecto Final Contabilidad.css">
	<title>Test Pagina</title>
	<script>
        let respuestasContestadas = 0;

        function verificarRespuesta(pregunta, respuestaCorrecta, definicion) {
            var opciones = document.getElementsByName('pregunta' + pregunta);
            var resultado = document.getElementById('resultado' + pregunta);
            var contador = document.getElementById('contador');
            var definicionElemento = document.getElementById('definicion' + pregunta);

            var puntajeActual = parseInt(contador.innerHTML);

            opciones.forEach(opcion => {
                opcion.disabled = true;
                if (opcion.checked) {
                    if (opcion.value == respuestaCorrecta) {
                        resultado.innerHTML = "Aprobado";
                        contador.innerHTML = puntajeActual + 1;
                    } else {
                        resultado.innerHTML = "No aprobado";
                    }
                }
            });

            definicionElemento.innerHTML = definicion;
            respuestasContestadas++;

            if (respuestasContestadas === 25) {
                mostrarMensajeFinal(puntajeActual + 1);
            }
        }

        function mostrarMensajeFinal(puntaje) {
            let mensaje = "";
            if (puntaje <= 5) {
                mensaje = "Necesita repasar";
            } else if (puntaje <= 10) {
                mensaje = "Se puede mejorar";
            } else if (puntaje <= 15) {
                mensaje = "Tienes conocimientos básicos";
            } else if (puntaje <= 20) {
                mensaje = "Dominas bien el tema";
            } else {
                mensaje = "Eres todo un maestro de la contabilidad";
            }
            alert(mensaje);
        }
    </script>
</head>
<body>
	 <h1>Cuestionario Contable</h1>
    <form action="TestPagina.php" name="FrmTest" method="POST">
        <table border="1" width="75%" align="center">
            <thead>
                <tr>
                    <th>Cuenta</th>
                    <th>Opciones</th>
                    <th>Resultado</th>
                    <th>Definición</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cuentas = [
                    "Documentos por Cobrar" => ["categoria" => "activo", "definicion" => "Documentos pendientes de pago por los clientes."],
                    "Comisiones Cobradas Anticipadas" => ["categoria" => "pasivo", "definicion" => "Gastos futuros de una empresa que se pagan por adelantado, pero no se registran como gastos hasta otro momento."],
                    "Reserva para Bono 14" => ["categoria" => "pasivo", "definicion" => "Fondos reservados para el pago del Bono 14 a los empleados."],
                    "Internet Pagado Anticipado" => ["categoria" => "activo", "definicion" => "Pago anticipado por servicios de internet que aún no se han consumido."],
                    "Préstamos Bancarios" => ["categoria" => "pasivo", "definicion" => "Obligaciones financieras con bancos."],
                    "Derecho de Llave" => ["categoria" => "activo", "definicion" => "Valor intangible asociado a la reputación de una empresa."],
                    "Mercaderías / Inventario" => ["categoria" => "activo", "definicion" => "Bienes disponibles para la venta."],
                    "Intereses por Cobrar" => ["categoria" => "activo", "definicion" => "Intereses que la empresa aún no ha cobrado pero tiene derecho a cobrar."],
                    "Descuentos Concedidos" => ["categoria" => "gasto", "definicion" => "Reducciones en el precio de venta dadas a los clientes."],
                    "Amortizaciones Acumuladas" => ["categoria" => "reguladora de activo", "definicion" => "Acumulación de la amortización de activos intangibles."],
                    "Crédito Mercantil" => ["categoria" => "activo", "definicion" => "Valor intangible de la reputación de una empresa."],
                    "Intereses Cobrados" => ["categoria" => "activo", "definicion" => "Intereses que la empresa ha cobrado."],
                    "Amortizaciones" => ["categoria" => "gasto", "definicion" => "Asignación periódica del costo de un activo intangible."],
                    "Alquileres Pagados" => ["categoria" => "gasto", "definicion" => "Pagos realizados por el uso de propiedades o equipos."],
                    "Dividendos por pagar" => ["categoria" => "pasivo", "definicion" => "Dividendos declarados pero aún no pagados a los accionistas."],
                    "Descuentos Percibidos" => ["categoria" => "ingresos", "definicion" => "Reducción de gastos por descuentos obtenidos de proveedores."],
                    "Equipo de Reparto" => ["categoria" => "activo", "definicion" => "Vehículos y otros equipos utilizados para la distribución de productos."],
                    "Prima Seguros" => ["categoria" => "activo", "definicion" => "Pago anticipado de seguros."],
                    "Útiles y enseres existencia" => ["categoria" => "activo", "definicion" => "Materiales y suministros disponibles para su uso en la empresa."],
                    "Cuentas Incobrables" => ["categoria" => "gasto", "definicion" => "Deudas que se consideran imposibles de cobrar."],
                    "Publicidad Pagada Anticipada" => ["categoria" => "activo", "definicion" => "Pago anticipado por servicios de publicidad."],
                    "Bono 14" => ["categoria" => "gasto", "definicion" => "Pago adicional obligatorio en algunos países a los empleados."],
                    "Devoluciones y Rebajas Sobre Ventas" => ["categoria" => "gasto", "definicion" => "Reducciones en el valor de ventas debido a devoluciones y rebajas."],
                    "Comisiones Pagadas" => ["categoria" => "gasto", "definicion" => "Pagos realizados por servicios de intermediación."],
                    "Inmuebles" => ["categoria" => "activo", "definicion" => "Propiedades y edificios propiedad de la empresa."],
                ];

                $opciones = ["activo", "pasivo", "reguladora de activo", "ingresos", "gasto"];
                $contadorPregunta = 1;

                foreach ($cuentas as $cuenta => $datos) {
                    shuffle($opciones); // Mezclar las opciones
                    echo "<tr>";
                    echo "<td>$cuenta</td>";
                    echo "<td>";
                    foreach ($opciones as $opcion) {
                        echo "<input type='radio' name='pregunta$contadorPregunta' value='$opcion' onclick='verificarRespuesta($contadorPregunta, \"{$datos['categoria']}\", \"{$datos['definicion']}\")'> $opcion<br>";
                    }
                    echo "</td>";
                    echo "<td id='resultado$contadorPregunta'></td>";
                    echo "<td id='definicion$contadorPregunta'></td>";
                    echo "</tr>";
                    $contadorPregunta++;
                }
                ?>
            </tbody>
        </table>
    </form>
    <h2>Puntuación: <span id="contador">0</span> / 25</h2>
    <hr>
    <a href="Index.html">
        Regresar al inicio
    </a>
</body>
</html>
