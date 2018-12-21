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


            
            <div class="row passend">
              <div class="col-md-6">
                <?php  
                        $a = new GlobalArea('Second Col 1(' . $page->getCollectionID() . ')');
                        $a->display($c);
                ?>                  
   
              </div>
              <div class="col-md-6">
                <?php  
                        $a = new GlobalArea('First Col 1(' . $page->getCollectionID() . ')');
                        $a->display($c);
                ?>   
              </div>                                        
            </div>
                
            

      </div>
<?php
if($c->getCollectionParentID() != 0){
  $this->inc('elements/footer.php'); 
}
?>       