<?php

session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'){
    header('Location: ./../index.php');
}

?>

<?php if (isset($_GET['successEventCreation'])): ?>
    <script>
      window.onload = function() {
        alert("Event created successfully!");
        window.location.href = './../pages/adminLoggedMain.php';
      }
    </script>
  <?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './../components/fontLinks.php'; ?>
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Unity Events</title>

</head>

<body>
    <header class="headerBox">
        <?php include './../components/adminNavBox.php' ?>
        <?php include './../components/background.php' ?>
        <?php include './../components/adminCreateEventBox.php' ?>
        <?php include './../components/eventPanel.php' ?>
    </header>
    <section class="eventsBoard" id="eventsBoard">
        <div class="eventsList" id="eventsList"></div>
    </section>
    <footer class="footerMainBox">
        <?php include './../components/footer.php' ?>
    </footer>
    <script src="./../js/adminScript.js" type="module"></script>
</body>

</html>