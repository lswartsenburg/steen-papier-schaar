<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php
if($c->getCollectionParentID() != 0){
  $this->inc('elements/header.php'); 
  $page = $c;
}
?>
      <div class="container">
          
            <div class="row">
              <div class="col-md-12">
                <?php  
                        $a = new GlobalArea('Main (' . $page->getCollectionID() . ')');
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