public class ejemploEqualsIgnoreCase{
	public static void main(String args[]){
		String cadena1 = "hola";
		String cadena2 = "hOlA";
		if(cadena1.equalsIgnoreCase(cadena2)){
			System.out.println("Las cadenas dicen lo mismo");
		}
		else{
			System.out.println("Las cadenas NO dicen lo mismo");
		}
	}
}