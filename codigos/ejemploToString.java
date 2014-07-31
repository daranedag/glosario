public class ejemploToString{
	public static void main(String args[]){
		int a = 2134;
		char b = 'D';
		String cadena = "Los datos son: ";
		cadena = cadena.concat(Integer.toString(a)).concat(" y ademas ").concat(Character.toString(b));
		System.out.println(cadena);
	}
}