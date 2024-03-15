<section class="eventPanelBox outerShadow" id="eventPanelBox">
            <h2>Event creation</h2>
            <form class="eventForm" action="./../php/eventCreation.php" method="POST">
                <div class="eventNameBox">
                    <label for="eventName">Event name</label>
                    <input type="text" placeholder="Enter the name" name="eventName" id="eventName" minlength="3" maxlength="50"
                        required>
                </div>
                <div class="regionDateBox">
                    <div class="eventRegionBox">
                        <label for="eventRegion">Region</label>
                        <select name="eventRegion" class="eventRegion" id="eventRegion" required>
                            <option value="ileDeFrance" class="regionOption">Île-de-France</option>
                            <option value="normandie" class="regionOption">Normandie</option>
                            <option value="bretagne" class="regionOption">Bretagne</option>
                            <option value="aquitaine" class="regionOption">Nouvelle-Aquitaine</option>
                            <option value="auvergneRhonesAlpes" class="regionOption">Auvergne-Rhônes-Alpes</option>
                            <option value="occitanie" class="regionOption">Occitanie</option>
                            <option value="provenceAlpesCoteAzur" class="regionOption">Provence-Alpes-Côte-d'Azur</option>
                            <option value="centreValDeLoire" class="regionOption">Centre-Val-de-Loire</option>
                            <option value="grandEst" class="regionOption">Grand-Est</option>
                            <option value="bourgogneFrancheComté" class="regionOption">Bourgogne-Franche-Comté</option>
                            <option value="paysDeLaLoire" class="regionOption">Pays-de-la-Loire</option>
                            <option value="hautsDeFrance" class="regionOption">Hauts-de-France</option>
                            <option value="corse" class="regionOption">Corse</option>
                        </select>
                    </div>
                    <div class="eventDateBox">
                        <label for="eventDate">Date</label>
                        <input type="date" name="eventDate" class="eventDate" id="eventDate" required>
                    </div>
                </div>
                <div class="eventCommentBox">
                    <label for="eventComment">Comment</label>
                    <textarea name="eventComment" placeholder="Enter a comment" id="eventComment" cols="30" rows="10" minlength="5" maxlength="100"></textarea>
                </div>
                <div class="eventButtons">
                    <input class="cancelEventButton" type="button" value="Cancel">
                    <input class="validateButton" type="submit" value="Validate">
                </div>
            </form>
        </section>