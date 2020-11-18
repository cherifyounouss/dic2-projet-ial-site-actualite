package errors;

import javax.xml.ws.WebFault;

@WebFault(name = "AuthenticationFailedException")
public class AuthenticationFailedException extends Exception{

    private AuthenticationFailedBean faultBean;

    public AuthenticationFailedException(String message, AuthenticationFailedBean faultInfo) {
        super(message);
        faultBean = faultInfo;
    }

    public AuthenticationFailedException(String message, AuthenticationFailedBean faultInfo, Throwable cause) {
        super(message, cause);
        faultBean = faultInfo;
    }

    public AuthenticationFailedBean getFaultInfo() {
        return faultBean;
    }
}
