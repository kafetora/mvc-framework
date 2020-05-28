<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if( isset( $title ) ): echo $this->escape( $title ) . ' - '; endif; ?></title>
</head>
<body>
  <div id="header">
    <h1><a href="<?php echo $base_url; ?>/">Mini Blog</a></h1>
    <div id="main">
      <?php echo $_content; ?>
    </div>
  </div>
</body>
</html>