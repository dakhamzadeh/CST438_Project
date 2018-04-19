import java.util.Random;

public class Character {
	int xPos;
	int yPos;
	int score;
	int moves;

	public void setXPos(int newXPos)
	{
		this.xPos = newXPos;
	}


	public void setYPos (int newYPos )
	{
		this.yPos = newYPos;
	}

	public void setScore (int newScore )
	{
		this.score = newScore;
	}

	public void setMoves (int newMoves)
	{
		this.moves = newMoves;
	}

	public int getXPos(){
		return this.xPos;
	}

	public int getYPos(){
		return this.yPos;
	}


	public int getScore(){
		return this.score;
	}

	public int getMoves(){
		return this.moves;
	}
//
//	public static void hideHurkle()
//
//    {
//
//         Random rand=new Random();
//
//         //hide hurkle at (m,n);
//
//         int n=rand.nextInt((10-1)+1)+1;
//
//         m=rand.nextInt((10-1)+1)+1;
//
//    }

	public void resetPos(){
		this.xPos = 0;
		this.yPos = 0;
		this.moves = 0;
	}  

	public void resetScore(){
		this.score = 0;
	}

}
