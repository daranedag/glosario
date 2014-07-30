public class ejemploCaracteresEspeciales{
	public static void main(String args[]){
		String frase = "hola a todos los amigos";
		String frase2 = "y a los que no lo son, también";
		//Uso de \n
		System.out.println(frase +"\n"+frase2);
		//Uso de \b
		System.out.println(frase +"\b\b\b"+frase2);
		//uso de \t
		System.out.println(frase +"\t\t"+frase2);
		//Uso de \r
		System.out.println(frase +"\r"+frase2);
		//Para agregar comillas "..."
		System.out.println("\""+frase+"\"");
		//Para agregar comillas simples '...'
		System.out.println("\'"+frase2+"\'");
		//Para agregar backslash \...\
		System.out.println("\\"+frase+"\\");
		//Uso de \f
		System.out.println(frase +"\f\f"+frase2);
	}
}