import java.net.*;
import java.io.*;
import java.util.*;

class server {

    public static void main(String args[]) {

        
        while (true) {
            try {
                ServerSocket ss = new ServerSocket(6666);
                System.out.println("listening to request from client...");
                Socket s = ss.accept();// establishes connection
                System.out.println("connection established successfully...");
                DataInputStream dis = new DataInputStream(s.getInputStream());
                String str = (String)dis.readUTF();
                System.out.println("message= " + str);
                ss.close();
            } 
            catch (Exception e) {
                System.out.println(e);
            }

        }
    }
}