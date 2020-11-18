package users;

import java.sql.SQLException;
import java.util.List;
import java.util.NoSuchElementException;
import java.util.Scanner;

import javax.crypto.SecretKey;
import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebService;
import javax.xml.bind.DatatypeConverter;

import security.Symmetric;

/**
 * UserService
 */

@WebService
public class UserService {

    SecretKey secretKey;
    byte[] initializationVector;
    
    public UserService() {
        this.initializationVector = Symmetric.createInitializeVector();
        this.secretKey = Symmetric.createAESKey();
    }

    @WebMethod
    public User create(@WebParam(name = "token", header = true) String token, @WebParam(name = "name") String name, @WebParam(name = "login") String login, @WebParam(name = "password") String password, @WebParam(name = "profile") int profile) throws SQLException, InvalidTokenException{
        verifyToken(token);
        return new UserDAO().createUser(new User(name, login, password, profile));
    }

    @WebMethod
    public User get(@WebParam(name = "token", header = true) String token, @WebParam(name = "id") int id) throws SQLException, InvalidTokenException{
        verifyToken(token);
        return new UserDAO().getUser(id);
    }

    @WebMethod
    public List<User> getAll(@WebParam(name = "token", header = true) String token) throws SQLException, InvalidTokenException {
        verifyToken(token);
        return new UserDAO().getAllUsers();
    }

    @WebMethod
    public boolean delete(@WebParam(name = "token", header = true) String token, @WebParam(name = "id") int id) throws SQLException, InvalidTokenException{
        verifyToken(token);
        return new UserDAO().deleteUser(id);
    }

    @WebMethod
    public boolean update(@WebParam(name = "token", header = true) String token, @WebParam(name = "id") int id, @WebParam(name = "name") String name, @WebParam(name = "login") String login, @WebParam(name = "password") String password, @WebParam(name = "profile") int profile) throws SQLException, InvalidTokenException{
        verifyToken(token);
        return new UserDAO().updateUser(new User(id, name, login, password, profile));
    }

    @WebMethod
    public String authenticate(@WebParam(name = "login") String login, @WebParam(name = "password") String password) throws AuthenticationFailed, SQLException{
        User user = new UserDAO().authenticate(login, password);
        if (user == null)
            throw new AuthenticationFailed("Authentication failed");
        return getToken(user);
    }

    private String getToken(User user) {
        long expiryDate = System.currentTimeMillis() + 1800000;
        String pText = user + "," + expiryDate;
        byte[] token = Symmetric.doAESEncryption(pText, secretKey, initializationVector);
        return DatatypeConverter.printHexBinary(token);
    }

    private boolean isTokenValid(String token) {
        try {
            byte[] cipher = DatatypeConverter.parseHexBinary(token);
            String pText = Symmetric.doAESDecryption(cipher, secretKey, initializationVector);
            System.out.println(pText);
            Scanner input = new Scanner(pText);
            input.useDelimiter(",");
            User user = new User(input.nextInt(), input.next(), input.next());
            long expiryTime = input.nextLong();
            if ((expiryTime - System.currentTimeMillis()) < 0)
                return false;
            User userFromBase = new UserDAO().getUser(user.getId());
            if (userFromBase != null && user.getLogin().equals(userFromBase.getLogin()))
                return true;
            else
                return false;
        }
        catch (NoSuchElementException | SQLException | IllegalArgumentException e) {
            return false;
        }
    }

    private void verifyToken(String token) throws InvalidTokenException {
        boolean tokenValid = isTokenValid(token);
        if (token == null || !tokenValid)
            throw new InvalidTokenException("Please submit a valid token for accessing this ressource");
    }
}