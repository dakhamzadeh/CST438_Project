import static org.junit.Assert.*;
import org.junit.After;
import org.junit.AfterClass;

import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;

public class CharacterTest {
	
//	   execute only once, in the starting 
	   @BeforeClass
	   public static void beforeClass() {
	      System.out.println("in before class");
	   }
	@Test
//	public void test() {
//		fail("Not yet implemented");
//	}
	

	public void testSetXPos() {
        Character character = new Character();
        character.setXPos(5);
        assertEquals(character.getXPos(), 5,0);
    }
	
	@Test
	public void testSetYPos() {
        Character character1 = new Character();
        character1.setYPos(7);
        assertEquals(character1.getYPos(),7,0);
    }
	
	@Test
	public void testGetYPos() {
        Character character = new Character();
        character.setYPos(3);
        assertEquals(character.getYPos(), 3,0);
    }
	@Test
	public void testGetXPos() {
        Character character = new Character();
        character.setXPos(4);
        assertEquals(character.getXPos(), 4,0);
    }
 
	
	@Test
	public void testSetMoves() {
        Character character = new Character();
        character.setMoves(1);
        assertEquals(character.getMoves(), 1,0);
        
        
    }
	
	@Test
	  public void notNullTest() {
		Character character = new Character();
	    assertNotNull("Verify that character is NOT null", character);
	 
	  }
	
	
	@Test
	public void testGetMoves() {
        Character character = new Character();
        character.setMoves(4);
        assertEquals(character.getMoves(), 4,0);   
    }
	
	@Test
	public void testResetXPos(){
		Character character = new Character();
		character.setXPos(0);
		assertEquals(character.getXPos(),0,0);

	} 
	
	@Test
	public void testResetYPos(){
		Character character = new Character();
		character.setYPos(0);
		assertEquals(character.getYPos(),0,0);

	} 
	
	@Test
	public void testResetMoves() {
		Character character = new Character();
		character.setMoves(0);
		assertEquals(character.getMoves(),0,0);
	}
	
	@Test
	public void testResetScore(){
		Character character = new Character();
        character.setScore(0);
        assertEquals(character.getScore(), 0,0);
	}
	
//	 //execute only once, in the end
	   @AfterClass
	   public static void  afterClass() {
	      System.out.println("in after class");   }

}
