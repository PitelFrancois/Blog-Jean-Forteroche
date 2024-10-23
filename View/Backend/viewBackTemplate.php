<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="Public/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="Public/CSS/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/0d1298be20.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/0kjpsklubif6q97uhvtdavbb4630ngeps4gc82f4o2q46iom/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <?php require_once 'header.php' ; ?>
    <div class="site-pusher">
            <div class="site-content">
                <?= $content ?>
            </div>
    </div>
      <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
   });
  </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="Public/JS/menu.js"></script>
    <script type="text/javascript" src="Public/JS/Close.js"></script>
</body>
</html>