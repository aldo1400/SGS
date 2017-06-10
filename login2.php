<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

<title>Intranet DRAT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<!------------------------------------------------------estilo de la pagina login2.php-------------------------------------------------->

<link href="styles.css" rel="stylesheet" type="text/css" />



<!----------------------------------------------------------estilo del calendario ------------------------------------------------------>
           <link rel="stylesheet" href="css/calendar.css" media="screen">

<script type="text/javascript" src="back.js"></script>

<!------------------------------------------------------------Estilo de la ventana emergente------------------------------------------------------------------>

<link href="ESTILOS_MODAL.css" rel="stylesheet" type="text/css" />


<!-------------------------------------------archivos javascript que tienen que ver con el banner slider--------------------------------->
	
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>


<!-----------------------------------------------fin de archhivos javascript que tienen que ver con el banner slider---------------------------------->

<script> 
function abrir() { 
open('https://goo.gl/forms/g1UOtza3jbMrnaRG2','','top=300,left=300,width=600,height=600') ; 
} 
</script> 


<script>
			$(document).ready(function(){
	    		$('#Python').click(function(){
	       		$("#contenido").load("python.html");
	    									 });

	    		$('#Django').click(function(){
	       		$("#contenido").load("c_django.html");
	    									 });

	    		$('#Jython').click(function(){
	       		$("#contenido").load("c_jython.html");
	    									 });
										});
		</script>
		
		
		

<!-----
<SCRIPT LANGUAGE="JavaScript">

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
var expDays = 1; // n�mero de d�as que debe durar la cookie

var page = "https://goo.gl/forms/g1UOtza3jbMrnaRG2";//aqu� debes poner la direccion de la pagina que se va a abrir

var windowprops = "width=300,height=200,location=no,toolbar=no,menubar=no,scrollbars=no,resizable=yes";
//En la linea anterior, puedes modificar las propiedades de la ventana

function GetCookie (name) { 
var arg = name + "="; 
var alen = arg.length; 
var clen = document.cookie.length; 
var i = 0; 
while (i < clen) { 
var j = i + alen; 
if (document.cookie.substring(i, j) == arg) 
return getCookieVal (j); 
i = document.cookie.indexOf(" ", i) + 1; 
if (i == 0) break; 
} 
return null;
}
function SetCookie (name, value) { 
var argv = SetCookie.arguments; 
var argc = SetCookie.arguments.length; 
var expires = (argc > 2) ? argv[2] : null; 
var path = (argc > 3) ? argv[3] : null; 
var domain = (argc > 4) ? argv[4] : null; 
var secure = (argc > 5) ? argv[5] : false; 
document.cookie = name + "=" + escape (value) + 
((expires == null) ? "" : ("; expires=" + expires.toGMTString())) + 
((path == null) ? "" : ("; path=" + path)) + 
((domain == null) ? "" : ("; domain=" + domain)) + 
((secure == true) ? "; secure" : "");
}
function DeleteCookie (name) { 
var exp = new Date(); 
exp.setTime (exp.getTime() - 1); 
var cval = GetCookie (name); 
document.cookie = name + "=" + cval + "; expires=" + exp.toGMTString();
}
var exp = new Date(); 
exp.setTime(exp.getTime() + (expDays*24*60*60*1000));
function amt(){
var count = GetCookie('count')
if(count == null) {
SetCookie('count','1')
return 1
}
else {
var newcount = parseInt(count) + 1;
DeleteCookie('count')
SetCookie('count',newcount,exp)
return count
}
}
function getCookieVal(offset) {
var endstr = document.cookie.indexOf (";", offset);
if (endstr == -1)
endstr = document.cookie.length;
return unescape(document.cookie.substring(offset, endstr));
}

function checkCount() {
var count = GetCookie('count');
if (count == null) {
count=1;
SetCookie('count', count, exp);

window.open('page', "", windowprops);

}
else {
count++;
SetCookie('count', count, exp);
}
}
// End -->
</script>


----->

