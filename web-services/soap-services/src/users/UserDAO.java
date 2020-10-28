package users;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import database.ConnectionManager;

/**
 * UserDAO
 */
public class UserDAO {

    
    public User createUser(User user) throws SQLException{
        Connection conn = ConnectionManager.getConnection();
        PreparedStatement statement = conn.prepareStatement("INSERT INTO user (name, login, password) VALUES (?, ?, ?)", Statement.RETURN_GENERATED_KEYS);
        statement.setString(1, user.getName());
        statement.setString(2, user.getLogin());
        statement.setString(3, user.getPassword());

        int affectedRows = statement.executeUpdate();

        if (affectedRows == 0)
            throw new SQLException("Failed to create user !");
        ResultSet generatedKeys = statement.getGeneratedKeys();
        if (generatedKeys.next())
            user.setId((int)generatedKeys.getLong(1));
        else
            throw new SQLException("Creating user failed ! No id retrieved");
        return user;
    }
}