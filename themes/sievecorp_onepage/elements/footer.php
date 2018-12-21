<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
	
			<div id="footer">
        <div id="disclaimer" class="container">
          <div class="row">
            <div class="col-md-6">
              <?php
                $a = new GlobalArea('Stupid disclaimer');
                $a->display($c);
              ?>
            </div>
            <div class="col-md-6">
              <?php
                $a = new GlobalArea('Stupid disclaimer 2');
                $a->display($c);
              ?>
            </div>            
          </div>
        </div>
			</div>
		<!-- end main container -->
		</div>

		<?php   Loader::element('footer_required'); ?>

	</body>
</html>
