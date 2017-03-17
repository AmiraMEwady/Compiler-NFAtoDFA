package nfa;
import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Iterator;
import java.util.LinkedList;
import java.util.Queue;
import java.util.Set;
public class NFA {

	private static final String filename = "D:/GUC intranet folders/Semester 10/AdvancedComputerLab/Task1_22999/Task1/TestCase2/NFA2.in";
	
	public static int initialState =0;
	public static ArrayList<String> alphabet= new ArrayList<String>();
	public static ArrayList<Integer> states = new ArrayList<Integer>();
	public static ArrayList<Integer> AcceptStates = new ArrayList<Integer>();
	public static ArrayList<String[]> transitions= new ArrayList<String[]>();
	public static String[] parts;
	public static String[] parts2;
	public static String[] parts3;
	public static String[] parts4;
	public static int AcceptNum =0;
	
	public static HashMap<Integer, Set<String>> epsilon =new HashMap<Integer, Set<String>>();
	public static Set<String> result = new HashSet<String>();
	public static HashMap<Integer, Integer> res =new HashMap<Integer, Integer>();

	public static Set<String> DFAinitialState = new HashSet<String>();
	public static ArrayList<String[]> DFAtransitions =new ArrayList<String[]>();
	public static ArrayList<Set<String>> DFAstates = new ArrayList<Set<String>>() ;
	public static ArrayList<Integer> DFAAcceptStates = new ArrayList<Integer>();
	
	
	
	
	
	
	public static void epsilonClosure(){
		int currentState;
		for(int i=0; i< states.size();i++){
			currentState = states.get(i);
			Set<String> currentSet = getClosure(currentState);
			epsilon.put(currentState, currentSet);
			
			/*for(int k=0; k<5; k++){
				res.put(k, 2);
			}*/
			
			
			
			
		/*	for (Integer num : epsilon.keySet()) {
		        System.out.print("Key : " + String.valueOf(num) + " Values:");
		        
		        // create an iterator
		        Iterator iterator =epsilon.get(num).iterator(); 
		           
		        // check values
		        while (iterator.hasNext()){
		        System.out.println("Value: "+iterator.next() + " ");  
		        }
		        
		        //for (String player : epsilon.get(num)) {
		         //   System.out.print(" " + player + " ");    
		      //  }
		        System.out.println();
		    }
			
			for (Integer num : res.keySet()){
				 System.out.print("Key : " + String.valueOf(num) + " Values:");
				 System.out.println("Value: "+num + " ");
			} */
			
			
		}
		
	}
	
	public static Set<String> getClosure(int n){
		
		String state = n+"";
		
		for(int i=0; i<transitions.size();i++){
			//System.out.println("DA5AL TRANSITIONS " );
			String [] currentArray = transitions.get(i);
			
			String temp;
			
			//System.out.println("ANA DA5EL 3L IF");
				if( currentArray[0].equals(state) && currentArray[1].equals("!")){
					//System.out.println("ANA FEL IF CONDITION" );
					temp = currentArray[2];
					//System.out.println("THE TEMP IS " + temp);
					result.add(state);
					result.add(temp);
					getClosure(Integer.parseInt(temp));
				}else{
					result.add(state);
				}
				
				//System.out.println("TELE3T ML IF");

			
			
		}
		
		
		return result;
	}
	
	
	
	public static Set<String> getTrans(int x, String a){
		Set<String> result = new HashSet<String>();
		
		for(int i=0; i<transitions.size();i++){
			
			String [] currentArray = transitions.get(i);
			for(int j=0;j<currentArray.length;j++){
				if(currentArray[0].equals(x+"") && currentArray[1].equals(a)){
					result.add(currentArray[2]);
				}
			}
			
			
		}
		return result;
	}
	
	public static void constructDFA(){
		
		//epsilon closure of the initial state
		Set<String> initial = getClosure(initialState);
		
		DFAinitialState = initial;
		
		System.out.print("Start State:" );
		String tem ="";
		Iterator<String> iterator1 = initial.iterator();
		while(iterator1.hasNext()){
			tem= tem+ iterator1.next();
			
		}
		System.out.println(tem);
		
		
		System.out.println("states: ");
		//make new queue
		 Queue<Set<String>> q = new LinkedList<Set<String>>();
		 q.add(initial);
		 
		//while queue is not empty
		 while(!q.isEmpty()){
			// System.out.println("ANA LSA DA5EL EL WHILE");
		
		for(int i=0; i<alphabet.size();i++ ){
			//System.out.println("ANA DA5ALT ALPHABET");
			Set<String> result = new HashSet<String>();
		
		    String  currAlpha = alphabet.get(i);
			//for each alphabet
			Set<String> current = q.remove();
			
			String currentelem = "";
			Iterator<String> it = current.iterator();
			while(it.hasNext()){
				currentelem =currentelem+ it.next();
				
				
			}
			System.out.print( "State  " + currentelem+ " ");
		System.out.println();
			
			fillDFAStates(current);
			printTransitions();
			
			Iterator<String> iterator = current.iterator();
			while(iterator.hasNext()){
				Set<String> tempres = new HashSet<String>();
				String x = iterator.next();
				//all states it goes to using this alphabet
				tempres = getTrans(Integer.parseInt(x),currAlpha) ;
				result.addAll(tempres);
			
			}//end of states iterator
			System.out.print(",");
			 System.out.println();
			boolean check = checkState(result);
			if( check == false){
				q.add(result);
			}
			
			fillDFATransitions(currAlpha,  current , result);
		}//end of alphabet loop
		
		}//end of queue while loop
		
		
	}
	
	
	public static boolean checkState(Set<String> state){
		if(DFAstates.contains(state))
			return true;
		return false;
		
	}
	
	
	public static void fillDFAStates(Set<String> state){
		
		if(! DFAstates.contains(state)){
			DFAstates.add(state);
		}
		
	}
	
