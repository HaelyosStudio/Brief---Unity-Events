<section class="adminLoginBox outerShadow" id="adminPanel">
            <h2>Admin login</h2>
            <form class="adminLoginForm" action="./php/signIn.php" method="POST">
                <div class="adminUsernameBox">
                    <label for="adminUsername">Username</label>
                    <input type="text" placeholder="Enter your username" name="adminUsername" id="adminUsername"
                        required>
                </div>
                <div class="adminPasswordBox">
                    <label for="adminPassword">Password</label>
                    <input type="password" placeholder="Enter your password" name="adminPassword" id="adminPassword"
                        required>
                </div>
                <div class="adminLoginButtons">
                    <input class="cancelButton" type="button" value="Cancel">
                    <input class="connectButton" type="submit" value="Connect">
                </div>
            </form>
        </section>