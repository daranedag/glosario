import java.util.*;
public class ejemploThrow{
	public static void main(String[] args){
		boolean sigue = true;
		while(sigue){
			try{
				Scanner teclado = new Scanner(System.in);
				System.out.print("Ingresa un numero entre 2 y 9: ");
				int N = teclado.nextInt();
				if(N < 2 || N > 9){
					//el uso del throw aqui es para reingresar el numero si éste está fuera del rango deseado
					throw new Exception("Numero fuera de rango!");					
				}
				System.out.println("Su numero: "+N);
				sigue = false;
			}
			catch(InputMismatchException ex){
				System.out.println("Ingresaste algo distinto a un entero!!");
			}
			catch(Exception ex1){
				System.out.println(ex1.getMessage());
			}
		}
	}
}