<!DOCTYPE html>
<html><?php
    $the_title = 'Thrillhouse Threads';
    include_once(__DIR__."\layout_functions.php");
?>
  <head>
    <?php echo make_head($the_title);?>
  </head>
  <body>
     <?php echo make_header($the_title);?>

    <section class="jumbotron">
        <div class="container">
          <div class="shadow">
            <div class="row text-center">
              <h2>Expertly handmade apparel</h2>
              <h3>~~~Made to order~~~</h3>
              <a class="btn btn-primary" href="#" role="button">View our gallery</a>
            </div>
          </div>
        </div>
    </section>
     
     <?php echo make_footer();?>

  </body>
</html>