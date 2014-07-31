public class ejemploEquals{
	public static void main(String args[]){
		String cadena1 = "hola";
		String cadena2 = "hOlA";
		if(cadena1.equals(cadena2)){
			System.out.println("Las cadenas son iguales");
		}
		else{
			System.out.println("Las cadenas NO son iguales");
		}
	}
}