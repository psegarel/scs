<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
$active = '';
?>
<div id="frontpage-slideshow" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
  	<?php foreach ($rows as $id => $row): ?>
  		<?php 
  			if($id == 0){
  				$active = 'active';
  			}else{
          $active = '';
        }
  		?>
    	<li data-target="#frontpage-slideshow" 
    		data-slide-to="<?php print $id; ?>" 
    		class="<?php print $active; ?>"></li>
	<?php endforeach; ?>
  </ol><!-- ./ Indicators -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  	<?php foreach ($rows as $id => $row): ?>
  		<?php 
  			if($id == 0){
  				$active = 'active';
  			}else{
          $active = '';
        }
  		?>
	  	<div class="item <?php print $active; ?>">
			<?php print $row; ?>
	    </div>
	<?php endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#frontpage-slideshow" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#frontpage-slideshow" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a><!-- ./ Controls -->

</div>