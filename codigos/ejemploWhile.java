import java.util.Scanner;   //importar biblioteca
public class ejemploWhile{  // nueva clase publica llamada ejemploWhile
	public static void main(String[] args){	//metodo principal para ejecutar el programa
		//crear instancia de la clase Scanner llamada keyboard en este caso (se puede utilizar otro nombre a gusto)
		Scanner keyboard = new Scanner(System.in);
		System.out.print("Ingrese un numero: ");
		int num = keyboard.nextInt();   //ingreso del numero que se guarda en la variable num de tipo entero
		//validación para que el numero ingresado por el usuario sea positivo, es decir, rechaza los negativos
		while(num <= 0){
			//instrucciones que se ejecutan mientras el numero ingresado por el usuario sea 0 o negativo
			System.out.print("Error...el numero debe ser positivo\n Ingrese un numero: ");
			num = keyboard.nextInt();
		}
		System.out.println("Numero ingresado correctamente");															
	}
}