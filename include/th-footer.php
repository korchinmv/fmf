<?php
// th-footer.php
?>
<div class="feedback-light">
		<div class="feedback-block grey-background _section">
				<div class="wrap_container">
			<h2>มาเริ่มต้นพูดคุยเกี่ยวกับโปรเจคถัดไปของคุณกันเถอะ!</h2>
			<div class="feedback-items">
				<div class="feedback-form-item">
					<form>
						<div class="form-content">
							<div class="form-field">
								<label>ชื่อของคุณ*</label>
								<input placeholder="คุณชื่ออะไร?">
							</div>
							<div class="form-field">
								<label>อีเมล*</label>
								<input placeholder="ที่อยู่อีเมล">
							</div>
							<div class="form-field">
								<label>โทรศัพท์*</label>
								<input class="phone_mask" placeholder="+66 081 234 5678">
							</div>
							<div class="form-field">
								<label>ที่อยู่เว็บไซต์*</label>
								<input placeholder="https://">
							</div>
							<div class="form-field">
								<label>บริการที่คุณสนใจ*</label>
								<div class="select-list">
									<div class="select-item-selected">
										<input placeholder="SEO, การโฆษณาเชิงบริบท" readonly>
										<div class="item-arrow">
											<span class="arrow-down"></span>
										</div>
									</div>
									<div class="select-items">
										<div class="select-item"><input value="SEO">SEO</div>
										<div class="select-item"><input value="โฆษณาเชิงบริบท">โฆษณาเชิงบริบท</div>
										<div class="select-item"><input value="โซเชียลมีเดีย">โซเชียลมีเดีย</div>
										<div class="select-item"><input value="การวิเคราะห์">การวิเคราะห์</div>
										<div class="select-item"><input value="การพัฒนา">การพัฒนา</div>
										<div class="select-item"><input value="อื่นๆ">อื่นๆ</div>
									</div>
								</div>
							</div>
							<div class="form-field">
								<label>อายุของเว็บไซต์</label>
								<div class="form-field-age">
									<div class="line-status"></div>
									<label><span><1</span><input class="first-input" type="radio" name="age" value="<1"></label>
									<label class="label-checked"><span>2-4</span><input type="radio" name="age" value="2-4" checked></label>
									<label><span>5-7</span><input type="radio" name="age" value="5-7"></label>
									<label><span>8-10</span><input type="radio" name="age" value="8-10"></label>
									<label class="label-last"><span>>10</span><input type="radio" name="age" value=">10"></label>
								</div>
							</div>
						</div>
						<div class="form-info check">
							<input class="check-agree" type="checkbox" checked>
							<p>โดยคลิกปุ่ม "ส่งคำขอ" ยอมรับ <a href="/privacy_policy.pdf" target="_blank" class="form__link link--download">นโยบายการประมวลผลข้อมูลส่วนบุคคล</a></p>
						</div>
						<div class="feedback-bottom">
							<div class="feedback-bottom__captcha">
								<div id="feedback-captcha-2"></div>
							</div>
							<div class="feedback-bottom__btn">
								<button type="submit" class="form-btn btn-light">ส่งคำขอ</button>
							</div>
						</div>
					</form>
				</div>
				<div class="feedback-item">
					<span>โทรศัพท์</span>
					<a href="tel:+660970346625" class="first-phone">(+66) 097-034-6625</a>
					<a href="tel:+660837884484">(+66) 083-788-4484</a>
					<span>อีเมล</span>
					<a href="mailto:info@fmf.co.th">info@fmf.co.th</a>
					<a href="https://line.me/R/ti/p/%40cfn9382g" target="_blank" class="line-it-big">
						<img src="/img/line-it.svg">LINE it!
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="footer">
	<div class="wrap_container">
		<div class="footer-top">
			<div class="footer-logo logo">
				<img class="footer-logo--img" src="/img/fmf-bottom.png" alt="">
			</div>
			<div class="footer-nav footer-nav--menu">
				<div class="footer-menu">
					<span class="footer-nav--title">บริการ</span>
					<a href="/th/seo/">การโปรโมท SEO</a>
					<a href="/th/context-ad/">โฆษณาเชิงบริบท</a>
					<a href="/th/social-media-ad/">โซเชียลมีเดีย</a>
					<a href="/th/analytics/">การวิเคราะห์</a>
					<a href="/th/development/">การพัฒนา</a>
				</div>
				<div class="footer-menu">
					<span class="footer-nav--title">บริษัท</span>
					<a href="/th/about/">เกี่ยวกับเรา</a>
					<a href="/th/reviews/">ลูกค้า & รีวิว</a>
					<a href="/th/our-work/">ผลงานของเรา</a>
				</div>
				<div class="footer-menu">
					<span class="footer-nav--title">ติดต่อ</span>
					<a href="mailto:info@fmf.co.th" class="footer-contacts">info@fmf.co.th</a>
					<a href="tel:+660970346625" class="footer-contacts">(+66) 097-034-6625</a>
					<a href="tel:+660837884484" class="footer-contacts">(+66) 083-788-4484</a>
					<a href="https://line.me/R/ti/p/%40cfn9382g" target="_blank" class="line-it-small">
						<img src="/img/line-it.svg">LINE it!
					</a>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<span>
				© 1999–<?= date('Y') ?> FMF Co., Ltd
			</span>
			<div class="more-links">
				<a href="/privacy_policy.pdf" target="_blank">Privacy Policy</a>
			</div>
		</div>
	</div>
