import { ConstManager } from "./Manager.js";
import { displayEventPanel, cancelEventForm } from "./eventPanel.js";
import { displayEventCard } from "./eventCard.js";

ConstManager.createEventButton.addEventListener('click', function() {
    displayEventPanel();
});

ConstManager.plusButton.addEventListener('click', function() {
    displayEventPanel();
});


ConstManager.cancelEventButton.addEventListener('click', function() {
    cancelEventForm();
});

displayEventCard();

