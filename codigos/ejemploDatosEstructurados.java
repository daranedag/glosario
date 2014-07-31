import java.util.*;
public class ejemploDatosEstructurados{
	public static void main(String args[]){
		Random aleatorio = new Random();
		Scanner teclado = new Scanner(System.in);
		System.out.print("Ingrese cantidad de elementos: ");
		int n = teclado.nextInt();
		int[] Arr = new int[n];  //Declaracion y asignacion de memoria del arreglo

		for(int i=0; i<n; i++){
			Arr[i] = aleatorio.nextInt(50);  //Se llena el arreglo con numeros aleatorios entre 0 y 50
		}

		//Se muestra el arreglo
		System.out.println("El arreglo generado es: ");
		for(int i=0; i<n; i++){
			System.out.print(Arr[i]);
			System.out.print("\t");			
		}
	}
}