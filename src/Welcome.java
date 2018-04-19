
public class Welcome {
	
	private String message;

	   //Constructor
	   //@param message to be printed
	   public Welcome(String message){
	      this.message = message;
	   }
	      
	   // prints the message
	   public String printMessage(){
	      System.out.println(message);
	      return message;
	   }  

}
