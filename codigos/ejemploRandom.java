import java.util.Scanner;   //importar biblioteca
import java.util.Random;
public class ejemploRandom{  // nueva clase publica llamada ejemploRandom
	public static void main(String[] args){	//metodo principal para ejecutar el programa
		//crear instancia de la clase Scanner llamada keyboard en este caso (se puede utilizar otro nombre a gusto)
		Scanner keyboard = new Scanner(System.in);
		Random variable = new Random();
		System.out.print("Ingrese un numero: ");
		int num = keyboard.nextInt();   //ingreso del numero que se guarda en la variable num de tipo entero
		int oculto = variable.nextInt(num);
		System.out.println("Solo tienes una oportunidad para adivinar el número secreto...");
		System.out.print("Ingresa un numero: ");
		num = keyboard.nextInt();
		if(num == oculto){
			System.out.println("Ganaste!!");
		}
		else{
			System.out.println("Perdiste!!");
		}
	}
}