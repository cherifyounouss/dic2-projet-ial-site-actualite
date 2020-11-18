package errors;

public class AuthenticationFailedBean {

    private String message;

    public AuthenticationFailedBean() {}

    public AuthenticationFailedBean(String message) {
        this.message = message;
    }

    public String getMessage() {
        return message;
    }
}
