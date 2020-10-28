package database;

import java.sql.*;
/**
 * ConnectionManager
 */
public class ConnectionManager {

    private static final String JDBCURL = "jdbc:mysql://localhost:3306/gestion_articles";;
    private static final String DBUSER = "root";
    private static final String DBPASSWORD = "";

    public static Connection getConnection() throws SQLException{
        Connection conn = null;
        try {
            Class.forName("com.mysql.jdbc.Driver");
            conn = DriverManager.getConnection(JDBCURL, DBUSER, DBPASSWORD);
        } catch (ClassNotFoundException e){
            System.out.println(e);
        }
        finally {
            return conn;
        }
    }
}