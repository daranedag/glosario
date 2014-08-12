import java.util.*;
import java.io.*;
public class ejemploEscritura{
	public static void main(String args[]) throws IOException{
		Scanner teclado = new Scanner(System.in);
		//Pide nombre del archivo a crear
		System.out.print("Ingrese nombre de archivo: ");
		String nombre_arch = teclado.nextLine();
		
		//Se le agrega la extension
		nombre_arch = nombre_arch.concat(".txt");
		
		//Se crea el archivo de salida
		PrintWriter salida = new PrintWriter(nombre_arch);

		//Se piden lineas de texto para llenar el archivo hasta que presione Enter
		System.out.print("Ingrese texto: ");
		String texto = teclado.nextLine();
		while(!texto.equals("")){
			salida.println(texto);	
			System.out.print("Ingrese texto: ");
			texto = teclado.nextLine();
		}
		salida.close();
		System.out.print("Abre el archivo ");
		System.out.print(nombre_arch);
		System.out.println(" para verificar su contenido!!");
	}
}