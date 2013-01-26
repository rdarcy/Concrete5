<? $this->inc('elements/header.php'); ?>

 <div class="container">
    
		<div class="row">
		    <div class="span4">
		        <div class="hero-unit">
				  <?
					$a = new Area('Col1');
					$a->display($c); 
				  ?>
				</div>
		 
			</div>
			<div class="span4">
		        <div class="hero-unit">
				  <?
					$a = new Area('Col2');
					$a->display($c); 
				  ?>
				</div>
			</div>
			<div class="span4">
		        <div class="hero-unit">
				  <?
					$a = new Area('Col3');
					$a->display($c); 
				  ?>
				</div>
			</div>
		</div>
  </div>

<? $this->inc('elements/footer.php'); ?>