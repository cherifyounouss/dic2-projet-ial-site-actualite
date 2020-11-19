package sample;

import javafx.fxml.FXML;
import javafx.scene.control.Alert;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import models.User;

public class EditCreateController {

    @FXML
    private TextField nameField;
    @FXML
    private TextField loginField;
    @FXML
    private TextField profileField;
    @FXML
    private PasswordField passwordField;

    private Stage dialogStage;
    private User user;
    private boolean okCliked = false;

    public void setDialogStage(Stage dialogStage) {
        this.dialogStage = dialogStage;
    }

    public void setUser(User user) {
        this.user = user;
        nameField.setText(user.getName());
        loginField.setText(user.getLogin());
        if (user.getProfile() == -1)
            profileField.setText("");
        else
            profileField.setText(user.getProfile() + "");
        passwordField.setText(user.getPassword());
    }

    public boolean isOkCliked() {
        return okCliked;
    }

    private boolean isInputValid() {
        String errorMessage = "";
        if (nameField.getText() == null || nameField.getText().length() == 0)
            errorMessage += "Nom non valide !\n";
        if (loginField.getText() == null || loginField.getText().length() == 0)
            errorMessage += "Login non valide !\n";
        if (loginField.getText() == null || passwordField.getText().length() == 0)
            errorMessage += "Mot de passe non valide !\n";
        if (profileField.getText() == null || profileField.getText().length() == 0 || !(profileField.getText().equals("1") || profileField.getText().equals("0")))
            errorMessage += "Profil invalide (0 pour éditeur, 1 pour admin)\n";
        if (errorMessage.length() == 0)
            return true;
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.initOwner(dialogStage);
        alert.setTitle("Champs invalides");
        alert.setHeaderText("Veuillez corriger les champs invalides");
        alert.setContentText(errorMessage);

        alert.showAndWait();

        return false;
    }

    @FXML
    private void handleOK() {
        if (isInputValid()) {
            user.setLogin(loginField.getText());
            user.setName(nameField.getText());
            user.setPassword(passwordField.getText());
            user.setProfile(Integer.parseInt(profileField.getText()));

            okCliked = true;
            dialogStage.close();
        }
    }

    @FXML
    private void handleCancel() {
        dialogStage.close();
    }
}
