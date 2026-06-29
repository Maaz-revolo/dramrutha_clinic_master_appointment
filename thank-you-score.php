<?php include 'inc/header.php';

$firstName = $_GET["firstName"] ?? '';
$lastName = $_GET["lastName"] ?? '';
$totalScore = $_GET["totalScore"] ?? '';
$scoreMsg = $_GET["scoreMsg"] ?? '';

?>
<section class="thankyou-sec">
	<div class="container-c">
		<div class="score-dtl padng-sec">
			<h5> Hello , <span> <?= $firstName . ' ' . $lastName ?></span> </h5>
			<p>your fertility score is</p>
			<div class="score-dtl-number">
				<h2> <span class="counter"> <?= $totalScore ?> </span> </h2>
			</div>
			<h4>Suggestion: <span class="score_msg"> <?= $scoreMsg ?></span> </h4>
			<p> Our team will reach out to you shortly. <span class="brk"> <b> Thank you. </b> </span> </p>
			<a href="index.php?campaigntype=<?= $campaigntype ?>&utm_campaign=<?= $utm_campaign ?>&utm_term=<?= $utm_term ?>&utm_adname=<?= $adName ?>&utm_matchtype=<?= $utm_matchtype ?>&utm_adposition=<?= $utm_adposition ?>&utm_devicemodel=<?= $utm_devicemodel ?>&utm_content=<?= $utm_content ?>&utm_location=<?= $utm_location ?>" class="f-btn"> Back to Home</a>
		</div>
	</div>
</section>

<!--header section end here-->

<div class="clearfix"></div>
<?php include 'inc/footer.php'; ?>