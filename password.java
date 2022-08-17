import java.util.Scanner;

public class password {

    public static void main(String[] args) {

        int min = 0; //set min
        int max = 100; //set max

        //Generate random int value from 0 to 100
        final int random_int = (int) Math.floor(Math.random() * (max - min + 1) + min);
        System.out.println(random_int); //print out the number

        Scanner guessNum = new Scanner(System.in);
        for (int i=5; i>0; i--) {
            System.out.println("Make your guess between " + min + " to " + max);

          if(i==1){
               System.out.println("Your Final Round!!!!");
           } else {
               System.out.println("You can guess "+ i +" times");
           }

           System.out.println("Please enter Int:");
            //check user input int datatype
            while (!guessNum.hasNextInt()) {
                System.out.println("Invalid input\n Please input number:");
                guessNum.next();
            }
           int userInput = guessNum.nextInt();    //if true, set the number
            boolean result = rangeCheck(userInput, min, max);
            //System.out.println(result);
            if (result) {
                if (userInput < random_int) {
                    min = userInput;
                } else if (userInput > random_int) {
                    max = userInput;
                } else {
                    System.out.println("Correct! The Answer is " + random_int);
                    break;
                }
            } else {
                System.out.format("Please input a vaild range number:\n");
                i += 1;
                continue;
            }

            if (i==1) {
                 System.out.format("You Lose!!! The number is %d .",random_int);
            }

        }

    }
    //function
    public static boolean rangeCheck (int userInput, int min, int max){
        return userInput > min && userInput < max;
    }
}
