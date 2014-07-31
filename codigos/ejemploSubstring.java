import java.util.*;
public class ejemploSubstring{
	public static void main(String args[]){
		Scanner teclado = new Scanner(System.in);
		Random aleatorio = new Random();
		System.out.print("Ingrese una frase: ");
		String ingreso = teclado.nextLine();
		int largo = ingreso.length();		//largo de la cadena ingresada
		int num = aleatorio.nextInt(largo-1);	//generacion aleatoria de un numero
		int num2 = aleatorio.nextInt(largo-1);
		while (num2 < num){		//Este while es para evitar que num2 sea mayor que num
			num2= aleatorio.nextInt(largo-1);
		}
		String nuevo = ingreso.substring(num, num2);	//uso de substring con los numeros generados
		System.out.println("La frase ingresada fue: "+ingreso);
		System.out.println("La frase cortada aleatoriamente fue: "+ nuevo);
	}
}