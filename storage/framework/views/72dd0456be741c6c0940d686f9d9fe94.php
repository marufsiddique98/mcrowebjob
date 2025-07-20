<div class="tk-footerwrap">
	<footer class="tk-footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-7 col-xl-4">
					<div class="tk-footer_info">
                            <strong class="tk-footerlogo"><a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/logo.png')); ?>" alt="<?php echo e(__('general.logo')); ?>" /></a></strong>
						<?php if(!empty(setting('_site.footer_text'))): ?>
							<div class="tk-description">
								<p><?php echo nl2br(setting('_site.footer_text')); ?></p>
							</div>
						<?php endif; ?>
						<?php if(!empty(setting('_site.footer_apps_heading')) || !empty(setting('_site.android_app_logo')) || !empty(setting('_site.android_app_url'))): ?>
					<div class="tk-footer-mobile-app">
						<?php if(!empty(setting('_site.footer_apps_heading'))): ?>
							<div class="tk-title">
								<h3><?php echo setting('_site.footer_apps_heading'); ?></h3>
							</div>
						<?php endif; ?>
						<ul class="tk-socailapp">
							<?php if(!empty(setting('_site.android_app_logo'))): ?>
								<li>
									<a href="<?php echo e(setting('_site.android_app_url')??'#'); ?>">
										<img src="<?php echo e(asset('storage/'.setting('_site.android_app_logo')[0]['path'])); ?>" alt="<?php echo e(__('pages.app_store_alt')); ?>">
									</a>
								</li>
							<?php endif; ?>
							<?php if(!empty(setting('_site.ios_app_logo'))): ?>
								<li>
									<a href="<?php echo e(setting('_site.ios_app_url')??'#'); ?>">
										<img src="<?php echo e(asset('storage/'.setting('_site.ios_app_logo')[0]['path'])); ?>" alt="<?php echo e(__('pages.play_store_alt')); ?>">
									</a>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				<?php endif; ?>
					</div>
				</div>
				<?php if(!empty($categories)): ?>
					<div class="col-12 col-lg-6 col-xl-4">
						<div class="tk-fwidget">
							<?php if(!empty(setting('_site.footer_categories_heading'))): ?>
								<div class="tk-fwidget_title">
									<strong><?php echo setting('_site.footer_categories_heading'); ?></strong>
								</div>
							<?php endif; ?>
							<ul class="tk-fwidget_list">
								<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($index > 8): ?>
										<li class="tk-showall"><a href="<?php echo e(route('search-projects')); ?>" target="_blank"><?php echo e(__('pages.show_all')); ?></a></li>
									<?php endif; ?>
									<?php if($index > 8){
											break;
										}
									?>
									<li><a href="<?php echo e(route('search-projects', ['category' => $category->slug])); ?>" target="_blank"><?php echo e($category->name); ?></a></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					</div>
				<?php endif; ?>
				<div class="col-12 col-lg-6 col-xl-4">
				
					<div class="tk-footernewsletter tk-footernewsletterv2">
						<?php if(!empty(setting('_site.footer-contact-heading'))): ?>
							<div class="tk-fwidget_title">
								<h5><?php echo setting('_site.footer-contact-heading'); ?></h5>
							</div>
						<?php endif; ?>
						<?php if(!empty(setting('_contact.phone')) || !empty(setting('_contact.email')) || !empty(setting('_contact.whatsapp')) || !empty(setting('_contact.fax')) ): ?>
							<ul class="tk-fwidget_contact_list">
								<?php if(!empty(setting('_contact.phone'))): ?>
									<li>
										<i class="icon icon-phone-call"></i>
										<a href="tel:<?php echo e(setting('_contact.phone')); ?>"><?php echo e(setting('_contact.phone')); ?></a>
										<?php if(!empty(setting('_contact.phone_call_availability'))): ?>
											<span><?php echo setting('_contact.phone_call_availability'); ?></span>
										<?php endif; ?>
									</li>
								<?php endif; ?>
								<?php if(!empty(setting('_contact.email'))): ?>
									<li>
										<i class="icon icon-mail"></i>
										<a href="mailto:<?php echo e(setting('_contact.email')); ?>"><?php echo setting('_contact.email'); ?></a>
									</li>
								<?php endif; ?>
								<?php if(!empty(setting('_contact.fax'))): ?>
									<li>
										<i class="icon icon-printer"></i>
										<a href="fax:<?php echo e(setting('_contact.fax')); ?>"><?php echo setting('_contact.fax'); ?></a>
									</li>
								<?php endif; ?>
								<?php if(!empty(setting('_contact.whatsapp'))): ?>
									<li>
										<i class="fab fa-whatsapp"></i>
										<a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo e(setting('_contact.whatsapp')); ?>"><?php echo setting('_contact.whatsapp'); ?></a>
										<?php if(!empty(setting('_contact.whatsapp_call_availability'))): ?>
											<span><?php echo setting('_contact.whatsapp_call_availability'); ?></span>
										<?php endif; ?>
									</li>
								<?php endif; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="tk-footer_copyright">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="tk-footer-copywrapper">
							<div class="tk-fcopyright">
								<?php if( !empty($footer_menu) && $footer_menu->count() > 0 ): ?>  
									<nav class="tk-fcopyright_list">
										<ul class="tk-copyrights-list">
											<?php $__currentLoopData = $footer_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li>
													<a href="<?php echo e(!empty($menu->route) ? url($menu->route ) : 'javascript:;'); ?>"><?php echo ucfirst($menu->label); ?></a>
												</li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
										</ul>
									</nav>
								<?php endif; ?>
								<span class="tk-fcopyright_info"><?php echo e(__('general.copy_right_text').' '. date('Y')); ?></span>
							</div>
							<?php if(!empty(setting('_social.facebook')) || !empty(setting('_social.twitter')) || !empty(setting('_social.linkedin')) || !empty(setting('_social.dribbble'))): ?>
								<ul class="tk-socialicons">
									<?php if(!empty(setting('_social.facebook'))): ?>
										<li>
											<a href="<?php echo e(setting('_social.facebook')); ?>" class="tk-facebook"><i class="fab fa-facebook-f"></i></a>
										</li>
									<?php endif; ?>
									<?php if(!empty(setting('_social.twitter'))): ?>
										<li>
											<a href="<?php echo e(setting('_social.twitter')); ?>" class="tk-twitter"><i class="fab fa-twitter"></i></a>
										</li>
									<?php endif; ?>
									<?php if(!empty(setting('_social.linkedin'))): ?>
										<li>
											<a href="<?php echo e(setting('_social.linkedin')); ?>" class="tk-linkedin"><i class="fab fa-linkedin-in"></i></a>
										</li>
									<?php endif; ?>
									<?php if(!empty(setting('_social.dribbble'))): ?>
										<li>
											<a href="<?php echo e(setting('_social.dribbble')); ?>" class="tk-dribbble"><i class="fab fa-dribbble"></i></a>
										</li>
									<?php endif; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/components/footer.blade.php ENDPATH**/ ?>