	public static void fillDFATransitions(String a,  Set<String> state ,Set<String> result){
		
		String [] transition = new String[3];
		String entry1 = "";
		String entry3 = "";
		
		
		Iterator<String> iterator1 = state.iterator();
		while(iterator1.hasNext()){
			entry1= entry1+"," + iterator1.next();
		}
		
		Iterator<String> iterator2 = result.iterator();
		while(iterator2.hasNext()){
			entry3= entry3+"," + iterator2.next();
		}
		
		transition[0] = entry1;
		transition[1] = a;
		transition[2] = entry3;
		
		
		DFAtransitions.add(transition);
		
	
		
		
	}
	
	
	public static void printTransitions(){
		System.out.println("Transitions are: ");
		for(int i=0; i<DFAtransitions.size();i++){
			String [] first = DFAtransitions.get(i);
			
			for(int j=0; j<first.length; j++){
				System.out.print(first[j] +"  ");
			}
			System.out.println();
			
		}
	}
	
	
	
	public static void main(String[]args){
		boolean split=false;
		boolean alpha = false;
		boolean transition = false;
		boolean start = false;
		boolean stop = false;
		boolean acceptState = false;
		BufferedReader br = null;
		FileReader fr = null;
		String tempString="";
		String alphabets="";
		String startS ="";
		String trans = "";
		String acceptS ="";
		
		
		
		try {

			fr = new FileReader(filename);
			br = new BufferedReader(fr);
			
			String sCurrentLine;

			br = new BufferedReader(new FileReader(filename));

			while ((sCurrentLine = br.readLine()) != null) {
					if(split == true){
					tempString = sCurrentLine;
					 parts = tempString.split(",");
					split = false;
					 for(int i=0; i<parts.length;i++){
						//	System.out.println("THE SPLITTED " + parts[i]);
							states.add(Integer.parseInt(parts[i]));
						
						}
						
					
					}
					if(alpha == true){
						alphabets = sCurrentLine;
						parts2= alphabets.split(",");
						alpha = false;
						for(int i=0; i<parts2.length;i++){
							//System.out.println("ALPHABET " + parts2[i]);
							alphabet.add(parts2[i]);
							}
						
					}
					
					if(start == true){
						startS = sCurrentLine;
						transition = false;
						try{
						initialState = Integer.parseInt(startS) ;
						//System.out.println("INITIAL STATE IS "+ initialState);
						} catch (NumberFormatException e) {
					           //System.out.println("This is not a number");
					           //System.out.println(e.getMessage());
					        }
						start = false;
						transition = false;
					}
					
					
					if(transition == true){
						trans = sCurrentLine;
						parts3 = trans.split(",");
						transitions.add(parts3);
						
						
					}
				
					if(acceptState == true){
						try{
						acceptS = sCurrentLine;
						AcceptNum = Integer.parseInt(acceptS);
						}catch (NumberFormatException e) {
					           //System.out.println("This is not a number");
					           //System.out.println(e.getMessage());
					        }
						
					}
					
				if(sCurrentLine.equals("#set of states")){
					split = true;
					stop= true;
					
				}
				if(sCurrentLine.equals("#alphabet")){
					alpha = true;
				}
			
				if(sCurrentLine.equals("#transitions")){
					transition = true;
				}
				if(sCurrentLine.equals("#start state")){
					start = true;
					transition = false;
					
				}
				
				if(sCurrentLine.equals("#set of accept states")){
					acceptState= true;
					
				}
				
				System.out.println(sCurrentLine);
				
				
				
			}
			transitions.remove(transitions.size()-1);
			for(int j=0; j<transitions.size();j++){
				 String [] temp = transitions.get(j);
				 for(int k=0; k<temp.length;k++){
					// System.out.print( temp[k]+ ",");
				 }
				//System.out.println("TRANISITONS ARE " + transitions.get(j));
			}
			
			System.out.println("The epsilon closure for 1 is:");
			System.out.println(getClosure(1));
			//epsilonClosure();
			constructDFA();
			 printTransitions();
			
			
			

		} catch (IOException e) {

			e.printStackTrace();

		} finally {

			try {

				if (br != null)
					br.close();

				if (fr != null)
					fr.close();

			} catch (IOException ex) {

				ex.printStackTrace();

			}


	}
	
	}
	
	
	
	
	
	
}
