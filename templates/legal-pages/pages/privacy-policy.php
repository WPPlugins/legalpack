<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

Last updated: [legalpack last_updated_date]

<?php echo esc_html($website_name); ?> ("us", "we", or "our") operates the <?php echo esc_html($website_url); ?> website (the "Service").

This page informs you of our policies regarding the collection, use and disclosure of Personal Information when you use our Service.

We will not use or share your information with anyone except as described in this Privacy Policy.

We use your Personal Information for providing and improving the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible at <?php echo esc_html($website_url); ?>

<h2>Information Collection And Use</h2>

While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you. Personally identifiable information ("Personal Information") may include, but is not limited to:

<ul>
<?php if(in_array('name', $kind_personal_information)) { ?><li>Name</li><?php } ?>
<?php if(in_array('telephone', $kind_personal_information)) { ?><li>Telephone number</li><?php } ?>
<?php if(in_array('address', $kind_personal_information)) { ?><li>Address</li><?php } ?>
</ul>

<h2>Log Data</h2>

We collect information that your browser sends whenever you visit our Service ("Log Data"). This Log Data may include information such as your computer's Internet Protocol ("IP") address, browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages and other statistics.

<?php if($show_ads_google_adsense == 'Yes') { ?>
<h2>Google AdSense &amp; DoubleClick Cookie</h2>

Google, as a third party vendor, uses cookies to serve ads on our Service.
<?php } ?>

<h2>Cookies</h2>

Cookies are files with small amount of data, which may include an anonymous unique identifier. Cookies are sent to your browser from a web site and stored on your computer's hard drive.

We use "cookies" to collect information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.

<?php if($use_remarketing == 'Yes') { ?>
<h2>Behavioral Remarketing</h2>

<?php echo esc_html($website_name); ?> uses remarketing services to advertise on third party web sites to you after you visited our Service. We, and our third party vendors, use cookies to inform, optimize and serve ads based on your past visits to our Service.
    
<?php } ?>

<h2>Service Providers</h2>

We may employ third party companies and individuals to facilitate our Service, to provide the Service on our behalf, to perform Service-related services or to assist us in analyzing how our Service is used.

These third parties have access to your Personal Information only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.

<h2>Security</h2>

The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.

<h2>Links To Other Sites</h2>

Our Service may contain links to other sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.

We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party sites or services.

<h2>Children's Privacy</h2>

Our Service does not address anyone under the age of 13 ("Children").

We do not knowingly collect personally identifiable information from children under 13. If you are a parent or guardian and you are aware that your Children has provided us with Personal Information, please contact us. If we discover that a Children under 13 has provided us with Personal Information, we will delete such information from our servers immediately.

<?php if($disclose_personal_information_law == 'Yes') { ?>
<h2>Compliance With Laws</h2>

We will disclose your Personal Information where required to do so by law or subpoena.
<?php } ?>

<h2>Changes To This Privacy Policy</h2>

We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.

You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.

<h2>Contact Us</h2>

If you have any questions about this Privacy Policy, please contact us.