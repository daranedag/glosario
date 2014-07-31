public class ejemploValueOf{
	public static void main(String args[]){
		char f1 = '1';  //notar que el 1 aqui está como caracter
		int valor = Integer.valueOf(f1);  //aqui se guarda el ordinal del caracter 1
		System.out.println(valor);  
	}
}