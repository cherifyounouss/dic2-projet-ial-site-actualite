package sample;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import models.User;
import users.UserService;
import users.UserServiceService;

import java.util.List;

public class UserController {

    private static ObservableList<User> usersData = FXCollections.observableArrayList();
    private static String token;


    public UserController(String token) {
        this.token = token;
        UserService userService = new UserServiceService().getUserServicePort();
        try {
            List<users.User> allUsers = userService.getAll(null, token).getReturn();
            for (int i = 0; i < allUsers.size(); i++) {
                users.User user = allUsers.get(i);
                usersData.add(new User(user.getId(), user.getLogin(), user.getName(), user.getProfile()));
            }
        }
        catch (Exception e) {
            System.out.println(e.getMessage());
        }
    }

    public static ObservableList<User> getUsers() {
        return usersData;
    }

    public static String getToken() {
        return token;
    }

}
