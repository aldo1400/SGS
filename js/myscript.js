$(document).on('ready',constructor);
 function constructor()
  {
	sumarentradas();
  }
  
  function sumarentradas()
 {
	$('#contenido2').on('change','#horas_laboratorio_crea,#horas_teoria_crea,#horas_practica_crea',function()
	{
	var num1=parseInt($('#horas_laboratorio_crea').val());
	var num2=parseInt($('#horas_teoria_crea').val());
	var num3=parseInt($('#horas_practica_crea').val());
	
	$('#nro_creditos_crea').val(num1+num2+num3);
	
	}
	)
 
 }
  
