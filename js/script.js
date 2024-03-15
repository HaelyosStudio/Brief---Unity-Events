import { ConstManager } from "./Manager.js";
import { displayAdminPanel, cancelForm } from "./adminPanel.js";

ConstManager.adminDisplayButton.addEventListener('click', function() {
    displayAdminPanel();
});

ConstManager.cancelButton.addEventListener('click', function() {
    cancelForm();
})

