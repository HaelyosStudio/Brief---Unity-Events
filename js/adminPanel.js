import { ConstManager } from "./Manager";

export function displayAdminPanel() {
    if (!ConstManager.adminPanel.classList.contains('hide')) {
        ConstManager.adminPanel.classList.add('show');
        ConstManager.adminPanel.classList.remove('hide');
        ConstManager.volunteerRegisterBox.classList.add('hidden');
    } else {
        ConstManager.adminPanel.classList.remove('hide');
        ConstManager.adminPanel.classList.add('show');
        ConstManager.volunteerRegisterBox.classList.remove('hidden');
    }
}

export function cancelForm() {
    if (ConstManager.adminPanel.classList.contains('show')) {
        ConstManager.adminPanel.classList.remove('show');
        ConstManager.adminPanel.classList.add('hide');
        ConstManager.volunteerRegisterBox.classList.remove('hidden');
    }
}