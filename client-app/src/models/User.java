package models;

import javafx.beans.property.IntegerProperty;
import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.property.StringProperty;

public class User {

    private final IntegerProperty id;
    private final StringProperty login;
    private final StringProperty name;
    private final StringProperty password;
    private final IntegerProperty profile;

    public User() {
        this(-1, "","", "", -1);
    }

    public User(Integer id, String login, String name, Integer profile) {
        this(id, login, null, name, profile);
    }

    public User(Integer id, String login, String password, String name, Integer profile) {
        this.id = new SimpleIntegerProperty(id);
        this.login = new SimpleStringProperty(login);
        this.name = new SimpleStringProperty(name);
        this.profile = new SimpleIntegerProperty(profile);
        this.password = new SimpleStringProperty(password);
    }


    public int getId() {
        return id.get();
    }

    public IntegerProperty idProperty() {
        return id;
    }

    public void setId(int id) {
        this.id.set(id);
    }

    public String getLogin() {
        return login.get();
    }

    public StringProperty loginProperty() {
        return login;
    }

    public void setLogin(String login) {
        this.login.set(login);
    }

    public String getName() {
        return name.get();
    }

    public StringProperty nameProperty() {
        return name;
    }

    public void setName(String name) {
        this.name.set(name);
    }

    public int getProfile() {
        return profile.get();
    }

    public IntegerProperty profileProperty() {
        return profile;
    }

    public void setProfile(int profile) {
        this.profile.set(profile);
    }

    public String getPassword() {
        return password.get();
    }

    public StringProperty passwordProperty() {
        return password;
    }

    public void setPassword(String password) {
        this.password.set(password);
    }
}