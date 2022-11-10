@extends('layouts.app')

@section('title', 'Privacy Policy')

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
        <h2>Privacy POLICY</h2>
    </div>
</section>

<section class="bread-cumb">
    <div class="container text-center">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><span>Privacy Policy</span></li>
        </ul>
    </div>
</section>

<section class="pt30 single-post-page">
    <div class="container">
        <div class="single-blog-post">

            <div class="content">
                <p>This is the privacy notice of {{ env('APP_NAME_REF') }}.We are company number 14267665 registered in England & Wales.In this document, “we”, “our”, or “us” refer to {{ env('APP_NAME_REF') }}. Our registered office is at {{ env('ADDRESS') }}</p>
                <br>
                <h4>Introduction</h4>
                <p>This privacy notice aims to inform you about how we collect and process any information that we collect from you, or that you provide to us. It covers information that could identify you (“personal information”) and information that could not. In the context of the law and this notice, “process” means collect, store, transfer, use or otherwise act on information. It tells you about your privacy rights and how the law protects you. We are committed to protecting your privacy and the confidentiality of your personal information. Our policy is not just an exercise in complying with the law, but a continuation of our respect for you and your personal information. We undertake to preserve the confidentiality of all information you provide to us, and hope that you reciprocate. Our policy complies with UK law accordingly implemented, including that required by the EU General Data Protection Regulation (GDPR).</p>
                <p>The law requires us to tell you about your rights and our obligations to you in regards to the processing and control of your personal data. We do this now, by requesting that you read the information provided at <a href="http://www.knowyourprivacyrights.org">http://www.knowyourprivacyrights.org</a>  Except as set out below, we do not share, or sell, or disclose to a third party, any information collected through our website</p>
                <br>
                <ol style="margin: 0; padding: 0; list-style: none;">
                    <li>
                        <h5>1. Data we process</h5>
                        <p>We may collect, use, store and transfer different kinds of personal data about you. We have collated these into groups as follows:</p>
                        <ul>
                            <li>Your identity includes information such as first name, last name, title, date of birth, and other identifiers that you may have provided at some time.</li>
                            <li>Your contact information may include information such as billing address, delivery address, email address, telephone numbers and any other information you have given to us for the purpose of communication.</li>
                        </ul>
                        <p>We do not store your financial data such as your bank account and payment card details. Transaction data includes details about payments or communications to and from you and information about the products and services you have purchased from us. Technical data includes your internet protocol (IP) address, browser type and version, time zone setting and location, browser plug-in types andYour contact information may include information such as billing address, delivery address, email address, telephone numbers and any other information you have given to us for the purpose of communication. versions, operating system and platform and other technology on the devices you use to access this website. For website users, your profile includes information such as your username and password, purchases or orders made by you, your interests, preferences, feedback and survey responses. Marketing data includes your preferences in receiving marketing from us; communication preferences; responses and actions in relation to your use of our services. We may aggregate anonymous data such as statistical or demographic data for any purpose. Anonymous data is data that does not identify you as an individual. Aggregated data may be derived from your personal data but is not considered personal information in law because it does not reveal your identity. For example, we may aggregate profile data to assess interest in a product or service. However, if we combine or connect aggregated data with your personal information so that it can identify you in any way, we treat the combined data as personal information and it will be used in accordance with this privacy notice.</p>
                    </li>
                    <li>
                        <h5>2. Special Personal Information</h5>
                        <p>Special personal information is data about your race or ethnicity, religious or philosophical beliefs, sex life, sexual orientation, political opinions, trade union membership, information about your health and genetic and biometric data. It also includes information about criminal convictions and offences. We do not collect any special personal information about you.</p>
                        <p>If you do not provide personal informSpecial personal information is data about your race or ethnicity, religious or philosophical beliefs, sex life, sexual orientation, political opinions, trade union membership, information about your health and genetic and biometric data. It also includes information about criminal convictions and offences. We do not collect any special personal information about you.ation we need where we need to collect personal data by law, or under the terms of a contract we have with you, and you fail to provide that data when requested, we may not be able to perform that contract. In that case, we may have to stop providing a service to you. If so, we will notify you of this at the time.</p>
                    </li>
                    <li>
                        <h5>3. The Bases On Which We Process Information About You</h5>
                        <p>The law requires us to determine under which of six defined bases we process different categories of your personal information and to notify you of the basis for each category. If a basis on which we process your personal information is no longer relevant then we shall immediately stop processing your data. If the basis changes then if required by law we shall notify you of the change and of any new basis under which we have determined that we can continue to process your information.</p>
                    </li>
                    <li>
                        <h5>4. Information We Process Because We Have A Contractual Obligation With You</h5>
                        <p>The law requires us to determine under which of six defined bases we process different categories of your personal information and to notify you of the basis for each category. If a basis on which we process your personal information is no longer relevant then we shall immediately stop processing your data. If the basis changes then if required by law we shall notify you of the change and of any new basis under which we have determined that we can continue to process your information.</p>
                        <p>When you create an account on our website, buy a product or service from us either online or over the telephone, or otherwise agree to our terms and conditions, a contract is formed between you and us.</p>
                        <p>In order to carry out our obligations under that contract we must process the information you give us. Some of this information may be personal information.</p>
                        <p>We may use it in order to:</p>
                        <ul>
                            <li>Verify your identity for security purposes.</li>
                            <li>Sell products to you.</li>
                            <li>Provide you with our services.</li>
                            <li>Provide you with suggestions and advice on products, services and how to obtain the most from shopping with {{ env('APP_NAME_REF') }}.</li>
                        </ul>
                        <p>We process this information on the basis there is a contract between us, or that you have requested we use the information before we enter into a legal contract. We shall continue to process this information until the contract between us ends or is terminated by either party under the terms of the contract.</p>
                    </li>
                    <li>
                        <h5>5. Information We Process With Your Consent</h5>
                        <p>Through certain actions when otherwise there is no contractual relationship between us, such as when you browse our website, receive marketing calls from us or ask us to provide you more information about our business, including job opportunities, our products and services, you provide your consent to us to process information that may be personal information. Wherever possible, we aim to obtain your explicit consent to process this information, for example, by asking you to agree to our use of cookies or gaining verbal consent from you whenever we speak with you. If you have given us explicit permission to do so, we may from time to time pass your name and contact information to selected associates whom we consider may provide services or products you would find useful. We continue to process your information on this basis until you withdraw your consent or it can be reasonably assumed that your consent no longer exists. You may withdraw your consent at any time by instructing us via email to Nutritionalplanet1@gmail.com. However, if you do so, you may not be able to use our website or speak with our team or use our services further.</p>
                    </li>
                    <li>
                        <h5>6. Information we process for the purposes of legitimate interests</h5>
                        <p>Through certain actions when otherwise there is no contractual relationship between us, such as when you browse our website, receive marketing calls from us or ask us to provide you more information about our business, including job opportunities, our products and services, you provide your consent to us to process information that may be personal information. Wherever possible, we aim to obtain your explicit consent to process this information, for example, by asking you to agree to our use of cookies or gaining verbal consent from you whenever we speak with you. If you have given us explicit permission to do so, we may from time to time pass your name and contact information to selected associates whom we consider may provide services or products you would find useful. We continue to process your information on this basis until you withdraw your consent or it can be reasonably assumed that your consent no longer exists. You may withdraw your consent at any time by instructing us via email to Nutritionalplanet1@gmail.com. However, if you do so, you may not be able to use our website or speak with our team or use our services further.</p>
                        <p>We may process information on the basis there is a legitimate interest, either to you or to us, of doing so. Where we process your information on this basis, we do so after having given careful consideration to:</p>
                        <ul>
                            <li>Whether the same objective could be achieved through other means.</li>
                            <li>Whether processing (or not processing) might cause you harm.</li>
                            <li>Whether you would expect us to process your data, and whether you would, in the round, consider it reasonable to do so.</li>
                        </ul>
                        <p>For example, we may process your data on this basis for the purposes of:</p>
                        <ul>
                            <li>Record-keeping for the proper and necessary administration of our business.</li>
                            <li>Responding to unsolicited communication from you to which we believe you would expect a response.</li>
                            <li>Protecting and asserting the legal rights of any party.</li>
                            <li>Providing direct marketing via the telephone in response to data purchased from reputable, the UK based Data Providers.</li>
                            <li>Insuring against or obtaining professional advice that is required to manage business risk.</li>
                            <li>Protecting your interests where we believe we have a duty to do so.</li>
                        </ul>
                    </li>
                    <li>
                        <h5>7. Information We Process Because We Have A Legal Obligation</h5>
                        <p>Sometimes, we must process your information in order to comply with a statutory obligation. For example, we may be required to give information to legal authorities if they so request or if they have the proper authorisation such as a search warrant or court order. This may include your personal information.</p>
                    </li>
                </ol>

                <br>
                <h4>Specific Uses Of Information You Provide To Us</h4>
                <br>

                <ol style="margin: 0; padding: 0; list-style: none;">
                    <li>
                        <h5>8. Information Provided On The Understanding That It Will Be Shared With A Third Party</h5>
                        <p>Our website allows you to post information in the form of product reviews with a view to that information being read, copied, downloaded, or used by other people. In posting personal information, it is up to you to satisfy yourself about the privacy level of every person who might use it. We do not specifically use this information except to allow it to be displayed. We do store it, and we reserve a right to use it in the future in any way we decide. Once your information enters the public domain, we have no control over what any individual third party may do with it. We accept no responsibility for their actions at any time. Provided your request is reasonable and there is no legal basis for us to retain it, then at our discretion we may agree to your request to delete personal information that you have posted. You can make a request by contacting us at <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a>.</p>
                    </li>
                    <li>
                        <h5>9. Complaints Regarding Content On Our Website</h5>
                        <p>Our website is a publishing medium. Anyone may register and then publish reviews on products which will then display the users' name, the rating they provided and the review left. To comply with UK regulations in regards to health claims on food products we will attempt to moderate any review to ensure that health claims are not made. Whilst we attempt to moderate user-generated content regularly, we are not always able to do so as soon as that content is published. If you complain about any of the content on our website, we shall investigate your complaint. If we feel it is justified or if we believe the law requires us to do so, we shall remove the content while we investigate. Free speech is a fundamental right, so we have to make a judgment as to whose right will be obstructed: yours, or that of the person who posted the content that offends you. If we think your complaint is vexatious or without any basis, we shall not correspond with you about it.</p>
                    </li>
                    <li>
                        <h5>10. Information Relating To Your Method Of Payment</h5>
                        <p>Payment information is never stored by us. If you place an order over the telephone and provide card details then those details are only ever entered into our order processing system and never stored. Our employees and contractors never have access to it after entry. At the point of payment online, we transfer your payment details to through a secure transaction.</p>
                    </li>
                    <li>
                        <h5>11. Job Application And Employment</h5>
                        <p>If you send us information in connection with a job application, we may keep it for up to three years in case we decide to contact you at a later date. If we employ you, we collect information about you and your work from time to time throughout the period of your employment. This information will be used only for purposes directly relevant to your employment. After your employment has ended, we will keep your file for six years before destroying or deleting it.</p>
                    </li>
                    <li>
                        <h5>12. Communicating With Us</h5>
                        <p>When you contact us, whether by telephone, through our website or by e-mail, we collect the data you have given to us in order to reply with the information you need. We record your request and our reply in order to increase the efficiency of our organisation. We keep personally identifiable information associated with your messages, such as your name and email address so as to be able to track our communications with you to provide a high-quality service.</p>
                    </li>
                    <li>
                        <h5>13. Complaining</h5>
                        <p>When we receive a complaint, we record all the information you have given to us. We use that information to resolve your complaint. If your complaint reasonably requires us to contact some other person, we may decide to give to that other person some of the information contained in your complaint. We do this as infrequently as possible, but it is a matter for our sole discretion as to whether we do give information, and if we do, what that information is. If you are lodging a complaint on behalf of another person then we will not be able to provide you with any personal information unless we can gain consent from the person you are enquiring about. This can take the form of a Lasting Power of Attorney or a signed letter to grant consent to share their personal information with you. This is to protect all parties. We may also compile statistics showing information obtained from this source to assess the level of service we provide, but not in a way that could identify you or any other person.</p>
                    </li>
                    <li>
                        <h5>14. Affiliate And Business Partner Information</h5>
                        <p>This is information given to us by you in your capacity as an affiliate of us or as a business partner. It allows us to recognise visitors that you have referred to us, and to credit to your commission due for such referrals. It also includes information that allows us to transfer the commission to you. The information is not used for any other purpose. We undertake to preserve the confidentiality of the information and of the terms of our relationship. We expect any affiliate or partner to agree to reciprocate this policy.</p>
                    </li>
                </ol>

                <br>
                <h4>Use Of Information We Collect Through Automated Systems When You Visit Our Website</h4>
                <br>
                <ol style="margin: 0; padding: 0; list-style: none;">
                    <li>
                        <h5>15. Cookies</h5>
                        <p>Cookies are small text files that are placed on your computer''s hard drive by your web browser when you visit any website. They allow information gathered on one web page to be stored until it is needed for use on another, allowing a website to provide you with a personalised experience and the website owner with statistics about how you use the website so that it can be improved. Some cookies may last for a defined period of time, such as one day or until you close your browser. Others last indefinitely. Your web browser should allow you to delete any you choose. It also should allow you to prevent or limit their use. Our website uses cookies. They are placed by software that operates on our servers, and by software operated by third parties whose services we use. When you first visit our website, we ask you whether you wish us to use cookies. If you choose not to accept them, we shall not use them for your visit except to record that you have not consented to their use for any other purpose. If you choose not to use cookies or you prevent their use through your browser settings, you will not be able to use all the functionality of our website. We use cookies in the following ways:</p>
                        <ul>
                            <li>To track how you use our website.</li>
                            <li>To record whether you have seen specific messages we display on our website.</li>
                            <li>To keep you signed in our site.</li>
                            <li>To record your answers to surveys and questionnaires on our site while you complete them.</li>
                            <li>To record the conversation thread during a live chat with our support team.</li>
                        </ul>
                    </li>
                    <li>
                        <h5>16. Personal Identifiers From Your Browsing Activity</h5>
                        <p>Requests by your web browser to our servers for web pages and other content on our website are recorded. We record information such as your geographical location, your Internet service provider and your IP address. We also record information about the software you are using to browse our websites, such as the type of computer or device and the screen resolution. We use this information in aggregate to assess the popularity of the webpages on our website and how we perform in providing content to you. If combined with other information we know about you from previous visits, the data possibly could be used to identify you personally, even if you are not signed in to our website.</p>
                    </li>
                    <li>
                        <h5>17. Our Use Of Re-marketing</h5>
                        <p>Re-marketing involves placing a cookie on your computer when you browse our website in order to be able to serve to you an advert for our products or services when you visit some other website. We may use a third party to provide us with re-marketing services from time to time. If so, then if you have consented to our use of cookies, you may see advertisements for our products and services on other websites.</p>
                    </li>
                </ol>

                <br>
                <h4>Disclosure And Sharing Of Your Information</h4>
                <br>

                <ol style="margin: 0; padding: 0; list-style: none;">
                    <li>
                        <h5>18. Information We Obtain From Third Parties</h5>
                        <p>Although we do not disclose your personal information to any third party (except as set out in this notice), we sometimes receive data that is indirectly made up from your personal information from third parties whose services we use. We regularly purchase data from reputable, UK based data aggregators for the purpose of direct marketing. Our brief with them is very strict in that they must provide us with GDPR compliant data with any and all required consent for us to contact. Any telephone numbers are screened against TPS before the data is delivered to us. If you want to find out who obtained your data please contact our Data supplier.</p>
                    </li>
                    <li>
                        <h5>19. Data May Be Processed Outside The European Union</h5>
                        <p>Our websites are hosted on Shopify. We may also use outsource services in countries outside the European Union from time to time in other aspects of our business. Accordingly, data obtained within the UK or any other country could be processed outside the European Union. For example, our operations centre which provides all our customer care is based in Mumbai, India. We use the following safeguards with respect to data transferred outside the European Union.</p>
                        <p>The data protection clauses in our contracts with our data processors include transfer clauses written by or approved by a supervisory authority in the European Union.</p>
                    </li>
                </ol>

                <br>
                <h4>Control Over Your Own Information</h4>
                <br>

                <ol style="margin: 0; padding: 0; list-style: none;">
                    <li>
                        <h5>20. Your Duty To Inform Us Of Changes</h5>
                        <p>It is important that the personal data we hold about you is accurate and current. Please keep us informed if your personal data changes.</p>
                    </li>
                    <li>
                        <h5>21. Access To Your Personal Information</h5>
                        <p>At any time you may review or update personally identifiable information that we hold about you, by signing in to your account on our website or contacting us on Nutritionalplanet1@gmail.com.To obtain a copy of any information that is not provided on our website you should contact us to make that request. After receiving the request, we will tell you when we expect to provide you with the information, and whether we require any fee for providing it to you.</p>
                    </li>
                    <li>
                        <h5>22. Removal Of Your Information</h5>
                        <p>If you are a website only user and wish us to remove personally identifiable information then please log in to your account and in the orders tab, you will see a section that you can use to identify all the information we hold on you and request deletion This may limit the service we can provide to you.</p>
                    </li>
                    <li>
                        <h5>23. Verification Of Your Information</h5>
                        <p>When we receive any request to access, edit or delete personally identifiable information we shall first take reasonable steps to verify your identity before granting you access or otherwise taking any action. This is important to safeguard your information.</p>
                    </li>
                </ol>

                <br>
                <h4>Other Matters</h4>
                <br>

                <ol style="margin: 0; padding: 0; list-style: none;">
                    <li>
                        <h5>24.Use Of Site By Children</h5>
                        <p>We do not sell products or provide services for purchase by children, nor do we market to children. If you are under 18, you may use our website only with consent from a parent or guardian. We collect data about all users of and visitors to these areas regardless of age, and we anticipate that a small percentage of those users and visitors may be children.</p>
                    </li>
                    <li>
                        <h5>25. Encryption Of Data Sent Between Us</h5>
                        <p>We use Secure Sockets Layer (SSL) certificates to verify our identity to your browser and to encrypt any data you give us. Whenever information is transferred between us, you can check that it is done so using SSL by looking for a closed padlock symbol or other trust marks in your browser’s URL bar or toolbar.</p>
                    </li>
                    <li>
                        <h5>26. How You Can Complain</h5>
                        <p>If you are not happy with our privacy policy or if you have any complaint then you should tell us by emailing Nutritionalplanet1@gmail.com. If a dispute is not settled then we hope you will agree to attempt to resolve it by engaging in good faith with us in a process of mediation or arbitration. If you are in any way dissatisfied about how we process your personal information, you have a right to lodge a complaint with the Information Commissioner's Office (ICO). This can be done at <a href="https://ico.org.uk/make-a-complaint">https://ico.org.uk/make-a-complaint</a>. We would, however, appreciate the opportunity to talk to you about your concern and rectify it before you approach the ICO.</p>
                    </li>
                    <li>
                        <h5>27. Retention Period For Personal Data</h5>
                        <p>Except as otherwise mentioned in this privacy notice, we keep your personal information only for as long as required by us:</p>
                        <ul>
                            <li>To provide you with the services you have requested.</li>
                            <li>To comply with other law, including for the period demanded by our tax authorities.</li>
                            <li>To support a claim or defence in court.</li>
                        </ul>
                    </li>
                    <li>
                        <h5>28. Compliance With The Law</h5>
                        <p>Our privacy policy has been compiled so as to comply with the law of every country or legal jurisdiction in which we aim to do business. If you think it fails to satisfy the law of your jurisdiction, we would like to hear from you. However, ultimately it is your choice as to whether you wish to work with {{ env('APP_NAME_REF') }}.</p>
                    </li>
                    <li>
                        <h5>29. Review Of This Privacy Policy</h5>
                        <p>We may update this privacy notice from time to time as necessary. The terms that apply to you are those posted here on our website on the day you use our website. We advise you to print a copy for your records. If you have any question regarding our privacy policy, please contact us.</p>
                    </li>
                </ol>

                <p>Copyright © 2022 Nutritional planet Limited are a UK based Company, Registration number: 14267665. Registered Office: Nutritional planet Limited, {{ env('ADDRESS') }}</p>
            </div>
        </div>
    </div>
</section>

@endsection
{{--






 --}}
