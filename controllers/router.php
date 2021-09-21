<?php 
  if (isset($_GET['section'])) {
    switch ($_GET['section']) {
      case 'logo':
        include('views/pages/home.php');
        break;
      case 'home':
        include('views/pages/home.php');
        break;
      case 'about':
        include('views/pages/about.php');
        break;
      case 'contact':
        include('views/pages/contact.php');
        break;
        case 'login':
          include('controllers/loginController.php');
          break;
          case 'logout':
            include('controllers/logoutController.php');
            break;
          case 'golden':
            include('views/pages/golden.php');
        break;
      default:
       include('views/pages/errors/404.php');
        break;
      }
    }
?>