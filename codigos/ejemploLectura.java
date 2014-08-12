import java.util.*;
import java.io.*;
public class ejemploLectura{
	public static void main(String[] args) throws IOException{
		try{
			File documento = new File("miarchivo.txt");
			Scanner entrada = new Scanner(documento);
			while(entrada.hasNextLine()){
				String linea = entrada.nextLine();
				System.out.println(linea);
			}
			System.out.println("Fin del archivo y del programa");			
		}
		catch (IOException ex){
			System.out.println(ex.getMessage());
		}
	}
}