<!----------------------------------FUNCION PARA EVITAR QUE SE RECARGE EL BOTON DE ATRAS CUANDO SE CIERRE SESIÓN---------------------------------->
<script Language="JavaScript">
if(history.forward(1))
{
history.replace(index.php);
}
</script>




</head>
<!--<body onload="abrir()">
--->

<body >
    
    


    <header>
        
        <!-------------------------------------------FUNCION VENTANA EMERGENTE-------------------------------------------------------------------------------------->
        
     <input type="checkbox" id="cerrar">
	<label for="cerrar" id="btn-cerrar">   X</label>

<div class="modal">
<div class="contenido">
	
<h2><center>Visita nuestro blog</center></h2>
<br>
<img src="http://www.todoperros.com/wp-content/uploads/2016/08/perro.jpg" alt="">


<!------------------------------------------FIN DE  FUNCION VENTANA EMERGENTE-------------------------------------------------------------------------------------->

</div>
</div>   
        
     
<!-------------------------------------MENU AZUL EN LA PARTE DE ARRIBA QUE NO DESARAPECE-------------------------------------->


<div class="contenedor">
				<nav class="menu-fixed">
				<ul>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Proyectos</a></li>
					<li><a href="#">Trabajos</a></li>
					<li><a href="#">Contacto</a></li>
					<li><a href="logout.php" align="right">Cerrar sesión</a></li>
					<text align=left>Bienvenido <!---<img src="images/Home.png" width="40" height="28" align="right" />---->
					<a href="logout.php"><img src="images/cerrar_sesion.png" width="90" height="40" align="right" /></a>
				</ul>
			</nav>
			</div>
			
			
			
			<!----------------------------------FIN DEL MENU AZUL EN LA PARTE DE ARRIBA QUE NO DESARAPECE-------------------------------------->


</header>
   
<div id="mainbg">
 
   




<div id="main">
    <br>
    <br>
    <br>
    <br>

<br>
<!-- header begins -->



<!--------------------------------------------------SECCION DONDE SE ENCUENTRA EL BANNER Y EL MENU PRINCIPAL---------------------------------------------->


<div id="logo" ><img src="images/Banner_Intranet.jpg"width="1014" height="215" />
		<h2><Bienvenido </a></h2>
	</div>
<div id="header"></div>
	<div id="buttons">
		<ul>
			<li class="first">
			 <a href="#"  title=""><img src="images/Home.png" width="40" height="28" align="center" />   Home</a></li>
			<li><a href="#" title="">  </a></li>
			<li><a href="galeria/galeria.html" title=""><img src="images/camara_icono.png" width="40" height="30" align="center" />  Galeria</a></li>
			<li><a href="#" title="">Acerca de nosotros</a></li>
			<li><a href="upload1.php" title="">SUBIDA</a></li>
		</ul>
</div>

