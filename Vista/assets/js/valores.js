 
function Num(string){//solo letras
	var out = '';
	//Se añaden las letras y numeros validas
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890';//Caracteres validos
	
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
		   out += string.charAt(i);
    return out;
}
 
