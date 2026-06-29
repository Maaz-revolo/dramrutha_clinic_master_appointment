<?php
include 'constant.php';
$loadEnquiryModalPopup = !isset($_COOKIE['enquiry_submitted']);

$campaigntype = $_GET["campaigntype"] ?? '';
$utm_campaign = $_GET["utm_campaign"] ?? '';
$utm_term = $_GET["utm_term"] ?? '';
$adName = $_GET["utm_adname"] ?? '';
$utm_matchtype = $_GET["utm_matchtype"] ?? '';
$utm_adposition = $_GET["utm_adposition"] ?? '';
$utm_devicemodel = $_GET["utm_devicemodel"] ?? '';
$utm_content = $_GET["utm_content"] ?? '';
$utm_location = $_GET["utm_location"] ?? '';

?>

<!DOCTYPE html>
<html>

<head>
		<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17014167992"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'AW-17014167992');
	</script>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />

	<meta property="og:url" content=" " />
	<meta property="og:title" content=" Precise Hospital " />
	<meta property="og:site_name" content=" Precise Hospital " />
	<meta property="og:description" content=" Precise Hospital in Hyderabad" />
	<meta property="og:type" content="landing-page" />
	<meta name="Keywords" content=" IVF, In Vitro Fertilization, fertility treatment, fertility clinic, infertility, assisted reproductive technology, pregnancy, IVF success, fertility specialist, reproductive health">

	<link rel="icon" type="image/webp" sizes="16x16" href="assets/images/favicon.webp">

	<title> Precise Hospital </title>

	<link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
	<link rel="stylesheet" href="assets/css/slick-theme.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
	<!-- <link href="assets/css/bootstrap-5.css" rel="stylesheet"> -->
	<link href="assets/css/thankyou.css" rel="stylesheet" type="text/css">
	<link href="assets/css/theme.min.css?v=2" rel="stylesheet" type="text/css" />
	<link href="assets/css/style-index.min.css?v=2" rel="stylesheet" type="text/css">
	<link href="assets/css/responsive.css?v=2" rel="stylesheet" type="text/css">
	<link href="assets/css/privacy.min.css?v=2" rel="stylesheet" type="text/css">
	<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "rnk42xzr2v");
</script>
	
</head>