<!------------------------------------------------FIN DE SECCION DONDE SE ENCUENTRA EL BANNER Y EL MENU PRINCIPAL---------------------------------------------->
<!-- header ends -->
<!-- content begins -->
<div id="content_bg">
  <div id="content">
  
  


  
  <!------------------------------------------------------------SECCION DEL BANNER SLIDER------------------------------------------------------------->
	
  <div id="slides-container">
        <div id="slides">
            <div>
                <div class="slide-image"><A HREF="https://goo.gl/forms/g1UOtza3jbMrnaRG2" target="_blank"><img src="FUNCIONARIO_ICONO.png" width="300" height="250" alt="Slide #0 image" /></div>
                <div class="slide-text">
                    <a href="https://goo.gl/forms/g1UOtza3jbMrnaRG2" target="_blank"><h2>SERVIDOR PUBLICO 2017</h2></a>
                    <p>En este formulario sera llenado por el funcionario que propone al servidor publico </p>

            
                </div>
				
            </div>
            
            <div>
                <div class="slide-image"><A HREF="https://docs.google.com/forms/d/e/1FAIpQLScBuT1ZZ6HL8M8F9EqnMXNYOjsgIWIioGN3iVztnqpEanOiTw/viewform?embedded=true" target="_blank"><img src="images/ENCUESTA_SUTSA_SLIDE.png" width="300" height="250" alt="Slide #1 image" /></div>
                <div class="slide-text">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScBuT1ZZ6HL8M8F9EqnMXNYOjsgIWIioGN3iVztnqpEanOiTw/viewform?embedded=true" target="_blank"><h2>ELECCIONES SUTSA 2016</h2></a>
                    <p>Agregar descripción </p>

            
                </div>
				
            </div>
            <div>
                <div class="slide-image"><A HREF="https://goo.gl/forms/LQ6JKVJ4r5DtlQYz2" target="_blank"><img src="images/datos_personales_slide.png" width="300" height="250" alt="Slide #2 image" /></div>
                <div class="slide-text">
                    <a href="https://goo.gl/forms/LQ6JKVJ4r5DtlQYz2" target="_blank"><h2>FORMULARIO DE DATOS PERSONALES DRAT</h2></a>
                    <p> Agregar descripción </p>

            
                </div>
            </div>
			
			
			
			<div>
                <div class="slide-image"><A HREF="https://goo.gl/forms/Puts4kXi9S5kTonv1" target="_blank"><img src="images/servicios_publicos_slide.png" width="300" height="250" alt="Slide #3 image" /></div>
                <div class="slide-text">
                    <a href="https://goo.gl/forms/Puts4kXi9S5kTonv1" target="_blank"><h2>TALLER REGIONAL “ACCESO A LOS SERVICIOS PÚBLICOS AGRARIOS”</h2></a>
                    <p> Agregar descripción </p>

            
                </div>
            </div>
			
            
            
            <div>
                <div class="slide-image slide-image-right"><A HREF="https://goo.gl/forms/ffEod7EieZJdWvEQ2" target="_blank"><img src="images/quinua_slide.png" width="300" height="250" alt="Slide #4 image" /></div>
                <div class="slide-text">
                    <A HREF="https://goo.gl/forms/ffEod7EieZJdWvEQ2" target="_blank"><h2>CONFERENCIA: "ALTERNATIVAS DE SOLUCIÓN EN EL CULTIVO DE LA QUINUA PARA LA EXPORTACIÓN"</h2></A>
                    <p>Agregar descripción</p>

            
                </div>
            </div>
            
            
            <div>
                <div class="slide-image slide-image-right"><A HREF="https://goo.gl/forms/BXc6q0XXFyHxWyPV2" target="_blank"><img src="images/transparencia_slide.png" width="300" height="250" alt="Slide #5 image" /></div>
                <div class="slide-text">
                     <A HREF="https://goo.gl/forms/BXc6q0XXFyHxWyPV2" target="_blank"> <h2>Control de Transparencia - Acceso a la Información</h2></a>
                     <p>Agregar descripción</p>
                    

            
                </div>
            </div>
            
            <div>
                <div class="slide-image slide-image-right"><A HREF="https://goo.gl/forms/eU6E8RwaUJZDsI0H3" target="_blank"><img src="images/asistencia_slide.png" width="300" height="250" alt="Slide #5 image" /></div>
                <div class="slide-text">
                    <A HREF="https://goo.gl/forms/eU6E8RwaUJZDsI0H3" target="_blank"><h2>REGISTRO Y CONTROL DE VISITAS DRAT</h2></A>
                      <p>Agregar descripción</p>

            
                </div>
            </div>
            
            
            <div>
                <div class="slide-image slide-image-right"><A HREF="https://goo.gl/forms/sdrPUNbYrfvmWoTF3" target="_blank"><img src="images/asistencia_sin_autorizacion.png" width="300" height="250" alt="Slide #5 image" /></div>
                <div class="slide-text">
                    <A HREF="https://goo.gl/forms/sdrPUNbYrfvmWoTF3" target="_blank"><h2>REGISTRO Y CONTROL DE SALIDA DE PERSONAL SIN AUTORIZACIÓN DRAT</h2></A>
                    <p>Agregar descripción</p>

            
                </div>
            </div>
            
            
			
			<div>
            	<h2>PROXIMAMENTE</h2>
                <p>probando 1 2 3</p>
            </div>
			
		</div>
        <div class="controls"><span class="jFlowNext"><span>Next</span></span><span class="jFlowPrev"><span>Prev</span></span></div>        
        <div id="myController" class="hidden"><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span></div><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span>
        <span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span></div>
    </div>
  
  
  
  <!---------------------------------------------------------------------------FIN DE LA  SECCION DEL BANNER SLIDER------------------------------------------------------------->
  
	<div id="right">
	    
	    
	    <style>
  nav{
	width:300px;
	height:auto;
	font-family:'Open Sans',sans-serif ;
	margin: 0px auto;
	overflow:hidden;
	}
	
