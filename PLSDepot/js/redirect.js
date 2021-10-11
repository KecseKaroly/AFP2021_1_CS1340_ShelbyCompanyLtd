function Redirect(panel) {
    switch(panel) {
        case 0:
          // menü
          window.location.replace("menu.php");
          break;
        case 1:
          // megbízások
          window.location.replace("listorders.php");
          break;
        case 2:
            // új megbízás
            window.location.replace("newentryform.php");
          break;
        case 3:
            // felhasználók
            window.location.replace("profiles.php");
          break;
        case 4:
          //kijelentkezés
          window.location.replace("index.php");
          break;
      }
}