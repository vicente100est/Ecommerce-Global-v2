<!-- PAGE -->
<section class="page-section featured-products sl-featured" style="background-color: #fff;">
    <div class="container">
        <h2 class="section-title section-title-lg section-title-2">
            <span>
            	<?php echo translate('todays_deal_products');?>
            </span>
        </h2>
        <div class="carousel-arrow-alt">
            <div class="owl-carousel carousel-arrow" id="deal-products-carousel">
                <?php
					$box_style =  $this->db->get_where('ui_settings',array('ui_settings_id' => 60))->row()->value;
					$limit =  $this->db->get_where('ui_settings',array('ui_settings_id' => 61))->row()->value;
                    $todays_deal=$this->crud_model->product_list_set('deal',$limit);
                    foreach($todays_deal as $row){
                		echo $this->html_model->product_box($row, 'grid', $box_style);
					}
                ?>
            </div>
        </div>
    </div>
</section>
<!-- /PAGE -->


<script>
	jQuery(document).ready(function () {
		$('#deal-products-carousel').owlCarousel({
			autoplay: true,
			autoplayHoverPause: true,
			loop:true,
			margin: 30,
			dots: false,
			nav: true,
			navText: [
				"<i class='fa fa-angle-left'></i>",
				"<i class='fa fa-angle-right'></i>"
			],
			responsive: {
				0: {items: 2},
				479: {items: 2},
				768: {items: 2},
				991: {items: 5},
				1024: {items: 5}
			}
		});
	});
</script>