.item input{
	display:none;
	}
.item  label{
	display:block;
	padding:10px;
	background-color:#626938;
	font-size:18px;
	color:#fff;
	cursor:pointer;
	border-bottom:solid 2px #aaa;
	}

.item label span{
	padding-left:240px;
	transform:rotateX(45deg);
	}
.item label:hover{
	background-color:#f2673a;
	}

.item ul{
	overflow:hidden;
	max-height:0;
	transition: all .4s;
	background-color:#fff;
	width:100%;		
	}
.item ul li a{
	width:100%;
	height: 10px;
	background-color:#fafafa;
	display:block;
	text-decoration:none;
	color: #333;
	border-bottom: 2px solid #aaa;
	padding: 8px;
	}

.item ul li a:hover{
	background-color:#9CF;
	}


.item input:checked ~ ul{
	height:auto;
	max-height:600px;
	transition: all .4s linear;
	}
	
.item input:checked ~ label span{
	
	}
  </style>
  
  
  <!--------------------------------------------------------------------MENU LATERAL DE OFICINAS----------------------------------------------------------------------------------------->
  
  <nav>
    <div class="item"> 
    <label for="check0"><center><img src="images/Office.png" width="40" height="30" align="center" />  OFICINAS</center></label>
    </div>
    <div class="item">
    	<input type="checkbox" id="check1">
		<label for="check1"><img src="images/organigrama.svg" width="40" height="30" align="center" />Planificación</label>
       <ul>
       		<li><a href="">Unidad de Desarrollo Institucional</a></li>
            <li><a href="">Unidad de Proyectos de Inversión</a></li>
            <li><a href="">Unidad de Presupuesto</a></li>
       </ul>
    </div>
    <div class="item">
    	<input type="checkbox" id="check2">
		<label for="check2"><img src="images/ICONO-ASESORIA.png" width="40" height="30" align="center" />Asesoría legal</label>
       <ul>
       		<li><a href="">agregar</a></li>
       </ul>
    </div>
      <div class="item">
    	<input type="checkbox" id="check3">
		<label for="check3"><img src="images/iconNegocios.png" width="40" height="30" align="center" />Administración</label>
          <ul>
       		<!--<li><a href="">Unidad de tesoreria</a></li>--->
       		<div class="item">
       		<input type="checkbox" id="check4">
       		<label for="check4">Unidad de tesoreria</label>
            <ul>
              <li><a href="">Área de Pagaduria</a></li>
              <li><a href="">Área de Conciliaciones</a></li>
             </ul>
             </div>
             
             <div class="item">
             <input type="checkbox" id="check5">
       		<a href="index.php"><label for="check5">Unidad de contabilidad</label></a>
            <ul>
              <li><a href="">Vídeosfgdf</a></li>
             </ul>
            </div>
             
             
             <div class="item">
             <input type="checkbox" id="check6">
       		<label for="check6">Unidad de personal</label>
            <ul>
              <li><a href="">Capacitación y Procesos Técnicos</a></li>
              <li><a href="">Remuneraciones y Certificaciones</a></li>
              <li><a href="">Asistencia Escalafón y Registro</a></li>
              <li><a href="">Bienestar y Proyección Social</a></li>
             </ul>
             </div>
             
            <div class="item"> 
             <input type="checkbox" id="check7">
       		<label for="check7">Unidad de logistica</label>
            <ul>
              <li><a href="">Tecnología de la Información</a></li>
              <li><a href="">Equipo Mecánico</a></li>
              <li><a href="">Almacén </a></li>
              <li><a href="contrataciones2.0.php">Contrataciones</a></li>
              <li><a href="">Gestión Patrimonial</a></li>
              
             </ul>
              </div>
            
       </ul>
    </div>
