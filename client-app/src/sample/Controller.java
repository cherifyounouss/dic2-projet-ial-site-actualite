package sample;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.stage.Window;
import users.AuthenticationFailedException;
import users.SQLException_Exception;
import users.UserService;
import users.UserServiceService;;

public class Controller {

    @FXML
    private TextField loginField;

    @FXML
    private PasswordField passwordField;

    @FXML
    private Button submitButton;

    private String token;

    @FXML
    public void login(ActionEvent event) {
        Window owner = submitButton.getScene().getWindow();

        if (loginField.getText().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, owner, "Erreur !!!", "Veuillez entrer votre login svp !");
            return;
        }

        if (passwordField.getText().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, owner, "Erreur !!!", "Veuillez entrer votre mot de passe svp !");
            return;
        }

        String login = loginField.getText();
        String password = passwordField.getText();

        UserService userService = new UserServiceService().getUserServicePort();
        try {
            token = userService.authenticate(login, password);
            //Main.getInstance().replaceSceneContent("dashboard.fxml");
            new UserController(token);
            Main.getInstance().getStage().setScene(new Scene(FXMLLoader.load(getClass().getResource("dashboard.fxml"))));
        }
        catch (Exception e) {
            showAlert(Alert.AlertType.ERROR, owner, "Erreur !!!", e.getMessage());
            e.printStackTrace();
            return;
        }
/*       UserService userService = new UserServiceService().getUserServicePort();
        try {
            userService.authenticate(login, password);
        }
        catch (AuthenticationFailed_Exception | SQLException_Exception e) {

        }*/
    }

    public static void showAlert(Alert.AlertType alertType, Window owner, String title, String message) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.initOwner(owner);
        alert.show();
    }
}