import java.io.*;  
import java.net.*;  
import java.util.*;
public class client {  
    boolean check=true;
public static void main(String[] args) { 
   
    client obj1=new client();
    Scanner obj=new Scanner(System.in); 
    while(obj1.check){
        try{      
            Socket s=new Socket("172.20.33.212" ,6666);  
            DataOutputStream dout=new DataOutputStream(s.getOutputStream());  
            String msg;
            
            System.out.println("enter the message: ");
       
            msg=obj.nextLine();
            obj.nextLine();
            dout.writeUTF(msg);  
            dout.flush();  
            dout.close();  
            s.close();

            }
            catch(Exception e){System.out.println(e);} 
            System.out.println("enter 1 to continue or 0 to end");
            int checker = obj.nextInt();
            obj.nextLine();
            if(checker==1){
                obj1.check=true;
            }
            else{
                obj1.check=false;
            }

    }
 
}  
}