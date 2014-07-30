import java.util.*;
public class ejemploCasteo{
	public static void main(String args[]){
		Random aleatorio = new Random();   //generar numeros aleatorios
		int numero = 67 + aleatorio.nextInt(94);	// genera numero aleatorio entre 67 y 94 para obtener un caracter de mayusculas
		char oculto = (char)numero;		// casting explicito para transformar el numero en un caracter
		System.out.println(oculto);		//mostrar caracter

		char otro = oculto;		//toma el numero anterior
		int numero2 = otro;		//casting implicito
		System.out.println(numero2);	//mostrar numero
	}
}