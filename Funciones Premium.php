<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Proyecto Final Contabilidad.css">
	<title>Funciones Premium</title>
	<script>
        function calcularBalance() {
            const cajaBancos = parseFloat(document.getElementById("cajaBancos").value) || 0;
            const cuentasCobrar = parseFloat(document.getElementById("cuentasCobrar").value) || 0;
            const inventarios = parseFloat(document.getElementById("inventarios").value) || 0;
            const inversionesTemporales = parseFloat(document.getElementById("inversionesTemporales").value) || 0;
            const documentosCobrar = parseFloat(document.getElementById("documentosCobrar").value) || 0;
            const gastosAnticipado = parseFloat(document.getElementById("gastosAnticipado").value) || 0;

            const terrenos = parseFloat(document.getElementById("terrenos").value) || 0;
            const edificios = parseFloat(document.getElementById("edificios").value) || 0;
            const maquinariaEquipo = parseFloat(document.getElementById("maquinariaEquipo").value) || 0;
            const mobiliarioEquipo = parseFloat(document.getElementById("mobiliarioEquipo").value) || 0;
            const vehiculos = parseFloat(document.getElementById("vehiculos").value) || 0;
            const inversionesLargoPlazo = parseFloat(document.getElementById("inversionesLargoPlazo").value) || 0;
            const propiedadesInversion = parseFloat(document.getElementById("propiedadesInversion").value) || 0;
            const activosIntangibles = parseFloat(document.getElementById("activosIntangibles").value) || 0;

            const depreciacionAcumulada = parseFloat(document.getElementById("depreciacionAcumulada").value) || 0;
            const amortizacionAcumulada = parseFloat(document.getElementById("amortizacionAcumulada").value) || 0;

            const cuentasPagar = parseFloat(document.getElementById("cuentasPagar").value) || 0;
            const documentosPagar = parseFloat(document.getElementById("documentosPagar").value) || 0;
            const gastosPagar = parseFloat(document.getElementById("gastosPagar").value) || 0;
            const prestamosCortoPlazo = parseFloat(document.getElementById("prestamosCortoPlazo").value) || 0;
            const obligacionesAcumuladas = parseFloat(document.getElementById("obligacionesAcumuladas").value) || 0;
            const impuestosPagar = parseFloat(document.getElementById("impuestosPagar").value) || 0;

            const prestamosLargoPlazo = parseFloat(document.getElementById("prestamosLargoPlazo").value) || 0;
            const bonosPagar = parseFloat(document.getElementById("bonosPagar").value) || 0;
            const hipotecasPagar = parseFloat(document.getElementById("hipotecasPagar").value) || 0;
            const obligacionesLaborales = parseFloat(document.getElementById("obligacionesLaborales").value) || 0;
            const provisionesPasivos = parseFloat(document.getElementById("provisionesPasivos").value) || 0;

            const totalActivos = cajaBancos + cuentasCobrar + inventarios + inversionesTemporales + documentosCobrar + gastosAnticipado
                + terrenos + edificios + maquinariaEquipo + mobiliarioEquipo + vehiculos + inversionesLargoPlazo + propiedadesInversion + activosIntangibles
                - depreciacionAcumulada - amortizacionAcumulada;

            const totalPasivos = cuentasPagar + documentosPagar + gastosPagar + prestamosCortoPlazo + obligacionesAcumuladas + impuestosPagar
                + prestamosLargoPlazo + bonosPagar + hipotecasPagar + obligacionesLaborales + provisionesPasivos;

            const capitalContable = totalActivos - totalPasivos;

            document.getElementById("resultado").textContent = `Capital Contable: $${capitalContable.toFixed(2)}`;
        }
    </script>
