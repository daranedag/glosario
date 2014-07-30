import java.util.Scanner;   //importar biblioteca
public class ejemploEntrada{  // nueva clase publica llamada ejemploEntrada
	public static void main(String[] args){	//metodo principal para ejecutar el programa
		//crear instancia de la clase Scanner llamada keyboard en este caso (se puede utilizar otro nombre a gusto)
		Scanner keyboard = new Scanner(System.in);
		System.out.print("Ingrese un numero: ");
		int num = keyboard.nextInt();   //ingreso del numero que se guarda en la variable num de tipo entero
		System.out.println("El numero ingresado fue: "+num);
	}
}