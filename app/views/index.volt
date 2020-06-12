<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ titlePage }}</title>
        <link rel="stylesheet" href="/public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/public/css/common.css" />        
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>
    </head>
    <body>

        {% include 'layouts/global/navigate.volt' %}        
        
        <?php echo $this->getContent(); ?>

        <hr/>      
        
  <!-- FOOTER -->
  <footer class="container" style="padding-top: 20px;">
    <p>&copy; 2020 <a href="">Vegma</a> &middot; <a href="#">Правовая информация</a> &middot; <a href="#">Персональные данные</a></p>
  </footer>        
        
<!-- Dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap 4 Autocomplete -->
<script src="/public/js/typeahead.js"></script>
    
        <script src="/public/js/main.js"></script>

    </body>
    
</html>
