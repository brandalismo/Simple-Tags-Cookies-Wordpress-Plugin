<?php
if(!defined('ABSPATH')){
	exit;
}

// CONFIGURACIÓN OPCIONES
function simtagcoo_conf(){
	$options 	= get_option('simtagcoo_options');
	$fb_id 		= $options['fb_id'];
	$fb_in		= $options['fb_in'];
	$fb_vc		= $options['fb_vc'];
	$fb_ac		= $options['fb_ac'];
	$fb_ic		= $options['fb_ic'];
	$fb_pc		= $options['fb_pc'];
	$tw_id 		= $options['tw_id'];
	$tw_in		= $options['tw_in'];
	$tw_vc		= $options['tw_vc'];
	$tw_ac		= $options['tw_ac'];
	$tw_ic		= $options['tw_ic'];
	$tw_pc		= $options['tw_pc'];
	$in_id 		= $options['in_id'];
	$in_in		= $options['in_in'];
	$in_vc		= $options['in_vc'];
	$in_ac		= $options['in_ac'];
	$in_ic		= $options['in_ic'];
	$in_pc		= $options['in_pc'];
	$pn_id 		= $options['pn_id'];
	$pn_in		= $options['pn_in'];
	$pn_vc		= $options['pn_vc'];
	$pn_ac		= $options['pn_ac'];
	$pn_ic		= $options['pn_ic'];
	$pn_pc		= $options['pn_pc'];
	$tt_id	 	= $options['tt_id'];
	$tt_in 		= $options['tt_in'];
	$tt_vc 		= $options['tt_vc'];
	$tt_ac 		= $options['tt_ac'];
	$tt_ic 		= $options['tt_ic'];
	$tt_pc		= $options['tt_pc'];
	$ga_id 		= $options['ga_id'];
	$ga_in		= $options['ga_in'];
	$ga_vi	 	= $options['ga_vi'];
	$ga_ac	 	= $options['ga_ac'];
	$ga_bc	 	= $options['ga_bc'];
	$ga_cp	 	= $options['ga_cp'];
	$ga_pc	 	= $options['ga_pc'];
	$go_id	 	= $options['go_id'];
	$go_in	 	= $options['go_in'];
	$go_js	 	= $options['go_js'];
	$wo_sk		= $options['wo_sk'];	
	$wo_tx		= $options['wo_tx'];
	$ct_in		= $options['ct_in'];
	$ct_ck		= $options['ct_ck'];
	$ct_pk		= $options['ct_pk'];
	$ct_nk		= $options['ct_nk'];
	$co_dc		= $options['co_dc'];
	$co_ur		= $options['co_ur'];
	$co_ma		= $options['co_ma'];
	$co_bg		= $options['co_bg'];
	$co_tx		= $options['co_tx'];
?>
<script>
(function($){
	'use strict';
	$(function(e){
		$('.tab-content > div').hide();
		$('.tab-content > div:first-of-type').show();
		$('.nav-tab-wrapper span').click(function(e){
			e.preventDefault();
			var $this = $(this),
				tabcontent = '#'+$this.parents('.nav-tab-wrapper').data('tab-content'),
				others = $this.closest('span').siblings(),
				target = $this.attr('data-url');
			others.removeClass('nav-tab-active');
			$this.addClass('nav-tab-active');
			$(tabcontent).children('div').hide();
			$(target).show();
		})	
	});
})(jQuery);
</script>
<div class="wrap">
	<h2><?php esc_html_e('Simple Tags & Cookies','simple-tags-cookies'); ?></h2>
	<h2 class="nav-tab-wrapper" data-tab-content="description-tab-group">
		<span style="cursor:pointer" class="nav-tab nav-tab-active" data-url="#cookies"><?php esc_html_e('Cookies','simple-tags-cookies'); ?></span>
		<span style="cursor:pointer" class="nav-tab" data-url="#facebook"><?php esc_html_e('Facebook','simple-tags-cookies'); ?></span>				
		<span style="cursor:pointer" class="nav-tab" data-url="#twitter"><?php esc_html_e('Twitter','simple-tags-cookies'); ?></span>
		<span style="cursor:pointer" class="nav-tab" data-url="#linkedin"><?php esc_html_e('Linkedin','simple-tags-cookies'); ?></span>
		<span style="cursor:pointer" class="nav-tab" data-url="#pinterest"><?php esc_html_e('Pinterest','simple-tags-cookies'); ?></span>
		<span style="cursor:pointer" class="nav-tab" data-url="#tiktok"><?php esc_html_e('TikTok','simple-tags-cookies'); ?></span>
		<span style="cursor:pointer" class="nav-tab" data-url="#google"><?php esc_html_e('Google','simple-tags-cookies'); ?></span>
		<?php if(class_exists('woocommerce')){ ?>
		<span style="cursor:pointer" class="nav-tab" data-url="#woocommerce"><?php esc_html_e('Woocommerce','simple-tags-cookies'); ?></span>
		<?php } ?>
	</h2>
  	<form method="post" action='options.php'>
    	<?php settings_fields('simtagcoo_options'); ?>
    	<div id="description-tab-group" class="tab-content">    
    		<!-- COOKIES -->
			<div class="tab-pane" id="cookies">
    			<table class="form-table">
      				<tbody>
      					<tr>
						  	<th class="row" colspan="2">
						  		<h3><?php esc_html_e('Cookies','simple-tags-cookies'); ?></h3>
								<hr/>
						  	</th>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Descripción','simple-tags-cookies'); ?></th>
						  	<td>						  	
						  		<fieldset>
									<label for="co_dc" style="width:100%" >
										<textarea name="simtagcoo_options[co_dc]" id="co_dc" class="large-text" rows="3"><?php echo $co_dc; ?></textarea>
										<p class="description"><?php esc_html_e('Agrega una breve descripción sobre las cookies que vas a instalar en el navegador del usuario y la finalidad. Usa el siguiente shortcode para enlazar a la página de cookies: [url]texto[/url].','simple-tags-cookies'); ?></p>
									</label>
								</fieldset>
							</td>
						</tr>	
						<tr>
						  	<th scope="row"><?php esc_html_e('Caducidad','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="co_ma">
										<input name="simtagcoo_options[co_ma]" id="co_ma" min="0" step="1" type="number" value="<?php echo $co_ma; ?>">
										<p class="description"><?php esc_html_e('Introduce el nº de días hasta que la cookie expire.','simple-tags-cookies'); ?></p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('URL','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="co_ur">
										<input name="simtagcoo_options[co_ur]" id="co_ur" type="text" value="<?php echo $co_ur; ?>">
										<p class="description"><?php esc_html_e('Introduce la URL de la página en la que quieres mostrar la información de cookies. Incluye el shortcode [configurar_cookies] en dicha URL para que el usuario pueda restablecer las cookies. ','simple-tags-cookies'); ?></p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Color Fondo','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="co_bg">
										<input name="simtagcoo_options[co_bg]" id="co_bg" type="text" value="<?php echo $co_bg; ?>">
										<p class="description"><?php esc_html_e('Introduce código hexadecimal (#) para establecer el color del fondo del aviso.','simple-tags-cookies'); ?></p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Color Texto','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="co_tx">
										<input name="simtagcoo_options[co_tx]" id="co_tx" type="text" value="<?php echo $co_tx; ?>">
										<p class="description"><?php esc_html_e('Introduce código hexadecimal (#) para establecer el color del texto del aviso.','simple-tags-cookies'); ?></p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th class="row" colspan="2"> 
						  		<h4><?php esc_html_e('Configuración avanzada','simple-tags-cookies'); ?></h4>
								<hr/>
						  	</th>
						</tr>
      					<tr>
						  	<th scope="row"><?php esc_html_e('Activación','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="ct_in">
										<input name='simtagcoo_options[ct_in]' id='ct_in' type='checkbox' value='1' <?php echo checked($ct_in,1,false); ?>/>
										<?php esc_html_e('Activa esta opción para agregar los tags personalizados.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>					
						<tr>
						  	<th scope="row"><?php esc_html_e('Tags con Cookies Analíticas','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="ct_ck" style="width:100%" >
										<textarea name="simtagcoo_options[ct_ck]" id="ct_ck" class="large-text" rows="8"><?php echo $ct_ck; ?></textarea>
										<p class="description"><?php esc_html_e('Incluye aquí los tags con fines analíticos que emplean cookies para su funcionamiento.','simple-tags-cookies'); ?></p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Tags con Cookies Publicitarias','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="ct_pk" style="width:100%" >
										<textarea name="simtagcoo_options[ct_pk]" id="ct_pk" class="large-text" rows="8"><?php echo $ct_pk; ?></textarea>
										<p class="description"><?php esc_html_e('Incluye aquí los tags con fines publicitarios que emplean cookies para su funcionamiento.','simple-tags-cookies'); ?></p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Tags sin Cookies','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="ct_nk" style="width:100%" >
										<textarea name="simtagcoo_options[ct_nk]" id="ct_nk" class="large-text" rows="8"><?php echo $ct_nk; ?></textarea>
										<p class="description"><?php esc_html_e('Incluye aquí los tags que no emplean cookies para su funcionamiento.','simple-tags-cookies'); ?></p>
									</label>
								</fieldset>
							</td>
						</tr>
        			</tbody>
        		</table>
        	</div>    		
        	<!-- FACEBOOK -->
        	<div class="tab-pane" id="facebook">
    			<table class="form-table">
      				<tbody>
						<tr>
							<th colspan="2">
								<h3><?php esc_html_e('Facebook', 'simple-tags-cookies');?></h3>
								<hr>
							</th>
						</tr>
        				<tr>
          					<th scope="row"><?php esc_html_e('Identificador','simple-tags-cookies'); ?></th>
          					<td>
          						<fieldset>
            						<label for="fb_id">
            							<input name='simtagcoo_options[fb_id]' id='fb_id' type='text' value='<?php echo $fb_id; ?>' />
            							<p class="description">
            								<?php esc_html_e('Ayuda para obtener el identificador del tag de Facebook','simple-tags-cookies'); ?> 
            								<a Href="https://www.labschool.es/configurar-pixel-de-seguimiento-de-facebook-twitter-linkedin-y-pinterest/#facebook" target="_blank" rel="noopener">
            								<?php esc_html_e('aquí.','simple-tags-cookies'); ?>
            								</a>
            							</p>
           							</label>
            					</fieldset>
            				</td>
						</tr>
						<tr>
          					<th scope="row"><?php esc_html_e('Activación','simple-tags-cookies'); ?></th>
          					<td>
          						<fieldset>
            						<label for="fb_in">
            							<input name='simtagcoo_options[fb_in]' id='fb_in' type='checkbox' value='1' <?php echo checked($fb_in,1,false); ?>/>
            							<?php esc_html_e('Activa esta opción para agregar el tag de Facebook.','simple-tags-cookies'); ?>
            						</label>
            					</fieldset>
            				</td>
        				</tr>
        				<?php if(class_exists('woocommerce')){ ?>
        				<tr>
          					<th class="row" colspan="2">
          						<h4><?php esc_html_e('Configuración para Woocommerce','simple-tags-cookies'); ?></h4>
            					<hr/>
          					</th>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e('ViewContent','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="fb_vc">
										<input name='simtagcoo_options[fb_vc]' id='fb_vc' type='checkbox' value='1' <?php echo checked($fb_vc,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "ViewContent" cada vez que se carga una página de producto.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('AddToCart','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="fb_ac">
										<input name='simtagcoo_options[fb_ac]' id='fb_ac' type='checkbox' value='1' <?php echo checked($fb_ac,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "AddToCart" cada vez que se carga la página del carrito.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('InitiateCheckout','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="fb_ic">
										<input name='simtagcoo_options[fb_ic]' id='fb_ic' type='checkbox' value='1' <?php echo checked($fb_ic,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "InitiateCheckout" cada vez que se carga la página de finalizar la compra.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Purchase','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="fb_pc">
										<input name='simtagcoo_options[fb_pc]' id='fb_pc' type='checkbox' value='1' <?php echo checked($fb_pc,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "Purchase" cada vez que se carga la página de agradecimiento tras realizar una compra.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>			
			<!-- TWITTER -->
        	<div class="tab-pane" id="twitter">
    			<table class="form-table">
      				<tbody>
						<tr>
							<th colspan="2">
								<h3><?php esc_html_e('Twitter', 'simple-tags-cookies');?></h3>
								<hr>
							</th>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Identificador','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="tw_id">
										<input name='simtagcoo_options[tw_id]' id='tw_id' type='text' value='<?php echo $tw_id; ?>' />
										<p class="description">
											<?php esc_html_e('Ayuda para obtener el identificador del tag de Twitter','simple-tags-cookies'); ?>
											<a href="https://www.labschool.es/configurar-pixel-de-seguimiento-de-facebook-twitter-linkedin-y-pinterest/#twitter" target="_blank" rel="noopener">
											<?php esc_html_e('aquí.','simple-tags-cookies'); ?>
											</a>
										</p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"> <?php esc_html_e('Activación','simple-tags-cookies'); ?>
						  	<td>
						  		<fieldset>
									<label for="tw_in">
										<input name='simtagcoo_options[tw_in]' id='tw_in' type='checkbox' value='1' <?php echo checked($tw_in,1,false); ?>/>
										<?php esc_html_e('Activa esta opción para agregar el tag de Twitter.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<?php if(class_exists('woocommerce')){ ?>
        				<tr>
          					<th class="row" colspan="2">
          						<h4><?php esc_html_e('Configuración para Woocommerce','simple-tags-cookies'); ?></h4>
            					<hr/>
          					</th>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e('ViewContent','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="tw_vc">
										<input name='simtagcoo_options[tw_vc]' id='tw_vc' type='checkbox' value='1' <?php echo checked($tw_vc,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "ViewContent" cada vez que se carga una página de producto.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('AddToCart','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="tw_ac">
										<input name='simtagcoo_options[tw_ac]' id='tw_ac' type='checkbox' value='1' <?php echo checked($tw_ac,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "AddToCart" cada vez que se carga la página del carrito.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('InitiateCheckout','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="tw_ic">
										<input name='simtagcoo_options[tw_ic]' id='tw_ic' type='checkbox' value='1' <?php echo checked($tw_ic,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "InitiateCheckout" cada vez que se carga la página de finalizar la compra.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Purchase','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="tw_pc">
										<input name='simtagcoo_options[tw_pc]' id='tw_pc' type='checkbox' value='1' <?php echo checked($tw_pc,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "Purchase" cada vez que se carga la página de agradecimiento tras realizar una compra.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>			
			<!-- LINKEDIN -->
        	<div class="tab-pane" id="linkedin">
    			<table class="form-table">
      				<tbody>
						<tr>
							<th colspan="2">
								<h3><?php esc_html_e('Linkedin', 'simple-tags-cookies');?></h3>
								<hr>
							</th>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Identificador','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="in_id">
										<input name='simtagcoo_options[in_id]' id='in_id' type='text' value='<?php echo $in_id; ?>' />
										<p class="description">
											<?php esc_html_e('Ayuda para obtener el identificador del tag de Linkedin','simple-tags-cookies'); ?> 
											<a href="https://www.labschool.es/configurar-pixel-de-seguimiento-de-facebook-twitter-linkedin-y-pinterest/#linkedin" target="_blank" rel="noopener">
											<?php esc_html_e('aquí.','simple-tags-cookies'); ?>
											</a>
										</p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Activación','simple-tags-cookies'); ?></th>
						 	<td>
						 		<fieldset>
									<label for="in_in">
										<input name='simtagcoo_options[in_in]' id='in_in' type='checkbox' value='1' <?php echo checked($in_in,1,false); ?>/>
										<?php esc_html_e('Activa esta opción para agregar el tag de Linkedin.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<?php if(class_exists('woocommerce')){ ?>
						<tr>
						  	<th class="row" colspan="2">
						  		<h4><?php esc_html_e('Configuración para Woocommerce','simple-tags-cookies'); ?></h4>
								<hr/>
						  	</th>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('ViewContent','simple-tags-cookies'); ?></th>
						  	<td>
								<fieldset>
									<label for="in_vc">
										<input name='simtagcoo_options[in_vc]' id='in_vc' type='text' value='<?php echo $in_vc; ?>' />
										<p class="description">
											<?php esc_html_e('Incluye el "conversion_id" para el evento estándar "ViewContent" cada vez que se carga una página de producto.','simple-tags-cookies'); ?>
										</p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('AddToCart','simple-tags-cookies'); ?></th>
						  	<td>
								<fieldset>
									<label for="in_ac">
										<input name='simtagcoo_options[in_ac]' id='in_ac' type='text' value='<?php echo $in_ac; ?>' />
										<p class="description">
											<?php esc_html_e('Incluye el "conversion_id" para el evento estándar "AddToCart" cada vez que se carga la página del carrito.','simple-tags-cookies'); ?>
										</p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('InitiateCheckout','simple-tags-cookies'); ?></th>
						  	<td>
								<fieldset>
									<label for="in_ic">
										<input name='simtagcoo_options[in_ic]' id='in_ic' type='text' value='<?php echo $in_ic; ?>' />
										<p class="description">
											<?php esc_html_e('Incluye el "conversion_id" para el evento estándar "InitiateCheckout" cada vez que se carga la página de finalizar la compra.','simple-tags-cookies'); ?>
										</p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Purchase','simple-tags-cookies'); ?></th>
						  	<td>
								<fieldset>
									<label for="in_pc">
										<input name='simtagcoo_options[in_pc]' id='in_pc' type='text' value='<?php echo $in_pc; ?>' />
										<p class="description">
											<?php esc_html_e('Incluye el "conversion_id" para el evento estándar "Purchase" cada vez que se carga la página de agradecimiento tras realizar una compra.','simple-tags-cookies'); ?>
										</p>
									</label>
								</fieldset>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>			
			<!-- PINTEREST -->
        	<div class="tab-pane" id="pinterest">
    			<table class="form-table">
      				<tbody>
						<tr>
							<th colspan="2">
								<h3><?php esc_html_e('Pinterest', 'simple-tags-cookies');?></h3>
								<hr>
							</th>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Identificador','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="pn_id">
										<input name='simtagcoo_options[pn_id]' id='pn_id' type='text' value='<?php echo $pn_id; ?>' />
										<p class="description">
											<?php esc_html_e('Ayuda para obtener el identificador del tag de Pinterest','simple-tags-cookies'); ?> 
											<a href="https://www.labschool.es/configurar-pixel-de-seguimiento-de-facebook-twitter-linkedin-y-pinterest/#pinterest" target="_blank" rel="noopener">
											<?php esc_html_e('aquí.','simple-tags-cookies'); ?>
											</a>
										</p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Activación','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="pn_in">
										<input name='simtagcoo_options[pn_in]' id='pn_in' type='checkbox' value='1' <?php echo checked($pn_in,1,false); ?>/>
										<?php esc_html_e('Activa esta opción para agregar el tag de Pinterest.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
        				<?php if(class_exists('woocommerce')){ ?>
						<tr>
						  	<th class="row" colspan="2">
						  		<h4><?php esc_html_e('Configuración para Woocommerce','simple-tags-cookies'); ?></h4>
								<hr/>
						  	</th>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('PageVisit','simple-tags-cookies'); ?></th>
						  	<td>
								<fieldset>
									<label for="pn_vc">
										<input name='simtagcoo_options[pn_vc]' id='pn_vc' type='checkbox' value='1' <?php echo checked($pn_vc,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "PageVisit" cada vez que se carga una página de producto.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('AddToCart','simple-tags-cookies'); ?></th>
						  	<td>
								<fieldset>
									<label for="pn_ac">
										<input name='simtagcoo_options[pn_ac]' id='pn_ac' type='checkbox' value='1' <?php echo checked($pn_ac,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "AddToCart" cada vez que se carga la página del carrito.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('InitiateCheckout','simple-tags-cookies'); ?></th>
						  	<td>
								<fieldset>
									<label for="pn_ic">
										<input name='simtagcoo_options[pn_ic]' id='pn_ic' type='checkbox' value='1' <?php echo checked($pn_ic,1,false); ?>/>
										<?php esc_html_e('Incluye el evento personalizado "InitiateCheckout" cada vez que se carga la página de finalizar la compra.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Checkout','simple-tags-cookies'); ?></th>
						  	<td>
								<fieldset>
									<label for="pn_pc">
										<input name='simtagcoo_options[pn_pc]' id='pn_pc' type='checkbox' value='1' <?php echo checked($pn_pc,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "Checkout" cada vez que se carga la página de agradecimiento tras realizar una compra.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<!-- TIKTOK -->
        	<div class="tab-pane" id="tiktok">
    			<table class="form-table">
      				<tbody>
						<tr>
							<th colspan="2">
								<h3><?php esc_html_e('TikTok', 'simple-tags-cookies');?></h3>
								<hr>
							</th>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Identificador','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="tt_id">
										<input name='simtagcoo_options[tt_id]' id='tt_id' type='text' value='<?php echo $tt_id; ?>' />
										<p class="description">
											<?php esc_html_e('Ayuda para obtener el identificador del tag de TikTok','simple-tags-cookies'); ?> 
											<a href="https://www.labschool.es/configurar-pixel-de-seguimiento-de-facebook-twitter-linkedin-y-pinterest/#pinterest" target="_blank" rel="noopener">
											<?php esc_html_e('aquí.','simple-tags-cookies'); ?>
											</a>
										</p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Activación','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="tt_in">
										<input name='simtagcoo_options[tt_in]' id='tt_in' type='checkbox' value='1' <?php echo checked($tt_in,1,false); ?>/>
										<?php esc_html_e('Activa esta opción para agregar el tag de TikTok.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
        				<?php if(class_exists('woocommerce')){ ?>
						<tr>
						  	<th class="row" colspan="2">
						  		<h4><?php esc_html_e('Configuración para Woocommerce','simple-tags-cookies'); ?></h4>
								<hr/>
						  	</th>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('ViewContent','simple-tags-cookies'); ?></th>
						  	<td>
								<fieldset>
									<label for="tt_vc">
										<input name='simtagcoo_options[tt_vc]' id='tt_vc' type='checkbox' value='1' <?php echo checked($tt_vc,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "ViewContent" cada vez que se carga una página de producto.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('AddToCart','simple-tags-cookies'); ?></th>
						  	<td>
								<fieldset>
									<label for="tt_ac">
										<input name='simtagcoo_options[tt_ac]' id='tt_ac' type='checkbox' value='1' <?php echo checked($tt_ac,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "AddToCart" cada vez que se carga la página del carrito.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('InitiateCheckout','simple-tags-cookies'); ?></th>
						  	<td>
								<fieldset>
									<label for="tt_ic">
										<input name='simtagcoo_options[tt_ic]' id='tt_ic' type='checkbox' value='1' <?php echo checked($tt_ic,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "InitiateCheckout" cada vez que se carga la página de finalizar la compra.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('PlaceAnOrder','simple-tags-cookies'); ?></th>
						  	<td>
								<fieldset>
									<label for="tt_pc">
										<input name='simtagcoo_options[tt_pc]' id='tt_pc' type='checkbox' value='1' <?php echo checked($tt_pc,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "PlaceAnOrder" cada vez que se carga la página de agradecimiento tras realizar una compra.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>		
			<!-- GOOGLE -->
        	<div class="tab-pane" id="google">
    			<table class="form-table">
      				<tbody>
						<tr>
							<th colspan="2">
								<h3><?php esc_html_e('Google Analytics', 'simple-tags-cookies');?></h3>
								<hr>
							</th>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Identificador','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="ga_id">
										<input name='simtagcoo_options[ga_id]' id='ga_id' type='text' value='<?php echo $ga_id; ?>' />
										<p class="description">
											<?php esc_html_e('Ayuda para obtener el identificador del tag de Google Analytics','simple-tags-cookies'); ?> 
											<a href="https://www.labschool.es/configurar-pixel-de-seguimiento-de-facebook-twitter-linkedin-y-pinterest/#google-analytics" target="_blank" rel="noopener">
											<?php esc_html_e('aquí.','simple-tags-cookies'); ?>
											</a>
										</p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Activación','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="ga_in">
										<input name='simtagcoo_options[ga_in]' id='ga_in' type='checkbox' value='1' <?php echo checked($ga_in,1,false); ?>/>
										<?php esc_html_e('Activa esta opción para agregar el tag de Google Analytics.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<?php if(class_exists('woocommerce')){ ?>
						<tr>
						  	<th class="row" colspan="2">
						  		<h4><?php esc_html_e('Configuración para Woocommerce','simple-tags-cookies'); ?></h4>
								<hr/>
						  	</th>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e('View Item','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="ga_vi">
										<input name='simtagcoo_options[ga_vi]' id='ga_vi' type='checkbox' value='1' <?php echo checked($ga_vi,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "View Item" cada vez que se carga una página de producto.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Add To Cart','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="ga_ac">
										<input name='simtagcoo_options[ga_ac]' id='ga_ac' type='checkbox' value='1' <?php echo checked($ga_ac,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "Add To Cart" cada vez que se agrega un producto al carrito.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Begin Checkout','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="ga_bc">
										<input name='simtagcoo_options[ga_bc]' id='ga_bc' type='checkbox' value='1' <?php echo checked($ga_bc,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "Begin Checkout" cada vez que se carga la página del carrito.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Checkout Progress','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="ga_cp">
										<input name='simtagcoo_options[ga_cp]' id='ga_cp' type='checkbox' value='1' <?php echo checked($ga_cp,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "Checkout Progress" cada vez que se carga la página de finalizar la compra.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Purchase','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="ga_pc">
										<input name='simtagcoo_options[ga_pc]' id='ga_pc' type='checkbox' value='1' <?php echo checked($ga_pc,1,false); ?>/>
										<?php esc_html_e('Incluye el evento estándar "Purchase" cada vez que se carga la página de agradecimiento tras realizar una compra.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<?php } ?>
      				</tbody>
    			</table>
    			<table class="form-table">
      				<tbody>
						<tr>
							<th colspan="2">
								<h3><?php esc_html_e('Google Optimize', 'simple-tags-cookies');?></h3>
								<hr>
							</th>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Identificador','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="go_id">
										<input name='simtagcoo_options[go_id]' id='go_id' type='text' value='<?php echo $go_id; ?>' />
										<p class="description">
											<?php esc_html_e('Ayuda para obtener el identificador del tag de Google Optimize','simple-tags-cookies'); ?> 
											<a href="https://support.google.com/optimize/answer/9204024" target="_blank" rel="noopener"> 
											<?php esc_html_e('aquí.','simple-tags-cookies'); ?>
											</a>
										</p>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
						  	<th scope="row"><?php esc_html_e('Activación','simple-tags-cookies'); ?></th>
						  	<td>
						  		<fieldset>
									<label for="go_in">
										<input name='simtagcoo_options[go_in]' id='go_in' type='checkbox' value='1' <?php echo checked($go_in,1,false); ?>/>
										<?php esc_html_e('Activa esta opción para agregar el tag de Google Optimize.','simple-tags-cookies'); ?>
									</label>
								</fieldset>
							</td>
						</tr>
						<tr>
          					<th scope="row"><?php esc_html_e('Versión','simple-tags-cookies'); ?></th>
          					<td>
								<fieldset>
									<label for="go_js">
										<select name='simtagcoo_options[go_js]' id="go_js">
											<option value='0' <?php echo selected($go_js,0,false); ?>><?php esc_html_e('Síncrona','simple-tags-cookies'); ?></option>
											<option value='1' <?php echo selected($go_js,1,false); ?>><?php esc_html_e('Asíncrona','simple-tags-cookies'); ?></option>
										</select>
										<p class="description"><?php esc_html_e('Ayuda para elegir que versión de Google Optimize utilizar.','simple-tags-cookies'); ?>
										<a href="https://support.google.com/optimize/answer/7513085" target="_blank" rel="noopener">
										<?php esc_html_e('aquí.','simple-tags-cookies'); ?>
										</a></p>
									</label>
								</fieldset>
            				</td>
        				</tr>
					</tbody>
				</table>
    		</div>
    		<!-- WOOCOMMERCE -->
			<?php if(class_exists('woocommerce')){ ?>
			<div class="tab-pane" id="woocommerce">
    			<table class="form-table">
      				<tbody>
      					<tr>
							<th colspan="2">
								<h3><?php esc_html_e('Woocommerce', 'simple-tags-cookies');?></h3>
								<hr>
							</th>
						</tr>
        				<tr>
          					<th scope="row"><?php esc_html_e('Identificador producto','simple-tags-cookies'); ?></th>
          					<td>
								<fieldset>
									<label for="wo_sk">
										<select name='simtagcoo_options[wo_sk]' id="wo_sk">
											<option value='1' <?php echo selected($wo_sk,1,false); ?>><?php esc_html_e('ID Producto','simple-tags-cookies'); ?></option>
											<option value='0' <?php echo selected($wo_sk,0,false); ?>><?php esc_html_e('SKU','simple-tags-cookies'); ?></option>
										</select>
										<p class="description"><?php esc_html_e('Puedes identificar la referencia del producto mediante el ID de Wordpress o el SKU que hayas definido.','simple-tags-cookies'); ?></p>
									</label>
								</fieldset>
            				</td>
        				</tr>
        				<tr>
          					<th scope="row"><?php esc_html_e('Aplicar impuestos','simple-tags-cookies'); ?></th>
          					<td>
          						<fieldset>
            						<label for="wo_tx">
            							<input name='simtagcoo_options[wo_tx]' id='wo_tx' type='checkbox' value='1' <?php echo checked($wo_tx,1,false); ?>/>
            							<?php esc_html_e('Incluye los impuestos sobre los precios recogidos en los diferentes eventos activados.','simple-tags-cookies'); ?>
            						</label>
            					</fieldset>
            				</td>
        				</tr>
        			</tbody>
        		</table>
        	</div>
        	<?php } ?>
    	</div>
    	<p class="submit">
      		<input class="button-primary" type="submit" name="submit" value="<?php esc_html_e('Guardar cambios','simple-tags-cookies'); ?>"/>
    	</p>
  	</form>
</div>
<?php
}

// GUARDAR OPCIONES
function simtagcoo_validate($form){
	$options 			= get_option('simtagcoo_options');
	$updated 			= $options;
	$updated['fb_id'] 	= $form['fb_id'];
	$updated['fb_in'] 	= $form['fb_in'];
	$updated['fb_vc']	= $form['fb_vc'];
	$updated['fb_ac']	= $form['fb_ac'];
	$updated['fb_ic']	= $form['fb_ic'];
	$updated['fb_pc']	= $form['fb_pc'];
	$updated['tw_id'] 	= $form['tw_id'];
	$updated['tw_in'] 	= $form['tw_in'];
	$updated['tw_vc']	= $form['tw_vc'];
	$updated['tw_ac']	= $form['tw_ac'];
	$updated['tw_ic']	= $form['tw_ic'];
	$updated['tw_pc']	= $form['tw_pc'];
	$updated['in_id'] 	= $form['in_id'];
	$updated['in_in'] 	= $form['in_in'];
	$updated['pn_id'] 	= $form['pn_id'];
	$updated['pn_in'] 	= $form['pn_in'];
	$updated['in_vc'] 	= $form['in_vc'];
	$updated['in_ac'] 	= $form['in_ac'];
	$updated['in_ic'] 	= $form['in_ic'];
	$updated['in_pc'] 	= $form['in_pc'];
	$updated['pn_vc'] 	= $form['pn_vc'];
	$updated['pn_ac'] 	= $form['pn_ac'];
	$updated['pn_ic'] 	= $form['pn_ic'];
	$updated['pn_pc'] 	= $form['pn_pc'];
	$updated['tt_id'] 	= $form['tt_id'];
	$updated['tt_in'] 	= $form['tt_in'];
	$updated['tt_vc'] 	= $form['tt_vc'];
	$updated['tt_ac'] 	= $form['tt_ac'];
	$updated['tt_ic'] 	= $form['tt_ic'];
	$updated['tt_pc'] 	= $form['tt_pc'];
	$updated['ga_id'] 	= $form['ga_id'];
	$updated['ga_in'] 	= $form['ga_in'];	
	$updated['ga_vi']	= $form['ga_vi'];
	$updated['ga_ac']	= $form['ga_ac'];
	$updated['ga_bc']	= $form['ga_bc'];
	$updated['ga_cp']	= $form['ga_cp'];
	$updated['ga_pc']	= $form['ga_pc'];
	$updated['go_id']	= $form['go_id'];
	$updated['go_in']	= $form['go_in'];
	$updated['go_js']	= $form['go_js'];
	$updated['wo_sk']	= $form['wo_sk'];	
	$updated['wo_tx']	= $form['wo_tx'];
	$updated['ct_in']	= $form['ct_in'];
	$updated['ct_ck']	= $form['ct_ck'];
	$updated['ct_pk']	= $form['ct_pk'];
	$updated['ct_nk']	= $form['ct_nk'];
	$updated['co_dc']	= $form['co_dc'];
	$updated['co_ur']	= $form['co_ur'];
	$updated['co_ma']	= $form['co_ma'];
	$updated['co_bg']	= $form['co_bg'];
	$updated['co_tx']	= $form['co_tx'];
	return $updated;
}
