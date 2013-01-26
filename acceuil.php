<? $this->inc('elements/header.php'); ?>

 <div class="container">
    
		<div class="row">
		    <div class="span10">
		        <div class="hero-unit">
				  <?
					$a = new Area('Contenu');
					$a->display($c); 
				  ?>
				</div>
		      
		           
		    </div>
		    <div class="span2">
		    	<div class="well well-small">
					<?
					$a = new Area('Lateral');
					$a->display($c); 
					?>
				</div>
		    </div>
	    </div>
	    
	    

    </div>
<? $this->inc('elements/footer.php'); ?>