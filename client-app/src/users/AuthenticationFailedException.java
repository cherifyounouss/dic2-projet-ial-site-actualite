
package users;

import javax.xml.ws.WebFault;


/**
 * This class was generated by the JAX-WS RI.
 * JAX-WS RI 2.2.9-b130926.1035
 * Generated source version: 2.2
 * 
 */
@WebFault(name = "AuthenticationFailedException", targetNamespace = "http://users/")
public class AuthenticationFailedException
    extends java.lang.Exception
{

    /**
     * Java type that goes as soapenv:Fault detail element.
     * 
     */
    private AuthenticationFailedBean faultInfo;

    /**
     * 
     * @param faultInfo
     * @param message
     */
    public AuthenticationFailedException(String message, AuthenticationFailedBean faultInfo) {
        super(message);
        this.faultInfo = faultInfo;
    }

    /**
     * 
     * @param faultInfo
     * @param cause
     * @param message
     */
    public AuthenticationFailedException(String message, AuthenticationFailedBean faultInfo, java.lang.Throwable cause) {
        super(message, cause);
        this.faultInfo = faultInfo;
    }

    /**
     * 
     * @return
     *     returns fault bean: users.AuthenticationFailedBean
     */
    public AuthenticationFailedBean getFaultInfo() {
        return faultInfo;
    }

}
