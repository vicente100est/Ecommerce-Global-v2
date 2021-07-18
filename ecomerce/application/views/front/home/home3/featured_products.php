<!-- PAGE -->
<section class="page-section featured-products sl-featured">
    <div class="container">
        <h2 class="section-title section-title-lg section-title-2">
            <span>
            	<?php echo translate('latest_featured_products');?>
            </span>
        </h2>
        <div class="carousel-arrow-alt">
            <div class="owl-carousel carousel-arrow" id="featured-products-carousel">
                <?php
					$box_style =  $this->db->get_where('ui_settings',array('ui_settings_id' => 29))->row()->value;
					$limit =  $this->db->get_where('ui_settings',array('ui_settings_id' => 20))->row()->value;
                    $featured=$this->crud_model->product_list_set('featured',$limit);
                    foreach($featured as $row){
                		echo $this->html_model->product_box($row, 'grid', $box_style);
					}
                ?>
            </div>
        </div>
    </div>
</section>
<!-- /PAGE -->
<script>
$(document).ready(function(){
	setTimeout( function(){ 
		set_featured_product_box_height();
	},1000 );
});

function set_featured_product_box_height(){
	var max_title = 0;
	$('.sl-featured .caption-title').each(function(){
        var current_height= parseInt($(this).css('height'));
		if(current_height >= max_title){
			max_title = current_height;
		}
    });
    if (max_title > 0) {
        $('.sl-featured .caption-title').css('height',max_title);
    }
}
</script>