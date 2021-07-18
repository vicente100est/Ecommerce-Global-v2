<!-- Blog List -->
<div class="products">
	<div  id="result">
    </div>
</div>
<!-- /Blog list -->

<?php
	echo form_open(base_url() . 'home/ajax_customer_products/', array(
		'class' => 'form-horizontal',
		'method' => 'post',
		'id' => 'filter_form'
	));
?>
	<input type="hidden" name="title" id="titleaa" value="<?=$title?>">
	<input type="hidden" name="brand" id="brandaa" value="<?=$brand?>">
	<input type="hidden" name="category" id="categoryaa" value="<?=$cat?>">
    <input type="hidden" name="sub_category" id="sub_categoryaa" value="<?=$sub?>">
    <input type="hidden" name="condition" id="conditionaa" value="<?=$condition?>">
    
</form>
    
<script>		
	function filter_others(page){
		var top = Number(200);
		var loading_set = '<div style="text-align:center;width:100%;height:'+(top*2)+'px; position:relative;top:'+top+'px;"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i></div>';
		var form = $('#filter_form');
		var alert = $('#result');
		var formdata = false;
		if (window.FormData){
			formdata = new FormData(form[0]);
		}
		$.ajax({
			url: form.attr('action')+page+'/', // form action url
			type: 'POST', // form submit method get/post
			dataType: 'html', // request type html/json/xml
			data: formdata ? formdata : form.serialize(), // serialize form data 
			cache       : false,
			contentType : false,
			processData : false,
			beforeSend: function() {
				alert.fadeOut();
				alert.html(loading_set).fadeIn(); // change submit button text
			},
			success: function(data) {
				setTimeout(function(){
					alert.html(data); // fade in response data
				}, 20);
				setTimeout(function(){
					alert.fadeIn(); // fade in response data
					load_iamges();
				}, 30);
			},
			error: function(e) {
				console.log(e)
			}
		});
		
	}
	
	$(document).ready(function() {
		filter_others('0');
	});	
</script>