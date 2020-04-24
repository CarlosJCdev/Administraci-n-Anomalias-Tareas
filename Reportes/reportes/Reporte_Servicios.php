<?php
require_once('../lib/mpdf.php');

$conn=new mysqli('localhost','usae','1234','usae');
$query ="select * from servicios";
$prepare=$conn->prepare($query);
$prepare->execute();
$resulSet=$prepare->get_result();
while ($datos[]=$resulSet->fetch_array());
$resulSet->close();
$prepare->close();
$conn->close();




$html=' <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <div id="company">
        <h2 class="name">Usae Valle de santiago </h2>
        <div>Centro calle JUAREZ # 33</div>
        <div> cel (602) 519-0450</div>
        <div><a href="mailto:subjefatura@example.com">subjefatura@example.com</a></div>
      </div>
      </div>
    </header>
    <main>
     <!--<div id="details" class="clearfix">
        <div id="client">
          <div class="to">Usae:</div>
          <h2 class="name">Jefatura</h2>
          <div class="address">Centro calle JUAREZ # 33 </div>
          <div class="email"><a href="mailto: jefatura@example.com">jefatura@example.com</a></div>
        </div>-->
        <div id="invoice">
          <h1>Servicios al personal</h1>
        
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">ID</th>
			<th class="service">Encargado</th>
            <th class="desc">Centro</th>
			 <th class="PRICE">Escuela</th>
            <th class="QTY">Fecha</th>
            <th class="TOTAL">Estatus</th>
            
          </tr>
        </thead>
        <tbody>';
foreach ($datos as $dato){
	$html.='<tr>
	<td class="no">'.$dato['id_servicios'].'</td>
            <td class="service">'.$dato['encargado'].'</td>
            <td class="desc">'.$dato['centro'].'</td>
			 <td class="PRICE">'.$dato['nombre'].'</td>
           <td class="QTY">'.$dato['fecha'].'</td>
           <td class="TOTAL">'.$dato['status'].'</td> 
          </tr>
		 
		 
		
		  ';
}
$html.='

	
          </tfoot>
      </table>
      
      <div  class= "fo" id="notices">
       
        <div class="notice">USAE Valle de Saniago</div>
      </div>
    </main>';
$mpdf=new mPDF('c','A4');/*tamano carta*/
$css=file_get_contents('style.css');
$mpdf->writeHTML($css,1);
$mpdf->writeHTML($html);
$mpdf->Output('reporte.pdf','I');

?>