<body>


	<header class="header_area">
		<div class="container-c">
			<nav>
				<a href="index.php?campaigntype=<?= $campaigntype ?>&utm_campaign=<?= $utm_campaign ?>&utm_term=<?= $utm_term ?>&utm_adname=<?= $adName ?>&utm_matchtype=<?= $utm_matchtype ?>&utm_adposition=<?= $utm_adposition ?>&utm_devicemodel=<?= $utm_devicemodel ?>&utm_content=<?= $utm_content ?>&utm_location=<?= $utm_location ?>" class="logo">
					<img src="assets/images/logo.webp" alt="">
				</a>
				<div class="btn-grp">
					<a href="javascript:void(0);" class="f-btn w-btn-c whats-btn modal-link-wa ">
						<img src="assets/images/whats-up-icon.webp" alt="">
                        <span>CHAT ON WHATSAPP <span class="brk"> Get expert advice instantly </span> </span>
					</a>

						<a href="javascript:void(0);" class="f-btn cnt-inf cnt-inf-a modal-link-auto">
							<!-- <span class="cnt-inf-icon">
								<img src="assets/images/call-icon-w.webp" alt="">
							</span> -->
                            <span class="cnt-inf-text"> Book Consultation
								<!-- <span class="brk"> Speak to our gynecology expert </span>  -->
							</span>
						</a>
				</div>
			</nav>
		</div>
	</header>
	<div id="custom-modal" class="custom-modal custom-modal-b custom-modal-score ">
		<div class="custom-modal-dialog">
			<div class="custom-modal-content">
				<span class="close-modal close-modal-x">&#x2715</span>
				<div class="custom-modal-body">
					<div class="modal-header-n">
						<h4>Get your fertility score with us</h4>
					</div>
					<div class="modal-body-n">
						<div class="form-body modal-input-n">
							<form action="javascript:void(0);" method="post" name="feedback-form">
								<input type="hidden" placeholder="Name" value="<?= MODAL_POPUP_APPOINTMENT ?>" id="modal_popup_appointment">
								<div class="input-grp">
									<div class="input-grp-single">
										<input type="text" id="modal_popup_appointment_first_name" name="fname" placeholder="First Name">
									</div>
									<div class="input-grp-single">
										<input type="text" id="modal_popup_appointment_last_name" name="lname" placeholder="Last Name">
									</div>
								</div>

								<div class="input-grp">
									<div class="input-grp-single">
										<input type="tel" id="modal_popup_appointment_mobile" name="tel" placeholder="Phone Number">
									</div>
									<div class="input-grp-single">
										<select name="" id="modal_popup_appointment_age_bracket">
											<option value=""> Age Bracket </option>
											<option value="16-25">16-25</option>
											<option value="25-29">25-29</option>
											<option value="30-34">30-34</option>
											<option value="35-37">35-37</option>
											<option value="38-40">38-40</option>
											<option value="41 or above">41 or above</option>
										</select>
									</div>
								</div>

								<div class="input-grp">

									<div class="input-grp-single">
										<select name="" id="modal_popup_appointment_menstrual_cycle_length">
											<option value=""> Menstrual Cycle Length </option>
											<option value="Regular, 27-34 days"> Regular, 27-34 days </option>
											<option value="Long, 35-40 days"> Long, 35-40 days </option>
											<option value="Short, 24-26 days or Irregular"> Short, 24-26 days or Irregular </option>
											<option value="Never or rarely">Never or rarely</option>
										</select>
									</div>
									<div class="input-grp-single">
										<select name="" id="modal_popup_appointment_previous_pregnancies">
											<option value=""> Previous Pregnancies </option>
											<option value="one or more live births"> one or more live births </option>
											<option value="one or more elective pregnancy terminations"> one or more elective pregnancy terminations </option>
											<option value="one or more miscarriages"> one or more miscarriages </option>
											<option value="Never tried"> Never tried </option>
											<option value="Have tried, not successful"> Have tried, not successful </option>
										</select>
									</div>
								</div>

								<div class="input-grp">

									<div class="input-grp-single">
										<select name="" id="modal_popup_appointment_previous_surgeries_history">
											<option value=""> Previous Pelvic Surgeries </option>
											<option value="No previous surgeries"> No previous surgeries </option>
											<option value="previous minor surgery on uterus"> previous minor surgery on uterus </option>
											<option value="previous major surgery on uterus,tubes"> previous major surgery on uterus,tubes </option>
											<option value="Removal of an ovary"> Removal of an ovary </option>
										</select>
									</div>
									<div class="input-grp-single">
										<select name="" id="modal_popup_appointment_sexual_intercourse_frequency">
											<option value=""> Sexual Intercourse Frequency </option>
											<option value="three or more times a week"> three or more times a week </option>
											<option value="one to two times a week"> one to two times a week </option>
											<option value="< once a week">
												< once a week </option>
											<option value="About once a month"> About once a month
											</option>
										</select>
									</div>
								</div>

								<div class="input-grp">

									<div class="input-grp-single">
										<select name="" id="modal_popup_appointment_mothers_age_at_menopause">
											<option value=""> Mothers age at menopause </option>
											<option value="50 years or older"> 50 years or older </option>
											<option value="45-50 years"> 45-50 years </option>
											<option value="40-44 years"> 40-44 years</option>
											<option value="less than 40 years"> less than 40 years </option>
										</select>
									</div>
									<div class="input-grp-single">
										<select name="" id="modal_popup_appointment_history_of_sexual_transmitted_diseases">
											<option value=""> History of sexual transmitted infections
											</option>
											<option value="No known prior"> No known prior </option>
											<option value="Positive for herpes, HPV or any other STD besides"> Positive for herpes, HPV or any other STD besides
											</option>
											<option value="gonorrhea or Chlamydia"> gonorrhea or Chlamydia </option>
											<option value="History of exposure to gonorrhea or Chlamydia"> History of exposure to gonorrhea or Chlamydia
											</option>
											<option value="History of pelvic inflammatory disease"> History of pelvic inflammatory disease </option>
										</select>
									</div>
								</div>



								<div class="modal-input-btn-n">
									<!-- <span>Free Consultation</span> -->
									<button id="modal_popup_appointment_btn" type="submit " name="submit" class="f-btn">
										<img src="assets/images/btn-aro.webp" alt="">
										Get Your Fertility Score
									</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


	<div id="custom-modal" class="custom-modal custom-modal-call">
		<div class="custom-modal-dialog">
			<div class="custom-modal-content">
				<span class="close-modal close-modal-x">&#x2715</span>
				<div class="custom-modal-body">
					<div class="custom-modal-inner">
						<h3 class="modal-title">One Final Step </h3>
						<div class="call-modal-vec">
							<div class="loading-dots">
								<span class="dot one">.</span>
								<span class="dot two">.</span>
								<span class="dot three">.</span>
								<span class="dot one">.</span>
								<span class="dot two">.</span>
								<span class="dot three">.</span>
								<span class="dot one">.</span>
								<span class="dot two">.</span>
								<span class="dot three">.</span>
								<span class="dot one">.</span>
								<span class="dot two">.</span>
								<span class="dot three">.</span>
							</div>
							<div class="call-modal-vec-img">
								<img src="assets/images/call-modal.webp" alt="">
							</div>
						</div>
						<div class="call-modal-input">
							<div class="call-modal-input-single">
								<!-- <h6>+91</h6> -->
								<input type="tel" placeholder="Enter Mobile Number to Call" id="f_call_mobile">
							</div>
							<button href="tel:098497 92111" class="f-btn" id="f_call_btn" data-for=<?= FINAL_CALL_FORM ?>>
								<img src="assets/images/call-icon.webp" alt="">
								<span> Call Now </span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div id="custom-modal" class="custom-modal-wa custom-modal">
		<div class="custom-modal-dialog">
			<div class="custom-modal-content">
				<span class="close-modal close-modal-x">&#x2715</span>
				<div class="custom-modal-body">
					<div class="custom-modal-inner">
						<h3 class="modal-title">One Final Step </h3>
						<div class="call-modal-vec">
							<div class="loading-dots">
								<span class="dot one">.</span>
								<span class="dot two">.</span>
								<span class="dot three">.</span>
								<span class="dot one">.</span>
								<span class="dot two">.</span>
								<span class="dot three">.</span>
								<span class="dot one">.</span>
								<span class="dot two">.</span>
								<span class="dot three">.</span>
								<span class="dot one">.</span>
								<span class="dot two">.</span>
								<span class="dot three">.</span>
							</div>
							<div class="call-modal-vec-img">
								<img src="assets/images/whats-up-icon.webp" alt="">
							</div>
						</div>
						<div class="call-modal-input">
							<div class="call-modal-input-single">
								<!-- <h6>+91</h6> -->
								<input type="tel" placeholder=" Enter Mobile Number to Chat " id="f_wa_mobile">
							</div>
							<button href="https://wa.me/+919849792111?text=I would like to enquire about Laparoscopy treatment " target="_Blank" class="f-btn" id="f_wa_btn" data-for=<?= FINAL_WA_FORM ?>>
								<img src="assets/images/whats-up-icon.webp" alt="">
								<span> Chat on whatsapp </span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div id="custom-modal" class="custom-modal-score-dtl custom-modal">
		<div class="custom-modal-dialog">
			<div class="custom-modal-content">
				<span class="close-modal close-modal-x">&#x2715</span>
				<div class="custom-modal-body">
					<div class="score-dtl">
						<h5> Hello , <span> Johon Doe</span> </h5>
						<p>your fertility score is</p>
						<div class="score-dtl-number">
							<h2> <span class="counter"> 45 </span> </h2>
						</div>
						<h6>Suggestion: <span class="score_msg"> Very Fertile </span> </h6>
						<p> Our team will reach out to you shortly. <span class="brk"> <b> Thank you. </b> </span> </p>
					</div>
				</div>
			</div>
		</div>

	</div>


	<div id="custom-modal-auto" class="custom-modal custom-modal-auto custom-modal-b">
		<div class="custom-modal-dialog">
			<div class="custom-modal-content">
				<span class="close-modal-auto close-modal">&#x2715</span>
				<div class="custom-modal-body">
					<div class="modal-header-n">
						<h4>Make Your Appointment</h4>
					</div>
					<div class="modal-body-n">
						<div class="form-body modal-input-n">
							<form action="javascript:void(0);" method="post" name="feedback-form">
								<input type="hidden" placeholder="Full Name" value="<?= SIMPLE_MODAL_POPUP_APPOINTMENT ?>" id="simple_modal_popup_appointment">
								<div class="input-grp">
									<div class="input-grp-single">
										<input type="text" id="simple_modal_popup_appointment_name" name="fname" placeholder="Full Name*">
									</div>
									
								</div>

								<div class="input-grp">
									<div class="input-grp-single">
										<input type="tel" id="simple_modal_popup_appointment_mobile" name="tel" placeholder="Phone No.*">
									</div>
									<div class="input-grp-single">
										<input type="email" id="simple_modal_popup_appointment_email" name="email" placeholder="Email ID">
									</div>
									<!-- <div class="input-grp-single">
										<select name="" id="simple_modal_popup_appointment_treatment_reason">
											<option value=""> Why do you need laparoscopy?*</option>
											<option value="Infertility diagnosis"> Infertility diagnosis </option>
											<option value="Endometriosis treatment"> Endometriosis treatment </option>
											<option value="Fibroids/cysts removal"> Fibroids/cysts removal </option>
											<option value="Pelvic pain evaluation"> Pelvic pain evaluation </option>
											<option value="Other issue (need advice)"> Other issue (need advice) </option>
											<option value="Just exploring"> Just exploring </option>
										</select>
									</div> -->
								</div>

								<h5 style="margin-bottom:5px;" >Preferred consultation date</h5>							

								<div class="input-grp">		
									<div class="input-grp-single datepicker-input-c">
										<!-- <input type="date" placeholder="Preferred consultation date" class="mob-date-picker"
											id="_appointment_date"> -->
											<input type="text" id="simple_modal_popup_appointment_date" placeholder="">
										<img src="assets/images/calendar.webp" alt="" class="date-icon-c">
									</div>
								</div>

								<!-- <div class="input-grp">
									<div class="input-grp-single">
										<select name="" id="simple_modal_popup_appointment_treatment_advised">
											<option value=""> Has a doctor advised laparoscopy? </option>
											<option value="Yes, ready to proceed"> Yes, ready to proceed </option>
											<option value="Yes, want second opinion"> Yes, want second opinion </option>
											<option value="Not yet, but suspect"> Not yet, but suspect </option>
										</select>
									</div>
								</div>

								<div class="input-grp">
									<div class="input-grp-single">
										<select name="" id="simple_modal_popup_appointment_treatment_start">
											<option value=""> When urgently do you want the procedure?*</option>
											<option value="Immediately / Within 1 week"> Immediately / Within 1 week </option>
											<option value="Within 1 month"> Within 1 month </option>
											<option value="In 1-3 months"> In 1-3 months </option>
											<option value="After 3 months"> After 3 months </option>
										</select>
									</div>
								</div> -->
								

								<!-- <div class="input-grp">
									<textarea id="simple_modal_popup_appointment_message" name="message" placeholder="Your comment here ..."></textarea>
								</div> -->

								<div class="modal-input-btn-n">
									<!-- <span>Free Consultation</span> -->
									<button id="simple_modal_popup_appointment_btn" type="submit " name="submit" class="f-btn">
										<img src="assets/images/btn-aro.webp" alt="">
										Book a Consultation
									</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


	<div id="customModal" class="modal">
  <div class="modal-content">
    <span class="close" id="closeModal">&times;</span>
    <h4>Select a Date</h4>
    <input type="text" id="datepicker" readonly placeholder="Choose a date">
  </div>
</div>