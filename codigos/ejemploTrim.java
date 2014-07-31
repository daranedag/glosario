public class ejemploTrim{
	public static void main(String args[]){
		String frase = "        esta es una frase con muchos espacios en sus extremos             ";
		String nueva = frase.trim();
		System.out.println("Primera frase: "+frase);
		System.out.println("Nueva frase: "+nueva+"\n pero ahora ya no tiene esos espacios porque usamos trim");
	}
}