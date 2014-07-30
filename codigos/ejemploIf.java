import java.util.Scanner;   //importar biblioteca
public class ejemploIf{  // nueva clase publica llamada ejemploIf
	public static void main(String[] args){	//metodo principal para ejecutar el programa
		//crear instancia de la clase Scanner llamada keyboard en este caso (se puede utilizar otro nombre a gusto)
		Scanner keyboard = new Scanner(System.in);
		System.out.print("Ingrese un numero: ");
		int num = keyboard.nextInt();   //ingreso del numero que se guarda en la variable num de tipo entero
		if(num % 2 == 0){  	// condición se encuentra entre parentesis
			// Instrucciones a realizar si se cumple la condición
			System.out.println("El numero ingresado es PAR");	
		}
		else{		//negación de la condición del if
			// Instrucciones a realizar de no cumplirse la condición
			System.out.println("El numero ingresado es IMPAR");
		}
	}
}