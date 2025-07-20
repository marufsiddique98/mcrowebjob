<?php $__env->startSection('content'); ?>
	<?php  
		$image = '';
		if(!empty($profile->banner_image)){
			$banner = @unserialize($profile->banner_image);

			if( !empty($banner['sizes']['1730×400']) ){
				$image = $banner['sizes']['1730×400'];
			} elseif( !empty($banner['file_path']) ) {
				$image = $banner['file_path'];
			} elseif( !empty($def_banner_img)){
				$image = $def_banner_img[0]['path'];
			}
		} elseif(!empty($def_banner_img)) {
			$image 		= $def_banner_img[0]['path'];
		}

		$banner_class = empty($image) ? 'tk-nobanner' : '';
	?>
	<div class="tk-scetiondb pt-0 pb-0">
		<?php if(!empty($image)): ?>
			<div class="tk-banner">
				<figure>
					<img src="<?php echo e(asset('storage/'.$image)); ?>" alt="image">
				</figure>
			</div>
		<?php endif; ?>
		<main class="tk-bgwhite <?php echo e($banner_class); ?>">
			<section class="tk-profilemain">
				<div class="tk-bgback"></div>
				<div class="tk-newprofilewrap">
					<div class="container">
						<div class="row g-0">
							<div class="col-lg-4 col-xl-3 tk-hasborder">
								<aside class="tk-asiderightbar">
									<div class="tk-sideprofile">
										<figure>
											<?php
												if( !empty($profile->image) ){
													$image_path     = getProfileImageURL( $profile->image, '130x130' );
													   $seller_image   = !empty($image_path) ? '/storage/' . $image_path : '/images/default-user-130x30.png';
												}else{
													$seller_image = '/images/default-user-130x130.png';
												}
											?>
											<img src="<?php echo e(asset($seller_image)); ?>" alt="<?php echo e($profile->full_name); ?>">
										</figure>
										<div class="tk-infoprofile">
											<h4>
												<?php echo e($profile->full_name); ?>

												<?php if($profile->user->userAccountSetting->verification == 'approved'): ?>
													<i class="fa-solid fa-circle-check tippy" data-tippy-content="<?php echo e(__('general.verified_user')); ?>"></i>
												<?php endif; ?>
											</h4>
											<?php if(!empty($profile->tagline)): ?>
												<span><?php echo $profile->tagline; ?></span>
											<?php endif; ?>
										</div>
										<ul class="tk-blogviewdates tk-blogviewdatesmd">
											<li>
												<i class="fas fa-star tk-yellow"></i>
												<em><?php echo e(ratingFormat( $profile->ratings_avg_rating ?? '' )); ?></em>
												<em>/5.0</em>
											</li>
											<li>
												<span><i class="icon-eye"></i> <em><?php echo e($profile->profile_visits_count == 1 ? __('general.single_view') : __('general.user_views', ['count' => number_format($profile->profile_visits_count) ] )); ?></em> </span>
											</li>
										</ul>
										<?php if( $user_role == 'buyer' || Auth::guest()): ?>
											<div class="tk-shareprolink">
												<a class="tk-heart tk-btn-solid-sm <?php echo e($is_favourite ? 'tk-heartsave' : ''); ?>">
													<i class="icon-heart"></i>
													<em><?php echo e($is_favourite ? __('general.saved') : __('general.save')); ?></em>
												</a>
											</div>
										<?php endif; ?>

										<?php if(Auth::check() && Auth::user()->activeProfile->id != $profile->id): ?>
											<div class="tk-shareprolink">
												<a class="tk-btn-solid-sm tk-start-chat">
													<i class="icon-message-square"></i>
													<em><?php echo e(__('general.start_chat')); ?></em>
												</a>
											</div>
										<?php endif; ?>
									</div>
									<ul class="tk-project-detail-list tk-sidedetailist">
										<li>
											<div class="tk-project-detail-item">
												<div class="tk-project-image">
													<i class="icon-dollar-sign"></i>
												</div>
												<div class="tk-project-imgdetail">
													<span><?php echo e(__('general.starting_from')); ?>:</span>
													<h6><?php echo e(__('general.per_hour_rate', ['rate' => number_format($profile->user->userAccountSetting->hourly_rate, 2), 'currency_symbol' => $currency_symbol])); ?></h6>
												</div>
											</div>
										</li>
										<?php if( !empty($profile->address) ): ?>
											<li>
												<div class="tk-project-detail-item">
													<div class="tk-project-image">
														<i class="icon-map-pin"></i>
													</div>
													<div class="tk-project-imgdetail">
														<span><?php echo e(__('general.location')); ?>:</span>
														<h6><?php echo e(getUserAddress($profile->address, $address_format)); ?></h6>
													</div>
												</div>
											</li>
										<?php endif; ?>
										<?php if( !empty($profile->seller_type) ): ?>
											<li>
												<div class="tk-project-detail-item">
													<div class="tk-project-image">
														<i class="icon-book-open"></i>
													</div>
													<div class="tk-project-imgdetail">
														<span><?php echo e(__('general.seller_type')); ?>:</span>
														<h6><?php echo e($profile->seller_type); ?> </h6>
													</div>
												</div>
											</li>
										<?php endif; ?>
										<?php if( !$profile->languages->isEmpty() ): ?>
											<li>
												<div class="tk-project-detail-item">
													<div class="tk-project-image">
														<i class="icon-calendar"></i>
													</div>
													<div class="tk-project-imgdetail">
														<span><?php echo e(__('languages.text')); ?>:</span>
														<?php
															$count			= 2;
															$hide_lang 		= [];
															$languages 		= [];
															$counter_langs  = 0;
	
															foreach($profile->languages as $single){
																$counter_langs++;
																if($counter_langs <= $count){
																	$languages[] = $single->name;
																} else {
																	$hide_lang[] = $single->name;
																}
															}
														?>
														<div class="tk-languagelist">
															<ul class="tk-languages">
																<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	<li><?php echo e($language); ?></li>
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
																<?php if(count($hide_lang) > 5): ?>
																	<li>
																		<a class="tk-showmore tk-tooltip-tags" href="javascript:void(0);"  data-tippy-trigger="click" data-template="tk-industrypro" data-tippy-interactive="true" data-tippy-placement="top-start">
																			<?php echo e(__('general.more_text', ['counter' => sprintf('%02d', intval($counter_langs) - $count) ] )); ?>

																		</a>
																		<div id="tk-industrypro" class="tk-tippytooltip d-none">
																			<div class="tk-selecttagtippy tk-tooltip ">
																				<ul class="tk-posttag tk-posttagv2">
																					<?php $__currentLoopData = $hide_lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																						<li>
																							<a href="javascript:void(0);"><?php echo e($item); ?></a>
																						</li>
																					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																				</ul>
																			</div>
																		</div>
																	</li>
																<?php endif; ?>
															</ul>
														</div>
													</div>
												</div>
											</li>
										<?php endif; ?>
										<?php if( !empty($profile->english_level) ): ?>
											<li>
												<div class="tk-project-detail-item">
													<div class="tk-project-image tk-bg-lightblue">
														<i class="icon-archive"></i>
													</div>
													<div class="tk-project-imgdetail">
														<span><?php echo e(__('general.english_level')); ?>:</span>
														<h6><?php echo e(ucfirst($profile->english_level)); ?> </h6>
													</div>
												</div>
											</li>
										<?php endif; ?>
									</ul>
									<?php if( $allow_social_links == '1' && !$profile->socialLinks->isEmpty()): ?>
										<div class="tk-followsocial">
											<h6><?php echo e(__('general.follow_more')); ?></h6>
											<ul class="tk-socailmedia">
												<?php $__currentLoopData = $profile->socialLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<?php 
														$name = strtolower($social_link->name);
														$data = availableSocialLinks($name);
														
													?>
													<li>
														<a class="tk-<?php echo e($name); ?>" href="<?php echo e($social_link->url); ?>" target="_blank">
															<i class="<?php echo e($data['icon_class']); ?>"></i>
														</a>
													</li>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</ul>
										</div>
									<?php endif; ?>
									<?php if(!empty($adsense_code)): ?>
										<div class="tk-asideadvertisment">
											<?php echo $adsense_code; ?>

										</div>
									<?php endif; ?>
								</aside>
							</div>
							<div class="col-lg-8 col-xl-9">
								<div class="tk-pofilelinks">
									<ul  id="list-example" class="tk-linklist">
										<li>
											<a href="#about"><?php echo e(__('general.about')); ?></a>
										</li>
										<li>
											<a href="#skills"><?php echo e(__('skill.text')); ?></a>
										</li>
										<li>
											<a href="#gigs"><?php echo e(__('general.all_gigs')); ?></a>
										</li>
										<li>
											<a href="#portfolio"><?php echo e(__('general.all_portfolio')); ?></a>
										</li>
										<li>
											<a href="#qualification"><?php echo e(__('general.qualification')); ?></a>
										</li>
										<li>
											<a href="#reviews"><?php echo e(__('general.reviews')); ?></a>
										</li>
									</ul>
										<div id="about" class="tk-profilebox">
											<div class="tk-project-holder">
												<div class="tk-project-title">
													<h4><?php echo e(__('general.about')); ?></h4>
												</div>
												<?php if( !empty($profile->description) ): ?>
													<div class="tk-jobdescription">
														<p><?php echo nl2br($profile->description); ?></p>
													</div>
												<?php else: ?>
												<div class="tk-noskills">
													<span><?php echo e(__('general.no_content_added')); ?></span>
												</div>
											<?php endif; ?>			
											</div>
										</div>
										<div id="skills" class="tk-profilebox">
											<div class="tk-content-box">
												<h4><?php echo e(__('skill.text')); ?></h4>
												<?php if( !$profile->skills->isEmpty() ): ?>
													<ul class="tk-skills-tags tk-skills-tagsvtwo"> 
														<?php $__currentLoopData = $profile->skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<li><a href="javascript:;"><?php echo $single->name; ?></a></li>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</ul>
												<?php else: ?>
													<div class="tk-noskills">
														<span><?php echo e(__('general.no_content_added')); ?></span>
													</div>
												<?php endif; ?>
											</div>
										</div>
										<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('seller.seller-gigs', ['userProfileId' => $profile->id,'sellerName' => $profile->full_name,'verifyStatus' => $profile->user->userAccountSetting->verification,'currencySymbol' => $currency_symbol,'addressFormat' => $address_format,'userRole' => $user_role,'user_profile_id' => $profile->id,'seller_name' => $profile->full_name,'verify_status' => $profile->user->userAccountSetting->verification,'currency_symbol' => $currency_symbol,'address_format' => $address_format,'user_role' => $user_role])->html();
} elseif ($_instance->childHasBeenRendered('vvRdnyZ')) {
    $componentId = $_instance->getRenderedChildComponentId('vvRdnyZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('vvRdnyZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vvRdnyZ');
} else {
    $response = \Livewire\Livewire::mount('seller.seller-gigs', ['userProfileId' => $profile->id,'sellerName' => $profile->full_name,'verifyStatus' => $profile->user->userAccountSetting->verification,'currencySymbol' => $currency_symbol,'addressFormat' => $address_format,'userRole' => $user_role,'user_profile_id' => $profile->id,'seller_name' => $profile->full_name,'verify_status' => $profile->user->userAccountSetting->verification,'currency_symbol' => $currency_symbol,'address_format' => $address_format,'user_role' => $user_role]);
    $html = $response->html();
    $_instance->logRenderedChild('vvRdnyZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
										<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('seller.seller-portfolios', ['userProfileId' => $profile->id,'user_profile_id' => $profile->id])->html();
} elseif ($_instance->childHasBeenRendered('Gv4T82D')) {
    $componentId = $_instance->getRenderedChildComponentId('Gv4T82D');
    $componentTag = $_instance->getRenderedChildComponentTagName('Gv4T82D');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Gv4T82D');
} else {
    $response = \Livewire\Livewire::mount('seller.seller-portfolios', ['userProfileId' => $profile->id,'user_profile_id' => $profile->id]);
    $html = $response->html();
    $_instance->logRenderedChild('Gv4T82D', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
										<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('seller.seller-education', ['userProfileId' => $profile->id,'user_profile_id' => $profile->id])->html();
} elseif ($_instance->childHasBeenRendered('mcI87IU')) {
    $componentId = $_instance->getRenderedChildComponentId('mcI87IU');
    $componentTag = $_instance->getRenderedChildComponentTagName('mcI87IU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('mcI87IU');
} else {
    $response = \Livewire\Livewire::mount('seller.seller-education', ['userProfileId' => $profile->id,'user_profile_id' => $profile->id]);
    $html = $response->html();
    $_instance->logRenderedChild('mcI87IU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
										<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('seller.seller-reviews', ['userProfileId' => $profile->id,'dateFormat' => $date_format,'user_profile_id' => $profile->id,'date_format' => $date_format])->html();
} elseif ($_instance->childHasBeenRendered('ph8J9db')) {
    $componentId = $_instance->getRenderedChildComponentId('ph8J9db');
    $componentTag = $_instance->getRenderedChildComponentTagName('ph8J9db');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ph8J9db');
} else {
    $response = \Livewire\Livewire::mount('seller.seller-reviews', ['userProfileId' => $profile->id,'dateFormat' => $date_format,'user_profile_id' => $profile->id,'date_format' => $date_format]);
    $html = $response->html();
    $_instance->logRenderedChild('ph8J9db', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
	<div class="modal fade tk-chatmsgs-popup" id="tk_send_message" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog tk-modaldialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="tk-popuptitle">
					<h4> <?php echo e(__('profile_settings.send_message')); ?> </h4>
					<a href="javascript:void(0);" class="close"><i class="icon-x" data-bs-dismiss="modal"></i></a>
				</div>
				<div class="modal-body" id="tk_add_education_frm">
					<div class="tk-textmsg">
						<h5 class="tk-startchat_msg"><?php echo e(__('profile_settings.send_message_text')); ?></h5>
					</div>
					<div class="tk-textmsg_input">
						<input type="text" class="form-control tk-input-msg" placeholder="Type Your Message Here"/>
						<a href="javascript:void(0);" class="tk-btn tk-send-msg"><?php echo e(__('general.send_now')); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
	<script defer src="<?php echo e(asset('common/js/popper-core.js')); ?>"></script> 
    <script defer src="<?php echo e(asset('common/js/tippy.js')); ?>"></script>
    <script>
		function tooltipInit( selecter) {
			if (typeof tippy === 'function') {
				let tipp = tippy( selecter, {
					allowHTML: true,
					animation: 'scale',
					content(reference) {
						const id = reference.getAttribute('data-template');
						const template = document.getElementById(id);
						return template.innerHTML;
					}
				});
			}
		}

        window.onload = (event) => {
            var pageloaded = false;
				tooltipInit('.tk-showmore');
			  // Trigger Jquery Scrollspy
			  var screensize= jQuery( window ).width();
			  if(screensize >= 767){
				  jQuery(".tk-linklist li a").on("click",function(){
					  jQuery('html, body').animate({
						  scrollTop: jQuery(jQuery(this).attr('href'))
						  .offset().top
					  }, 300);
						  return false;
				  });
				  jQuery(window).scroll(function() {
					  
					  var x = jQuery(".tk-linklist").offset().top + 300;
					  jQuery(".tk-pofilelinks .tk-profilebox").each(function(index) {
						  let id = jQuery(this).attr('id');
						  if (x > jQuery(this).offset().top + 150 && x <= jQuery(this).offset().top + jQuery(this).height() + 170) {
							  jQuery(`.tk-linklist li a[href="#${id}"]`).addClass('active')
						  } else {
							  jQuery(`.tk-linklist li a[href="#${id}"]`).removeClass('active')
						  }
					  })
				  });
			  }

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$(document).on('click','.tk-heart', function(event){
					let _this = $(this);
					let type = _this.data('type');
					$.ajax({
						type:'POST',
						url:"<?php echo e(route('favourite-item')); ?>",
						data:{ 
							'seller_id'     : "<?php echo e($profile->id); ?>",
							'profile_slug'  : "<?php echo e($profile->slug); ?>",
							'type'          : 'profile'
						},
						success:function(response){
							if(response.type == 'success'){
								let isUpdate = response.data.isUpdate;
								if(isUpdate){
									$('.tk-heart').toggleClass('tk-heartsave');
									let unsave = "<?php echo e(__('general.save')); ?>";
									let saved = "<?php echo e(__('general.saved')); ?>";
									
									if($('.tk-heart').hasClass('tk-heartsave')){
										$('.tk-heart em').text(saved)
									} else {
										$('.tk-heart em').text(unsave)
									}
								}
							}else if(response.type == 'login_error'){
								showAlert({
									message     : response.data.message,
									type        : 'error',
									title       : response.data.title ,
									autoclose   : 2000,
									redirectUrl : ''
								});
							}
						}
					});
				});

				$(document).on('click','.tk-start-chat', function(event){
					jQuery('.tk-send-msg').addClass('tk-send-msg').removeClass('tk-open-chat')
					jQuery('.tk-send-msg').attr('href', 'javascript:void(0);')
					jQuery('#tk_send_message').modal('show');
				});

				$(document).on('click','.tk-send-msg', function(event){
					let _this = $(this);
					let type = _this.data('type');
					let message = jQuery('.tk-input-msg').val();
					jQuery('.tk-startchat_msg').remove();
					jQuery('.tk-input-msg').val('')
					if(message?.length > 0){
						$('.tk-textmsg').html(`<div class="tk-textmsg_item"><span>${message}</span></div>`)
						$.ajax({
							type:'POST',
							url:"<?php echo e(route('send-message')); ?>",
							data:{ 
								'seller_id' : "<?php echo e($profile->user_id); ?>",
								'message': message
							},
							success:function(response){
								if(response.type == 'success'){
									let datatime = new Date(response.data.message.createdAt);
									var newTime = datatime.toLocaleTimeString();
									let amPm = newTime.split(" ")[1];
									let seconds = newTime.split(":")[2].replace(amPm,'');
									let time = newTime.replace(":"+seconds,' ');
									$('.tk-textmsg').append(`<span class="at-message_time">${time}</span>`);
									_this.removeClass('tk-send-msg').addClass('tk-open-chat')
									let open_chat = "<?php echo e(__('general.open_chat')); ?>";
									let saved = "<?php echo e(__('general.start_chat')); ?>";
									let url = "<?php echo e(url('messenger')); ?>";
									_this.text(open_chat);
									jQuery('.tk-input-msg').val('')
									_this.attr('href', `${url}?thread_id=${response?.data?.message?.threadId ?? ''}`)
								}else if(response.type == 'login_error'){
									showAlert({
										message     : 'Something went wrong.',
										type        : 'error',
										title       : 'Oops',
										autoclose   : 2000,
										redirectUrl : ''
									});
								}
							}
						});
					}
				});
        }

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app',['include_menu' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/front-end/sellers/profile.blade.php ENDPATH**/ ?>