</nav>
	    <!----------------------------------------------FIN DEL MENU LATERAL DE OFICINAS------------------------------------------------------------------------------------->
	    <!----
		<h2>Categorias</h2>
			<ul>

				  <li><a href="#">Noticia 1 </a><br /><br />Agregar descripción<div class="read"><a href="#">Lee mas </a></div></li>
				  <li><a href="#">Noticia 1 </a><br /><br />Agregar descripción<div class="read"><a href="#">Lee mas </a></div></li>
				  <li><a href="#">Noticia 1 </a><br /><br />Agregar descripción<div class="read"><a href="#">Lee mas </a></div></li>
				  <li><a href="#">Noticia 1 </a><br /><br />Agregar descripción<div class="read"><a href="#">Lee mas </a></div></li>
				  <li><a href="#">Noticia 1 </a><br /><br />Agregar descripción<div class="read"><a href="#">Lee mas </a></div></li>
				  <li><a href="#">Noticia 1 </a><br /><br />Agregar descripción<div class="read"><a href="#">Lee mas </a></div></li>
				  <li><a href="#">Noticia 1 </a><br /><br />Agregar descripción<div class="read"><a href="#">Lee mas </a></div></li>
				  <li><a href="#">Noticia 1 </a><br /><br />Agregar descripción<div class="read"><a href="#">Lee mas </a></div></li>
				  <li><a href="#">Noticia 2 </a><br /><br />Agregar descripción <div class="read"><a href="#">read more</a></div></li>
			</ul>
			
			---->
	</div>
          <!--	<div id="contenido">--->
          	
          	
          	<!-----------------------------------------------------------------SECCION IZQUIERDA---------------------------------------------------------------------------->
          	
          	<div id="left">
          	    
          	    <!-----------------------------------------------------------------SECCION BIENVENIDA----------------------------------------------------------------------->
			<h1>Bienvenido a nuestro sitio web</h1>
		<div id="text">
		<img src="bienvenido.png" alt="" title="" style="padding-right:15px; float:left; padding-left:5px;" width="160" height="100"/>
                <p>Te damos la más cordial de las bienvenidas a Intranet de la DRATACNA. Tras registrarte, podrás acceder a informaciones que esperamos serán útiles para tu trabajo y fortalecer la gran familia de nuestra institución.<p>
                    <p>Además, podrás informarte de noticias de la institución.</p>
                    <p>Podrás descargar las directivas y formularios administrativos como registro de asistencias,participación en talleres, elecciones,etc.</p>
                    
                    <p>Quiero aprovechar la oportunidad para enviarles un saludo afectuoso y los invito a conocer más acerca de esta Intranet y a comenzar a trabajar en la misma.</p>
                
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!---------------------------------------------------------------------------SECCION RESOLUCIONES----------------------------------------------------------->
        
        
        
        <h1>RESOLUCIONES</h1>
		<div id="text">
		<!----<img src="images/pic01.jpg" alt="" title="" style="padding-right:15px; float:left; padding-left:5px;" />--->
                
			    <a href="uploads/CAFAE_I.pdf" download="CAFAE I"><img src="images/icono_pdf.png" width="40" height="50" align="center" />CAFAE I
			        </a>
			        
			      <img src="images/icono_pdf.png" width="40" height="50" align="center" />ORGANIGRAMA
			     <a href="pdfs/organigrama.pdf" download="Organigrama">   Descargar Archivo</a>
			    <br><br>
			    
			    <img src="images/icono_pdf.png" width="40" height="50" align="center" />ORGANIGRAMA
			     <a href="pdfs/organigrama.pdf" download="Organigrama">   Descargar Archivo</a>
			     <img src="images/icono_pdf.png" width="40" height="50" align="center" />ORGANIGRAMA
			     <a href="pdfs/organigrama.pdf" download="Organigrama">   Descargar Archivo</a>
			    <br><br>
			    
			    <img src="images/icono_pdf.png" width="40" height="50" align="center" />ORGANIGRAMA
			     <a href="pdfs/organigrama.pdf" download="Organigrama">   Descargar Archivo</a>
			     <img src="images/icono_pdf.png" width="40" height="50" align="center" />ORGANIGRAMA
			     <a href="pdfs/organigrama.pdf" download="Organigrama">   Descargar Archivo</a>
			    <br><br>
			    
			    <img src="images/icono_pdf.png" width="40" height="50" align="center" />ORGANIGRAMA
			     <a href="pdfs/organigrama.pdf" download="Organigrama">   Descargar Archivo</a>
			     <img src="images/icono_pdf.png" width="40" height="50" align="center" />ORGANIGRAMA
			     <a href="pdfs/organigrama.pdf" download="Organigrama">   Descargar Archivo</a>
			    <br><br>
			    
			<div class="hrd"></div><br />
			
	<!----		
	<a href="#" id="Python">Python</a>
	<a href="#" id="Django">Django</a>
	<a href="#" id="Jython">Jython</a>		
	---->		
			
			<!----------------------------------------------SECCION DE BIENVENIDA 2--------------------------------------------------------------------------->
			
			
