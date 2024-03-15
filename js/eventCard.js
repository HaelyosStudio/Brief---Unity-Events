import { ConstManager, regionList } from "./Manager";

export function displayEventCard() {
  const eventList = document.getElementById('eventsList');
  eventList.innerHTML = '';
  fetch('./../db/events.csv')
    .then(response => response.text())
    .then(data => {
      const events = data.trim().split('\n').map(row => row.split(','));
      events.forEach(event => {
        const [eventTitle, eventRegionValue, eventDate, eventComment] = event;
        const eventDateArray = eventDate.split('-');
        const formattedEventDate = `${eventDateArray[2]}/${eventDateArray[1]}`;
        const eventRegionName = regionList[eventRegionValue];

        const eventBox = document.createElement('div');
        eventBox.classList.add('eventBox');
        eventBox.classList.add('outerShadow');

        const topBox = document.createElement('div');
        topBox.classList.add('topBox');
        eventBox.appendChild(topBox);

        const bottomBox = document.createElement('div');
        bottomBox.classList.add('bottomBox');
        eventBox.appendChild(bottomBox);

        const rightBox = document.createElement('div');
        rightBox.classList.add('rightBox');
        bottomBox.appendChild(rightBox);

        const eventTitleElement = document.createElement('h2');
        eventTitleElement.classList.add('eventTitle');
        eventTitleElement.textContent = eventTitle.replace(/"/g, '');
        rightBox.appendChild(eventTitleElement);

        const eventCommentElement = document.createElement('p');
        eventCommentElement.classList.add('eventComment');
        eventCommentElement.textContent = eventComment.replace(/"/g, '');
        rightBox.appendChild(eventCommentElement);

        const leftBox = document.createElement('div');
        leftBox.classList.add('leftBox');
        bottomBox.appendChild(leftBox);

        const eventDateElement = document.createElement('h2');
        eventDateElement.classList.add('eventDate');
        eventDateElement.textContent = formattedEventDate;
        leftBox.appendChild(eventDateElement);

        const eventRegionElement = document.createElement('h2');
        eventRegionElement.classList.add('eventRegion');
        eventRegionElement.textContent = eventRegionName;
        leftBox.appendChild(eventRegionElement);

        eventList.appendChild(eventBox);
      });
    })
    .catch(error => console.error(error));
}
