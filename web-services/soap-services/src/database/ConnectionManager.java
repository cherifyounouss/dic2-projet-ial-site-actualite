package database;

import java.sql.*;
/**
 * ConnectionManager
 */
public class ConnectionManager {

    private static final String JDBCURL = "jdbc:mysql://localhost:3306/gestion_articles";;
    private static final String DBUSER = "root";
    private static final String DBPASSWORD = "";

    public static Connection getConnection() throws SQLException, ClassNotFoundException{
        Class.forName("com.mysql.jdbc.Driver");
        return DriverManager.getConnection(JDBCURL, DBUSER, DBPASSWORD);
    }
}