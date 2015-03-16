
<?php include "header.tpl.php"; ?>


 <section id="principal">

  

  <div class="container">

     <?php if ($messages): ?>
              <div id="messages">
                <div class="section clearfix">
                <?php print $messages; ?>
              </div></div> <!-- /.section, /#messages -->          
              <?php endif; ?>
              <?php if ($tabs): ?>
                <div class="tabs">
                  <?php print render($tabs); ?>
                </div>
              <?php endif; ?>             

              <?php if (($title)&&(!$is_front)): ?>                      
              <div class="container">                          
                  <h1 class="title" id="page-title"><?php print $title; ?></h1>                                         
              </div>                          
             <?php endif; ?>

    
    <div class="row">

      <div class="col-sm-9"> 

          <div id="conteudo">                      
              <?php print render($page['content']); ?>            
          </div> <!-- conteudo -->
      </div>

      <div class="col-sm-3">       
        <div id="sidebar">
          <?php print render($page['sidebar']); ?>
        </div>
      </div><!-- sidebar -->

    </div>     
  </div><!-- container -->
</section><!-- principal -->


<?php include "footer.tpl.php"; ?>


