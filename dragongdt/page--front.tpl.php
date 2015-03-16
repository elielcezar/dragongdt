
<?php include "header.tpl.php"; ?>


 <div id="principal">

<section id="topo">
  
<div class="container"> 
  <div class="row">
    <div class="col-sm-6">
      <img src="<?php print base_path() . path_to_theme() .'/' ?>img/gdt.png" alt="GDT" class="img-responsive" />  
    </div>
    <div class="col-sm-6">
      <p>Treinamento em Tolerâncias
          e Dimensionamentos 
          Geométricos (GD&amp;T)
      </p> 
      <div class="botao"><a href="#">Saiba Mais</a></div>
    </div>
  </div>
</div>     

</section>

<section id="conteudo">
  <div class="container">    
        <div class="cadastro-curso">
          <div class="row">
              <div class="col-sm-6">
                <img src="<?php print base_path() . path_to_theme() .'/' ?>img/embreve.png" alt="Em Breve Cursos 100% Online" class="img-responsive" />  
              </div>
              <div class="col-sm-6">
                  <?php
                      $block = module_invoke('simplenews', 'block_view', '159');
                      print render($block['content']);        
                    ?>  
              </div>
            </div>     
          </div>

        <div class="cursos-home">
          <?php print views_embed_view('cursos_home', 'default'); ?>
        </div>
    </div>  
</section>

 </div>

<?php include "footer.tpl.php"; ?>


