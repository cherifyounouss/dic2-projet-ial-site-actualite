package users;

import javax.xml.bind.annotation.XmlRootElement;

/**
 * User
 */

 @XmlRootElement
public class User {

    private int id;
    private String name;
    private String login;
    private String password;

    private int profile;

    public User() {}

    public User(String name, String login, String password) {
        this.name = name;
        this.login = login;
        this.password = password;
    }

    public User(String name, String login, String password, int profile) {
        this.name = name;
        this.login = login;
        this.password = password;
        this.profile = profile;
    }

    public User(int id, String name, String login, String password) {
        this(name, login, password);
        this.id = id;
    }

    public User(int id, String name, String login, String password, int profile) {
        this(name, login, password);
        this.id = id;
        this.profile = profile;
    }

    public int getId() {
        return id;
    }

    public User(int id, String name, String login) {
        this.id = id;
        this.name = name;
        this.login = login;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getLogin() {
        return login;
    }

    public void setLogin(String login) {
        this.login = login;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public int getProfile() {
        return profile;
    }

    public void setProfile(int profile) {
        this.profile = profile;
    }

    @Override
    public String toString() {
        return String.format("%d,%s,%s", this.id, this.name, this.login);
    }
}