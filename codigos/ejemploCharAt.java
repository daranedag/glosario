import java.util.*;
public class ejemploCharAt{
	public static void main(String args[]){
		Scanner teclado = new Scanner(System.in);
		Random aleatorio = new Random();
		System.out.print("Ingrese una frase: ");
		String ingreso = teclado.nextLine();
		int largo = ingreso.length();
		int posicion = aleatorio.nextInt(largo);
		char oculto = ingreso.charAt(posicion);
		System.out.println("En la frase ingresada, el caracter: \'"+oculto+"\' se encontraba en la posicion:"+posicion);
	}
}