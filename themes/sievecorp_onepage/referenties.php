<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php
if($c->getCollectionParentID() != 0){
  $this->inc('elements/header.php'); 
  $page = $c;
}
?>
      <div class="titlebar">
        <div class="titlebar-container">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <?php  
                  $a = new GlobalArea('Title (' . $page->getCollectionID() . ')');
                  $a->display($c);
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="titlebar-arrow"></div>
      </div>


      <div class="container">


            
            <div class="row ballonrij">
              <div class="col-md-6 ballon1">
                <div class="bubble">
                  <?php  
                          $a = new GlobalArea('Ballon1 1(' . $page->getCollectionID() . ')');
                          $a->display($c);
                  ?>    
                </div>
              </div>
              <div class="col-md-6 ballon2">
                <div class="bubble">
                <?php  
                        $a = new GlobalArea('Ballon2 1(' . $page->getCollectionID() . ')');
                        $a->display($c);
                ?>    
              </div>
              </div>                                        
            </div>
            <div class="row ballonrij">
              <div class="col-md-6 ballon3">
                <div class="bubble">
                <?php  
                        $a = new GlobalArea('Ballon3 (' . $page->getCollectionID() . ')');
                        $a->display($c);
                ?>    
              </div>
              </div>
              <div class="col-md-6 ballon4">
                <div class="bubble">
                <?php  
                        $a = new GlobalArea('Ballon4 (' . $page->getCollectionID() . ')');
                        $a->display($c);
                ?>    
              </div>
              </div>                                        
            </div>            
                
            

      </div>
      
<?php
if($c->getCollectionParentID() != 0){
  $this->inc('elements/footer.php'); 
}
?>         