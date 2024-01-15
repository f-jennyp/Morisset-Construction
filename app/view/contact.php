<div id="content">
	<div id="contact">
		<div class="row">
			<div class="contact-con">
				<h1>Contact Form</h1>
				<div class="to-sm">Please fill out the form below and we will get back to you as soon as we can
					with a
					reply. Thank you.</div>
				<form action="sendContactForm" method="post" class="sends-email ctc-form">
					<div class="flex">
						<label><span class="ctc-hide">Name</span>
							<input type="text" name="name" placeholder="Name:">
						</label>

						<label><span class="ctc-hide">Phone</span>
							<input type="text" name="phone" placeholder="Phone:">
						</label>

						<label><span class="ctc-hide">Email</span>
							<input type="text" name="email" placeholder="Email:">
						</label>
					</div>
					<label><span class="ctc-hide">Message</span>
						<textarea name="message" cols="30" rows="10" placeholder="Message / Questions:"></textarea>
					</label>

					<label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>
					<div class="g-recaptcha"></div>
					<div class="ctcCheckbox">
						<label>
							<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this
							website store my submitted information so that they can respond to my inquiry.
						</label><br>
					</div>

					<div class="btn-holder">
						<button type="submit" class="ctcBtn btn" disabled>SUBMIT
							FORM</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>