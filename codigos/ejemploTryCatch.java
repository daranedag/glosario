import java.util.*;
import java.lang.*;
public class ejemploTryCatch{
	public static void main(String args[]){
		Random aleatorio = new Random();
		Scanner teclado = new Scanner(System.in);

		try{
			System.out.print("Ingrese un numero: ");
			int n = teclado.nextInt();
			int r = aleatorio.nextInt(n);
			System.out.print("El numero aleatoriamente generado fue: ");
			System.out.println(r);
		}
		catch(InputMismatchException e){
			System.out.println("Ingresó un caracter distinto a un numero... el programa finalizará");
		}
		catch(IllegalArgumentException e){
			System.out.println("Ingresó un numero negativo y por lo tanto no válido... el programa finalizará");
		}
	}
}