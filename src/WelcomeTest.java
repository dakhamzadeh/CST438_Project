import static org.junit.Assert.*;


public class WelcomeTest {
  
     String message = "Welcome to the Land of Hurkle";	
	   Welcome messageUtil = new Welcome(message);
	   
  
  @Test
	   public void testPrintMessage() {
	      assertEquals(message,messageUtil.printMessage());

}

}
