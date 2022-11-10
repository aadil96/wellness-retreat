@extends('layouts.app')

@section('title', 'T&C')

@section('content')

<style>
    ol > li > p {
        padding-left: 2rem;
    }

    .single-blog-post ul, .single-blog-post ul > li {
        margin: 1rem;
        list-style: disc;
    }
    .single-blog-post ul {
        color: #9e9e9e;
        display: block;
        list-style-type: disc;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
    }

    .single-blog-post li {
        display: list-item;
        text-align: -webkit-match-parent;
    }
</style>

<section class="inner-banner pattern-3" style="margin-top: 1rem;">
    <div class="container text-center">
        <h2>Terms & Conditions Of Use</h2>
    </div>
</section>

<section class="bread-cumb">
    <div class="container text-center">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><span>Terms & Conditions</span></li>
        </ul>
    </div>
</section>

<section class="pt30 single-post-page">
    <div class="container">
        <div class="single-blog-post">

            <div class="content">
                <h5>PLEASE READ THE FOLLOWING TERMS AND CONDITIONS OF USE CAREFULLY BEFORE USING THIS WEBSITE OR PLACING ANY ORDERS FOR ANY PRODUCTS.</h5>

                <p>All users of this site and purchasers of our products agree that access to and use of this site and any transactions made by you, whether through the site, with our telesales associates or otherwise, are subject to the following Terms and Conditions, the Privacy Policy and the Returns Policy (hereinafter collectively referred to as “these Terms”) and other applicable law.</p>

                <p>You may purchase our products by either using this Site or communicating with us over the telephone and these Terms rule all purchases that are made by consumers of {{ env('APP_NAME_REF') }}. If you do not agree to these Terms, please do not use this site or purchase any of our products. “site” means {{ env('APP_URL') }} and includes any upgrades and any other software or documentation which enables its use.
                </p>

                <p>By using the site and purchasing our products, you are agreeing to be bound by these Terms between you, a user of the site and / or a potential buyer of our products and {{ env('APP_NAME_REF') }}, Company Number: <a href="tel:{{ env('TELEPHONE') }}">{{ env('TELEPHONE') }}</a>, with our registered office at <i>{{ env('ADDRESS') }}</i> (“we”, “our” and “us” and other related pronouns) We may from time to time change these Terms that govern your use of the site with effect for the future. Please read these Terms carefully in advance of completing every purchase.</p>

                <h5>Copyright:</h5>
                <p>The entire content included in this site, including but not limited to any data, information, media, text, graphics, designs or code (“content”) is copyrighted as a collective work under the United Kingdom and other applicable copyright laws, and is the exclusive property of <i>{{ env('APP_NAME_REF') }}</i>. The collective work includes any works that are licensed to <i>{{ env('APP_NAME_REF') }}</i>. Copyright 2022, <i>{{ env('APP_NAME_REF') }}</i>. ALL RIGHTS RESERVED. Permission is granted to electronically copy and print hard copy portions of this site for the sole purpose of placing an order with us or purchasing our products. You may display and, subject to any expressly stated restrictions or limitations relating to specific material, download or print portions of the material from the different areas of the site solely for your own non-commercial use, or to place an order with us or to purchase our products. Any other use, including but not limited to the reproduction, distribution, display or transmission of the content of this site is strictly prohibited, unless specifically authorised by us, in writing. You further agree not to change or delete any proprietary notices from materials downloaded from the site.</p>

                <h5>Trademarks:</h5>
                <p>All trademarks, service marks and trade names of {{ env('APP_NAME_REF') }} used in the site are trademarks or registered trademarks of {{ env('APP_NAME_REF') }}.</p>

                <h5>Warranty Disclaimer:</h5>
                <p>This site, the content, the materials and products are provided "AS IS" and without warranties of any kind, whether express or implied. To the fullest extent permissible pursuant to applicable law, {{ env('APP_NAME_REF') }} disclaims all warranties, express or implied, including, but not limited to, implied warranties of merchantability and fitness for a particular purpose and non-infringement. {{ env('APP_NAME_REF') }}, its directors, agents, affiliates, employees and group companies does not represent or warrant that:</p>
                <ul>
                    <li>The functions contained in the site or your use of the site will be uninterrupted or error-free, that the defects will be corrected, or that this site or the server that makes the site available are free of viruses or other harmful components.</li>
                    <li>The site will be compatible with your device on which you access the site.</li>
                    <li>The use of the content and materials in this site in terms of their correctness, accuracy, adequacy, usefulness, timeliness, reliability or otherwise.</li>
                </ul>
                <p>
                    Due to the nature of our products we make no claims of efficacy or ability to treat any medical disorders, results may vary and are not guaranteed TO THE EXTENT PERMITTED BY APPLICABLE LAWS AND REGULATION, YOU WAIVE ANY AND ALL IMPLIED REPRESENTATIONS, WARRANTIES AND UNDERTAKINGS.
                </p>

                <h5>Limitation Of Liability:</h5>
                <p><i>{{ env('APP_NAME_REF') }}</i> shall not be liable for any special or consequential damages that result from the use of, or the inability to use, the content and materials on this site or the performance of the products after purchase, even if we have been advised of the possibility of such damages. Applicable law may not allow the limitation of exclusion of liability or incidental or consequential damages, so the above limitation or exclusion may not apply to you.</p>

                <h5>Price:</h5>
                <p>The price payable for the products is as shown on the site. Prices advertised on the site are inclusive of VAT and any other applicable taxes but are exclusive of any delivery charges. Any delivery charges are shown separately when checking out. Prices are subject to change without notice but such changes will not affect orders which have already been accepted by us. If you order products from the site for delivery outside the UK, they may be subject to import duties and taxes which are levied when the delivery reaches the specified destination. You will be responsible for payment of any such import duties and taxes.</p>
                <p>Please note that we have no control over these charges and cannot predict their amount. Please contact your local customs office for further information before placing your order. Please also note that you must comply with all applicable laws and regulations of the country for which the products are destined. We will not be liable for any breach by you of any such laws. Only one discount coupon code may be applied per order. The conditions of use relating to any discount coupon code will be specified at the time of issue of the discount coupon. A discount coupon code cannot be used after your order has been placed or where the coupon code has expired. However, If you forgot to apply the discount and assuming we have not shipped the order we are happy for you to cancel your order and place a new one with the voucher code applied. Once a gift certificate has been locked to your account, it becomes your property. You may use a valid gift certificate for your purchases of our products.</p>
                <p>Partial redemption of your gift certificate is allowed. If the balance on your gift certificate is sufficient to buy any of our products, you can complete the purchase with your gift certificate alone. If your balance is not sufficient to buy the product, you can use a combination of your gift certificate balance and other available payment options. However, where the balance on the gift certificate is sufficient to buy a product, you cannot pay part of the product’s price using a gift certificate and the remaining using a different payment method. Gift certificates cannot be used after your order has been placed or where the certificates have expired. Gift certificates are valid for 24 months and shall be subject to the terms and conditions applicable at the time of issue of such certificate.</p>


                <h5>Typographical Errors:</h5>
                <p>In the event that a product has mistakenly listed at an incorrect price, we reserve the right to refuse or cancel any orders placed for product listed at the incorrect price. {{ env('APP_NAME_REF') }} reserves the right to refuse or cancel any such orders completed at the incorrect price whether or not the order has been confirmed and your credit card charged. If your credit card has already been charged for the purchase and your order is cancelled by us, you will be issued a refund to your credit card for the amount of the incorrect price. In the event that a product has mistakenly listed incorrect information, we do not accept any legal liability for the information mistakenly placed but will correct it as a matter of urgency once we become aware of the problem.</p>

                <h5>Placing Of Orders:</h5>
                <p>Once you have placed an order for any of our products online, you will receive an email confirming your order which contains full details. However, where a product is listed as “out of stock”, we will backorder the product on your behalf. If you change your mind you can cancel the backorder at any time.</p>

                <h5>Delivery:</h5>
                <p>After your order has been processed we will ship them to you at the address provided by you as soon as possible. Estimated delivery time after dispatch within the UK is generally 2-3 business days. Business days exclude public holidays and weekends. However, estimated delivery time is dependent on the following factors:</p>
                <ul>
                    <li>The Product's availability with us.</li>
                    <li>The destination to which you want the order shipped to.</li>
                </ul>


                <h5>Termination:</h5>
                <p>These Terms become applicable to you immediately upon your accessing the site. These Terms, or any part of them, may be terminated by us without notice to you at any time, for any reason. These terms shall continue to apply to you, until your account has been deactivated due to non-use or has been terminated by us, for any reason whatsoever. The provisions relating to Copyrights, Trademark, Disclaimer, Limitation of Liability, Indemnification and Miscellaneous, shall survive any termination. We may terminate or suspend your use of the site at any time in our discretion, without notice to you. We may suspend or terminate your access to your account-</p>

                <ul>
                    <li>If we reasonably believe that you have breached these Terms.</li>
                    <li>If your use of the site creates risk for us or for other users of the site or may affect the sales of our products or potentially damage our reputation.</li>
                    <li>If you fail to use your account for a prolonged period.</li>
                    <li>For any other reason. Where reasonably practicable, we will give you notice of any suspension or termination.</li>
                </ul>

                <h5>Your Account:</h5>
                <p>For you to be able to access certain functionalities on the site, transact or purchase any of our products, you must have a registered account. You only have the right to register one (1) account on the site. We reserve the right to delete duplicate accounts, deny any users who do not comply with our Terms and Conditions the right to use their account and also edit or delete their accounts without prior notice. When you register an account, you will be asked to state some personal details. If you do not state this information, we will not register an account. You are responsible for assuring that all information you enter as part of the registration process is correct, complete and up to date. We will notify you by email when your registration is completed. You are responsible for keeping your personal log-in information secure and confidential. You are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. Unfortunately, we do not serve individuals in all countries. If at the time of registration for an account, your country is not in the drop-down menu of available countries, then we do not serve and cannot ship to your country at the time. By registering for an account with us through the site you warrant that you are are a resident in one of the serviced countries. If you are under 18, you may use the site and transact thereon only with involvement of a parent or guardian. We reserve the right to refuse service, terminate accounts, remove or edit content, or cancel orders at our sole discretion.</p>

                <h5>Cancellations, Returns And Refunds:</h5>
                <p>While we wish to see every order succeed, in the event you are not fully satisfied with your order, you may initiate a cancellation of a completed order placed by you through your account on the site, via email or by contacting our customer service team via telephone. For cancellation, returns, replacements, exchanges and refunds, please refer to our Returns Policy for details. We may cancel a completed order placed by you if the product ordered is not available for any reason. If this is the case, we will notify you and return any payment that you have made, in accordance with the refund procedure set out in our Returns Policy.</p>

                <h5>Payments:</h5>
                <p>We offer payment by credit or debit card (VISA and Master Card) and all are secured by SagePay payments. However, we reserve the right to offer less than our full range of payment options. Your order will be processed only upon authorisation of full payment in advance. Invoices, order breakdowns and vouchers shall be provided in electronic form only. If you pay by card, your card will be authorised on the day you place your order but will not be charged until the date your order is dispatched.</p>

                <h5>Retention Of Ownership & Title:</h5>
                <p>We retain ownership and title to all the goods until receipt of payments in full.</p>

                <h5>Your Content:</h5>
                <p>When you submit, upload, transmit or display any data, information, media or other content in connection with your use of the Site, including your product reviews and comments under the “Blogs” section (“Your Content”), you understand and agree that:</p>

                <ul>
                    <li>You will continue to own and be responsible for Your Content.</li>
                    <li>Our use of Your Content will be subject to our Privacy Policy.</li>
                    <li>You are giving us and our affiliate companies the right to use Your Content (with no fees or charges payable by us to you) solely for the purposes of providing, promoting, developing and trying to improve our services to you, including new services that we may provide in the future.</li>
                    <li>Are allowed to retain and continue to use Your Content after you stop using the site and your account for example, where you have shared Your Content with other users of the site.</li>
                    <li>You are authorising us to adjust any product reviews to ensure that no health claims are made in it.</li>
                </ul>

                <h5>Responsibility For Your Content:</h5>
                <p>You are solely responsible for Your Content and we recommend that you keep a back-up copy of it at all times. You must at all times ensure that:</p>
                <ul>
                    <li>You have the rights required to submit, transmit or display Your Content, and to grant us the rights as set out in these Terms.</li>
                    <li>Your Content (and our use of Your Content in accordance with these Terms) does not infringe or violate the rights of any person or organisation or otherwise contravene any applicable laws or regulations.</li>
                </ul>
                <p>If you do not want to grant us the permission set out above on these Terms and those contained in the Privacy Policy, please do not submit or share your contribution and Your content on the site, the blog or any other area within the site. {{ env('APP_NAME_REF') }} also provides you with the ability to interact with us through social media services, such as through Facebook, Twitter and otherwise. These features may enable integration and/or access to your social media accounts. All content posted by you on such social media websites with regards to the site, our products of {{ env('APP_NAME_REF') }} shall be governed by these Terms. We do not control those social media services and you are encouraged to read all policies and information on the applicable social media services to learn more about how they handle your information before using any such features made available to you on the site. We are not responsible for any acts or omissions by any social media service provider or your use of features that come from their platform.</p>

                <h5>Notice:</h5>
                <p>We will deliver notices to you by means of e-mail to the address provided by you at the time of account registration or by a general notice on the site.</p>

                <h5>Miscellaneous:</h5>
                <p>These Terms are to be construed in accordance with the laws of England and Wales and irrespective of your place of domicile, in the event of any dispute associated with these Terms, that dispute shall be subject to the exclusive jurisdiction of the English Courts. Any claim you may have with respect to the use of the site (including but not limited to the purchase of our products) must be commenced within one (1) year from the date on which the cause of action for the claim arises. {{ env('APP_NAME_REF') }} failure to insist upon or enforce strict performance of any provision of these terms and conditions shall not be construed as a waiver of any provision or right. Neither the course of conduct between the parties nor trade practice shall act to modify any of these terms and conditions. {{ env('APP_NAME_REF') }} may assign its rights and duties under this Agreement to any third party at any time without notice to you. If any of these Terms or any provisions thereof are determined by any competent authority to be invalid, unlawful or unenforceable to any extent, such term, condition or provision will to that extent be severed from the remaining terms, conditions and provisions which will continue to be valid to the fullest extent permitted by law.</p>

                <h5>Use Of Site:</h5>
                <p>You must not misuse this site. Harassment in any manner or form on the site, including via e-mail, chat, tele-calling or by use of obscene or abusive language, is strictly forbidden. Impersonation of others, including a {{ env('APP_NAME_REF') }} or other licensed employee, host, or representative, as well as other members or visitors on the site is prohibited. You may not upload to, distribute, or otherwise publish through the site any content which is libellous, defamatory, obscene, threatening, invasive of privacy or publicity rights, abusive, illegal, technologically harmful or otherwise objectionable which may constitute or encourage a criminal offence, violate the rights of any party or which may otherwise give rise to liability or violate any law. You may not upload commercial content on the site or use the site to solicit others to join or become members of any other commercial online service or other organisation.</p>

                <h5>Participation Disclaimer:</h5>
                <p>We do not and cannot review all communications and materials posted to or created by the users accessing the site. We shall not, in any manner, be responsible for the content of these communications and materials. You acknowledge that by providing you with the ability to view and distribute user-generated content on the site, we are merely acting as a passive conduit for such distribution and is not undertaking any obligation or liability relating to any contents or activities on the site. However, we reserve the right to block or remove communications or materials that we determine to be</p>

                <ul>
                    <li>Abusive, defamatory, or obscene,</li>
                    <li>Fraudulent, deceptive, or misleading, in violation of a copyright, trademark or; other intellectual property right of another</li>
                    <li>Offensive or otherwise unacceptable to us, in our sole discretion.</li>
                </ul>
                <p>The material displayed on the site is provided without any guarantees, conditions or warranties as to its accuracy and effectiveness. Unless expressly stated to the contrary to the fullest extent permitted by law we and our suppliers, content providers and advertisers, if any, hereby expressly exclude all conditions, warranties and other terms which might otherwise be implied by statute, common law or the law of equity and shall not be liable for any damages whatsoever, including but without limitation to any direct, indirect, special, consequential, punitive or incidental damages, or damages for loss of use, profits, data or other intangibles, damage to goodwill or reputation, or the cost of procurement of substitute goods and services, arising out of or related to the use, inability to use, performance or failures of this site or any third party linked sites and any materials posted thereon, irrespective of whether such damages were foreseeable or not.</p>

                <h5>Indemnification:</h5>
                <p>You agree to indemnify, defend, and hold harmless {{ env('APP_NAME_REF') }}, its officers, directors, employees, agents, licensors and suppliers (collectively the "Service Providers") from and against all losses, expenses, damages and costs, including reasonable legal fees, resulting from your violation of any of these Terms conditions or any activity related to your account (including willful, negligent or wrongful conduct) by you or any other person accessing the site using your account.</p>

                <h5>Third-Party Links And Software:</h5>
                <p>In an attempt to provide increased value to our visitors, we may link or provide you with links within the site to sites operated by third parties. Even if the third party is affiliated with {{ env('APP_NAME_REF') }}, we do not have control over these linked sites, all of which have separate privacy and data collection practices, independent of {{ env('APP_NAME_REF') }}. You must comply with any additional terms and conditions applicable to any such Third Party Sites. We are not responsible for and we do not endorse, support or guarantee the lawfulness, accuracy or reliability of any content submitted to, transmitted or displayed by or linked by the site, including content provided by other users of the site or by our advertisers, if any. These linked sites are only for your convenience and therefore you access them at your own risk. Nonetheless, we seek to protect the integrity of our web site and the links placed upon it and therefore request any feedback on not only our own site but for sites, we link to as well (including if a specific link does not work).</p>
                <p>This section also applies to any software supplied by third parties (including but not limited to any software, plug-ins, tools, codecs, data and content within such software) incorporated within the site. Please note that we are not responsible for and we do not endorse, support or guarantee the quality, reliability or suitability of any such Third Party Software. Any reliance on or use of such Third Party Software is at your own risk. You must comply with any additional terms and conditions applicable to any such Third Party Software.  </p>

                <h5>Events Outside Our Control:</h5>
                <p>We will not be liable or responsible for any failure to perform or delay in performance of, any of our obligations under these Terms that is caused by events outside our reasonable control ("Force Majeure Event"). A Force Majeure Event includes any act, event, non-happening, omission or accident beyond our reasonable control and includes in particular (without limitation) Strikes, lock-outs or other industrial action, civil commotion, riot, invasion, terrorist attack or threat of terrorist attack, war (whether declared or not) or threat or preparation for war, fire, explosion, storm, flood, earthquake, subsidence, epidemic or other natural disaster or circumstances beyond our control, failure of the use of public or private telecommunications networks, the acts, decrees, legislation, regulations or restrictions of any government. Our performance under these Terms is deemed to be suspended for the period that the Force Majeure Event continues, and we will have an extension of time for performance for the duration of that period.</p>
                <p>We will use our reasonable endeavours to bring the Force Majeure Event to a close or to find a solution by which our obligations under these terms may be performed despite the Force Majeure Event. You acknowledge and agree that in no event will our partners or affiliate companies have any liability under these Terms.  </p>

                <h5>After Sales Services:</h5>
                <p>We may, in the future offer after-sales services to you. Our Customer Service Team may contact via email or telephone for any feedback you may have with respect to the products ordered by you and your experience with us.  They will also provide the opportunity for you to place further orders with us.  You can opt out of this at any time by contacting Customer Service Team on the customer service numbers listed on the site or by sending us an email to that effect on <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a>.</p>

                <p>If you have any concerns, questions, comments or complaints regarding any content on or any other aspects of the site, these Terms or our products, please contact us on any of the customer service numbers as listed on the site or by sending us an email addressing your concerns to Nutritionalplanet1@gmail.com and we will be happy to help you.</p>
            </div>
        </div>
    </div>
</section>

@endsection

{{--




    --}}
