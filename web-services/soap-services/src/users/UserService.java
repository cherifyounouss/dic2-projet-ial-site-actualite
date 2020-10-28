package users;

import java.sql.SQLException;

import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebService;

/**
 * UserService
 */

@WebService
public class UserService {

    
    public UserService() {}

    @WebMethod
    public User create(@WebParam(name = "name") String name, @WebParam(name = "login") String login, @WebParam(name = "password") String password) throws SQLException{
        return new UserDAO().createUser(new User(name, login, password));
    }

    @WebMethod
    public User get(@WebParam(name = "id") int id) throws SQLException{
        return new UserDAO().getUser(id);
    }
}