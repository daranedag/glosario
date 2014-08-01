import java.util.*;
public class ejemploMatriz{
	public static void main(String args[]){
		Random aleatorio = new Random();
		Scanner teclado = new Scanner(System.in);
		System.out.print("Ingrese numero de filas: ");
		int filas = teclado.nextInt();
		System.out.print("Ingrese numero de columnas: ");
		int columnas = teclado.nextInt();
		
		int matriz[][] = new int[filas][columnas];

		//llenar la matriz con numeros aleatorios
		for(int i=0; i < filas; i++){
			for(int j=0; j < columnas; j++){
				matriz[i][j] = aleatorio.nextInt(50);
			}
		}

		//mostrar la matriz generada (en forma de matriz)
		System.out.println("La matriz resultante fue: ");
		for(int i=0; i < filas; i++){
			for(int j=0; j < columnas; j++){
				System.out.print(matriz[i][j]);
				System.out.print("\t");
			}
			System.out.println();
		}			
	}
}