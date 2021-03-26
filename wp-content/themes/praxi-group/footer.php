<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Praxi_Group
 */

$color_scheme = get_field('color_scheme', 'option');
?>

	<footer id="colophon" class="site-footer">
		<div class="grid-container">
			<div class="grid-x">
				<div class="large-3 medium-3 small-12 column">
					<div class="footer--column">
						<?php if($color_scheme == 'praxi-group'):
							get_template_part('template-parts/content', 'logo-praxi-group');
						elseif($color_scheme == 'praxi-lavoro'):
							get_template_part('template-parts/content', 'logo-praxi-lavoro');
						elseif($color_scheme == 'praxi-provita'):
							get_template_part('template-parts/content', 'logo-praxi-provita');
						elseif($color_scheme == 'praxis-ds'):
							get_template_part('template-parts/content', 'logo-praxis-ds');
						endif; ?>
					</div>
				</div>
				<div class="large-3 medium-3 small-12 column">
					<div class="footer--column">
						<h4>Contatti</h4>
						<?php if($color_scheme == 'praxi-group'): ?>
							<p>
								<strong>Indirizzo</strong>
								Via Magna Grecia 117 - 00183 Roma<br>
								Viale Castrense, 5D - 00182 Roma
							</p>
						<?php elseif($color_scheme == 'praxi-lavoro'): ?>
							<p>
								<strong>Sede Legale</strong>
								Via Magna Grecia 117 - 00183 Roma
							</p>
							<p>
								<strong>Nuova Sede Operativa</strong>
								Viale Castrense, 5D - 00182 Roma
							</p>
							</p>
						<?php else: ?>
							<p>
								<strong>Indirizzo</strong>
								Via Magna Grecia 117 - 00183 Roma
							</p>
						<?php endif; ?>
						<?php if($color_scheme == 'praxi-group'): ?>
							<p>
								<strong>Orari di apertura</strong>
								Lun - Ven: 08.00 - 20.00<br>
								Sab: 08.00 - 18.00
							</p>
						<?php endif; ?>
						<p>
							<strong>Telefono</strong>
							<?php if($color_scheme == 'praxi-lavoro'): ?>
								+39 06 7008388 (int. 2)
							<?php else: ?>
								+39 06 7008388
							<?php endif; ?>
						</p>
						<p>
							<strong>Uffici amministrativi</strong>
							+39 06 7008388 (int. 4)
						</p>
						<p>
							<strong>E-mail</strong>
							<?php if($color_scheme == 'praxi-lavoro'): ?>
								<a href="mailto:mdl@praxigroup.it">mdl@praxigroup.it</a>
							<?php else: ?>
								<a href="mailto:info@praxigroup.it">info@praxigroup.it</a>
							<?php endif; ?>
						</p>
					</div>
				</div>
				<div class="large-3 medium-3 small-12 column">
					<div class="footer--column">
						<h4>Link utili</h4>
						<ul>
							<?php if($color_scheme == 'praxi-lavoro'): ?>
								<li>
									<a href="http://praxigroup.officine06lab.com/wp-content/uploads/2021/03/Privacy-Policy-PraxiMedica-healthcare.pdf" target="_blank">Privacy Policy</a>
								</li>
							<?php else: ?>
								<li>
									<a href="http://praxigroup.officine06lab.com/wp-content/uploads/2021/03/Privacy-Policy-Praxis-DS.pdf" target="_blank">Privacy Policy</a>
								</li>
								<li>
									<a href="http://praxigroup.officine06lab.com/wp-content/uploads/2021/03/Privacy-Policy-Praxi-Medica.pdf" target="_blank">Privacy Policy Praxi Medica</a>
								</li>
								<li>
									<a href="http://praxigroup.officine06lab.com/wp-content/uploads/2021/03/Privacy-Policy-PraxiMedica-healthcare.pdf" target="_blank">Privacy Policy Praxi Medica Healthcare</a>
								</li>
							<?php endif; ?>
							<li>
								<a href="/cookie" target="_blank">Cookie Policy</a>
							</li>
							<li>
								<a href="/wp-content/uploads/2021/03/Prevenzione-COVID-19-aprile-2020.pdf" target="_blank">Procedura Coronavirus</a>
							</li>
						</ul>
						<br>
						<p>
							<strong>Laboratorio</strong>
							Tutti gli esami di laboratorio sono eseguiti in collaborazione con la Bios San Giovanni.
						</p>
					</div>
				</div>
				<div class="large-3 medium-3 small-12 column">
					<div class="footer--column">
						<h4>Seguici su</h4>
						<a href="https://www.facebook.com/praximedica.roma" target="_blank">
							<i class="fab fa-facebook-square"></i>
						</a>
						<a href="https://www.instagram.com/studimedicipraxi/" target="_blank">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="https://www.linkedin.com/company/praximedica-s.r.l.?trk=tabs_biz_home" target="_blank">
							<i class="fab fa-linkedin"></i>
						</a>
						<img class="pagodil" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Praxi-Group-PagoDIL.png" alt="PagoDIL">
					</div>
				</div>
				<div class="large-12 medium-12 small-12 column">
					<div class="copyright--section">
						<p>© <?php echo date('Y'); ?> Tutti i diritti riservati - Made with <i class="fal fa-heart"></i> by <a href="https://www.officine06.com/" rel="nofollow">Officine06</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Custom JS/jQuery -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUyAu-Kh9Z3yisWaHGTwpWJm4XLc8k0y8"></script>
<script rel="preload" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor.js"></script>
<script rel="preload" src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script rel="preload" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
<script rel="preload" src="https://kit.fontawesome.com/1e28d2c9a6.js" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8VRKK2GZFE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8VRKK2GZFE', { 'anonymize_ip': true });
</script>

</body>
</html>
