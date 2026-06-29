<!-- <button onclick="topFunction()" id="myBtn" class=" scl-top-btn align-items-center justify-content-center "
	title="Go to top"> <img src="assets/images/up-arow.webp" alt=""> </button> -->

<!-- <div class="ftr-wa-sec d-none d-sm-block">
	<img src="assets/images/wa-click.webp" alt="" class="wa-click">
	<a href="https://wa.me/+917240012002?text=I would like to enquire about hair treatment " target="_Blank"
		class=" align-items-center justify-content-center d-flex ftr-wa f-btn"> <img
			src="assets/images/whats-up-icon.webp" alt=""> </a>
</div> -->



<!-- <div class="wa-btn-n-sec">
	<img src="assets/images/down-arrow.webp" alt="" class="wa-arow">
	<a href="javascript:void(0); " class="f-btn wa-btn-n  modal-link-wa">
		Support Helpline! <span> Click Here </span>
		<img src="assets/images/whats-up-icon.webp" alt="">
	</a>
</div> -->




<footer class="padng-sec">
    <div class="container-c">
        <div class="ftr-cnt">
            <a href="index.php" class="ftr-logo">
                <img src="assets/images/logo.webp" class="ftr-lgo-img" alt="">
            </a>
            <a href="privacy.php" target="_blank" class="ftr-link"> Privacy policy</a>
        </div>
    </div>
    <div class="copyright-c">
        <p>Copyright © 2026 <a href="index.php"> Precise Hospital </a>. All rights reserved.</p>
    </div>
</footer>

<div class="cnt-inf floting-call">
    <a href="javascript:void(0);" class="cnt-inf-a modal-link">
        <span class="cnt-inf-icon">
            <img src="assets/images/call-icon-w.webp" alt="" loading="lazy">
        </span>
        <h4>
            Call Now
        </h4>
    </a>
</div>

<div class="wa-btn-n-sec btn-grp">
	<a href="javascript:void(0);" class="f-btn footer-whats-app-btn modal-link-wa">
		<img src="assets/images/whats-up-icon.webp" alt="">
		<span>CHAT ON WHATSAPP <span class="brk"> Get expert advice instantly </span> </span>
	</a>
	<!-- <a href="javascript:void(0);" class="f-btn o-btn modal-link">
		<img src="assets/images/call-icon-w.webp" alt="">
		<span class="cnt-inf-text"> CALL NOW <span class="brk"> Speak to our gynec expert </span> </span>
	</a> -->
</div>

<script>
var ageBracketScore = <?= json_encode(ScoringConstants::AGE_BRACKET_SCORE); ?>;
var menstrualCycleLengthScore = <?= json_encode(ScoringConstants::MENSTRUAL_CYCLE_LENGTH_SCORE); ?>;
var previousPregnanciesScore = <?= json_encode(ScoringConstants::PREVIOUS_PREGNANCIES_SCORE); ?>;
var previousSurgeriesHistoryScore = <?= json_encode(ScoringConstants::PREVIOUS_SURGERIES_HISTORY_SCORE); ?>;
var sexualIntercourseFrequencyScore = <?= json_encode(ScoringConstants::SEXUAL_INTERCOURSE_FREQUENCY_SCORE); ?>;
var mothersAgeAtMenopauseScore = <?= json_encode(ScoringConstants::MOTHERS_AGE_AT_MENOPAUSE_SCORE); ?>;
var historyOfSexualTransmittedDiseasesScore =
    <?= json_encode(ScoringConstants::HISTORY_OF_SEXUAL_TRANSMITTED_DISEASES_SCORE); ?>;
var loadEnquiryModalPopup = <?= $loadEnquiryModalPopup ? 'true' : 'false'; ?>;

var campaignTypeValue = "<?= $campaigntype ?>";
var utm_campaign = "<?= $utm_campaign ?>";
var utm_term = "<?= $utm_term ?>";
var adName = "<?= $adName ?>";
var utm_matchtype = "<?= $utm_matchtype ?>";
var utm_adposition = "<?= $utm_adposition ?>";
var utm_devicemodel = "<?= $utm_devicemodel ?>";
var utm_content = "<?= $utm_content ?>";
var utm_location = "<?= $utm_location ?>";
</script>

<script src="assets/js/jquery.js"></script>
<!-- <script src="assets/js/bootstrap-5.js" defer ></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="assets/js/slick.js" defer></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/custom.js?v=6"></script>
<script src="assets/js/send_email.js?v=1"></script>
<script>
jQuery(document).ready(function($) {
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});
</script>
<script>
window.addEventListener('load', function() {
    jQuery('[href*="tel:"]').click(function() {
        gtag('event', 'conversion', {
            'send_to': 'AW-17014167992/6h7tCM28j8EaELiz_rA_'
        });
    });
})
</script>
<script>
window.addEventListener('load', function() {
    jQuery('[href*="wa.me"]').click(function() {
        gtag('event', 'conversion', {
            'send_to': 'AW-17014167992/JpvECInfncEaELiz_rA_'
        });
    });
});
</script>
</body>

</html>