</head>
<body>
	 <h1 align="center">¡Genera tu propio balance contable!</h1>
    <table width="75%" border="1" align="center">
        <thead>
            <tr>
                <th>Cuenta</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            	<td colspan="2">
            		<strong>
            			Activos Corrientes
            		</strong>
            	</td>
            </tr>
            <tr>
            	<td>
            		Caja y Bancos
            	</td>
            	<td>
            		<input type="number" id="cajaBancos" value="0">
            	</td>
            </tr>
            <tr>
            	<td>
            		Cuentas por Cobrar
            	</td>
            	<td>
            		<input type="number" id="cuentasCobrar" value="0">
            	</td>
            </tr>
            <tr>
            	<td>
            		Inventarios
            	</td>
            	<td>
            		<input type="number" id="inventarios" value="0">
            	</td>
            </tr>
            <tr>
            	<td>
            		Inversiones Temporales
            	</td>
            	<td>
            		<input type="number" id="inversionesTemporales" value="0">
            	</td>
            </tr>
            <tr>
            	<td>
            		Documentos por Cobrar</td>
            	<td>
            		<input type="number" id="documentosCobrar" value="0">
            	</td>
            </tr>
            <tr>
            	<td>
            	Gastos Pagados por Anticipado
            	</td>
            	<td>
            		<input type="number" id="gastosAnticipado" value="0">
            	</td>
            </tr>
            <tr>
            	<td colspan="2">
            		<strong>
            			Activos No Corrientes
            		</strong>
            	</td>
            </tr>
            <tr>
            	<td>
            		Terrenos
            	</td>
            	<td>
            		<input type="number" id="terrenos" value="0">
            	</td>
            </tr>
            <tr>
            	<td>
            		Edificios
            	</td>
            	<td>
            		<input type="number" id="edificios" value="0">
            	</td>
            </tr>
            <tr>
            	<td>
        	    	Maquinaria y Equipo
                </td>
                <td>
                    <input type="number" id="maquinariaEquipo" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Mobiliario y Equipo de Oficina
                </td>
                <td>
                    <input type="number" id="mobiliarioEquipo" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Vehículos
                </td>
                <td>
                    <input type="number" id="vehiculos" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Inversiones a Largo Plazo
                </td>
                <td>
                    <input type="number" id="inversionesLargoPlazo" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Propiedades de Inversión
                </td>
                <td>
                    <input type="number" id="propiedadesInversion" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Activos Intangibles
                </td>
                <td>
                    <input type="number" id="activosIntangibles" value="0">
                </td>
            </tr>
            <tr>
            	<td colspan="2">
                    <strong>
                        Cuentas Reguladoras de Activo
                    </strong>
                </td>
            </tr>
            <tr>
            	<td>
                    Depreciación Acumulada
                </td>
                <td>
                    <input type="number" id="depreciacionAcumulada" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Amortización Acumulada
                </td>
                <td>
                    <input type="number" id="amortizacionAcumulada" value="0">
                </td>
            </tr>
            <tr>
            	<td colspan="2">
                    <strong>
                        Pasivos Corrientes
                    </strong>
                </td>
            </tr>
            <tr>
            	<td>
                    Cuentas por Pagar
                </td>
                <td>
                    <input type="number" id="cuentasPagar" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Documentos por Pagar
                </td>
                <td>
                    <input type="number" id="documentosPagar" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Gastos por Pagar
                </td>
                <td>
                    <input type="number" id="gastosPagar" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Préstamos Bancarios Corto Plazo
                </td>
                <td>
                    <input type="number" id="prestamosCortoPlazo" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Obligaciones Acumuladas
                </td>
                <td>
                    <input type="number" id="obligacionesAcumuladas" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Impuestos por Pagar
                </td>
                <td>
                    <input type="number" id="impuestosPagar" value="0">
                </td>
            </tr>
            <tr>
            	<td colspan="2">
                    <strong>
                        Pasivos No Corrientes
                    </strong>
                </td>
            </tr>
            <tr>
            	<td>
                    Préstamos Bancarios Largo Plazo
                </td>
                <td>
                    <input type="number" id="prestamosLargoPlazo" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Bonos por Pagar
                </td>
                <td>
                    <input type="number" id="bonosPagar" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Hipotecas por Pagar
                </td>
                <td>
                    <input type="number" id="hipotecasPagar" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Obligaciones Laborales a Largo Plazo
                </td>
                <td>
                    <input type="number" id="obligacionesLaborales" value="0">
                </td>
            </tr>
            <tr>
            	<td>
                    Provisiones para Pasivos y Cargos
                </td>
                <td>
                    <input type="number" id="provisionesPasivos" value="0">
                </td>
            </tr>
        </tbody>
    </table>
    <table align="center">
    	<tr>
    		<td>
    			<div class="center">
      			  <button onclick="calcularBalance()">
      			  	Calcular Balance
      			  </button>
    			</div>
    		</td>
    		<td>
    			<div class="center">
		        	<h2 id="resultado"></h2>
   				</div>
    		</td>
    	</tr>
    </table>
    <br><hr>
    <table align="right">
       <tr>
           <td>
                <a href="Index.html">
                    Regresar al inicio
               </a>
           </td>
       </tr>
    </table>
</body>
</html>
