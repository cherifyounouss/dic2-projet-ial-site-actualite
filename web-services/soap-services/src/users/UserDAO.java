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
        statement.close();
        conn.close();
        return user;
    }

    public User getUser(int id) throws SQLException {
        Connection conn = ConnectionManager.getConnection();
        PreparedStatement statement = null;
        ResultSet resultSet = null;
        try {
            statement = conn.prepareStatement("SELECT * FROM user WHERE id_user = ?");
            statement.setInt(1, id);
            if (statement.execute()) {
                resultSet = statement.getResultSet();
                if (resultSet != null && resultSet.next())
                    return getUser(resultSet);
            }
        }
        finally {
            if (statement != null)
                statement.close();
            if (resultSet != null)
                resultSet.close();
            conn.close();
        }
        return null;
    }

    private User getUser(ResultSet resultSet) throws SQLException {
        User user = new User();
        user.setId(resultSet.getInt("id_user"));
        user.setName(resultSet.getString("name"));
        user.setLogin(resultSet.getString("login"));
        user.setPassword("");
        return user;
    }
}