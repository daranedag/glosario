import java.util.*;
public class ejemploLength{
	public static void main(String args[]){
		Scanner teclado = new Scanner(System.in);
		System.out.print("Ingrese una frase: ");
		String ingreso = teclado.nextLine();
		int largo = ingreso.length();
		System.out.println("El texto ingresado tiene: "+largo+" caracteres");
	}
}