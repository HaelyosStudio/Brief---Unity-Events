import { ConstManager } from "./Manager";

export function displayEventPanel() {
    if (!ConstManager.eventPanel.classList.contains('hide')) {
        ConstManager.eventPanel.classList.add('show');
        ConstManager.eventPanel.classList.remove('hide');
        ConstManager.adminCreateBox.classList.add('hidden');
    } else {
        ConstManager.eventPanel.classList.remove('hide');
        ConstManager.eventPanel.classList.add('show');
        ConstManager.adminCreateBox.classList.remove('hidden');
    }
}

export function cancelEventForm() {
    if (ConstManager.eventPanel.classList.contains('show')) {
        ConstManager.eventPanel.classList.remove('show');
        ConstManager.eventPanel.classList.add('hide');
        ConstManager.adminCreateBox.classList.remove('hidden');
    }
}