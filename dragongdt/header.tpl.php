<header>
<div class="container">
  
  
      <div class="col-sm-9 logo">
          <h1><a href="<?php print $front_page; ?>"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/dragon.jpg" alt="Dragon GDT" class="img-responsive" /></a></h1>
      </div>
      <div class="col-sm-3 login">

        <?php print render($page['header']); ?>     

      </div>

  

  

   
      <div class="col-sm-9 menu">

        <nav id="topnav" class="navbar navbar-default" role="navigation">    
              <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>   
              </div> 

             
              <div class="collapse navbar-collapse navbar-ex1-collapse">   
                 <div class="menu-secoes">
                 
                    <?php print render($page['menu']); ?>     

                </div>
             </div>          
        </nav>

      
          
      </div>
      <div class="col-sm-3 search">
         <?php
            $block = module_invoke('custom_search_blocks', 'block_view', '1');
            print render($block['content']);        
          ?>  
      </div>
  


  


</div>
</header>