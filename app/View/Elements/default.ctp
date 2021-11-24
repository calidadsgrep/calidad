<html>
<head>
<?php echo $this->Html->charset('UTF-8'); ?>
<title><?php echo $page_title; ?></title>

<?php if (Configure::read('debug') == 0): ?>
<meta http-equiv="Refresh" content="<?php echo $pause; ?>;url=<?php echo $url; ?>"/>
<?php endif; ?>
<style>
P { text-align:center; font:bold 1.1em sans-serif;}
A { color:#444; text-decoration:none }
d:HOVER { text-decoration: underline; color:#44E }
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <br>
    <div class="alert alert-success fade in col-md-10">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong></strong> <?php echo $message; ?>
  </div>
</body>
</html>