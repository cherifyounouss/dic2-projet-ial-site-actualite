package errors;

import javax.xml.ws.WebFault;

@WebFault(name = "InvalidTokenException")
public class InvalidTokenException extends Exception{

    private InvalidTokenBean faultBean;

    public InvalidTokenException(String message, InvalidTokenBean faultInfo) {
        super(message);
        faultBean = faultInfo;
    }

    public InvalidTokenException(String message, InvalidTokenBean faultInfo, Throwable cause) {
        super(message, cause);
        faultBean = faultInfo;
    }

    public InvalidTokenBean getFaultInfo() {
        return faultBean;
    }
}
