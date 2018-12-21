<?php  

defined('C5_EXECUTE') or die("Access Denied.");    
if($c->getCollectionParentID() != 0){
  $pages = array($c);
} else {
  Loader::model('page_list');
  

  $pl = new PageList();
  $pl->filterByParentID($c->getCollectionID());
  $pl->sortByDisplayOrder();
  $pages = $pl->get();
  array_unshift($pages, $c);
  
}
$this->controller->set("pages", $pages);
$this->inc('elements/header.php'); 

?>
<div id="maincontent" >
<?php


foreach($pages as $key => $page){
  $pagenum = $key + 1;
  
  echo "<div class='page-and-header' id='". str_replace(" ", "-", $page->getCollectionName())  ."-slide'>";
  $a = new GlobalArea('Image (' . $page->getCollectionID() . ')');
  $a->display($c);
  
  
  echo "<div class='page' id='"  . str_replace(" ", "-", $page->getCollectionName())  . "'>";
  $this->controller->set("page", $page);
  if($page->getCollectionTypeHandle() == "right_sidebar"){

    $this->inc('layouts/default.php');
    
  } else {
      $this->inc($page->getCollectionTypeHandle() . ".php");  
  }
  echo "</div></div>";

}


?>

</div>
	
	<!-- end sidebar -->
	
<?php  $this->inc('elements/footer.php'); ?>
