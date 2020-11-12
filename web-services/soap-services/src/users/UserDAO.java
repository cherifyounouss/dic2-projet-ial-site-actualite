package users;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

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
                if (resultSet != null && resultSet.next()) {
                    User user = getUser(resultSet);
                    user.setPassword("");
                    return user;
                }
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

    public List<User> getAllUsers() throws SQLException {
        Connection conn = ConnectionManager.getConnection();
        Statement statement = null;
        ResultSet resultSet = null;
        ArrayList<User> users = new ArrayList<>();
        try {
                statement = conn.createStatement();
                resultSet = statement.executeQuery("SELECT * FROM user");
                if (resultSet != null) {
                    while (resultSet.next()) {
                        users.add(getUser(resultSet));
                    }
                    return users;
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

    public boolean deleteUser(int id) throws SQLException {
        Connection conn = ConnectionManager.getConnection();
        String sql = "DELETE FROM user WHERE id_user=?";
        PreparedStatement statement = null;
        try {
            statement = conn.prepareStatement(sql);
            statement.setInt(1, id);
            statement.execute();
            return true;
        }
        finally {
            if (statement != null)
                statement.close();
            conn.close();
        }
    }

    public boolean updateUser(User user) throws SQLException {
        Connection conn = ConnectionManager.getConnection();
        String sql = "UPDATE user SET name = ?, login = ?, password = ? WHERE id_user = ?";
        PreparedStatement statement = null;
        try {
            statement = conn.prepareStatement(sql);
            int cursor = 1;
            statement.setString(cursor++, user.getName());
            statement.setString(cursor++, user.getLogin());
            statement.setString(cursor++, user.getPassword());
            statement.setInt(cursor++, user.getId());
            statement.execute();
            return true;
        }
        finally {
            if (statement != null)
                statement.close();
            conn.close();
        }
    }

    private User getUser(ResultSet resultSet) throws SQLException {
        User user = new User();
        user.setId(resultSet.getInt("id_user"));
        user.setName(resultSet.getString("name"));
        user.setLogin(resultSet.getString("login"));
        user.setPassword(resultSet.getString("password"));
        return user;
    }

    public User authenticate(String login, String password) throws SQLException{
        Connection conn = ConnectionManager.getConnection();
        PreparedStatement statement = null;
        ResultSet resultSet = null;
        try {
            statement = conn.prepareStatement("SELECT * FROM user WHERE login = ?");
            statement.setString(1, login);
            if (statement.execute()) {
                resultSet = statement.getResultSet();
                if (resultSet != null && resultSet.next()) {
                    User user = getUser(resultSet);
                    if (!user.getPassword().equals(password))
                        return null;
                    return user;
                }
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
}