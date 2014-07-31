import java.util.*;
public class ejemploLastIndexOf{
	public static void main(String args[]){
		Scanner teclado = new Scanner(System.in);
		System.out.print("Ingrese una frase: ");
		String ingreso = teclado.nextLine();
		char buscar = 'a';
		int encontrado = ingreso.lastIndexOf(buscar);
		System.out.println("La ultima ocurrencia del caracter \'"+buscar+"\' se encuentra en la posición: "+encontrado);
	}
}