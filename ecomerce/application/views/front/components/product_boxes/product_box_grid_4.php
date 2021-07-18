
<div class="product-box-4">
    <div class="btns">
        <span class="btn" onclick="quick_view('<?php echo $this->crud_model->product_link($product_id,'quick'); ?>')"
                data-toggle="tooltip" data-placement="right" data-original-title="<?php  echo translate('quick_view'); ?>">
            <i class="fa fa-eye"></i>
        </span>
        <span class="btn" onclick="to_wishlist(<?php echo $product_id; ?>,event)"
                data-toggle="tooltip" data-placement="right" data-original-title="<?php if($this->crud_model->is_wished($product_id)=="yes"){ echo translate('added_to_wishlist'); } else { echo translate('add_to_wishlist'); } ?>">
            <i class="fa fa-heart"></i>
        </span>
        <span class="btn" onclick="do_compare(<?php echo $product_id; ?>,event)"
                data-toggle="tooltip" data-placement="right" data-original-title="<?php if($this->crud_model->is_compared($product_id)=="yes"){ echo translate('compared'); } else { echo translate('compare'); } ?>">
            <i class="fa fa-exchange"></i>
        </span>
    </div>
    <div class="img">
        <a href="<?php echo $this->crud_model->product_link($product_id); ?>" class="d-block">
            <img src="<?php echo img_loading(); ?>" alt="" class="image_delay" data-src="<?php echo $this->crud_model->file_view('product',$product_id,'','','thumb','src','multi','one'); ?>">
        </a>
    </div>
    <div class="info">
        <h4 class="caption-title">
            <a href="<?php echo $this->crud_model->product_link($product_id); ?>">
                <?php echo $title; ?>
            </a>
        </h4>
        <div class="price">
            <?php if($this->crud_model->get_type_name_by_id('product',$product_id,'discount') > 0){ ?>
                <del><?php echo currency($sale_price); ?></del>
                <span><?php echo currency($this->crud_model->get_product_price($product_id)); ?> </span>
            <?php } else { ?>
                <span><?php echo currency($sale_price); ?></span> 
            <?php }?>
        </div>
        <div class="add-cart-btn">
            <span class="btn" onclick="to_cart(<?php echo $product_id; ?>,event)">
                <i class="fa fa-shopping-cart"></i>
                <?php if($this->crud_model->is_added_to_cart($product_id)=="yes"){ 
                    echo translate('added_to_cart');  
                    } else { 
                    echo translate('add_to_cart');  
                    } 
                ?>
            </span>
        </div>
    </div>
</div>




                                        
