package sample;

import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;
import javafx.stage.Modality;
import javafx.stage.Stage;
import javafx.stage.Window;
import models.User;
import users.Create;
import users.Delete;
import users.UserService;
import users.UserServiceService;

import java.io.IOException;

public class UserOverviewController {

    @FXML
    private TableView<User> usersTable;
    @FXML
    private TableColumn<User, String> idColumn;
    @FXML
    private TableColumn<User, String> nameColumn;

    @FXML
    private Label idLabel;
    @FXML
    private Label nameLabel;
    @FXML
    private Label loginLabel;
    @FXML
    private Label profileLabel;

    @FXML
    private Button deleteButton;

    @FXML
    private Button createButton;

    private ObservableList<User> userObservableList;

    public UserOverviewController() {
        userObservableList = UserController.getUsers();
        System.out.println(userObservableList);
    }

    @FXML
    private void initialize() {
        usersTable.setItems(userObservableList);
        // Initialize the person table with the two columns.
        idColumn.setCellValueFactory(cellData -> cellData.getValue().idProperty().asString());
        nameColumn.setCellValueFactory(cellData -> cellData.getValue().nameProperty());
        usersTable.getSelectionModel().selectedItemProperty().addListener(
                (observable, oldValue, newValue) -> showUserDetails(newValue));
    }

    private void showUserDetails(User user) {
        if (user == null) {
            idLabel.setText("");
            nameLabel.setText("");
            loginLabel.setText("");
            profileLabel.setText("");
        }
        else {
            idLabel.setText(user.getId() + "");
            nameLabel.setText(user.getName());
            loginLabel.setText(user.getLogin());
            if (user.getProfile() > 0)
                profileLabel.setText("admin");
            else
                profileLabel.setText("editeur");
        }
    }

    @FXML
    private void handleDeleteUser() {
        Window owner = deleteButton.getScene().getWindow();
        int selectedIndex = usersTable.getSelectionModel().getSelectedIndex();
        if (selectedIndex >= 0) {
            User user = usersTable.getItems().get(selectedIndex);
            try {
                UserService userService = new UserServiceService().getUserServicePort();
                Delete delete = new Delete();
                delete.setId(user.getId());
                userService.delete(delete, UserController.getToken());
                usersTable.getItems().remove(selectedIndex);
            }
            catch (Exception e) {
                Controller.showAlert(Alert.AlertType.ERROR, owner, "Error !!!", e.getMessage());
            }
        }
        else {
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.initOwner(Main.getInstance().getStage());
            alert.setTitle("Pas de sélection");
            alert.setHeaderText("Aucun utilisateur sélectionné");
            alert.setContentText("Veuillez sélectionner un utilisateur dans la table svp");

            alert.showAndWait();
        }
    }

    public boolean showUserEditDialogue(User user) {
        try {
            FXMLLoader loader = new FXMLLoader();
            loader.setLocation(getClass().getResource("edit_create_dialog.fxml"));
            GridPane page = (GridPane) loader.load();

            Stage dialogStage = new Stage();
            dialogStage.setTitle("Créer utilisateur");
            dialogStage.initModality(Modality.WINDOW_MODAL);
            dialogStage.initOwner(Main.getInstance().getStage());
            Scene scene = new Scene(page);
            dialogStage.setScene(scene);

            EditCreateController controller = loader.getController();
            controller.setDialogStage(dialogStage);
            controller.setUser(user);

            dialogStage.showAndWait();

            return controller.isOkCliked();
        }
        catch (IOException e) {
            e.printStackTrace();
            return false;
        }
    }

    @FXML
    private void handleCreateUser() {
        Window owner = createButton.getScene().getWindow();
        User user = new User();
        boolean okCliked = showUserEditDialogue(user);
        if (okCliked) {
            UserService userService = new UserServiceService().getUserServicePort();
            try {
                Create create = new Create();
                create.setLogin(user.getLogin());
                create.setName(user.getName());
                create.setPassword(user.getPassword());
                create.setProfile(user.getProfile());
                users.User newUser = userService.create(create, UserController.getToken()).getReturn();
                userObservableList.add(new User(newUser.getId(), newUser.getLogin(), newUser.getName(), newUser.getProfile()));
            }
            catch (Exception e) {
                Controller.showAlert(Alert.AlertType.ERROR, owner, "Erreur !!!", e.getMessage());
            }
        }
    }
}
