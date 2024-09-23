<?php 
if ( ! defined( 'ABSPATH' ) ) { exit; }
global $foxtool_options; ?>
<h2><?php _e('MEDIA', 'foxtool'); ?></h2>
<div class="ft-on">
<label class="nut-fton">
<input class="toggle-checkbox" id="check5" data-target="play5" type="checkbox" name="foxtool_settings[media]" value="1" <?php if ( isset($foxtool_options['media']) && 1 == $foxtool_options['media'] ) echo 'checked="checked"'; ?> />
<span class="ftder"></span></label>
<label class="ft-on-right"><?php _e('ON/OFF', 'foxtool'); ?></label>
</div>
<div id="play5" class="ft-card toggle-div">
  <h3><i class="fa-regular fa-photo-film-music"></i> <?php _e('Automatically name uploaded libraries', 'foxtool') ?></h3>
	<label class="nut-switch">
	<input type="checkbox" name="foxtool_settings[media-title1]" value="1" <?php if ( isset($foxtool_options['media-title1']) && 1 == $foxtool_options['media-title1'] ) echo 'checked="checked"'; ?> />
	<span class="slider"></span></label>
	<label class="ft-label-right"><?php _e('Automatic name', 'foxtool'); ?></label>
	<p class="ft-note ft-note-red"><i class="fa-regular fa-lightbulb-on"></i> <?php _e('The name will be set with the domain name of the website and 10 random characters', 'foxtool'); ?></p>
  <h3><i class="fa-regular fa-crop"></i> <?php _e('Image crop configuration', 'foxtool') ?></h3>
	<!-- upload hinh anh 1 -->
	<label class="nut-switch">
	<input type="checkbox" name="foxtool_settings[media-up1]" value="1" <?php if ( isset($foxtool_options['media-up1']) && 1 == $foxtool_options['media-up1'] ) echo 'checked="checked"'; ?> />
	<span class="slider"></span></label>
	<label class="ft-label-right"><?php _e('Stop cropping all', 'foxtool'); ?></label>
	<?php
	global $_wp_additional_image_sizes;
	$image_sizes = get_intermediate_image_sizes();
	if (isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes) > 0) {
		$image_sizes = array_merge($image_sizes, array_keys($_wp_additional_image_sizes));
	}
	$image_sizes = array_unique($image_sizes);
	$selected_sizes = array(); 
	foreach ($image_sizes as $i => $size) {
		$width = isset($_wp_additional_image_sizes[$size]['width']) ? $_wp_additional_image_sizes[$size]['width'] : get_option($size.'_size_w');
		?>
		<p>
			<label class="nut-switch">
				<input type="checkbox" name="foxtool_settings[main-img][]" value="<?php echo $size; ?>" <?php if (isset($foxtool_options['main-img']) && in_array($size, $foxtool_options['main-img'])) echo 'checked="checked"'; ?> />
				<span class="slider"></span>
			</label>
			<label class="ft-label-right"><?php echo __('Stop cropping', 'foxtool') .' '. $size .' (W: '. $width .')'; ?></label>
		</p>
	<?php } ?>
	<div class="ft-card-note ft-del-crop"> 
	<?php
	foreach ($image_sizes as $i => $size) {
		$width = isset($_wp_additional_image_sizes[$size]['width']) ? $_wp_additional_image_sizes[$size]['width'] : get_option($size.'_size_w');
		?>
		<p>
			<a href="javascript:void(0)" id="cropdel-<?php echo $size; ?>"><i class="fa-regular fa-trash"></i> <?php echo $size .' (W: '. $width .')'; ?></a>
		</p>
	<?php } ?>
	</div>
	<div id="delete-size-end"></div>
	<script>
    jQuery(document).ready(function($) {
			$('a[id^="cropdel-"]').on('click', function(e) {
				e.preventDefault();
				var size = $(this).attr('id').replace('cropdel-', '');
				var foxtoolInput = prompt('<?php _e('Enter from foxtool to confirm deletion:', 'foxtool') ?>');
				if (foxtoolInput === 'foxtool') {
					var data = {
						'action': 'foxtool_delete_images_by_size',
						'size': size,
						'security': '<?php echo wp_create_nonce('foxtool_delete_crop_nonce'); ?>',
					};
					$.ajax({
						type: 'POST',
						url: '<?php echo admin_url('admin-ajax.php');?>',
						data: data,
						success: function(response) {
							$('#delete-size-end').html('<span>'+ response.data + '</span>');
						}
					});
				} else {
					alert('<?php _e('Entering incorrect content', 'foxtool') ?>');
				}
			});
		});
	</script>
	<p class="ft-note ft-note-red"><i class="fa-regular fa-lightbulb-on"></i> <?php _e('Exercise caution when using this feature, as your interface may require various sizes to display properly. If youre a web designer, youll understand the need for a variety of sizes to be utilized', 'foxtool'); ?></p>
  <h3><i class="fa-regular fa-upload"></i> <?php _e('Configure image upload function', 'foxtool') ?></h3>
	<!-- upload hinh anh 2 -->
	<label class="nut-switch">
	<input type="checkbox" name="foxtool_settings[media-up2]" value="1" <?php if ( isset($foxtool_options['media-up2']) && 1 == $foxtool_options['media-up2'] ) echo 'checked="checked"'; ?> />
	<span class="slider"></span></label>
	<label class="ft-label-right"><?php _e('Enable upload size limit', 'foxtool'); ?></label>
	
	<p>
	<input class="ft-input-small" placeholder="10" name="foxtool_settings[media-up21]" type="number" value="<?php if(!empty($foxtool_options['media-up21'])){echo sanitize_text_field($foxtool_options['media-up21']);} ?>"/>
	<label class="ft-label-right"><?php _e('MB', 'foxtool'); ?></label>
	</p>
	
	<p class="ft-note"><i class="fa-regular fa-lightbulb-on"></i> <?php _e('If you have members and do not want them to upload images with excessively large sizes, causing storage space usage, you can limit the maximum size allowed for upload', 'foxtool'); ?></p>
	
	<!-- upload hinh anh 3 -->
	<label class="nut-switch">
	<input type="checkbox" name="foxtool_settings[media-up3]" value="1" <?php if ( isset($foxtool_options['media-up3']) && 1 == $foxtool_options['media-up3'] ) echo 'checked="checked"'; ?> />
	<span class="slider"></span></label>
	<label class="ft-label-right"><?php _e('Allow uploading SVG files', 'foxtool'); ?></label>
	<p class="ft-note"><i class="fa-regular fa-lightbulb-on"></i> <?php _e('Enable this feature if you want SVG images to be uploaded to the media', 'foxtool'); ?></p>
	
	<!-- upload hinh anh 4 -->
	<label class="nut-switch">
	<input type="checkbox" name="foxtool_settings[media-up4]" value="1" <?php if ( isset($foxtool_options['media-up4']) && 1 == $foxtool_options['media-up4'] ) echo 'checked="checked"'; ?> />
	<span class="slider"></span></label>
	<label class="ft-label-right"><?php _e('Allow uploading JFIF files', 'foxtool'); ?></label>
	<p class="ft-note"><i class="fa-regular fa-lightbulb-on"></i> <?php _e('Enable this feature if you want JFIF format images to be uploaded to the media. The uploaded images will be converted to JPG or WEBP format according to the configuration', 'foxtool'); ?></p>
	
  <h3><i class="fa-regular fa-file-zipper"></i> <?php _e('Compress JPG images upon upload', 'foxtool') ?></h3>
	<!-- upload hinh anh 1 -->
	<label class="nut-switch">
	<input type="checkbox" name="foxtool_settings[media-zip1]" value="1" <?php if ( isset($foxtool_options['media-zip1']) && 1 == $foxtool_options['media-zip1'] ) echo 'checked="checked"'; ?> />
	<span class="slider"></span></label>
	<label class="ft-label-right"><?php _e('Enable JPG image compression', 'foxtool'); ?></label>
	
	<p class="ft-keo">
	<input type="range" name="foxtool_settings[media-zip11]" min="10" max="90" value="<?php if(!empty($foxtool_options['media-zip11'])){echo sanitize_text_field($foxtool_options['media-zip11']);} else {echo sanitize_text_field('60');} ?>" class="ftslide" data-index="10">
	<span><?php _e('Compression level (', 'foxtool'); ?><b><span id="demo10"></span></b> - 90)</span>
	</p>
	
	<p class="ft-note"><i class="fa-regular fa-lightbulb-on"></i> <?php _e('You can adjust the compression level of the image from 5 to 100 (100 being no compression)', 'foxtool'); ?></p>	
	
	<!-- png to jpg -->
	<label class="nut-switch">
	<input type="checkbox" name="foxtool_settings[media-zip12]" value="1" <?php if ( isset($foxtool_options['media-zip12']) && 1 == $foxtool_options['media-zip12'] ) echo 'checked="checked"'; ?> />
	<span class="slider"></span></label>
	<label class="ft-label-right"><?php _e('Convert PNG to JPG', 'foxtool'); ?></label>
	<p class="ft-note"><i class="fa-regular fa-lightbulb-on"></i> <?php _e('Convert PNG images to JPG upon upload, and compress the images according to the JPG configuration', 'foxtool'); ?></p>
  <h3><i class="fa-regular fa-file-zipper"></i> <?php _e('Convert images to WEBP upon upload', 'foxtool') ?></h3>
	<!-- jpg,png, gif to webp -->
	<label class="nut-switch">
	<input type="checkbox" name="foxtool_settings[media-webp1]" value="1" <?php if ( isset($foxtool_options['media-webp1']) && 1 == $foxtool_options['media-webp1'] ) echo 'checked="checked"'; ?> />
	<span class="slider"></span></label>
	<label class="ft-label-right"><?php _e('Convert JPG and PNG to WEBP', 'foxtool'); ?></label>
	
	<p class="ft-keo">
	<input type="range" name="foxtool_settings[media-webp11]" min="10" max="90" value="<?php if(!empty($foxtool_options['media-webp11'])){echo sanitize_text_field($foxtool_options['media-webp11']);} else {echo sanitize_text_field('60');} ?>" class="ftslide" data-index="11">
	<span><?php _e('Compression level (', 'foxtool'); ?><b><span id="demo11"></span></b> - 90)</span>
	</p>
	
	<p class="ft-note"><i class="fa-regular fa-lightbulb-on"></i> <?php _e('Convert JPG and PNG images to WEBP upon upload, and compress the images according to the configuration you enter', 'foxtool'); ?></p>
  
  <h3><i class="fa-regular fa-file-zipper"></i> <?php _e('Convert images to AVIF upon upload', 'foxtool') ?></h3>
	<!-- jpg,png, gif to avif -->
	<label class="nut-switch">
	<input type="checkbox" name="foxtool_settings[media-avif1]" value="1" <?php if ( isset($foxtool_options['media-avif1']) && 1 == $foxtool_options['media-avif1'] ) echo 'checked="checked"'; ?> />
	<span class="slider"></span></label>
	<label class="ft-label-right"><?php _e('Allow uploading AVIF image format', 'foxtool'); ?></label>
	<p>
	<label class="nut-switch">
	<input type="checkbox" name="foxtool_settings[media-avif2]" value="1" <?php if ( isset($foxtool_options['media-avif2']) && 1 == $foxtool_options['media-avif2'] ) echo 'checked="checked"'; ?> />
	<span class="slider"></span></label>
	<label class="ft-label-right"><?php _e('Convert JPG and PNG to AVIF', 'foxtool'); ?></label>
	</p>

	<p class="ft-keo">
	<input type="range" name="foxtool_settings[media-avif21]" min="10" max="90" value="<?php if(!empty($foxtool_options['media-avif21'])){echo sanitize_text_field($foxtool_options['media-avif21']);} else {echo sanitize_text_field('60');} ?>" class="ftslide" data-index="12">
	<span><?php _e('Compression level (', 'foxtool'); ?><b><span id="demo12"></span></b> - 90)</span>
	</p>
	
	<p class="ft-note"><i class="fa-regular fa-lightbulb-on"></i> <?php _e('Convert JPG and PNG images to AVIF upon upload, and compress the images according to the configuration you enter', 'foxtool'); ?><br>
	<b><?php _e('Only supported from PHP 8.1 and above', 'foxtool'); ?></b>
	</p>
  
  <h3><i class="fa-regular fa-crop-simple"></i> <?php _e('Limits the size of JPG, PNG, WEBP, AVIF images when uploading', 'foxtool') ?></h3>
	<!-- upload hinh anh 1 -->
	<label class="nut-switch">
	<input type="checkbox" name="foxtool_settings[media-zip2]" value="1" <?php if ( isset($foxtool_options['media-zip2']) && 1 == $foxtool_options['media-zip2'] ) echo 'checked="checked"'; ?> />
	<span class="slider"></span></label>
	<label class="ft-label-right"><?php _e('Limit JPG, PNG, WEBP, AVIF images', 'foxtool'); ?></label>
	
	<p style="display:flex;align-items:center;">
	<input class="ft-input-small" placeholder="" name="foxtool_settings[media-zip21]" type="number" value="<?php if(!empty($foxtool_options['media-zip21'])){echo sanitize_text_field($foxtool_options['media-zip21']);} ?>"/>
	<span style="margin-right:7px;"><?php _e('Max width', 'foxtool'); ?></span>
	<input class="ft-input-small" placeholder="" name="foxtool_settings[media-zip22]" type="number" value="<?php if(!empty($foxtool_options['media-zip22'])){echo sanitize_text_field($foxtool_options['media-zip22']);} ?>"/>
	<span><?php _e('Max height', 'foxtool'); ?></span>
	</p>
	
	<p class="ft-note"><i class="fa-regular fa-lightbulb-on"></i> <?php _e('Limits the maximum width and height of JPG, PNG, WEBP images upon upload. You can leave it blank if you want to keep the original size', 'foxtool'); ?></p>	
	
  <h3><i class="fa-regular fa-diagram-venn"></i> <?php _e('Configure adding a watermark to images upon upload', 'foxtool') ?></h3>
	<!-- them logo vao hinh anh -->
	<label class="nut-switch">
	<input type="checkbox" name="foxtool_settings[media-logo1]" value="1" <?php if ( isset($foxtool_options['media-logo1']) && 1 == $foxtool_options['media-logo1'] ) echo 'checked="checked"'; ?> />
	<span class="slider"></span></label>
	<label class="ft-label-right"><?php _e('Add watermark to images upon upload', 'foxtool'); ?></label>
	
	<p>
	<input class="ft-input-big" name="foxtool_settings[media-logo10]" type="text" value="<?php if(!empty($foxtool_options['media-logo10'])){echo sanitize_text_field($foxtool_options['media-logo10']);} ?>" placeholder="<?php _e('Enter content', 'foxtool'); ?>" />
	</p>
	
	<p style="display:flex;align-items:center;">
	<input class="ft-input-color" name="foxtool_settings[media-logo10-c1]" type="text" data-coloris value="<?php if(!empty($foxtool_options['media-logo10-c1'])){echo $foxtool_options['media-logo10-c1'];} ?>"/>
	<label class="ft-right-text"><?php _e('Text color', 'foxtool'); ?></label>
	</p>
	
	<p style="display:flex;">
	<input id="ft-add1" class="ft-input-big" name="foxtool_settings[media-logo11]" type="text" value="<?php if(!empty($foxtool_options['media-logo11'])){echo sanitize_text_field($foxtool_options['media-logo11']);} ?>" placeholder="<?php _e('Add the logo image link here', 'foxtool'); ?>" />
	<button class="ft-selec" data-input-id="ft-add1"><?php _e('Select image', 'foxtool'); ?></button>
	</p>
	<p>
    <?php 
    $positions = array(
        'Top Left' => 'ft-wtop-left',
        'Top Center' => 'ft-wtop-center',
        'Top Right' => 'ft-wtop-right',
        'Center' => 'ft-wcenter',
        'Bottom Left' => 'ft-wbottom-left',
        'Bottom Center' => 'ft-wbottom-center',
        'Bottom Right' => 'ft-wbottom-right'
    ); 
    $selected_position = isset($foxtool_options['media-logo12']) ? $foxtool_options['media-logo12'] : 'Center'; ?>
    <div class="ft-watermark-sel">
        <?php foreach ($positions as $label => $value) { $is_selected = ($selected_position == $label) ? 'ft-wselected' : ''; ?>
            <label class="ft-watermark-box <?php echo $value . ' ' . $is_selected; ?>">
                <input type="radio" name="foxtool_settings[media-logo12]" value="<?php echo $label; ?>" <?php echo ($is_selected) ? 'checked' : ''; ?>>
                <span class="ft-watermark-label"><?php echo $label; ?></span>
            </label>
        <?php } ?>
    </div>
	</p>
	<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ftwBoxes = document.querySelectorAll('.ft-watermark-box');
        ftwBoxes.forEach(box => {
            box.addEventListener('click', function () {
                ftwBoxes.forEach(b => b.classList.remove('ft-wselected'));
                this.classList.add('ft-wselected');
            });
        });
    });
	</script>
	<p class="ft-keo">
	<input type="range" name="foxtool_settings[media-logo13]" min="10" max="100" value="<?php if(!empty($foxtool_options['media-logo13'])){echo sanitize_text_field($foxtool_options['media-logo13']);} else { echo sanitize_text_field('100');} ?>" class="ftslide" data-index="16">
	<span><?php _e('Watermark image compared to main image', 'foxtool'); ?> <span id="demo16"></span> %</span>
	</p>
	<p class="ft-keo">
	<input type="range" name="foxtool_settings[media-logo14]" min="10" max="100" value="<?php if(!empty($foxtool_options['media-logo14'])){echo sanitize_text_field($foxtool_options['media-logo14']);} else { echo sanitize_text_field('100');} ?>" class="ftslide" data-index="15">
	<span><?php _e('Transparency level', 'foxtool'); ?> <span id="demo15"></span> %</span>
	</p>
	<p class="ft-note"><i class="fa-regular fa-lightbulb-on"></i> <?php _e('If you want your uploaded images to be watermarked, please use this function and configure it above. Watermark (PNG, JPG)', 'foxtool'); ?></p>
   
   <h3><i class="fa-regular fa-image-slash"></i> <?php _e('Find and delete all 404 images in media', 'foxtool') ?></h3>
	<div class="ft-del">
	<a class="delete-media" href="javascript:void(0)" id="delete-media"><i class="fa-regular fa-trash"></i> <?php _e('Delete all 404 images', 'foxtool'); ?></a>
	<div class="emed" style="display:none"><div class="ft-sload"></div> <?php _e('Please wait', 'foxtool'); ?></div>
	<div id="del-media"></div>
	<script>
	jQuery(document).ready(function($) {
		$('#delete-media').click(function(event) {
			var ajax_nonce = '<?php echo wp_create_nonce('foxtool_media_del'); ?>';
			$('.emed').show();
			event.preventDefault();
			$.ajax({
			url: '<?php echo admin_url('admin-ajax.php');?>',
			type: 'POST',
			data: {
				action: 'foxtool_delete_media',
				security: ajax_nonce,
			},
			success: function(response) {
				$('#del-media').html('<span><?php _e('Number of images 404 deleted: ', 'foxtool'); ?>'+ response.data.deleted_count +'</span>');
				$('.emed').hide();
			},
			error: function(response) {
				$('#del-media').html('<span><?php _e('Error! Unable to delete', 'foxtool'); ?></span>');
			}
			});
		});
	});
	</script>
	</div>	
</div>	