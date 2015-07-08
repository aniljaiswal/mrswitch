@extends('pages.default')

@section('content')

<div class="page-wrapper custom-nav static-pages">
	@include('partials.nav')

	<section class="header-6 v-center">

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="text-center">PRIVACY POLICY</h3>
					<br>
					<br>
					<h6 class="last-updated">Last Updated on July 2nd, 2015</h6>

					<dl>
						<dt>SECTION 1 - WHAT DO WE DO WITH YOUR INFORMATION?</dt>
						<dd>
							When you purchase something from our store, as part of the buying and selling process, 
							we collect the personal information you give us such as your name, address and email address.

							When you browse our store, we also automatically receive your computer’s internet protocol (IP) 
							address in order to provide us with information that helps us learn about your browser and 
							operating system.

							Email marketing (if applicable): With your permission, we may send you emails about our store, new 
							products and other updates.
						</dd>

						<dt>SECTION 2 - CONSENT</dt>
						<dd>
							<b>How do you get my consent?</b><br>

							When you provide us with personal information to complete a transaction, verify your credit card, 
							place an order, arrange for a delivery or return a purchase, we imply that you consent to our 
							collecting it and using it for that specific reason only.
							
							If we ask for your personal information for a secondary reason, like marketing, we will either 
							ask you directly for your expressed consent, or provide you with an opportunity to say no. <br><br>

							<b>How do I withdraw my consent?</b><br>
							
							If after you opt-in, you change your mind, you may withdraw your consent for us to contact you, 
							for the continued collection, use or disclosure of your information, at anytime, by contacting 
							us at [___Company Contact Email___] or mailing us at: [___Company Office Address___].
						</dd>

						<dt>SECTION 3 - DISCLOSURE</dt>
						<dd>
							We may disclose your personal information if we are required by law to do so or if you violate 
							our Terms of Service.
						</dd>

						<dt>SECTION 4 - PAYMENT</dt>

						<dd>
							We use Razorpay for processing payments. We/Razorpay do not store your card data on their servers. 
							The data is encrypted through the Payment Card Industry Data Security Standard (PCI-DSS) when 
							processing payment. Your purchase transaction data is only used as long as is necessary to complete 
							your purchase transaction. After that is complete, your purchase transaction information is not saved.

							<br>
							Our payment gateway adheres to the standards set by PCI-DSS as managed by the PCI Security Standards 
							Council, which is a joint effort of brands like Visa, MasterCard, American Express and Discover.

							<br>
							PCI-DSS requirements help ensure the secure handling of credit card information by our store and its 
							service providers.

							<br>
							For more insight, you may also want to read terms and conditions of Mr. Switch on http://www.mrswitch.in
						</dd>

						<dt>SECTION 5 - THIRD-PARTY SERVICES</dt>
						<dd>
							In general, the third-party providers used by us will only collect, use and disclose your information 
							to the extent necessary to allow them to perform the services they provide to us. However, certain third-party service providers, such as payment gateways and other payment transaction 
							processors, have their own privacy policies in respect to the information we are required to provide to 
							them for your purchase-related transactions.

							<br>
							For these providers, we recommend that you read their privacy policies so you can understand the manner 
							in which your personal information will be handled by these providers. In particular, remember that 
							certain providers may be located in or have facilities that are located a different jurisdiction than 
							either you or us. So if you elect to proceed with a transaction that involves the services of a third-party 
							service provider, then your information may become subject to the laws of the jurisdiction(s) in which that 
							service provider or its facilities are located.

							<br>
							Once you leave our store’s website or are redirected to a third-party website or application, you are no 
							longer governed by this Privacy Policy or our website’s Terms of Service.

							<br>
							<b>Links</b>

							<br>
							When you click on links on our store, they may direct you away from our site. We are not responsible for 
							the privacy practices of other sites and encourage you to read their privacy statements.
						</dd>

						<dt>SECTION 6 - SECURITY</dt>
						<dd>
							To protect your personal information, we take reasonable precautions and follow industry best practices to 
							make sure it is not inappropriately lost, misused, accessed, disclosed, altered or destroyed.
						</dd>

						<dt>SECTION 7 - COOKIES</dt>
						<dd>We use cookies to maintain session of your user. It is not used to personally identify you on other websites.</dd>

						<dt>SECTION 8 - AGE OF CONSENT</dt>
						<dd>
							By using this site, you represent that you are at least the age of majority in your state or province of 
							residence, or that you are the age of majority in your state or province of residence and you have given us your 
							consent to allow any of your minor dependents to use this site.
						</dd>

						<dt>SECTION 9 - CHANGES TO THIS PRIVACY POLICY</dt>
						<dd>
							We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and 
							clarifications will take effect immediately upon their posting on the website. If we make material changes to 
							this policy, we will notify you here that it has been updated, so that you are aware of what information we 
							collect, how we use it, and under what circumstances, if any, we use and/or disclose it.

							<br>
							If our store is acquired or merged with another company, your information may be transferred to the new owners 
							so that we may continue to sell products to you.
						</dd>

						<dt>QUESTIONS AND CONTACT INFORMATION</dt>
						<dd>
							If you would like to: access, correct, amend or delete any personal information we have about you, register 
							a complaint, or simply want more information contact our Privacy Compliance Officer at 
							[___Company Contact Email___] or by mail at [___Company Office Address___]

							<br>
							<br>
							[Re: Privacy Compliance Officer]
							<br>
							[G-21, 9/54, Namdhari Chambers, D B Gupta Road, New Delhi India 110005]
						</dd>

					</dl>
				</div>
			</div>
		</div>
		
	</section>

	@include('partials.footer')
</div>

@stop