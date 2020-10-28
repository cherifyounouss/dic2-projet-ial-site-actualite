package main;

import javax.xml.ws.Endpoint;

/**
 * Main
 */
public class Server {

    public static void main(String[] args) {
        
        String url = "http://localhost:1712/";
        Endpoint.publish(url, new users.UserService());
        System.out.println("Server listening at " + url + " ...");
    }
}