<h1>Bienvenido a nuestro sitio web</h1>
<img src="images/pic02.jpg" alt="" title="" style="padding-right:15px; float:left; padding-left:5px;" />
<p>Agregar información 1 </p>
<p>Agregar información 2</p>



<div class="hrd"></div>


			<br /><br><br><br><br><br><br><br>
			
			
			<!----------------------------------------------------SECCION DE ACCESOS DIRECTOS------------------------------------------------------------------------>
			
			
<h1>ACCESOS DIRECTOS</h1>

<a href="http://www.peru.gob.pe/transparencia/pep_transparencia_lista_planes.asp?id_entidad=136&amp;id_tema=1" target="_blank">
<img src="images/Portal_transparencia_icono.png" width="140" height="60" align="center" /></a></href>


<a href="http://www.peru.gob.pe" target="_blank">
<img src="images/portal-estado-peruano.png" width="150" height="60" align="center" /></a></href>



<a href="http://www.regiontacna.gob.pe" target="_blank">
<img src="images/GRT.png" width="150" height="60" align="center" /></a></href>

<br>
<br>

<a href="http://www.minag.gob.pe" target="_blank">
<img src="images/minagri.jpg" width="150" height="60" align="center" /></a></href>


<a href="http://www.ana.gob.pe" target="_blank">
<img src="images/ana_icono.png" width="150" height="60" align="center" /></a></href>

<a href="https://www.dratacna.gob.pe:2096/cpsess3741125115/3rdparty/roundcube/?_task=mail" target="_blank">
<img src="images/correo_icono.png" width="150" height="60" align="center" /></a></href>

<br>
<br>
<br>
<BR>
<BR>
    
    
<div class="hrd"></div><br />


<!--------------------------------------------------------------SECCION CALENDARIO------------------------------------------------------------------------>


<H1>CALENDARIO</H1>
<div id="calendar"></div>
<script src="js/jquery-ui-datepicker.min.js"></script>
<script>
	$('#calendar').datepicker({
		inline: true,
		firstDay: 1,
		showOtherMonths: true,
		dayNamesMin: ['DOM', 'LUN', 'MAR', 'MIE', 'JUE', 'VIE', 'SAB']
	});
</script>


           </div>

	</div>
    </div>
    
    <!---</div>---->
    
    <!----------------------------------------------------------FIN DE SECCION IZQUIERDA--------------------------------------------------------------------------------------->
</div>
<!-- content ends -->
<!-- footer begins -->
<!--------------------------------------------------------------------SECCION PIE DE PAGINA------------------------------------------------------------------------>
<div id="footer">
  <p>DRAT 2017 - Derechos Reservados | Área de Tecnología de la Información </p>
		<p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p></div>
<!-- footer ends -->
</div>
</div>
<div style="text-align: center; font-size: 0.75em;">Diseño descargado desde <a href="http://www.misplantillas.com/">plantillas web gratis y profesionales</a>.</div></body>
</html>