import java.util.*;
public class ejemploLength2{
	public static void main(String args[]){
		Random aleatorio = new Random();
		Scanner teclado = new Scanner(System.in);
		int num = aleatorio.nextInt(6);
		int[] arr= new int[num];
		for(int i=0; i < num; i++){
			System.out.print("Ingrese numero: ");
			arr[i] = teclado.nextInt();
		}
		int largo = arr.length;  //en este caso, num = largo
		System.out.println("El arreglo resultante fue: ");
		for(int i=0; i < largo; i++){
			System.out.print(arr[i]);
			System.out.print("\t");
		}
		System.out.println();
		System.out.print("El largo del arreglo es: ");
		System.out.println(largo);

	}
}