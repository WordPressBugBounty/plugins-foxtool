<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
global $foxtool_options;
# add font Awesome
function foxtool_fontawe_assets(){
	global $foxtool_options;
	if (isset($foxtool_options['main-add1'])){
	wp_enqueue_style( 'foxtool-icon', FOXTOOL_URL . 'font/css/all.css', array(), FOXTOOL_VERSION);
	}
}
add_action('wp_enqueue_scripts', 'foxtool_fontawe_assets');
# add font Google
function foxtool_Google_font(){
global $foxtool_options;
ob_start();
if(!empty($foxtool_options['main-font1'])){ 
$font = $foxtool_options['main-font1'];
} else {
$font =	'Default';
}
$fontFamilies = [
    'Default' => '',
    'Arial' => 'Arial, Helvetica, sans-serif',
    'Oswald' => "'Oswald', sans-serif",
    'Nunito' => "'Nunito', sans-serif",
    'Josefin Sans' => "'Josefin Sans', sans-serif",
    'Montserrat' => "'Montserrat', sans-serif",
    'Roboto Condensed' => "'Roboto Condensed', sans-serif",
    'Open Sans' => "'Open Sans', sans-serif",
    'Raleway' => "'Raleway', sans-serif",
    'Playfair Display' => "'Playfair Display', sans-serif",
    'Inter' => "'Inter', sans-serif",
    'Lora' => "'Lora', sans-serif",
    'Quicksand' => "'Quicksand', sans-serif",
    'Kanit' => "'Kanit', sans-serif",
    'Comfortaa' => "'Comfortaa', sans-serif",
    'Prompt' => "'Prompt', sans-serif",
    'IBM Plex Serif' => "'IBM Plex Serif', sans-serif",
    'Spectral' => "'Spectral', sans-serif",
    'Philosopher' => "'Philosopher', sans-serif",
    'Taviraj' => "'Taviraj', sans-serif",
    'Readex Pro' => "'Readex Pro', sans-serif",
    'Anybody' => "'Anybody', sans-serif",
];
$fontLinks = [
    'Oswald' => 'https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap',
    'Nunito' => 'https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
    'Josefin Sans' => 'https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap',
    'Montserrat' => 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
    'Roboto Condensed' => 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap',
    'Open Sans' => 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap',
    'Raleway' => 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap',
    'Playfair Display' => 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
    'Inter' => 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap',
    'Lora' => 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap',
    'Quicksand' => 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap',
    'Kanit' => 'https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
    'Comfortaa' => 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap',
    'Prompt' => 'https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
    'IBM Plex Serif' => 'https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap',
    'Spectral' => 'https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap',
    'Philosopher' => 'https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap',
    'Taviraj' => 'https://fonts.googleapis.com/css2?family=Taviraj:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
    'Readex Pro' => 'https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200;300;400;500;600;700&display=swap',
    'Anybody' => 'https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
];
$fontFamily = isset($fontFamilies[$font]) ? $fontFamilies[$font] : '';
$fontLink = isset($fontLinks[$font]) ? $fontLinks[$font] : '';
if ($font !== 'Default') {
    if ($fontLink !== '') {
        ?>
        <script>
            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = '<?php echo $fontLink; ?>';
            document.head.appendChild(link);
        </script>
        <?php
    }
    if ($fontFamily !== '') {
        ?>
        <style>
		body, body button, body input, body textarea, body select, body h1, body h2, body h3, body h4, body h5, body h6, body div, body span, body a, body p{ 
			font-family: 'Dashicons', <?php echo $fontFamily; ?> !important; 
		}
		</style>
        <?php
    }
}
echo ob_get_clean();    
}
add_action('wp_footer', 'foxtool_Google_font');
# them hieu ung cho trang web như noel
function foxtool_add_hover_style(){
	global $foxtool_options;
	if(isset($foxtool_options['main-hover1']) && $foxtool_options['main-hover1'] == 'Snow1'){
	wp_enqueue_script( 'hover', FOXTOOL_URL . 'link/hover/hover-style-1.js', array(), FOXTOOL_VERSION);
	}
	
	if(isset($foxtool_options['main-hover1']) && $foxtool_options['main-hover1'] == 'Snow2'){
	wp_enqueue_script( 'hover', FOXTOOL_URL . 'link/hover/hover-style-2.js', array(), FOXTOOL_VERSION);
	}
	
	if(isset($foxtool_options['main-hover1']) && $foxtool_options['main-hover1'] == 'Lunar1'){
	wp_enqueue_script( 'hover', FOXTOOL_URL . 'link/hover/hover-style-lunar-1.js', array(), FOXTOOL_VERSION);
	}
	
	if(isset($foxtool_options['main-hover1']) && $foxtool_options['main-hover1'] == 'Lunar2'){
	wp_enqueue_script( 'hover', FOXTOOL_URL . 'link/hover/hover-style-lunar-2.js', array(), FOXTOOL_VERSION);
	}
	
	if(isset($foxtool_options['main-hover1']) && $foxtool_options['main-hover1'] == 'Vietnam'){
	wp_enqueue_script( 'hover', FOXTOOL_URL . 'link/hover/hover-style-vietnam.js', array(), FOXTOOL_VERSION);
	}
	
	if(isset($foxtool_options['main-hover1']) && $foxtool_options['main-hover1'] == 'Indonesia'){
	wp_enqueue_script( 'hover', FOXTOOL_URL . 'link/hover/hover-style-indonesia.js', array(), FOXTOOL_VERSION);
	}
} 
add_action('wp_footer', 'foxtool_add_hover_style');
# che do darkmode
if (isset($foxtool_options['main-mode1'])){
function foxtool_darkmode_icon1(){
	$icon = '<span id="ft-darkmode-toggle" class="ft-sunmode">
		<svg id="ft-icon-moon" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"><path fill="currentColor" d="M10.412 4.158A8 8 0 1 0 18.93 16A9 9 0 0 1 10 7c0-.98.131-1.937.412-2.842ZM2 12C2 6.477 6.477 2 12 2h1.734l-.868 1.5C12.287 4.5 12 5.689 12 7a7 7 0 0 0 8.348 6.87l1.682-.327l-.543 1.626C20.162 19.137 16.417 22 12 22C6.477 22 2 17.523 2 12Z"/></svg>
		<svg id="ft-icon-sun" style="display:none;" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M8 3a.75.75 0 0 1-.75-.75V.75a.75.75 0 1 1 1.5 0v1.5A.75.75 0 0 1 8 3m0 7.5a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5M8 12a4 4 0 1 0 0-8a4 4 0 0 0 0 8m-.75 3.25a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0zM13 8a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5A.75.75 0 0 1 13 8M.75 7.25a.75.75 0 1 0 0 1.5h1.5a.75.75 0 0 0 0-1.5zm10.786-2.786a.75.75 0 0 1 0-1.06l1.06-1.06a.75.75 0 0 1 1.06 1.06l-1.06 1.06a.75.75 0 0 1-1.06 0m-9.193 8.132a.75.75 0 0 0 1.06 1.06l1.062-1.06a.75.75 0 0 0-1.061-1.06zm9.193-1.06a.75.75 0 0 1 1.06 0l1.06 1.06a.75.75 0 0 1-1.06 1.06l-1.06-1.06a.75.75 0 0 1 0-1.06M3.404 2.343a.75.75 0 0 0-1.06 1.06l1.06 1.061a.75.75 0 1 0 1.06-1.06l-1.06-1.06Z" clip-rule="evenodd"/></svg></span>';
	return $icon;
}
function foxtool_darkmode_icon2(){
    static $counter = 0; 
    $counter++;
    $unique_id = 'ft-darkmode-switch-' . $counter;
    $icon = '<span id="ft-darkmode-toggle-' . $counter . '" class="ft-toggle-switch">
                <input type="checkbox" id="' . $unique_id . '" />
                <label for="' . $unique_id . '" class="ft-switch"></label>
            </span>';
    return $icon;
}
function foxtool_darkmode_js(){
	global $foxtool_options;
	wp_enqueue_script( 'foxdark-js1', FOXTOOL_URL . 'link/darkmode/foxdark1.js', array(), FOXTOOL_VERSION);
	if(isset($foxtool_options['main-mode10']) && $foxtool_options['main-mode10'] == 'Toggle'){
		wp_enqueue_script( 'foxdark-js3', FOXTOOL_URL . 'link/darkmode/foxdark3.js', array(), FOXTOOL_VERSION, true);
	} elseif (isset($foxtool_options['main-mode10']) && $foxtool_options['main-mode10'] == 'System'){
		wp_enqueue_script( 'foxdark-js4', FOXTOOL_URL . 'link/darkmode/foxdark4.js', array(), FOXTOOL_VERSION, true);
	} elseif (isset($foxtool_options['main-mode10']) && $foxtool_options['main-mode10'] == 'Time'){
		wp_enqueue_script( 'foxdark-js5', FOXTOOL_URL . 'link/darkmode/foxdark5.js', array(), FOXTOOL_VERSION, true);
	} else {
		wp_enqueue_script( 'foxdark-js2', FOXTOOL_URL . 'link/darkmode/foxdark2.js', array(), FOXTOOL_VERSION, true);
	}
}
add_action('wp_enqueue_scripts', 'foxtool_darkmode_js');
function foxtool_darkmode_assets() {
	global $foxtool_options;
	// cau hinh vi tri va mua sac
	$color = !empty($foxtool_options['main-mode-c1']) ? $foxtool_options['main-mode-c1'] : '#444444';
	$here = isset($foxtool_options['main-mode11']) && $foxtool_options['main-mode11'] == 'Right' ? 'right' : 'left';
	if(!empty($foxtool_options['main-mode12']) && $foxtool_options['main-mode12'] < 300){
		$bot = $foxtool_options['main-mode12']. 'px';
	} elseif (!empty($foxtool_options['main-mode12']) && $foxtool_options['main-mode12'] >= 300){
		$bot = '50%';
	} else {
		$bot = '30px';
	}
	$lef = !empty($foxtool_options['main-mode13']) ? $foxtool_options['main-mode13']. 'px' : '30px';
	if(isset($foxtool_options['main-mode10']) && $foxtool_options['main-mode10'] == 'Toggle'){ ?>
		<style>
		.ft-toggle-switch input[type="checkbox"] {
				display: none;
		}
		.ft-switch {
			cursor: pointer;
			width: 100%;
			height: 100%;
			background-color: <?php echo $color; ?>;
			border-radius: 20px; 
			transition: background-color 0.3s ease;
			position: relative; 
		}
		.ft-switch::before {
			content: "";
			position: absolute;
			width: 18px; 
			height: 18px; 
			border-radius: 50%;
			background: white;
			z-index:1;
			top: 4px;
			left: 4px;
			transition: transform 0.3s ease;
		}
		.ft-switch:after {
			content: "";
			position: absolute;
			width: 15px; 
			height: 15px; 
			left: 26px;
			top: 50%;
			transform: translateY(-50%);
			background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJjb2xvcjojZmZmZmZmIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGNsYXNzPSJoLWZ1bGwgdy1mdWxsIj48cmVjdCB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgcng9IjMwIiBmaWxsPSJ0cmFuc3BhcmVudCIgc3Ryb2tlPSJ0cmFuc3BhcmVudCIgc3Ryb2tlLXdpZHRoPSIwIiBzdHJva2Utb3BhY2l0eT0iMTAwJSIgcGFpbnQtb3JkZXI9InN0cm9rZSI+PC9yZWN0Pjxzdmcgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgZmlsbD0iI2ZmZmZmZiIgeD0iMCIgeT0iMCIgcm9sZT0iaW1nIiBzdHlsZT0iZGlzcGxheTppbmxpbmUtYmxvY2s7dmVydGljYWwtYWxpZ246bWlkZGxlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIGZpbGw9IiNmZmZmZmYiPjxwYXRoIGQ9Ik00MDEuNCAzNTQuMmMtMi45LjEtNS44LjItOC43LjItNDcuOSAwLTkzLTE4LjktMTI2LjgtNTMuNC0zMy45LTM0LjQtNTIuNS04MC4xLTUyLjUtMTI4LjggMC0yNy43IDYuMS01NC41IDE3LjUtNzguNyAzLjEtNi42IDkuMy0xNi42IDEzLjYtMjMuNCAxLjktMi45LS41LTYuNy0zLjktNi4xLTYgLjktMTUuMiAyLjktMjcuNyA2LjhDMTM1LjEgOTUuNSA4MCAxNjguNyA4MCAyNTVjMCAxMDYuNiA4NS4xIDE5MyAxOTAuMSAxOTMgNTggMCAxMTAtMjYuNCAxNDQuOS02OC4xIDYtNy4yIDExLjUtMTMuOCAxNi40LTIxLjggMS44LTMtLjctNi43LTQuMS02LjEtOC41IDEuNy0xNy4xIDEuOC0yNS45IDIuMnoiIGZpbGw9ImN1cnJlbnRDb2xvciI+PC9wYXRoPjwvZz48L3N2Zz48L3N2Zz4=);
			background-size: contain;
			background-repeat: no-repeat;
		}
		.ft-toggle-switch input[type="checkbox"]:checked + .ft-switch:after {
			content: "";
			position: absolute;
			width: 15px; 
			height: 15px; 
			left: 4px;
			top: 50%;
			transform: translateY(-50%);
			background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJjb2xvcjojZmZmZmZmIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGNsYXNzPSJoLWZ1bGwgdy1mdWxsIj48cmVjdCB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgcng9IjAiIGZpbGw9InRyYW5zcGFyZW50IiBzdHJva2U9InRyYW5zcGFyZW50IiBzdHJva2Utd2lkdGg9IjAiIHN0cm9rZS1vcGFjaXR5PSIxMDAlIiBwYWludC1vcmRlcj0ic3Ryb2tlIj48L3JlY3Q+PHN2ZyB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0iI2ZmZmZmZiIgeD0iMCIgeT0iMCIgcm9sZT0iaW1nIiBzdHlsZT0iZGlzcGxheTppbmxpbmUtYmxvY2s7dmVydGljYWwtYWxpZ246bWlkZGxlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIGZpbGw9IiNmZmZmZmYiPjxwYXRoIGQ9Ik02Ljk5NSAxMmMwIDIuNzYxIDIuMjQ2IDUuMDA3IDUuMDA3IDUuMDA3czUuMDA3LTIuMjQ2IDUuMDA3LTUuMDA3cy0yLjI0Ni01LjAwNy01LjAwNy01LjAwN1M2Ljk5NSA5LjIzOSA2Ljk5NSAxMnpNMTEgMTloMnYzaC0yem0wLTE3aDJ2M2gtMnptLTkgOWgzdjJIMnptMTcgMGgzdjJoLTN6TTUuNjM3IDE5Ljc3OGwtMS40MTQtMS40MTRsMi4xMjEtMi4xMjFsMS40MTQgMS40MTR6TTE2LjI0MiA2LjM0NGwyLjEyMi0yLjEyMmwxLjQxNCAxLjQxNGwtMi4xMjIgMi4xMjJ6TTYuMzQ0IDcuNzU5TDQuMjIzIDUuNjM3bDEuNDE1LTEuNDE0bDIuMTIgMi4xMjJ6bTEzLjQzNCAxMC42MDVsLTEuNDE0IDEuNDE0bC0yLjEyMi0yLjEyMmwxLjQxNC0xLjQxNHoiIGZpbGw9ImN1cnJlbnRDb2xvciI+PC9wYXRoPjwvZz48L3N2Zz48L3N2Zz4=);
			background-size: contain;
			background-repeat: no-repeat;
		}
		.ft-toggle-switch input[type="checkbox"]:checked + .ft-switch {
			background-color: #777;
		}
		.ft-toggle-switch input[type="checkbox"]:checked + .ft-switch::before {
			transform: translateX(18px); 
		}
		</style>
		<?php if (isset($foxtool_options['main-mode-s1'])){ ?>
			<style>
			.ft-toggle-switch {
				background: none;
				border: none;
				cursor: pointer;
				padding: 0;
				width: 44px;
				height: 26px; 
				display: flex;
				align-items: center;
				justify-content: center;
			}
			</style>
		<?php } else { ?>
			<style>
			.ft-toggle-switch {
				background: none;
				border: none;
				cursor: pointer;
				padding: 0;
				position: fixed; 
				bottom: <?php echo $bot; ?>;
				<?php  echo$here; ?>: <?php echo $lef; ?>;
				width: 44px;
				height: 26px; 
				z-index: 1000; 
				display: flex;
				align-items: center;
				justify-content: center;
			}
			</style>
			<?php
			echo foxtool_darkmode_icon2();
		}
	} elseif (isset($foxtool_options['main-mode10']) && $foxtool_options['main-mode10'] == 'System'){
			echo '';
	} elseif (isset($foxtool_options['main-mode10']) && $foxtool_options['main-mode10'] == 'Time'){
			echo '';
	} else {
		if (isset($foxtool_options['main-mode-s1'])){ ?>
			<style>
			#ft-darkmode-toggle {
				padding:0px;
				margin:0px;
				background:none;
				border:none;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			#ft-darkmode-toggle svg {
				width: 20px;
				height: 20px;
			}
			#ft-darkmode-toggle svg path{
				fill: <?php echo $color; ?>;
			}
			</style>	
		<?php } else { ?>
			<style>
			#ft-darkmode-toggle {
				position: fixed;
				bottom: <?php echo $bot; ?>;
				<?php  echo$here; ?>: <?php echo $lef; ?>;
				width: 45px;
				height: 45px;
				border-radius: 50%;
				background-color: <?php echo $color; ?>;
				border: none;
				cursor: pointer;
				display: flex;
				justify-content: center;
				align-items: center;
				box-shadow: 0px 0px 10px #00000075;
				z-index: 9999;
				padding: 10px;
			}
			#ft-darkmode-toggle svg {
				width: 30px;
				height: 30px;
			}
			#ft-darkmode-toggle svg path{fill: #fff;}
			</style>
			<?php echo foxtool_darkmode_icon1();
		}
	}
}
add_action('wp_footer', 'foxtool_darkmode_assets');
// shortcode
function foxtool_darkmode_shortcode($atts) {
    global $foxtool_options;
    if (isset($foxtool_options['main-mode-s1']) && isset($foxtool_options['main-mode10'])) {
        if ($foxtool_options['main-mode10'] != 'System' && $foxtool_options['main-mode10'] != 'Time') {
            if ($foxtool_options['main-mode10'] == 'Toggle') {
                return foxtool_darkmode_icon2();
            } else {
                return foxtool_darkmode_icon1();
            }
        }
    }
    return;
}
add_shortcode('foxdark', 'foxtool_darkmode_shortcode');
}
# tao api custom post type post and product
if (isset($foxtool_options['main-search1'])){
// xóa post khoi json neu xoa
function foxtool_delete_search_auto_when_delete_post($post_id) {
    $upload_dir = wp_upload_dir();
    $file_path = $upload_dir['basedir'] . '/json/data-search.json';
    $existing_data = array();
    if (file_exists($file_path)) {
        $existing_data = json_decode(file_get_contents($file_path), true);
        foreach ($existing_data as $key => $item) {
            if ($item['ID'] == $post_id) {
                unset($existing_data[$key]);
                break; 
            }
        }
        // Reset array keys
        $existing_data = array_values($existing_data);
        file_put_contents($file_path, json_encode($existing_data));
    }
}
add_action('delete_post', 'foxtool_delete_search_auto_when_delete_post');
// them post vào json
function foxtool_add_search_auto_whenpublish($post_id ) {
        global $foxtool_options;
        $post = get_post($post_id);
        $type = get_post_type($post->ID);
        if (isset($foxtool_options['main-search-posttype'])) {
            if(count($foxtool_options['main-search-posttype'])>0){
                $allowed_post_types = $foxtool_options['main-search-posttype'];
                if (in_array($type, $allowed_post_types)) {
                    $filed = array(
                    'ID',
                    'title',
                    'url',
                    'thum',
					'price',
                    'taxonomy'
                );
                    $item = array('type' => $type);
                    foreach ($filed as $field) {
                        switch ($field) {
                            case 'ID':
                                $item[$field] = $post->ID;
                            break;
                            case 'title':
                                $item[$field] = get_the_title($post->ID);
                                break;
                            case 'url':
                                $item[$field] = get_permalink($post->ID);
                                break;
                            case 'thum':
                                $item[$field] = get_the_post_thumbnail_url($post->ID);
                                break;
                            case 'price':
                                if ($type === 'product') {
									if (function_exists('wc_get_product')) {
										$product = wc_get_product($post->ID);
										if ($product->is_type('variable')) {
											$prices = [];
											$available_variations = $product->get_available_variations();
											foreach ($available_variations as $variation) {
												$variation_obj = new WC_Product_Variation($variation['variation_id']);
												$prices[] = $variation_obj->get_price();
											}
											if (!empty($prices)) {
												$min_price = min($prices);
												$max_price = max($prices);
												$item[$field] = wc_price($min_price) . ' – ' . wc_price($max_price);
											} else {
												$item[$field] = wc_price($product->get_price());
											}
										} else {
											$item[$field] = wc_price($product->get_price());
										}
									}
								}
                                break;
                            case 'taxonomy':
                                if ($post->post_type == 'product') {
                                    $taxonomy_terms = wp_get_post_terms($post->ID, 'product_cat');
                                    if ($taxonomy_terms && !is_wp_error($taxonomy_terms)) {
                                        $first_term = reset($taxonomy_terms);
                                        $item[$field] = $first_term->name;
                                    }
                                } else {
                                    $object_taxonomies = get_object_taxonomies($post->post_type);
                                    foreach ($object_taxonomies as $taxonomy_name) {
                                        $taxonomy_terms = get_the_terms($post->ID, $taxonomy_name);
                                        if ($taxonomy_terms && !is_wp_error($taxonomy_terms)) {
                                            $first_term = reset($taxonomy_terms);
                                            $item[$field] = $first_term->name;
                                            break;
                                        }
                                    }
                                }
                                break;
                        }
                    }
                    $newitem[$post->ID] = $item;
                    $upload_dir = wp_upload_dir();
                    $json_dir = $upload_dir['basedir'] . '/json';
                    if (!is_dir($json_dir)) {
                        mkdir($json_dir);
                    }
                    $file_path = $json_dir . '/data-search.json';
                    $existing_data = array();
                    if (file_exists($file_path)) {
                        $existing_data = json_decode(file_get_contents($file_path), true);
                    }
                    $merged_data = foxtool_merged_array($existing_data,$newitem);
                    file_put_contents($file_path, json_encode($merged_data));
                }
            }
        }
}
// Thêm hook cho từng loại post type
if(isset($foxtool_options['main-search-posttype'])){
	$main_search_post_types = $foxtool_options['main-search-posttype'];
	foreach ($main_search_post_types as $post_type) {
		$hook_name = 'publish_' . $post_type;
		add_action($hook_name, 'foxtool_add_search_auto_whenpublish');
	}
}
// lay name tu custom post type
function foxtool_post_type_name($post_type_slug) {
    $post_type_object = get_post_type_object($post_type_slug);
    if ($post_type_object) {
        $post_type_name = $post_type_object->labels->singular_name;
        return $post_type_name; 
    } 
}
// tao mang json
function foxtool_search($page = 1, $posts_per_page = 2000) {
    global $foxtool_options;
    if (isset($foxtool_options['main-search-posttype'])) {
        if(count($foxtool_options['main-search-posttype'])>0){
            foreach ($foxtool_options['main-search-posttype'] as $key => $type) {
                $post_types[$type] = array(
                        'type' => $type,
                        'fields' => array(
                            'ID',
                            'title',
                            'url',
                            'thum',
                            'price',
                            'taxonomy'
                        )
                );
            }
        }  
    } 
    $args = array(
        'numberposts' => $posts_per_page,
        'offset'      => ($page - 1) * $posts_per_page,
        'post_type'   => array_keys($post_types),
    );
    $posts = get_posts($args);
    $results = array();
    foreach ($posts as $post) {
        $post_type = $post->post_type;
        if (isset($post_types[$post_type])) {
            $type_info = $post_types[$post_type];
            $type = $type_info['type'];
            $item = array('type' => $type);
            foreach ($type_info['fields'] as $field) {
                switch ($field) {
                    case 'ID':
                        $item[$field] = $post->ID;
                        break;
                    case 'title':
                        $item[$field] = $post->post_title;
                        break;
                    case 'url':
                        $item[$field] = get_permalink($post->ID);
                        break;
                    case 'thum':
                        $item[$field] = get_the_post_thumbnail_url($post->ID);
                        break;
                    case 'price':
                        if ($type === 'product') {
							if (function_exists('wc_get_product')) {
								$product = wc_get_product($post->ID);
								if ($product->is_type('variable')) {
									$prices = [];
									$available_variations = $product->get_available_variations();
									foreach ($available_variations as $variation) {
										$variation_obj = new WC_Product_Variation($variation['variation_id']);
										$prices[] = $variation_obj->get_price();
									}
									if (!empty($prices)) {
										$min_price = min($prices);
										$max_price = max($prices);
										$item[$field] = wc_price($min_price) . ' – ' . wc_price($max_price);
									} else {
										$item[$field] = wc_price($product->get_price());
									}
								} else {
									$item[$field] = wc_price($product->get_price());
								}
							}
						}
                        break;
                    case 'taxonomy':
                        if ($post->post_type == 'product') {
                            $taxonomy_terms = wp_get_post_terms($post->ID, 'product_cat');
                            if ($taxonomy_terms && !is_wp_error($taxonomy_terms)) {
                                $first_term = reset($taxonomy_terms);
                                $item[$field] = $first_term->name;
                            }
                        } else {
                            $object_taxonomies = get_object_taxonomies($post->post_type);
                            foreach ($object_taxonomies as $taxonomy_name) {
                                $taxonomy_terms = get_the_terms($post->ID, $taxonomy_name);
                                if ($taxonomy_terms && !is_wp_error($taxonomy_terms)) {
                                    $first_term = reset($taxonomy_terms);
                                    $item[$field] = $first_term->name;
                                    break;
                                }
                            }
                        }
                        break;
                }
            }
            $results[$post->ID] = $item;
        }
    }
    return $results;
}
// ajax tao file json 
function foxtool_json_file_callback(){
	global $foxtool_options;
    check_ajax_referer('foxtool_search_get', 'security');
	if (!current_user_can('manage_options')){
        wp_die(__('Insufficient permissions', 'foxtool'));
    }
    $page = $_POST['page'];
    $data =  foxtool_search($page);
    if (empty($data)) {
        echo json_encode(array('page' => -1));
        wp_die();
    }
    $upload_dir = wp_upload_dir();
    $json_dir = $upload_dir['basedir'] . '/json';
    if (!is_dir($json_dir)) {
        mkdir($json_dir);
    }
    $file_path = $json_dir . '/data-search.json';
    $existing_data = array();
    if (file_exists($file_path)) {
        $existing_data = json_decode(file_get_contents($file_path), true);
    }
    // Xóa các custom post type không tồn tại trong main-search-posttype
    if (isset($foxtool_options['main-search-posttype']) && count($foxtool_options['main-search-posttype']) > 0) {
        $allowed_post_types = $foxtool_options['main-search-posttype'];
        foreach ($existing_data as $key => $item) {
            if (!in_array($item['type'], $allowed_post_types)) {
                unset($existing_data[$key]);
            }
        }
        $existing_data = array_values($existing_data);
    }
    $merged_data = foxtool_merged_array($existing_data, $data);
    file_put_contents($file_path, json_encode($merged_data));
    $count = count($merged_data);
    echo json_encode(array('page' =>$page+1,'count'=>$count));   
    wp_die();
}
add_action('wp_ajax_foxtool_json_get', 'foxtool_json_file_callback');
// ajax xoa thư mục json
function foxtool_delete_json_folder_callback() {
    check_ajax_referer('foxtool_search_del', 'security');
    if (!current_user_can('manage_options')){
        wp_die(__('Insufficient permissions', 'foxtool'));
    }
    $upload_dir = wp_upload_dir();
    $json_dir = $upload_dir['basedir'] . '/json';
    if (is_dir($json_dir)) {
        $files = glob("$json_dir/*");
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
        rmdir($json_dir);
    }
    wp_die();
}
add_action('wp_ajax_foxtool_json_del', 'foxtool_delete_json_folder_callback');
// xu ly du lieu json
function foxtool_merged_array($existing_data, $data) {
    $merged_data = $existing_data;
    foreach ($data as $new_item) {
        $found = false;
        foreach ($merged_data as &$existing_item) {
            if ($existing_item['ID'] == $new_item['ID']) {
                $existing_item = $new_item;
                $found = true;
                break;
            }
        }
        if (!$found) {
            $merged_data[] = $new_item;
        }
    }
    return array_values($merged_data);
}
// duong dan toi json trong plugin
function foxtool_search_url(){
    $upload_dir = wp_upload_dir();
    $json_file = $upload_dir['basedir'] . '/json/data-search.json';
    if (file_exists($json_file)) {
        $absolute_url = $upload_dir['baseurl'] . '/json/data-search.json';
        $relative_url = wp_make_link_relative($absolute_url);
        $random_version = rand(1000, 9999);
        return $relative_url . '?ver=' . $random_version;
    }
    return null;
}
// dua vao website
function foxtool_search_footer(){ 
	global $foxtool_options;
	$limit = !empty($foxtool_options['main-search-c1']) ? $foxtool_options['main-search-c1'] : 10;
	?>
	<div class="ft-search" id="ft-search" style="display:none" onclick="ftnone(event, 'ft-search');ftnone(event, 'ft-sbox');">
	</div>
		<div class="ft-sbox" id="ft-sbox" style="display:none">
			<span id="ft-sclose" onclick="ftnone(event, 'ft-search');ftnone(event, 'ft-sbox');">&#215;</span>
			<form class="ft-sform" action="<?php bloginfo('url'); ?>">
			<?php 
            if (isset($foxtool_options['main-search-posttype']) && in_array('product', $foxtool_options['main-search-posttype'])) {
				echo '<input type="hidden" name="post_type" value="product">';
			}
			?>
			<input type="text" id="ft-sinput" placeholder="<?php _e('Enter keywords to search', 'foxtool'); ?>" name="s" value="" maxlength="50" required="required">
			<button title="<?php _e('Search', 'foxtool'); ?>" id="ft-ssumit" type="submit">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 42 42"><path fill="currentColor" d="M1 17.838c0 8.747 7.131 15.827 15.94 15.827c8.796 0 15.938-7.08 15.938-15.827S25.736 2 16.94 2C8.131 2 1 9.091 1 17.838zm5.051 0c0-5.979 4.868-10.817 10.89-10.817c6.01 0 10.888 4.839 10.888 10.817c0 5.979-4.878 10.818-10.888 10.818c-6.022 0-10.89-4.84-10.89-10.818zm22.111 14.523l6.855 7.809c1.104 1.102 1.816 1.111 2.938 0l2.201-2.181c1.082-1.081 1.149-1.778 0-2.921l-7.896-6.775l-4.098 4.068z"/></svg>
			</button>
			</form>
			<ul id="ft-show"></ul>
		</div>
	<script>
	jQuery(document).ready(function($){
        $('input[name="s"]').on('input', function() {
			var searchText = $(this).val(); 
			$("#ft-search").css("display", "block"); 
			$("#ft-sbox").css("display", "block"); 
			$('#ft-sinput').val(searchText); 
			$('#ft-sinput').trigger('keyup');
			if ($('.mfp-close').length > 0) {
			  $('.mfp-close').click();
			}
			$("#ft-sinput").focus();
		});
		$('#ft-sinput').on('input', function() {
			var searchText = $(this).val();
			$('input[name="s"]').val(searchText); 
			$(this).trigger('keyup');
		});
		var debounceTimer;
		$('#ft-sinput').on('keyup', function(){
			var searchText = $(this).val();
			clearTimeout(debounceTimer);
			debounceTimer = setTimeout(function() {
				if(searchText.length >= 1) {
					fetch('<?php echo foxtool_search_url(); ?>?search=' + searchText)
					.then(response => response.json())
					.then(data => {
						displayResults(data, searchText);
					})
					.catch(error => {
						console.error('Error fetching data:', error);
					});
				} else {
					$('#ft-show').empty(); 
					$('#ft-show').removeClass('ft-showbg');
				}
			}, 100); 
		});
		function removeDiacritics(str) {
			return str
				.normalize("NFD")
				.replace(/[\u0300-\u036f]/g, "")
				.replace(/đ/g, "d")
				.replace(/Đ/g, "D");
		}
		function displayResults(data, searchText) {
			$('#ft-show').empty();
			var hasResults = false;
			<?php 
			if(isset($foxtool_options['main-search-posttype'])){
				$main_search_post_types = $foxtool_options['main-search-posttype'];
				foreach ($main_search_post_types as $id) {
					echo "var ". $id ."Results = '';var ". $id ."Count = 0;";
				}
			}
			?>
			var postLimit = <?php echo $limit; ?>; 
			if (data && data.length > 0) {
				$('#ft-show').addClass('ft-showbg');
				$.each(data, function (index, item) {
					var title = item.title;
					var normalizedTitle = removeDiacritics(title);
					var normalizedSearchText = removeDiacritics(searchText.toLowerCase());
					var regex = new RegExp(normalizedSearchText.replace(/\s+/g, '.*'), 'i');
					if (regex.test(normalizedTitle)) {
						var textmau = highlightSearchText(title, searchText);
						var type = item.type;
						var url = item.url;
						var thum = item.thum;
						var pri = item.price;
						var taxo = item.taxonomy;
						var itemHTML;
						if (!pri) {
							pri = "";
						}
						if (!taxo) {
							taxo = "";
						}
						if (thum) {
							itemHTML = '<li class="ft-ssp"><a href="' + url + '"><img src="' + thum + '"></a><a href="' + url + '"><span class="ft-ssap-tit">' + textmau + '</span><span class="ft-ssap-cm">'+ taxo +'</span><span class="ft-ssap-pri">' + pri + '</span></a></li>';
						} else {
							itemHTML = '<li class="ft-sspno"><a href="' + url + '"><span class="ft-ssap-tit">' + textmau + '</span><span class="ft-ssap-cm">'+ taxo +'</span><span class="ft-ssap-pri">' + pri + '</span></a></li>';
						}
						<?php 
						if(isset($foxtool_options['main-search-posttype'])){
							$main_search_post_types = $foxtool_options['main-search-posttype'];
							$firstCondition = true;
							foreach ($main_search_post_types as $id) {
								if($firstCondition) {
									echo "if (type === '". $id ."' && ". $id ."Count < postLimit) {
										". $id ."Results += itemHTML;
										". $id ."Count++;
										hasResults = true;
									}";
									$firstCondition = false;
								} else {
									echo "else if (type === '". $id ."' && ". $id ."Count < postLimit) {
										". $id ."Results += itemHTML;
										". $id ."Count++;
										hasResults = true;
									}";
								}
							}
						}
						?>
					}
				});
			}
			<?php 
			if(isset($foxtool_options['main-search-posttype'])){
				$main_search_post_types = $foxtool_options['main-search-posttype'];
				if (in_array('product', $main_search_post_types)) {
					unset($main_search_post_types[array_search('product', $main_search_post_types)]);
					array_unshift($main_search_post_types, 'product');
				}
				foreach ($main_search_post_types as $id) {
					echo 'if ('. $id .'Results){$(\'#ft-show\').append(\'<li class="ft-stit">'. foxtool_post_type_name($id) .'</li>\' + '. $id .'Results);}';
				}
			}
			?>
			if (!hasResults) {
				$('#ft-show').append('<li><?php _e("No results found", "foxtool"); ?></li>');
			}
		}
		function highlightSearchText(text, searchText){
			var regex = new RegExp(searchText.replace(/\s+/g, '|'), 'gi'); 
			return text.replace(regex, function(match){
				return '<span class="ft-sselec">' + match + '</span>';
			});
		}
	});
	</script>
	<?php if(!empty($foxtool_options['main-search-c2']) || !empty($foxtool_options['main-search-c3']) || !empty($foxtool_options['main-search-c4'])) { 
	$box = !empty($foxtool_options['main-search-c2']) ? '--bgboxcolor:'. $foxtool_options['main-search-c2'] .';' : NULL;
	$bor = !empty($foxtool_options['main-search-c3']) ? '--bgborcolor:'. $foxtool_options['main-search-c3'] .';' : NULL;
	$tex = !empty($foxtool_options['main-search-c4']) ? '--bgtexcolor:'. $foxtool_options['main-search-c4'] .';' : NULL;
	echo '<style>:root{'. $box . $bor . $tex .'}</style>';
	}	
}
add_action('wp_footer', 'foxtool_search_footer');
// add css js search web
function foxtool_enqueue_search(){
	wp_enqueue_style('search-css', FOXTOOL_URL . 'link/search/search.css', array(), FOXTOOL_VERSION);
}
add_action('wp_enqueue_scripts', 'foxtool_enqueue_search');
}
# custom mau thanh scroll
function foxtool_add_scroll_style(){
	global $foxtool_options; 
	if (isset($foxtool_options['main-scroll1'])){
	$bg = !empty($foxtool_options['main-scroll11']) ? $foxtool_options['main-scroll11'] : 'none';
	$br = !empty($foxtool_options['main-scroll12']) ? $foxtool_options['main-scroll12'] : '#333';
	$ru = !empty($foxtool_options['main-scroll13']) ? $foxtool_options['main-scroll13'] .'px' : '1px';
	$zi = !empty($foxtool_options['main-scroll14']) ? $foxtool_options['main-scroll14'] .'px' : '10px';
	?>
	<style>
	::-webkit-scrollbar {
		width:<?php echo $zi ?>;
		height:<?php echo $zi ?>;
		background-color:<?php echo $bg ?>;
	}
	::-webkit-scrollbar-thumb {
		background-color:<?php echo $br ?>;
		border-radius:<?php echo $ru ?>;
	}
	::-webkit-scrollbar-track {
		background-color:<?php echo $bg ?>;
		border-radius:<?php echo $ru ?>;
	}
	</style>
	<?php
	}
} 
add_action('wp_head', 'foxtool_add_scroll_style');
