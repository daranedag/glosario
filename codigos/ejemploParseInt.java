public class ejemploParseInt{
	public static void main(String args[]){
		String f1 = "123";  //notar que el 123 aqui está como cadena
		int valor = Integer.parseInt(f1);  //aqui se transforma esa cadena en numero si es posible
		System.out.println(valor); 
		valor++;
		System.out.println(valor);  
	}
}