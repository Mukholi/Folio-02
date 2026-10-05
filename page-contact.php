<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Folio
 */

get_header();
?>
<!-- Contact 00 -->
<div class="site-contact-00">
    <div class="site-contact-00-container">
        <h1 class="site-contact-00-heading">Start a<br>Conversation</h1>
        <p class="site-contact-00-subheading">For exhibitions, collaborations, commissions,<br>studio visits and  inquiries get in touch.</p>
    </div>
</div>

	<!-- Home 04 -->
	<div class="site-home-04">
		<div class="site-home-04-contaner">
			<div class="site-home-04-left"></div>
			<div class="site-home-04-middle">
				<div class="site-home-04-middle-container">
					<form class="site-home-04-from">
						<span class="site-home-04-from-row">
							<input type="text" placeholder="First Name"/>
							<input type="text" placeholder="Other Name"/>
						</span>
						<input type="email" placeholder="Email"/>
						<textarea placeholder="Message"></textarea>
						<button>
							<p>Send Message</p>
						</button
					</form>
				</div>
			</div>
			<div class="site-home-04-right"></div>
		</div>		
	</div>


<!-- Footer 01 -->
<div class="site-footer-01">
    <div class="site-footer-01-container">
        <ul class="site-footer-01-pills">
            <li class="site-footer-01-pill">
                <a class="site-footer-01-pill-link" href="#">
                    <p class="site-footer-01-pill-text-min">Contact:</p>
                    <p class="site-footer-01-pill-text-max">+250-786-421-910</p>
                </a>
            </li>
            <li class="site-footer-01-pill">
                <a class="site-footer-01-pill-link" href="#">
                    <p class="site-footer-01-pill-text-min">Instagram:</p>
                    <p class="site-footer-01-pill-text-max">Concepts Art Studios</p>
                </a>
            </li>
            <li class="site-footer-01-pill full">
                <a class="site-footer-01-pill-link" href="#">
                    <p class="site-footer-01-pill-text-min">Email:</p>
                    <p class="site-footer-01-pill-text-max">Conceptsartstudios@gmail.com</p>
                </a>
            </li>
        </ul>
        <a class="site-footer-01-address" href="#">
            <p class="site-footer-01-address-text">KN 7 Avenue, Naymirambo, Kigali, Rwanda</p>
        </a>
    </div>
</div>

<?php

get_footer();
