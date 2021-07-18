<!-- PAGE -->
<section class="page-section featured-products sl-bundled" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="section-title section-title-lg section-title-2">
                            <span>
                                <?php echo translate('bundled_products');?>
                            </span>
                        </h2>
                        <div class="carousel-arrow-alt">
                            <div class="owl-carousel-2" id="most-viewed-carousel">
                                <?php
                                    $box_style =  $this->db->get_where('ui_settings',array('ui_settings_id' => 42))->row()->value;
                                    $limit =  $this->db->get_where('ui_settings',array('ui_settings_id' => 41))->row()->value;
                                    $product_bundle=$this->crud_model->product_list_set('bundle',$limit);
                                    //$product_bundle= $this->db->get_where('product', array('is_bundle' => 'yes'))->result_array();
                                    foreach($product_bundle as $row){
                                        echo $this->html_model->product_box($row, 'grid', $box_style);
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>
<!-- /PAGE -->
<script>
$(document).ready(function(){
    $(".owl-carousel-2").owlCarousel({
        autoplay: true,
        loop: true,
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
    set_bundled_product_box_height();
});

function set_bundled_product_box_height(){
    var max_title = 0;
    $('.sl-bundled .caption-title').each(function(){
        var current_height= parseInt($(this).css('height'));
        if(current_height >= max_title){
            max_title = current_height;
        }
    });
    if (max_title > 0) {
        $('.sl-bundled .caption-title').css('height',max_title);
    }
}
</script>