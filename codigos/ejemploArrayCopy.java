import java.lang.*;
public class ejemploArrayCopy{
	public static void main(String args[]){
		int[] arr = {54,23,657,23,67,894,2,1,234};
		int[] otro = {9,7,5,3,1,2,6,4,6,7,5,2};

		System.out.println("Arreglo antes de copiar");
		for(int i=0; i < otro.length; i++){
			System.out.print(otro[i]);
			System.out.print("\t");			
		}
		//se copian 6 elementos, desde la posicion 0 de arr
		//pero se copian desde la posicion 3 de otro
		System.arraycopy(arr,0,otro,3,arr.length-3); 

		System.out.println();
		System.out.println("Arreglo copiado: ");
		for(int i=0; i < otro.length; i++){
			System.out.print(otro[i]);
			System.out.print("\t");			
		}
		System.out.println();
	}
}