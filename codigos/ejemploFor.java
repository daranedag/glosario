import java.util.Scanner;   //importar biblioteca
public class ejemploFor{  // nueva clase publica llamada ejemploFor
	public static void main(String[] args){	//metodo principal para ejecutar el programa
		//crear instancia de la clase Scanner llamada keyboard en este caso (se puede utilizar otro nombre a gusto)
		Scanner keyboard = new Scanner(System.in);
		System.out.print("Ingrese un numero: ");
		int num = keyboard.nextInt();   //ingreso del numero que se guarda en la variable num de tipo entero
		for(int i=0; i < num; i++){
			//instrucciones que se ejecutaran las veces que diga el usuario al ingresar el numero
			System.out.println("INFO 023-Programación");
		}															
	}
}