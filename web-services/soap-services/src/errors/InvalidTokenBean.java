package errors;

public class InvalidTokenBean {

    private String message;

    public InvalidTokenBean() {}

    public InvalidTokenBean(String message) {
        this.message = message;
    }

    public String getMessage() {
        return message;
    }
}
