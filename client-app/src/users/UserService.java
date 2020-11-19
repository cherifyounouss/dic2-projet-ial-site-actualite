
package users;

import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebResult;
import javax.jws.WebService;
import javax.jws.soap.SOAPBinding;
import javax.xml.bind.annotation.XmlSeeAlso;
import javax.xml.ws.Action;
import javax.xml.ws.FaultAction;
import javax.xml.ws.RequestWrapper;
import javax.xml.ws.ResponseWrapper;


/**
 * This class was generated by the JAX-WS RI.
 * JAX-WS RI 2.2.9-b130926.1035
 * Generated source version: 2.2
 * 
 */
@WebService(name = "UserService", targetNamespace = "http://users/")
@XmlSeeAlso({
    ObjectFactory.class
})
public interface UserService {


    /**
     * 
     * @param parameters
     * @param token
     * @return
     *     returns users.GetAllResponse
     * @throws InvalidTokenException
     * @throws SQLException_Exception
     */
    @WebMethod
    @WebResult(name = "getAllResponse", targetNamespace = "http://users/", partName = "result")
    @SOAPBinding(parameterStyle = SOAPBinding.ParameterStyle.BARE)
    @Action(input = "http://users/UserService/getAllRequest", output = "http://users/UserService/getAllResponse", fault = {
        @FaultAction(className = SQLException_Exception.class, value = "http://users/UserService/getAll/Fault/SQLException"),
        @FaultAction(className = InvalidTokenException.class, value = "http://users/UserService/getAll/Fault/InvalidTokenException")
    })
    public GetAllResponse getAll(
        @WebParam(name = "getAll", targetNamespace = "http://users/", partName = "parameters")
        GetAll parameters,
        @WebParam(name = "token", targetNamespace = "http://users/", header = true, partName = "token")
        String token)
        throws InvalidTokenException, SQLException_Exception
    ;

    /**
     * 
     * @param password
     * @param login
     * @return
     *     returns java.lang.String
     * @throws AuthenticationFailedException
     * @throws SQLException_Exception
     */
    @WebMethod
    @WebResult(targetNamespace = "")
    @RequestWrapper(localName = "authenticate", targetNamespace = "http://users/", className = "users.Authenticate")
    @ResponseWrapper(localName = "authenticateResponse", targetNamespace = "http://users/", className = "users.AuthenticateResponse")
    @Action(input = "http://users/UserService/authenticateRequest", output = "http://users/UserService/authenticateResponse", fault = {
        @FaultAction(className = AuthenticationFailedException.class, value = "http://users/UserService/authenticate/Fault/AuthenticationFailedException"),
        @FaultAction(className = SQLException_Exception.class, value = "http://users/UserService/authenticate/Fault/SQLException")
    })
    public String authenticate(
        @WebParam(name = "login", targetNamespace = "")
        String login,
        @WebParam(name = "password", targetNamespace = "")
        String password)
        throws AuthenticationFailedException, SQLException_Exception
    ;

    /**
     * 
     * @param parameters
     * @param token
     * @return
     *     returns users.GetResponse
     * @throws InvalidTokenException
     * @throws SQLException_Exception
     */
    @WebMethod
    @WebResult(name = "getResponse", targetNamespace = "http://users/", partName = "result")
    @SOAPBinding(parameterStyle = SOAPBinding.ParameterStyle.BARE)
    @Action(input = "http://users/UserService/getRequest", output = "http://users/UserService/getResponse", fault = {
        @FaultAction(className = SQLException_Exception.class, value = "http://users/UserService/get/Fault/SQLException"),
        @FaultAction(className = InvalidTokenException.class, value = "http://users/UserService/get/Fault/InvalidTokenException")
    })
    public GetResponse get(
        @WebParam(name = "get", targetNamespace = "http://users/", partName = "parameters")
        Get parameters,
        @WebParam(name = "token", targetNamespace = "http://users/", header = true, partName = "token")
        String token)
        throws InvalidTokenException, SQLException_Exception
    ;

    /**
     * 
     * @param parameters
     * @param token
     * @return
     *     returns users.UpdateResponse
     * @throws InvalidTokenException
     * @throws SQLException_Exception
     */
    @WebMethod
    @WebResult(name = "updateResponse", targetNamespace = "http://users/", partName = "result")
    @SOAPBinding(parameterStyle = SOAPBinding.ParameterStyle.BARE)
    @Action(input = "http://users/UserService/updateRequest", output = "http://users/UserService/updateResponse", fault = {
        @FaultAction(className = SQLException_Exception.class, value = "http://users/UserService/update/Fault/SQLException"),
        @FaultAction(className = InvalidTokenException.class, value = "http://users/UserService/update/Fault/InvalidTokenException")
    })
    public UpdateResponse update(
        @WebParam(name = "update", targetNamespace = "http://users/", partName = "parameters")
        Update parameters,
        @WebParam(name = "token", targetNamespace = "http://users/", header = true, partName = "token")
        String token)
        throws InvalidTokenException, SQLException_Exception
    ;

    /**
     * 
     * @param parameters
     * @param token
     * @return
     *     returns users.DeleteResponse
     * @throws InvalidTokenException
     * @throws SQLException_Exception
     */
    @WebMethod
    @WebResult(name = "deleteResponse", targetNamespace = "http://users/", partName = "result")
    @SOAPBinding(parameterStyle = SOAPBinding.ParameterStyle.BARE)
    @Action(input = "http://users/UserService/deleteRequest", output = "http://users/UserService/deleteResponse", fault = {
        @FaultAction(className = SQLException_Exception.class, value = "http://users/UserService/delete/Fault/SQLException"),
        @FaultAction(className = InvalidTokenException.class, value = "http://users/UserService/delete/Fault/InvalidTokenException")
    })
    public DeleteResponse delete(
        @WebParam(name = "delete", targetNamespace = "http://users/", partName = "parameters")
        Delete parameters,
        @WebParam(name = "token", targetNamespace = "http://users/", header = true, partName = "token")
        String token)
        throws InvalidTokenException, SQLException_Exception
    ;

    /**
     * 
     * @param parameters
     * @param token
     * @return
     *     returns users.CreateResponse
     * @throws InvalidTokenException
     * @throws SQLException_Exception
     */
    @WebMethod
    @WebResult(name = "createResponse", targetNamespace = "http://users/", partName = "result")
    @SOAPBinding(parameterStyle = SOAPBinding.ParameterStyle.BARE)
    @Action(input = "http://users/UserService/createRequest", output = "http://users/UserService/createResponse", fault = {
        @FaultAction(className = SQLException_Exception.class, value = "http://users/UserService/create/Fault/SQLException"),
        @FaultAction(className = InvalidTokenException.class, value = "http://users/UserService/create/Fault/InvalidTokenException")
    })
    public CreateResponse create(
        @WebParam(name = "create", targetNamespace = "http://users/", partName = "parameters")
        Create parameters,
        @WebParam(name = "token", targetNamespace = "http://users/", header = true, partName = "token")
        String token)
        throws InvalidTokenException, SQLException_Exception
    ;

}