</footer>

<div id="feedback" class="modal feedback-modal feedback-light">
	<a href="#" class="feedback-modal-close" rel="modal:close">
		<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect x="7.39355" y="26.7988" width="28" height="2" transform="rotate(-45 7.39355 26.7988)" fill="#1A1A1A"/>
			<rect x="8.80762" y="7" width="28" height="2" transform="rotate(45 8.80762 7)" fill="#1A1A1A"/>
		</svg>
	</a>
	<div class="feedback-content">
		<h2>ส่งคำขอ</h2>
		<div class="feedback-block">
			<form class="feedback-form">
				<div class="form-content">
					<div class="form-field">
						<label>ชื่อของคุณ*</label>
						<input name="name" required placeholder="คุณชื่ออะไร?">
					</div>
					<div class="form-field">
						<label>อีเมล*</label>
						<input type="email" name="email" required placeholder="ที่อยู่อีเมล">
					</div>
					<div class="form-field">
						<label>โทรศัพท์*</label>
						<input name="phone" class="phone_mask" required placeholder="+66 081 234 5678">
					</div>
					<div class="form-field">
						<label>ที่อยู่เว็บไซต์*</label>
						<input name="site" required placeholder="https://">
					</div>
					<div class="form-field">
						<label>บริการที่คุณสนใจ*</label>
						<div class="select-list">
							<div class="select-item-selected">
								<input name="service" placeholder="SEO, การโฆษณาเชิงบริบท" readonly>
								<div class="item-arrow">
									<span class="arrow-down"></span>
								</div>
							</div>
							<div class="select-items">
								<div class="select-item"><input value="SEO">SEO</div>
								<div class="select-item"><input value="โฆษณาเชิงบริบท">โฆษณาเชิงบริบท</div>
								<div class="select-item"><input value="โซเชียลมีเดีย">โซเชียลมีเดีย</div>
								<div class="select-item"><input value="การวิเคราะห์">การวิเคราะห์</div>
								<div class="select-item"><input value="การพัฒนา">การพัฒนา</div>
								<div class="select-item"><input value="อื่นๆ">อื่นๆ</div>
							</div>
						</div>
					</div>
					<div class="form-field">
						<label>อายุของเว็บไซต์</label>
						<div class="form-field-age">
							<div class="line-status"></div>
							<label><span><1</span><input class="first-input" type="radio" name="age" value="<1"></label>
							<label class="label-checked"><span>2-4</span><input type="radio" name="age" value="2-4" checked></label>
							<label><span>5-7</span><input type="radio" name="age" value="5-7"></label>
							<label><span>8-10</span><input type="radio" name="age" value="8-10"></label>
							<label class="label-last"><span>>10</span><input type="radio" name="age" value=">10"></label>
						</div>
					</div>
				</div>
				<div class="form-info check">
					<input class="check-agree" type="checkbox" checked>
					<p>โดยคลิกปุ่ม "ส่งคำขอ" ยอมรับ <a href="/privacy_policy.pdf" target="_blank" class="form__link link--download">นโยบายการประมวลผลข้อมูลส่วนบุคคล</a></p>
				</div>
				<div class="feedback-bottom">
					<div class="feedback-bottom__captcha">
						<div id="feedback-captcha-2"></div>
					</div>
					<div class="feedback-bottom__btn">
						<button type="submit" class="form-btn btn-light">ส่งคำขอ</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="feedback-success">
		<p>Form successfully sent</p>
	</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/include/feedback-success.php';?>

<script type="text/javascript">
	var onloadCallback = function() {
		grecaptcha.render('feedback-captcha', {
			'sitekey' : '6LfI9EopAAAAAFPDKzmhrQ553-sl_c1y6nkkS98i'
		});
		grecaptcha.render('feedback-captcha-2', {
			'sitekey' : '6LfI9EopAAAAAFPDKzmhrQ553-sl_c1y6nkkS98i'
		});
	};
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script src="/js/lottie-anim.js"></script>
<script src="/js/custom.js"></script>

</body>
</html>
