<?php include 'inc/header.php'; ?>

<section class="banner-hone " id="bnr-sec">
	<picture class="bannr-back">
		<source media="(min-width:1500px)" srcset="assets/images/banner-back-1920.webp">
		<source media="(min-width:600px)" srcset="assets/images/banner-back-1400.webp">
		<img src="assets/images/banner-back.webp" alt="">
	</picture>
	<div class="container-c">
		<div class="banner-content">
			<div class="banner-content-img">
				<picture class="banner-main-img">
					<source media="(min-width:1200px)" srcset="assets/images/banner-main-img-1200.webp">
					<source media="(min-width:600px)" srcset="assets/images/banner-main-img.webp">
					<img src="assets/images/banner-main-img.webp" alt="">
				</picture>
				<picture class="banner-round-img">
					<source media="(min-width:1200px)" srcset="assets/images/banner-main-img.png">
					<img src="assets/images/banner-main-img.png" alt="">
				</picture>
				<!-- <ul class="baner-feature">
					<li>
						<h6>
							<img src="assets/images/bnr-ftr-1.webp" alt="">
							<span> Proven Track Record</span>
						</h6>
					</li>
					<li>
						<h6>
							<img src="assets/images/bnr-ftr-2.webp" alt="">
							<span> Advanced Techniques </span>
						</h6>
					</li>
					<li>
						<h6>
							<img src="assets/images/bnr-ftr-3.webp" alt="">
							<span> Compassionate Care </span>
						</h6>
					</li>
				</ul> -->

				<!-- <form action="javascript:void(0);" method="post" name="feedback-form" class="banner-input-from">
					<div class="banner-input quick-appoinment-all-inputs">
						<h3>Surgery Cost Calculator</h3>
						<input type="hidden" placeholder="Name" value="<?= QUICK_APPOINTMENT ?>" id="quick_appointment">

						<div class="quick-appoinment-all-inputs-grp">
							<div class="quick-appoinment-all-inputs-single">
								<input type="text" placeholder="Name" id="quick_appointment_name">
							</div>

							<div class="quick-appoinment-all-inputs-single">
								<input type="text" placeholder="Mobile No." id="quick_appointment_mobile">
							</div>
						</div>
						<button name="submit" class=" f-btn" id="quick_appointment_btn">
							<img src="assets/images/btn-aro.webp" alt="">
							Request Callback
						</button>

					</div>
				</form> -->
			</div>
			<div class="banner-content-text">
				<h1>
					The Best Gynecology Laparoscopy Center in Hyderabad
				</h1>
				<p>
					At Precise Hospital, we combine cutting edge technology with expert surgical care to deliver
					minimally invasive laparoscopy for faster healing, less pain, and superior precision.
					<!-- At Precise Hospital, we are proud to be one of the <b>leading gynecology surgery centers in Hyderabad</b>. We offer advanced laparoscopic treatments using the latest technology for safer, quicker, and more precise care. -->
				</p>
				<ul class="bnr-usp">
					<li>
						<img src="assets/images/bnr-usp-tick.webp" alt="">
						<b> Laparoscopic Gynecologic Surgery : </b> Minimally invasive treatment for fibroids, ovarian
						cysts, endometriosis and more ensuring quicker recovery and minimal discomfort.
					</li>
					<li>
						<img src="assets/images/bnr-usp-tick.webp" alt="">
						<b> Advanced Diagnostic Laparoscopy : </b> High precision exams to pinpoint and address
						reproductive health issues with accuracy.
					</li>
					<li>
						<img src="assets/images/bnr-usp-tick.webp" alt="">
						<b> Fertility Enhancing Procedures : </b> Specialized laparoscopic techniques for infertility
						factors like blocked fallopian tubes or uterine adhesions.
					</li>
					<li>
						<img src="assets/images/bnr-usp-tick.webp" alt="">
						<b> Comprehensive Condition Management : </b> Expert laparoscopic care for pelvic pain, ectopic
						pregnancy, uterine abnormalities, and other gynecologic concerns.
					</li>
					<!-- <li>
						<img src="assets/images/bnr-usp-tick.webp" alt="">
						<b> Post-Surgery Rehabilitation : </b> Proven rehabilitation programs to enhance recovery and ensure long-term knee health after surgery.
					</li> -->
				</ul>
				<div class="btn-grp">
					<!-- <a href="#q-contactus" class="f-btn">
						<img src="assets/images/btn-aro.webp" alt="">
						Book A Consultation
					</a> -->

					<!-- <div class="gle-rating">
						<h4>4.9</h4>
						<ul>
							<li>
								<img src="assets/images/star-icon.webp" alt="">
							</li>
							<li>
								<img src="assets/images/star-icon.webp" alt="">
							</li>
							<li>
								<img src="assets/images/star-icon.webp" alt="">
							</li>
							<li>
								<img src="assets/images/star-icon.webp" alt="">
							</li>
							<li>
								<img src="assets/images/star-icon.webp" alt="">
							</li>

						</ul>
						<h6> Google Ratings </h6>
						<img src="assets/images/google-logo.webp" alt="" class="gogle-icon">
					</div> -->
				</div>
			</div>
		</div>

	</div>
</section>

<section class="quick-appoinment padng-sec" id="q-contactus">
	<div class="container-c">
		<div class="quick-appoinment-content">
			<div class="sub-head">
				<h2>
					<span class="brk"> Request a callback for </span> a <span class="blu-clr"> consultation! </span>
				</h2>
				<p>
					Fill out the form, and our fertility experts will be in touch with you within a few hours
				</p>
			</div>
			<div class="quick-appoinment-all-inputs">
				<div class="quick-appoinment-all-inputs-grp">
					<input type="hidden" placeholder="Full Name" value="<?= QUICK_APPOINTMENT ?>"
						id="quick_appointment">

					<div class="quick-appoinment-all-inputs-single">
						<input type="text" placeholder="Full Name*" id="quick_appointment_name">
					</div>
					<div class="quick-appoinment-all-inputs-single">
						<input type="text" placeholder="Phone No.*" id="quick_appointment_mobile">
					</div>

				</div>

				<div class="quick-appoinment-all-inputs-grp">
					<div class="quick-appoinment-all-inputs-single">
						<input type="text" placeholder="Email " id="quick_appointment_email">
					</div>
				</div>
				<div class="quick-appoinment-all-inputs-single ">
					<h5>Preferred consultation date</h5>
					<div class="datepicker-input-c">
						<!-- <input type="date" placeholder="Preferred consultation date" class="mob-date-picker"
                            id="quick_appointment_date"> -->
						<input type="text" id="quick_appointment_date">
						<img src="assets/images/calendar.webp" alt="" class="date-icon-c">
					</div>
				</div>

				<!-- <div class="quick-appoinment-all-inputs-single">
                    <select name="" id="quick_appointment_treatment_reason">
                        <option value=""> Why do you need laparoscopy?*</option>
                        <option value="Infertility diagnosis"> Infertility diagnosis </option>
                        <option value="Endometriosis treatment"> Endometriosis treatment </option>
                        <option value="Fibroids/cysts removal"> Fibroids/cysts removal </option>
                        <option value="Pelvic pain evaluation"> Pelvic pain evaluation </option>
                        <option value="Other issue (need advice)"> Other issue (need advice) </option>
                        <option value="Just exploring"> Just exploring </option>
                    </select>
                </div>

                <div class="quick-appoinment-all-inputs-single">
                    <select name="" id="quick_appointment_treatment_advised">
                        <option value=""> Has a doctor advised laparoscopy? </option>
                        <option value="Yes, ready to proceed"> Yes, ready to proceed </option>
                        <option value="Yes, want second opinion"> Yes, want second opinion </option>
                        <option value="Not yet, but suspect"> Not yet, but suspect </option>
                    </select>
                </div>

                <div class="quick-appoinment-all-inputs-single">
                    <select name="" id="quick_appointment_treatment_start">
                        <option value=""> When urgently do you want the procedure?*</option>
                        <option value="Immediately / Within 1 week"> Immediately / Within 1 week </option>
                        <option value="Within 1 month"> Within 1 month </option>
                        <option value="In 1-3 months"> In 1-3 months </option>
                        <option value="After 3 months"> After 3 months </option>
                    </select>
                </div> -->

				<!-- <div class="quick-appoinment-all-inputs-grp" style="margin-top:10px;">
                    <div class="quick-appoinment-all-inputs-single">
                        <div id="quick_appointment_recaptcha"></div>
                    </div>
                </div> -->
				<button id="quick_appointment_btn" type="submit" name="submit" class="f-btn"
					style="margin-top:20px; max-width:100%;">
					<img src="assets/images/btn-aro.webp" alt="">
					Book A Consultation
				</button>

			</div>
		</div>
	</div>
</section>

<!-- <section class="meet-doctors padng-sec" id="meet-doctor-sec">
	<div class="container-c">
		<div class="sub-head ">
			<h2>
				Meet Our <span class="blu-clr"> Experienced</span>
				<span class="brk"> <span class="blu-clr"> Gynecology </span> Experts </span>
			</h2>
			<p>
				With over 25+ years of experience, we have helped hundreds of women successfully undergo gynecological
				laparoscopic procedures — restoring their health, confidence, and quality of life. Trust our team to
				guide you with care, expertise, and compassion.
			</p>
		</div>

		<div class="certificate-doctor-all d-none-c">
			<div class="certificate-doctor-single-img">
				<div class="meet-doctor-image">
					<picture class="doctor-image">
						<source media="(min-width:768px)" srcset="assets/images/d1.jpg" loading="lazy">
						<img src="assets/images/d1.jpg" loading="lazy">
					</picture>
				</div>
				<div class="meet-doctor-detail mt-3 mt-lg-4 text-center">
					<h4> Dr. Sashikala V Prabhu </h4>
					<h6>
						<span> (MD, DGO) </span>
					</h6>
					<p>
						Obstetrician & Gynecologist
					</p>
				</div>
			</div>
			<div class="certificate-doctor-single-img">
				<div class="meet-doctor-image">
					<picture class="doctor-image">
						<source media="(min-width:768px)" srcset="assets/images/d2.jpg" loading="lazy">
						<img src="assets/images/d2.jpg" loading="lazy">
					</picture>
				</div>
				<div class="meet-doctor-detail mt-3 mt-lg-4 text-center">
					<h4> Dr. Akshay V Prabhu </h4>
					<h6>
						<span> (MS, FMAS) </span>
					</h6>
					<p>
						Laparoscopic Surgeon
					</p>
				</div>
			</div>
			<div class="certificate-doctor-single-img">
				<div class="meet-doctor-image">
					<picture class="doctor-image">
						<source media="(min-width:768px)" srcset="assets/images/d3.jpg" loading="lazy">
						<img src="assets/images/d3.jpg" loading="lazy">
					</picture>
				</div>
				<div class="meet-doctor-detail mt-3 mt-lg-4 text-center">
					<h4> Dr. Natasha A Prabhu </h4>
					<h6>
						<span> (MD) </span>
					</h6>
					<p>
						Fertility Consultant
					</p>
				</div>
			</div>
			
		</div>
		<a href="javascript:void(0);" class="f-btn modal-link-auto">
			<img src="assets/images/btn-aro.webp" alt="">
			<span> Request a callback </span>
		</a>
	</div>

</section> -->

<!--<section class="our-numbers padng-sec" id="our-numbers-sec">
	<div class="container-c">
		<div class="our-numbersa-all">
			<div class="sub-head">
				<h2>
					Quantifying our <span> success stories </span>
				</h2>
				<p>
					Discover the measure impact of getting treatment from the best Laparoscopy surgeon at Precise Hospital Orthopaedic Centre through our success stories including 3D Robotic assisted Total Laparoscopy, Revision Laparoscopy, Arthroscopic ACL/PCL ligament reconstruction, Patella & Quadriceps repair/reconstruction as well as Tendoachilles repair/reconstruction.
				</p>
			</div>
			<div class="our-numbersa-single">
				<h2> <span class="counter"> 1000 </span><sup>+</sup> </h2>
				<p> Successful 3D Robotic <span class="brk"> Total Laparoscopy</span> </p>
			</div>
			<div class="our-numbersa-single">
				<h2> <span class="counter"> 100</span><sup>%</sup> </h2>
				<p> Customer <span class="brk"> Satisfaction </span></p>
			</div>
			</div> 
		</div>
	</div>
</section>-->


<section class="services padng-sec" id="service-sec">
	<div class="container-c">
		<div class="services-cont">
			<div class="sub-head">
				<h2 class=" d-table">
					Our team is committed to providing <span class="blu-clr brk"> world class gynecological care to our patients </span>
				</h2>
				<p>
					In addition to laparoscopy procedures, we offer the latest and most advanced solutions for a wide range of women's health concerns.
				</p>
			</div>
			<div class="services-all">
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<div class="f-btn">
                         <img src="assets/images/btn-aro.webp" alt="" class="service-aro">
                         Enquire now
                    </div>

					<div class="services-single-icon">
						<img src="assets/images/service-img-1.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h3> Fibroids </h3>
						<p>
							Uterine fibroids are non cancerous growths that can cause heavy periods, pelvic pain or frequent urination. We offer personalized medical and minimally invasive surgical treatments for effective relief.
						</p>
					</div>
				</a>
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<div class="f-btn">
                         <img src="assets/images/btn-aro.webp" alt="" class="service-aro">
                         Enquire now
                    </div>

					<div class="services-single-icon">
						<img src="assets/images/service-img-2.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h3> Uterine Septum </h3>
						<p>
							A uterine septum is a congenital condition where a wall divides the uterus, which may increase the risk of infertility or recurrent miscarriages.
						</p>
					</div>
				</a>
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<div class="f-btn">
                         <img src="assets/images/btn-aro.webp" alt="" class="service-aro">
                         Enquire now
                    </div>

					<div class="services-single-icon">
						<img src="assets/images/service-img-3.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h3> Abnormal Uterine Bleeding </h3>
						<p>
							Heavy, irregular, prolonged, or bleeding between periods should never be ignored. Our specialists identify the underlying cause and provide customized treatment to restore your menstrual health.
						</p>
					</div>
				</a>
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<div class="f-btn">
                         <img src="assets/images/btn-aro.webp" alt="" class="service-aro">
                         Enquire now
                    </div>

					<div class="services-single-icon">
						<img src="assets/images/service-img-9.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h3> Large Ovarian Cyst </h3>
						<p>
							Large ovarian cysts can cause pelvic pain, bloating, discomfort or menstrual irregularities. We provide accurate diagnosis and advanced treatment options to preserve your reproductive health whenever possible.
						</p>
					</div>
				</a>
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<div class="f-btn">
                         <img src="assets/images/btn-aro.webp" alt="" class="service-aro">
                         Enquire now
                    </div>

					<div class="services-single-icon">
						<img src="assets/images/service-img-4.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h3> Ovarian Mass </h3>
						<p>
							An ovarian mass may be benign or require further evaluation depending on its size and characteristics. Our experts use advanced imaging and personalized treatment plans for timely and effective care.
						</p>
					</div>
				</a>
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<div class="f-btn">
                         <img src="assets/images/btn-aro.webp" alt="" class="service-aro">
                         Enquire now
                    </div>

					<div class="services-single-icon">
						<img src="assets/images/service-img-5.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h3> Uterine Polyps </h3>
						<p>
							Uterine polyps are small growths in the uterine lining that may lead to abnormal bleeding, infertility or recurrent miscarriages. Safe and minimally invasive removal helps relieve symptoms and improve uterine health.
						</p>
					</div>
				</a>
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<div class="f-btn">
                         <img src="assets/images/btn-aro.webp" alt="" class="service-aro">
                         Enquire now
                    </div>

					<div class="services-single-icon">
						<img src="assets/images/service-img-6.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h3> PCOD Treatment </h3>
						<p>
							PCOD is a common hormonal condition that can cause irregular periods, acne and difficulty conceiving. Our comprehensive treatment combines lifestyle guidance, medication, and hormonal management for long term wellness.
						</p>
					</div>
				</a>
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<div class="f-btn">
                         <img src="assets/images/btn-aro.webp" alt="" class="service-aro">
                         Enquire now
                    </div>

					<div class="services-single-icon">
						<img src="assets/images/service-img-8.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h3>  Menopause </h3>
						<p>
							Menopause is a natural phase that marks the end of menstrual cycles and may bring symptoms like hot flashes, mood changes, sleep disturbances, and vaginal dryness. We offer personalized care to help you manage symptoms.
						</p>
					</div>
				</a>
				
			</div>
		</div>
	</div>
</section>


<section class="meet-doctors-one padng-sec" id="meet-doctor-sec">
	<div class="container-c">
		<div class="meet-doctors-single">
			<div class="meet-doctor-single-image">
				<picture class="doctor-image">
					<source media="(min-width:768px)" srcset="assets/images/doctor-img.webp" loading="lazy">
					<img src="assets/images/doctor-img-mob.webp" loading="lazy">
				</picture>
			</div>
			<div class="meet-doctor-single-detail">
				<h6>Meet Doctor</h6>
				<h2>Dr. K. Amrutha</h2>
				<h4>Lead Consultant Obstetrician & Gynaecologist, Laparoscopic & Hysteroscopic Surgeon</h4>
				<ul class="bnr-usp">
					<li>
						<img src="assets/images/list-point.webp" alt="">
						13+ Years of Clinical Experience in Obstetrics and Gynaecology
					</li>
					<li>
						<img src="assets/images/list-point.webp" alt="">
						Expert in Advanced Laparoscopic & Hysteroscopic Surgeries
					</li>
					<li>
						<img src="assets/images/list-point.webp" alt="">
						Specialized in treating fibroids, ovarian cysts, and endometriosis
					</li>
					<li>
						<img src="assets/images/list-point.webp" alt="">
						Extensive experience in managing normal and high risk pregnancies
					</li>
					<li>
						<img src="assets/images/list-point.webp" alt="">
						Successfully performed complex minimally invasive surgeries with excellent outcomes
					</li>
					<li>
						<img src="assets/images/list-point.webp" alt="">
						Committed to providing compassionate, patient centred care
					</li>
					<li>
						<img src="assets/images/list-point.webp" alt="">
						Active advocate for women’s health education and awareness
					</li>
				</ul>
				<a href="javascript:void(0);" class="f-btn modal-link-auto">
					<img src="assets/images/btn-aro.webp" alt="">
					Speak to a Doctor
				</a>
			</div>
		</div>
	</div>
</section>


<section class="why-us padng-sec" id="why-us-sec">
	<div class="container-c">
		<div class="why-us-content">
			<div class="why-us-img">
				<div class="why-us-img-single sml-img img-btm">
					<picture class="">
						<source media="(min-width:600px)" srcset="assets/images/why-1-600.webp" loading="lazy">
						<img src="assets/images/why-1.webp" alt="" loading="lazy">
					</picture>
				</div>
				<div class="why-us-img-single">
					<picture class="">
						<source media="(min-width:600px)" srcset="assets/images/why-2-600.webp" loading="lazy">
						<img src="assets/images/why-2.webp" alt="" loading="lazy">
					</picture>
				</div>

				<div class="why-us-img-single ">
					<picture class="">
						<source media="(min-width:600px)" srcset="assets/images/why-3-600.webp" loading="lazy">
						<img src="assets/images/why-3.webp" alt="" loading="lazy">
					</picture>
				</div>
				<div class="why-us-img-single sml-img ">
					<picture class="">
						<source media="(min-width:600px)" srcset="assets/images/why-4-600.webp" loading="lazy">
						<img src="assets/images/why-4.webp" alt="" loading="lazy">
					</picture>
				</div>
				<img src="assets/images/why-us-img-dooted.webp" alt="" class="why-us-img-dooted">
			</div>
			<div class="why-us-cont">
				<div class="sub-head">
					<h2>What are the Benefits of <span class="blu-clr"> Laparoscopy in Gynecology? </span></h2>
					<p> At Precise Hospital, we are committed to enhancing women's health through advanced minimally
						invasive surgical solutions. Our expertise in Gynecological Laparoscopy ensures that you receive
						precise, effective, and compassionate care. </p>
				</div>

				<ul class="bnr-usp">

					<li>
						<img src="assets/images/list-point.webp" alt="">
						<b> Faster Recovery :</b> Laparoscopic procedures involve smaller incisions, leading to quicker
						healing and a faster return to daily activities.
					</li>
					<li>
						<img src="assets/images/list-point.webp" alt="">
						<b> Minimal Pain and Scarring : </b> With advanced laparoscopic techniques, patients experience
						significantly less postoperative pain and minimal scarring compared to traditional surgery.
					</li>
					<li>
						<img src="assets/images/list-point.webp" alt="">
						<b> High Success Rates : </b> Our skilled surgical team, combined with cutting edge laparoscopic
						technology, ensures high success rates and excellent clinical outcomes for a wide range of
						gynecological conditions.
					</li>
					<!-- <li>
						<img src="assets/images/list-point.webp" alt="">
						<b> Comprehensive Post-Operative Care : </b> We provide complete knee pain solutions, from surgery to rehabilitation, ensuring a smooth recovery and sustained joint health.
					</li>
					<li>
						<img src="assets/images/list-point.webp" alt="">
						<b> Improved Quality of Life : </b> Regain your independence and enjoy a more active lifestyle with the proven benefits of Laparoscopy surgery.
					</li> -->
				</ul>


			</div>
		</div>
	</div>
</section>

<!-- <section class="icons-all padng-sec">
	<div class="container-c">
		<div class="sub-head">
			<h2 class=" d-table">
				<span class="blu-clr brk"> Now 3D Robotic Total Hip Replacement is covered </span> in Cashless/Mediclaim also
			</h2>
			<p>
			Other than Hip replacement, We offer latest and cutting edge solutions to our patients bones and joint issues.
			</p>
		</div>
		<div class="icons-all-img-cal d-none-c">
			<picture>
				<source media="(min-width:768px)" srcset="assets/images/icons-all.png" loading="lazy">
				<img src="assets/images/icons-all.png" loading="lazy">
			</picture>
			<div class="icons-all-img-single">
				<img src="assets/images/casless-1.png">
			</div>
			<div class="icons-all-img-single">
				<img src="assets/images/casless-2.png">
			</div>
			<div class="icons-all-img-single">
				<img src="assets/images/casless-3.png">
			</div>
			<div class="icons-all-img-single">
				<img src="assets/images/casless-4.png">
			</div>
			<div class="icons-all-img-single">
				<img src="assets/images/casless-5.png">
			</div>
			<div class="icons-all-img-single">
				<img src="assets/images/casless-6.png">
			</div>
			<div class="icons-all-img-single">
				<img src="assets/images/casless-7.png">
			</div>
			<div class="icons-all-img-single">
				<img src="assets/images/casless-8.png">
			</div>
			<div class="icons-all-img-single">
				<img src="assets/images/casless-9.png">
			</div>
			<div class="icons-all-img-single">
				<img src="assets/images/casless-10.png">
			</div>
		</div>


	</div>
</section> -->


<!-- <section class="doc-cer padng-sec " id="testimonial-sec">
	<div class="container-c">
		<div class="sub-head">
			<h2>
			Laparoscopy with <span class="blu-clr"> Certified Expertise </span>
			</h2>
			<p>
			Our procedures and surgical team are certified and recognized by the most esteemed medical authorities in Ahmedabad most esteemed governing authorities.
			</p>
		</div>

		<div class="doc-cer-slider d-none-c">
			<div class="doc-cer-slider-single">
				<img src="assets/images/certificate-1.webp" alt="" loading="lazy">
			</div>
			<div class="doc-cer-slider-single">
				<img src="assets/images/certificate-2.webp" alt="" loading="lazy">
			</div>
			<div class="doc-cer-slider-single">
				<img src="assets/images/certificate-3.webp" alt="" loading="lazy">
			</div>
			
		</div>
	</div>
</section> -->

<!-- <section class="quick-appoinment  padng-sec" id="q-contactus">
	<div class="container-c">
		<div class="quick-appoinment-content">
			<div class="sub-head">
				<h2>
					<span class="brk"> Request a callback for </span> a <span class="blu-clr"> consultation! </span>
				</h2>
				<p>
					Fill out the form, and our fertility experts will call and be in touch with you within 24 hours.
				</p>
			</div>
			<div class="quick-appoinment-all-inputs">
				<form action="javascript:void(0);" method="post" name="feedback-form">
					<input type="hidden" placeholder="Name" value="<?= QUICK_APPOINTMENT ?>" id="quick_appointment">

					<div class="quick-appoinment-all-inputs-grp">
						<div class="quick-appoinment-all-inputs-single">
							<label for="name"> Name <span>*</span></label>
							<input type="text" placeholder="Name" id="quick_appointment_name">
						</div>

						<div class="quick-appoinment-all-inputs-single mb-0">
							<label for="age">Your Age</label>
							<input type="text" placeholder="Enter your Age" id="quick_appointment_age">
						</div>
					</div>
					<div class="quick-appoinment-all-inputs-grp">
						<div class="quick-appoinment-all-inputs-single">
							<label for="city">Phone number<span>*</span></label>
							<input type="text" placeholder="Enter number here " id="quick_appointment_mobile">
						</div>

						<div class="quick-appoinment-all-inputs-single">
							<button name="submit" class=" f-btn" id="quick_appointment_btn">
								<img src="assets/images/btn-aro.webp" alt="">
								Make an appointment
							</button>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
</section> -->

<!-- <section class="services padng-sec" id="service-sec">
	<div class="container-c">
		<div class="services-cont">
			<div class="sub-head">
				<h2>
					Diagnosis and Treatments <span class="blu-clr"> Offered </span>
				</h2>
				<p>
					Comprehensive Treatment Options: Explore Our Range of Services at Precise Hospital Orthopaedic Centre
					Centre
				</p>
			</div>
			<div class="services-all">
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<img src="assets/images/btn-aro.webp" alt="" class="service-aro">

					<div class="services-single-icon">
						<img src="assets/images/service-icon-1.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h4> IVF / ICSI </h4>
						<p>
							In vitro fertilization (IVF) is a process of fertilization where an egg is combined with
							sperm outside the body, in a laboratory dish. Intracytoplasmic sperm injection (ICSI) is a
							procedure used in IVF where a single sperm is injected.
						</p>
					</div>
				</a>
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<img src="assets/images/btn-aro.webp" alt="" class="service-aro">
					<div class="services-single-icon">
						<img src="assets/images/service-icon-2.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h4> Egg freezing</h4>
						<p>
							Egg freezing is a process where a woman’s eggs are retrieved, frozen and stored for later
							use. This can be helpful for women who want to delay childbearing or who are undergoing
							medical treatment that could damage their eggs.
						</p>
					</div>
				</a>
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<img src="assets/images/btn-aro.webp" alt="" class="service-aro">
					<div class="services-single-icon">
						<img src="assets/images/service-icon-3.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h4> Donor treatment </h4>
						<p>
							Donor treatment is a type of fertility treatment that uses eggs, sperm, or embryos from a
							donor. This can be an option for people who have difficulty conceiving using their own eggs
							or sperm.
						</p>
					</div>
				</a>
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<img src="assets/images/btn-aro.webp" alt="" class="service-aro">
					<div class="services-single-icon">
						<img src="assets/images/service-icon-4.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h4> Embryo biopsy and PGTA </h4>
						<p>
							Embryo biopsy is a procedure where a small sample of cells is removed from an embryo for
							genetic testing. Preimplantation genetic screening (PGTA) is a type of genetic testing that
							can be performed on embryos to identify those that are free of genetic abnormalities.
						</p>
					</div>
				</a>
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<img src="assets/images/btn-aro.webp" alt="" class="service-aro">
					<div class="services-single-icon">
						<img src="assets/images/service-icon-5.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h4> Hysteroscopy </h4>
						<p>
							Hysteroscopy is a minimally invasive surgical procedure that allows a doctor to examine the
							inside of the uterus. It can be used to diagnose uterine problems such as fibroids, polyps,
							and scar tissue.
						</p>
					</div>
				</a>
				<a href="javascript:void(0);" class="services-single modal-link-auto">
					<img src="assets/images/btn-aro.webp" alt="" class="service-aro">
					<div class="services-single-icon">
						<img src="assets/images/service-icon-6.webp" alt="" loading="lazy">
					</div>
					<div class="services-single-cont">
						<h4> Laparoscopy </h4>
						<p>
							Laparoscopy is a minimally invasive surgical procedure that allows a doctor to examine the
							inside of the abdomen and pelvis. It can be used to diagnose pelvic problems such as
							endometriosis and ovarian cysts. 
						</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section> -->



<!-- <section class="package" id="package-sec">
	<div class="container-c">
		<div class="package-cont">
			<div class="sub-head ">
				<h2>
					When should you consider visiting a <span class="scnd-clr"> Gynec laparoscopic surgeon? </span>
				</h2>
			</div>

			<ul class="bnr-usp">
				<li>
					<img src="assets/images/bnr-usp-tick.webp" alt="">
					Fibroids
				</li>
				<li>
					<img src="assets/images/bnr-usp-tick.webp" alt="">
					Uterine Septum
				</li>
				<li>
					<img src="assets/images/bnr-usp-tick.webp" alt="">
					Abnormal Bleeding for females
				</li>
				<li>
					<img src="assets/images/bnr-usp-tick.webp" alt="">
					Ovarian cysts, Ovarian Mass
				</li>
				<li>
					<img src="assets/images/bnr-usp-tick.webp" alt="">
					Polyps
				</li>
				<li>
					<img src="assets/images/bnr-usp-tick.webp" alt="">
					PCOD Treatment
				</li>
				<li>
					<img src="assets/images/bnr-usp-tick.webp" alt="">
					Menopause clinic- menopausal conditions
				</li>
				<li>
					<img src="assets/images/bnr-usp-tick.webp" alt="">
					Post Menopausal Bleeding
				</li>
				<li>
					<img src="assets/images/bnr-usp-tick.webp" alt="">
					Large Ovarian Cyst
				</li>
			</ul>

			<a href="javascript:void(0);" class="f-btn modal-link-auto">
				<img src="assets/images/btn-aro.webp" alt="">
				<span> Request a callback </span>
			</a>

		</div>

	</div>
</section> -->


<section class="testimonial padng-sec " id="testimonial-sec">
	<div class="container-c">
		<div class="sub-head">
			<h2>
				Happy Customers, <span class="blu-clr"> Great Results! </span>
			</h2>
			<p>
				With a rating of 4.5 + our commitment and customer satisfaction speaks for itself.
			</p>
		</div>

		<div class="testimonial-slider d-none-c">

			<div class="testimonial-slider-single">
				<div class="testimonial-slider-single-stars">
					<ul>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
					</ul>
					<img src="assets/images/google-logo.webp" alt="" class="gogle-icon">
				</div>
				<div class="testimonial-slider-single-txt">
					<p>
						Dr. Amrutha mam is very friendly. She politely listens to all our complaints and addresses them very carefully. She is very positive and has good experience in treating people. Her way of assessment and observation is highly adorable as a doctor. A highly recommended doctor for pregnancy and treatment.
					</p>
				</div>

				<div class="testimonial-slider-single-dtl">
					<img src="assets/images/tesimo-user-icon.webp" alt="">
					<div class="testimonial-user">
						<h5> Rajalakshmi Mohan </h5>
						<!-- <p> 30/09/2024 </p> -->
					</div>
				</div>
			</div>
			<div class="testimonial-slider-single">
				<div class="testimonial-slider-single-stars">
					<ul>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
					</ul>
					<img src="assets/images/google-logo.webp" alt="" class="gogle-icon">
				</div>
				<div class="testimonial-slider-single-txt">
					<p>
						Her way of treatment is excellent and one important thing is she understands the patients and treat them smoothly and friendly. I would love to recommend her to every patient I met. Thanks dear for treating me, with ur support im so healthy and happy after my second delivery. Thanks once again from bottom of my heart!!!!
					</p>
				</div>

				<div class="testimonial-slider-single-dtl">
					<img src="assets/images/tesimo-user-icon.webp" alt="">
					<div class="testimonial-user">
						<h5> K. Anitha </h5>
						<!-- <p> 22/08/2024 </p> -->
					</div>
				</div>
			</div>
			<div class="testimonial-slider-single">
				<div class="testimonial-slider-single-stars">
					<ul>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
					</ul>
					<img src="assets/images/google-logo.webp" alt="" class="gogle-icon">
				</div>
				<div class="testimonial-slider-single-txt">
					<p>
						Today morning I took my wife to consult her. My wife felt happy after consultation. Madam suggestions helped her and made her strong. My wife is satisfied with Madam treatment. I strongly recommend this doctor to consult.
					</p>
				</div>

				<div class="testimonial-slider-single-dtl">
					<img src="assets/images/tesimo-user-icon.webp" alt="">
					<div class="testimonial-user">
						<h5> Rajapavan </h5>
						<!-- <p> 14/08/2024 </p> -->
					</div>
				</div>
			</div>
			<div class="testimonial-slider-single">
				<div class="testimonial-slider-single-stars">
					<ul>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
						<li>
							<img src="assets/images/star-icon.webp" alt="" loading="lazy">
						</li>
					</ul>
					<img src="assets/images/google-logo.webp" alt="" class="gogle-icon">
				</div>
				<div class="testimonial-slider-single-txt">
					<p>
						I've been visiting her from one year. First went to her for fibroids, underwent surgery & recovered very fast. Very happy with her treatment. I highly recommend her to everyone.
					</p>
				</div>
				<div class="testimonial-slider-single-dtl">
					<img src="assets/images/tesimo-user-icon.webp" alt="">
					<div class="testimonial-user">
						<h5> Padmavathi </h5>
						<!-- <p> 11/08/2024 </p> -->
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- <section class="clint-case padng-sec" id="clint-case-sec">
	<div class="container-c">
		<div class="clint-case-all ">
			<div class="clint-case-single">
				<div class="clint-case-single-quote">
					<img src="assets/images/quote.webp" loading="lazy">
				</div>
				<h3>
					3D Scan and Successful Treatment of Uterine Septum Leading to Full-Term Pregnancies
				</h3>
				<div class="clint-case-info">
					<h4>Patient Information:</h4>
					<p>Name: <b>Mrs. XYZ</b> </p>
					<p>Age: <b>32</b> </p>
				</div>
				<div class="clint-case-info">
					<h4>Clinical Presentation:</h4>
					<p>Had severe painful periods and was trying to conceive since 1 year.
						On ultrasound she had a large 5 cm fibroid which was touching the lining of the uterus. She also
						had a 4 cm endometriotic (chocolate) cyst in her right ovary.</p>
				</div>
				<div class="clint-case-info">
					<h4>Treatment Strategy:</h4>
					<p>
						She was taken up for a laparoscopy in which the fibroid was removed and the endometriotic cyst
						was also excised. The ovaries and tubes were adhered to the posterior wall of uterus which was
						also normalised after adhesiolysis. The fallopian tubes were patent (open).
					</p>
				</div>
				<div class="clint-case-info">
					<h4>Outcome:</h4>
					<p>
						After 4 months (because of the lap Myomectomy , gap should be atleast 3 months) , she was then
						taken up for IUI , which were unsuccessful for 3 cycles . IUI was planned in view of her being
						unable to conceive despite trying naturally for one year and her being diagnosed with
						endometriosis.
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Conclusion:</h4>
					<p>
						IVF was then planned - 6 eggs retrieved , 4 blasts were formed , 2 were transferred in one
						frozen embryo transfer cycle and she conceived in the first cycle . Pregnancy was uneventful and
						she delivered at 37 weeks.
					</p>
				</div>
			</div>

			<div class="clint-case-single">
				<div class="clint-case-single-quote">
					<img src="assets/images/quote.webp" loading="lazy">
				</div>
				<h3>
					Mrs. KS - Successful IVF Following Genomic Evaluation
				</h3>
				<div class="clint-case-info">
					<h4>Patient Information:</h4>
					<p>Age: <b>34 years Mrs KS</b> </p>
					<p>Marital Status: <b>Married for 14 years</b> </p>
					<p> Medical History: <b> Known case of Polycystic Ovary Syndrome (PCOS) </b> </p>
				</div>
				<div class="clint-case-info">
					<h4>Previous Treatments:</h4>
					<p>6 Ovulation Inductions</p>
					<p>1 Intrauterine Insemination (IUI)</p>
					<p>1 In Vitro Fertilization (IVF) attempt</p>
					<p>All previous treatments were unsuccessful</p>
				</div>
				<div class="clint-case-info">
					<h4>Clinical Findings:</h4>
					<p>
						<b>Oocyte Yield:</b> Only 6 oocytes retrieved in previous IVF cycle, which is low for a patient with PCOS.
					</p>
				</div>
				<div class="clint-case-info">
					<h4>Intervention:</h4>
					<p>
						Genomic Evaluation:
					</p>
					<p>
						Test Used: <b>GeneFemina</b>
					</p>
					<p>
						Findings: <b> Identified an issue with the Luteinizing Hormone (LH) receptor. </b>
					</p>
				</div>
				<div class="clint-case-info">
					<h4> IVF Cycle Based on Genomic Results: </h4>
					<p>
						Treatment Modification: <b> Additional dose of recombinant LH injection administered.</b>
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Outcomes :</h4>
					<p>
						Oocyte Retrieval: <b>16 mature oocytes retrieved.</b>
					</p>
					<p>
						Embryo Development: <b> 8 embryos obtained and frozen.</b>
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Frozen Embryo Transfer (FET) :</h4>
					<p>
						Timing: <b> Transfer performed in the following month. </b>
					</p>
					<p>
						Result: <b> Positive pregnancy. </b>
					</p>
					<p>
						Delivery: <b> Healthy baby weighing 2700 grams delivered at 39 weeks. </b>
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Conclusion : </h4>
					<p><b>The successful pregnancy was achieved by:</b></p>
					<p>Identifying the low oocyte yield issue.</p>
					<p>Arranging a genomic evaluation to pinpoint the LH receptor issue.</p>
					<p>Administering the correct hormone at the appropriate dosage based on genomic findings.</p>
				</div>
			</div>

			<div class="clint-case-single">
				<div class="clint-case-single-quote">
					<img src="assets/images/quote.webp" loading="lazy">
				</div>
				<h3>
					Embryo Biopsy in Mrs. GK's Case
				</h3>
				<div class="clint-case-info">
					<h4>Patient Information:</h4>
					<p>Name: <b>Mrs GK</b> </p>
					<p>Age: <b>32</b> </p>
				</div>
				<div class="clint-case-info">
					<h4>Clinical Presentation:</h4>
					<p>32 year old Mrs GK, having infrequent periods every 3 - 4 months, attended for fertility treatment. She already had 3 Ovulation Induction and 3 IUIs. </p>
				</div>
				<div class="clint-case-info">
					<h4>Procedure :</h4>
					<p>We counselled and proceeded with IVF. Obtained 36 oocytes, she developed OHSS and was treated too. Obtained 12 blastocysts. Initial 2 IVF cycles were unsuccessful</p>
				</div>
				<div class="clint-case-info">
					<h4> Genetic Testing :</h4>
					<p>
						Embryo biopsy was recommended. During the embryo biopsy, cells were removed from the blastocysts outer layer for genetic analysis. This step was essential given the previous unsuccessful IVF cycles.
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Outcome : </h4>
					<p>
						By transferring genetically normal embryos identified through the biopsy, the third IVF cycle resulted in a successful pregnancy. Mrs. GK delivered a healthy baby at nine months.
					</p>
				</div>
				<div class="clint-case-info">
					<h4> IVF Cycle Based on Genomic Results: </h4>
					<p>
						Treatment Modification: <b> Additional dose of recombinant LH injection administered.</b>
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Conclusion :</h4>
					<p>
						The implementation of embryo biopsy and subsequent genetic testing was instrumental in achieving a successful pregnancy for Mrs. GK after several failed fertility treatments. This approach maximised the likelihood of a positive outcome by ensuring only genetically healthy embryos were used for transfer.*
					</p>
				</div>
			</div>

			<div class="clint-case-single">
				<div class="clint-case-single-quote">
					<img src="assets/images/quote.webp" loading="lazy">
				</div>
				<h3>
					Turner Syndrome and Donor Egg IVF
				</h3>
				<div class="clint-case-info">
					<h4>Patient Information:</h4>
					<p>Name: <b>Mrs. UM</b> </p>
					<p>Age: <b>24 years</b> </p>
					<p>Condition : <b> Turner Syndrome (45XO) - No ovarian reserve </b> </p>
					<p> Marital Status : <b> Married, with spouse aware of and accepting her condition </b> </p>
				</div>
				<div class="clint-case-info">
					<h4> Clinical Challenge :</h4>
					<p>
						Turner Syndrome often results in insufficient estrogen production, leading to difficulties in achieving a thick enough endometrial lining necessary for successful embryo implantation.
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Treatment Strategy :</h4>
					<p>
						We did a trial HRT using Estrogen gel, tablet and growth hormone to make sure the lining is more than 7 mm and then proceeded with IVF with donor eggs and obtained 4 embryos.
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Embryo Transfer : </h4>
					<p>
						First cycle was unfortunately unsuccessful and she conceived in second embryo transfer cycle. Went ahead and delivered a healthy baby at 34 weeks.
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Key Points: </h4>
					<p>
						<b>
							Endometrial Preparation:
						</b>
					</p>
					<p>
						Thorough and well-planned endometrial preparation is crucial for implantation success in Turner Syndrome patients.
					</p>
					<p>
						The trial of HRT was done so that unnecessary IVF was not done
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Conclusion :</h4>
					<p>
						The successful delivery of a healthy baby at 34 weeks underscores the importance of individualised treatment protocols and meticulous preparation, particularly in cases involving Turner Syndrome where inherent hormonal deficiencies pose significant challenges
					</p>
				</div>
			</div>

			<div class="clint-case-single">
				<div class="clint-case-single-quote">
					<img src="assets/images/quote.webp" loading="lazy">
				</div>

				<div class="clint-case-info">
					<h4>Patient Information:</h4>
					<p>Name: <b>AM</b> </p>
					<p>Age: <b> 29 year-old female </b> </p>
					<p>Marital Status: <b>Married for 2 years</b> </p>
					<p>Conceive History: <b> Trying to conceive for 1 year </b> </p>
				</div>
				<div class="clint-case-info">
					<h4>Clinical Presentation:</h4>
					<p>Mrs AM attended clinic distressed after being diagnosed with an endometrioma in the left ovary. She was Suggested laparoscopy and excision of the endometrioma followed by IVF</p>
				</div>


				<div class="clint-case-info">
					<h4> Pelvic Scan was done :</h4>
					<p>
						Right ovary normal, left ovary filled with an endometrioma.
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Counseling and Decision :</h4>
					<p>
						it was essential to alleviate her distress by providing clear information on the condition and the treatment options. Explained the benefits of removing the endometrioma; she agreed to proceed with laparoscopy.
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Treatment Strategy :</h4>
					<p>
						We did a trial HRT using Estrogen gel, tablet and growth hormone to make sure the lining is more than 7 mm and then proceeded with IVF with donor eggs and obtained 4 embryos.
					</p>
				</div>
				<div class="clint-case-info">
					<p>
						At laparoscopy, a detailed review of the pelvis revealed that only the left ovary had an endometrioma while the rest of the pelvis was normal. A careful excision of the endometrioma was performed, confirming tubal patency and maintaining the tube-ovarian relationship.
					</p>
				</div>
				<div class="clint-case-info">
					<p>
						<b>
							Surgical excision of the endometrioma can preserve ovarian function and enhance natural fertility. Ensuring tubal patency and maintaining the tube-ovarian relationship is crucial in fertility management
						</b>
					</p>
					<p>
						The patient was advised to review after 3 months to plan pregnancy. She successfully conceived naturally within this period and delivered a healthy baby at term, underscoring the potential for pregnancy without immediate recourse to IVF.
					</p>
				</div>
				<div class="clint-case-info">
					<h4> Conclusion :</h4>
					<p>
						With appropriate laparoscopic intervention and counseling, women with endometriomas can achieve natural conception and successful pregnancy outcomes
					</p>
				</div>
			</div>

		</div>
	</div>
</section> -->


<!-- <section class="step-c padng-sec" id="step-sec">
	<div class="container-c">
		<div class="sub-head">
			<h2> Journey through <span class=" brk blu-clr"> IVF Process </span></h2>
			<p> Embarking on the IVF Journey: Your Comprehensive Guide from Consultation to Post-Treatment Care at
				Precise Hospital Orthopaedic Centre </p>
		</div>

		<div class="step-all-c">
			<div class="step-single-c">
				<img src="assets/images/arrow-right.webp" alt="" class="step-single-c-arrow" loading="lazy">
				<div class="step-single-icon-c">
					<img src="assets/images/step-1.webp" alt="" loading="lazy" class="step-single-icon-img">
					<h6>1</h6>
				</div>
				<div class="step-single-content-c">
					<h4> Ovarian stimulation & monitoring </h4>
					<p>This stage involves stimulating the ovaries to produce multiple mature eggs instead of the single
						egg typically released during ovulation. Fertility medications are administered through
						injections for around two weeks.</p>
				</div>
			</div>

			<div class="step-single-c ">
				<img src="assets/images/arrow-right.webp" alt="" class="step-single-c-arrow" loading="lazy">
				<div class="step-single-icon-c">
					<img src="assets/images/step-2.webp" alt="" loading="lazy" class="step-single-icon-img">
					<h6>2</h6>
				</div>
				<div class="step-single-content-c">
					<h4> Egg retrieval </h4>
					<p> A minimally invasive surgical procedure where mature eggs are collected from the follicles
						within the ovaries. Transvaginal ultrasound is used to guide a thin needle that retrieves the
						eggs. </p>
				</div>

			</div>

			<div class="step-single-c ">
				<img src="assets/images/arrow-right.webp" alt="" class="step-single-c-arrow" loading="lazy">
				<div class="step-single-icon-c">
					<img src="assets/images/step-3.webp" alt="" loading="lazy" class="step-single-icon-img">
					<h6>3</h6>
				</div>
				<div class="step-single-content-c">
					<h4> Sperm retrieval </h4>
					<p> Surgical Extraction is needed for men with no sperm in semen or azoospermia. A sperm sample is collected through a private collection method or surgical extraction. The
						sperm is then processed in a lab to separate the healthiest sperm for fertilization. </p>
				</div>
			</div>

			<div class="step-single-c ">
				<div class="step-single-icon-c">
					<img src="assets/images/step-4.webp" alt="" loading="lazy" class="step-single-icon-img">
					<h6>4</h6>
				</div>
				<div class="step-single-content-c">
					<h4> Fertilization </h4>
					<p>  In a lab dish, sperm and eggs are combined to achieve fertilization. There are two main methods
					</p>
					<ul>
						<li> <img src="assets/images/list-point.webp" alt="" loading="lazy"
								class="step-single-icon-img">
							<b>Conventional insemination</b>
						</li>
						<li> <img src="assets/images/list-point.webp" alt="" loading="lazy"
								class="step-single-icon-img">
							<b>Intracytoplasmic sperm injection (ICSI)</b>
						</li>
					</ul>
				</div>
			</div>

			<div class="step-row-rev">
				<div class="step-single-c ">
					<img src="assets/images/arrow-right.webp" alt="" class="step-single-c-arrow" loading="lazy">
					<div class="step-single-icon-c">
						<img src="assets/images/step-5.webp" alt="" loading="lazy" class="step-single-icon-img">
						<h6>5</h6>
					</div>
					<div class="step-single-content-c">
						<img src="assets/images/arrow-right.webp" alt="" class="step-single-c-arrow" loading="lazy">
						<h4> Embryo transfer </h4>
						<p>  After 3-5 days of development, one or more healthy embryos are chosen for transfer. A thin
							catheter is inserted through the cervix and into the uterus to carefully place the embryos
							in
							the lining.</p>
					</div>
				</div>

				<div class="step-single-c ">
					<img src="assets/images/arrow-right.webp" alt="" class="step-single-c-arrow" loading="lazy">
					<div class="step-single-icon-c">
						<img src="assets/images/step-6.webp" alt="" loading="lazy" class="step-single-icon-img">
						<h6>6</h6>
					</div>
					<div class="step-single-content-c">
						<h4> After the procedure : Results </h4>
						<p>  Around two weeks after embryo transfer, a blood test is conducted to check for pregnancy
							(beta-hCG test). </p>
						<ul>
							<li> <img src="assets/images/list-point.webp" alt="" loading="lazy"
									class="step-single-icon-img">
								<span> <b> Positive result : </b> Indicates a successful pregnancy and prenatal care
									begins.</span>
							</li>
							<li> <img src="assets/images/list-point.webp" alt="" loading="lazy"
									class="step-single-icon-img">
								<span> <b> Negative result : </b> Means implantation did not occur. You’ll discuss next
									steps with your doctor, which may involve additional IVF cycles or exploring other
									options. </span>
							</li>
						</ul>
					</div>
				</div>

				<div class="step-single-c">
					<img src="assets/images/arrow-right.webp" alt="" class="step-single-c-arrow" loading="lazy">
					<div class="step-single-icon-c">
						<img src="assets/images/step-7.webp" alt="" loading="lazy" class="step-single-icon-img">
						<h6>7</h6>
					</div>
					<div class="step-single-content-c">
						<h4> After the procedure: When to start normal activities : </h4>
						<p> Most women can resume normal activities within a day or two after egg retrieval and embryo
							transfer. However, strenuous exercise and heavy lifting should be avoided for a short
							period.
							Your doctor will provide specific instructions based on your individual situation. </p>

					</div>
				</div>

				<div class="step-single-c">
					<img src="assets/images/arrow-right.webp" alt="" class="step-single-c-arrow" loading="lazy">
					<div class="step-single-final">
						<img src="assets/images/step-8.webp" alt="" loading="lazy" class="step-single-final-img">
					</div>
				</div>
			</div>
		</div>

		<a href="javascript:void(0);" class="f-btn modal-link-auto">
			<img src="assets/images/btn-aro.webp" alt="">
			<span> Know more </span>
		</a>
	</div>
</section> -->

<section class="quick-contact" id="quick-contact-sec">
	<div class="container-c">
		<div class="quick-contact-content">
			<div class="sub-head ">
				<h2> Need Help? <span> Make an Enquiry or Booking </span> </h2>
				<p> We offer personalized, patient specific solutions for women seeking advanced gynecological care
					through laparoscopy. </p>
			</div>
			<div class="quick-contact-btn ">
				<a href="javascript:void(0);" class="f-btn modal-link-auto"> <img src="assets/images/btn-aro.webp"
						alt=""> Request a callback </a>
			</div>
		</div>
	</div>
</section>

<section class="brnefit-c padng-sec" id="brnefit-c-sec">
	<div class="container-c">
		<div class="why-us-content">
			<div class="why-us-img">
				<div class="why-us-img-single big-img img-btm">
					<picture>
						<source media="(min-width:600px)" srcset="assets/images/benifit-1-600.webp" loading="lazy">
						<img src="assets/images/benifit-1.webp" alt="" loading="lazy">
					</picture>
				</div>
				<div class="why-us-img-single img-btm">
					<picture>
						<source media="(min-width:600px)" srcset="assets/images/benifit-2-600.webp" loading="lazy">
						<img src="assets/images/benifit-2.webp" alt="" loading="lazy">
					</picture>
				</div>
				<!-- <div class="why-us-img-single">
					<div class="ex-yr">
						<h2><span class="counter"> 25 </span> <span>+</span></h2>
						<h6>Years of<span class="brk"> Experience </span> </h6>
					</div>
				</div> -->
				<div class="why-us-img-single" style="margin-bottom:15px;">
					<picture>
						<source media="(min-width:600px)" srcset="assets/images/benifit-3-600.webp" loading="lazy">
						<img src="assets/images/benifit-3.webp" alt="" loading="lazy">
					</picture>
				</div>
				<div class="why-us-img-single big-img img-tp ">
					<picture>
						<source media="(min-width:600px)" srcset="assets/images/benifit-4-600.webp" loading="lazy">
						<img src="assets/images/benifit-4.webp" alt="" loading="lazy">
					</picture>
				</div>
			</div>
			<div class="why-us-text">
				<div class="sub-head">
					<h2>
						Why Choose Our Hospital?
						<!-- <span class="blu-clr"> Gynecological Laparoscopy? </span> -->
					</h2>
					<p>
						Expert Gynec Laparoscopy surgeon with over 25+ years of experience, minimally invasive surgical
						care for a wide range of gynecological conditions with our state of the art laparoscopic
						procedures.
					</p>
				</div>
				<div class="faq-accordian ">
					<div class="faq-accordian-single faq-accordian-single">
						<div class="faq-accordian-single-head js-accordion-title">
							<img src="assets/images/arrow-right-w.webp" alt="">
							<h5>
								Personalized, Patient Centric Approach
							</h5>

						</div>
						<div class="faq-accordian-single-cont accordion-content">
							<p>
								With advanced laparoscopic techniques, our specialists customize the treatment plan to
								suit each patient’s specific needs, ensuring optimal outcomes and quicker recovery.
							</p>

						</div>
					</div>
					<div class="faq-accordian-single faq-accordian-single">
						<div class="faq-accordian-single-head js-accordion-title">
							<img src="assets/images/arrow-right-w.webp" alt="">
							<h5>
								Minimal Blood Loss
							</h5>

						</div>
						<div class="faq-accordian-single-cont accordion-content">
							<p>
								Our minimally invasive procedures result in significantly reduced blood loss, lowering
								the risk of complications and promoting a faster, more comfortable recovery.
							</p>

						</div>
					</div>
					<div class="faq-accordian-single faq-accordian-single">
						<div class="faq-accordian-single-head js-accordion-title">
							<img src="assets/images/arrow-right-w.webp" alt="">
							<h5>
								Reduced Surgical Time
							</h5>

						</div>
						<div class="faq-accordian-single-cont accordion-content">
							<p>
								Efficient surgical techniques help minimize operation time, enabling faster healing,
								shorter hospital stays, and a quicker return to daily activities.
							</p>
						</div>
					</div>
					<div class="faq-accordian-single faq-accordian-single">
						<div class="faq-accordian-single-head js-accordion-title">
							<img src="assets/images/arrow-right-w.webp" alt="">
							<h5>
								Comprehensive Rehabilitation and Support
							</h5>
						</div>
						<div class="faq-accordian-single-cont accordion-content">
							<p>
								At Precise Hospital, we prioritize your recovery from day one. Our patients are
								encouraged to mobilize early, supported by expert rehabilitation programs designed for a
								smooth, painless, and speedy recovery.
							</p>
						</div>
					</div>
				</div>
				<a href="javascript:void(0);" class="f-btn modal-link-auto">
					<img src="assets/images/btn-aro.webp" alt="">
					<span> Request a callback </span>
				</a>
			</div>
		</div>
	</div>
</section>

<!-- <section class="parameter padng-sec" id="parameter-sec">
	<div class="container-c">
		<div class="parameter-table">
			<table class="rwd-table">
				<tbody>
					<tr>
						<th>Parameter</th>
						<th>Conventional Joint Replacement </th>
						<th>3D Robotics</th>
					</tr>

					<tr>
						<td data-th="Parameter">
							Planning
						</td>
						<td data-th="Fertility check-up">
							Done by the surgeon on 2D X-rays
						</td>
						<td data-th="IUI">
							Done by the surgeon on 3D CT based bone models -Improved accuracy and precision
						</td>

					</tr>
					<tr>
						<td data-th="Parameter">
							Implant
						</td>
						<td data-th="Fertility check-up">
							Surgeon Preference
						</td>
						<td data-th="IUI">
							Patient specific implants/Personalized which will suit best to the patient
						</td>

					</tr>
					<tr>
						<td data-th="Parameter">
							Operative Time
						</td>
						<td data-th="Fertility check-up">
							2 - 3 hrs
						</td>
						<td data-th="IUI">
							1-2 hrs
						</td>

					</tr>
					<tr>
						<td data-th="Parameter">
							Blood Loss
						</td>
						<td data-th="Fertility check-up">
							1 - 2 litres
						</td>
						<td data-th="IUI">
							Minimal
						</td>

					</tr>
					<tr>
						<td data-th="Parameter">
							Inability to perform daily tasks
						</td>
						<td data-th="Fertility check-up">
							Total Laparoscopy
						</td>
						<td data-th="IUI">
							Regain independence in daily activities
						</td>

					</tr>
					<tr>
						<td data-th="Parameter">
							Muscle Cut
						</td>
						<td data-th="Fertility check-up">
							Yes
						</td>
						<td data-th="IUI">
							No
						</td>

					</tr>
					<tr>
						<td data-th="Parameter">
							Stitches
						</td>
						<td data-th="Fertility check-up">
							Yes
						</td>
						<td data-th="IUI">
							No stitch technique
						</td>

					</tr>
					<tr>
						<td data-th="Parameter">
							Accuracy
						</td>
						<td data-th="Fertility check-up">
							Average
						</td>
						<td data-th="IUI">
							High
						</td>

					</tr>

				</tbody>
			</table>
		</div>
	</div>
</section> -->

<!-- <section class="cpmpare padng-sec" id="cpmpare-sec">
	<div class="container-c">
		<div class="sub-head">
			<h2>
				Function following Total <span class="brk blu-clr"> 3D Robotics Laparoscopy </span>
			</h2>
			<p>
				Add something like a comparison, framed better than this and crisper too:
			</p>
		</div>
		<div class="cpmpare-cont">
			<div class="cpmpare-single">
				<h3><span> 1 </span> Money Saved</h3>
				<div class="cpmpare-single-data">
					<div class="cpmpare-single-data-single">
						<h6>Climbing stairs</h6>
					</div>
					<div class="cpmpare-single-data-single">
						<img src="assets/images/tick.webp" alt="">
					</div>
				</div>
			</div>
			<div class="cpmpare-single">
				<h3><span> 1 </span> Money Saved</h3>
				<div class="cpmpare-single-data">
					<div class="cpmpare-single-data-single">
						<h6>Sitting cross legged</h6>
					</div>
					<div class="cpmpare-single-data-single">
						<img src="assets/images/tick.webp" alt="">
					</div>
				</div>
			</div>
			<div class="cpmpare-single">
				<h3><span> 1 </span> Money Saved</h3>
				<div class="cpmpare-single-data">
					<div class="cpmpare-single-data-single">
						<h6>Trekking/hiking</h6>
					</div>
					<div class="cpmpare-single-data-single">
						<img src="assets/images/tick.webp" alt="">
					</div>
				</div>
			</div>
			<div class="cpmpare-single">
				<h3><span> 1 </span> Money Saved</h3>
				<div class="cpmpare-single-data">
					<div class="cpmpare-single-data-single">
						<h6>Driving 2 wheeler/4 wheeler</h6>
					</div>
					<div class="cpmpare-single-data-single">
						<img src="assets/images/tick.webp" alt="">
					</div>
				</div>
			</div>

		</div>
	</div>
</section> -->

<section class="faq-all padng-sec" id="faq-sec">
	<div class="container-c">
		<div class="sub-head">
			<h2>Frequently Asked <span class="blu-clr"> Questions </span></h2>
			<p>Addressing Common Questions and Concerns About Gynecology Laparoscopy Procedures </p>
		</div>
		<div class="faq-accordian ">
			<div class="faq-accordian-single faq-accordian-single-2">
				<div class="faq-accordian-single-head js-accordion-title-2">
					<img src="assets/images/right-icon.webp" alt="">
					<h5>
						What is gynecological laparoscopy?
					</h5>

				</div>
				<div class="faq-accordian-single-cont accordion-content-2">
					<p>
						Gynecological laparoscopy is a minimally invasive surgical procedure used to diagnose and treat
						conditions affecting the female reproductive system. It involves making small incisions and
						using a laparoscope (a thin, lighted tube with a camera) to view internal organs.
					</p>
				</div>
			</div>
			<div class="faq-accordian-single faq-accordian-single-2">
				<div class="faq-accordian-single-head js-accordion-title-2">
					<img src="assets/images/right-icon.webp" alt="">
					<h5>
						What conditions can be treated with laparoscopy?
					</h5>

				</div>
				<div class="faq-accordian-single-cont accordion-content-2">
					<p>
						Laparoscopy can be used to treat a variety of conditions such as ovarian cysts, endometriosis,
						fibroids, ectopic pregnancy, pelvic adhesions, infertility issues, and some cancers.
					</p>

				</div>
			</div>
			<div class="faq-accordian-single faq-accordian-single-2">
				<div class="faq-accordian-single-head js-accordion-title-2">
					<img src="assets/images/right-icon.webp" alt="">
					<h5>
						How is laparoscopy different from traditional surgery?
					</h5>

				</div>
				<div class="faq-accordian-single-cont accordion-content-2">
					<p>
						Unlike open surgery, laparoscopy requires only small incisions, resulting in less pain, minimal
						blood loss, reduced scarring, shorter hospital stays, and faster recovery times.
					</p>
				</div>
			</div>
			<div class="faq-accordian-single faq-accordian-single-2">
				<div class="faq-accordian-single-head js-accordion-title-2">
					<img src="assets/images/right-icon.webp" alt="">
					<h5>
						Is laparoscopy painful?
					</h5>
				</div>
				<div class="faq-accordian-single-cont accordion-content-2">
					<p>
						Most patients experience minimal pain after laparoscopic surgery. Pain management medications
						and early mobilization help in reducing discomfort significantly.
					</p>
				</div>
			</div>
			<div class="faq-accordian-single faq-accordian-single-2">
				<div class="faq-accordian-single-head js-accordion-title-2">
					<img src="assets/images/right-icon.webp" alt="">
					<h5>
						How long does it take to recover after a Gynec laparoscopy?
					</h5>
				</div>
				<div class="faq-accordian-single-cont accordion-content-2">
					<p>
						Short procedures usually within 24-48 hours. Longer procedures can take a little longer. Most
						normal and comfortable activities can be resumed within 48-72 hours. But it may take 1-2 weeks
						to get back to normal life after healing.
					</p>
				</div>
			</div>
			<div class="faq-accordian-single faq-accordian-single-2">
				<div class="faq-accordian-single-head js-accordion-title-2">
					<img src="assets/images/right-icon.webp" alt="">
					<h5>
						Will I need to stay overnight in the hospital?
					</h5>

				</div>
				<div class="faq-accordian-single-cont accordion-content-2">
					<p>
						Many laparoscopic procedures are done on a day care basis, allowing patients to go home the same
						day. However, some cases may require an overnight stay for monitoring.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-contact padng-sec" id="contactus">
	<div class="container-c">
		<div class="hme-cntct-al-c">
			<div class="offline-book">
				<div class="sub-head">
					<h2>Schedule <span class="blu-clr"> Doctor's Consultation </span> </h2>
					<p>
						Reach out to our friendly support team anytime via contact form, call, or whatsapp.
					</p>
				</div>

				<div class="cnt-inf-home-contaact">
					<!-- <div class="cnt-inf">
						<a href="javascript:void(0);" class="cnt-inf-a">
                            <span class="cnt-inf-icon">
                                <img src="assets/images/call-icon-w.webp" alt="" loading="lazy">
                            </span>
                            <p class="modal-link-auto" >Request a callback</p>
                        </a>
					</div> -->
					<div class="cnt-inf">
						<a href="tel:09849792111" class="cnt-inf-a">
							<span class="cnt-inf-icon">
								<img src="assets/images/call-icon-w.webp" alt="" loading="lazy">
							</span>
							<p>098497 92111</p>
						</a>
					</div>
					<div class="cnt-inf">
						<a href="mailto:dramruthakakollu@gmail.com" class="cnt-inf-a">
							<span class="cnt-inf-icon">
								<img src="assets/images/mail-icon-w.webp" alt="" loading="lazy">
							</span>
							<p class="email-cont"> dramruthakakollu@gmail.com</p>
						</a>
					</div>
					<!-- <div class="cnt-inf get-in-touch-cont-address">
						<span class="cnt-inf-icon">
							<img src="assets/images/location-icon-w.webp" alt="" loading="lazy">
						</span>
						<p>
							12, Masab Tank - Banjara Hills Rd, Amudi Nagar, Bhola Nagar, Banjara Hills, Hyderabad, Telangana 500028
						</p>
					</div> -->

				</div>

				<!-- <div class="offline-book-time">
					<h4>Working Hours</h4>
					<div class="offline-book-time-single">
						<p> Mon - Sun </p>
						<p> 10:00 AM to 03:00 PM </p>
					</div>

					<div class="offline-book-time-single">
						<p> Sunday </p>
						<p>
							Closed
						</p>
					</div>

				</div> -->
			</div>
			<div class="form-contact-hom fourc-up-b">
				<div class="form-block">
					<div class="sub-head">
						<h4> Please provide the following details </h4>
					</div>

					<div class="form-body">
						<form action="javascript:void(0);" method="post" name="feedback-form">
							<input type="hidden" placeholder="Full Name" value="<?= FOOTER_APPOINTMENT ?>"
								id="footer_appointment">

							<div class="input-grp">
								<div class="input-grp-single full-width-c">
									<input type="text" id="footer_appointment_name" name="fname"
										placeholder="Full Name*">
								</div>
							</div>

							<div class="input-grp">
								<div class="input-grp-single full-width-c">
									<input type="tel" id="footer_appointment_mobile" name="tel"
										placeholder="Phone Number*">
								</div>
							</div>

							<div class="input-grp">

								<div class="input-grp-single full-width-c">
									<input type="email" id="footer_appointment_email" name="email" placeholder="Email">
								</div>

							</div>
							<h5 style="margin-bottom:5px;">Preferred consultation date</h5>
							<div class="input-grp">
								<div class="input-grp-single full-width-c datepicker-input-c">
									<!-- <input type="date" placeholder="Preferred consultation date" class="mob-date-picker"
                                        id="quick_appointment_date"> -->
									<input type="text" id="footer_appointment_date" placeholder="">
									<img src="assets/images/calendar.webp" alt="" class="date-icon-c">

								</div>
							</div>

							<!-- <div class="input-grp">
                                <div class="full-width-c">
                                    <select name="" id="footer_appointment_treatment_reason">
                                        <option value=""> Why do you need laparoscopy?*</option>
                                        <option value="Infertility diagnosis"> Infertility diagnosis </option>
                                        <option value="Endometriosis treatment"> Endometriosis treatment </option>
                                        <option value="Fibroids/cysts removal"> Fibroids/cysts removal </option>
                                        <option value="Pelvic pain evaluation"> Pelvic pain evaluation </option>
                                        <option value="Other issue (need advice)"> Other issue (need advice) </option>
                                        <option value="Just exploring"> Just exploring </option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-grp">
                                <div class="full-width-c">
                                    <select name="" id="footer_appointment_treatment_advised">
                                        <option value=""> Has a doctor advised laparoscopy? </option>
                                        <option value="Yes, ready to proceed"> Yes, ready to proceed </option>
                                        <option value="Yes, want second opinion"> Yes, want second opinion </option>
                                        <option value="Not yet, but suspect"> Not yet, but suspect </option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-grp">
                                <div class="full-width-c">
                                    <select name="" id="footer_appointment_treatment_start">
                                        <option value=""> When urgently do you want the procedure?*</option>
                                        <option value="Immediately / Within 1 week"> Immediately / Within 1 week
                                        </option>
                                        <option value="Within 1 month"> Within 1 month </option>
                                        <option value="In 1-3 months"> In 1-3 months </option>
                                        <option value="After 3 months"> After 3 months </option>
                                    </select>
                                </div>
                            </div> -->

							<div class="input-grp">
								<button id="footer_appointment_btn" type="submit" name="submit" class=" f-btn">
									<img src="assets/images/btn-aro.webp" alt="">
									Request a callback
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="get-in-touch padng-sec" id="get-in-touch-sec">
	<div class="container-c">
		<div class="sub-head">
			<h2>
				Get in <span class="blu-clr"> Touch </span>
			</h2>
			<p>
				We're here to assist you every step of the way.
			</p>
		</div>
		<div class="get-in-touch-one">
			<div class="get-in-touch-single">

				<div class="get-in-touch-office-pic">
					<div class="office-picture-full">
						<picture>
							<source media="(max-width:768px)" srcset="assets/images/office-1-mob.webp" loading="lazy">
							<img src="assets/images/office-1.webp" loading="lazy">
						</picture>
					</div>
					<div class="office-picture-full">
						<div class="office-picture-qtr">
							<picture>
								<source media="(max-width:768px)" srcset="assets/images/office-2-mob.webp"
									loading="lazy">
								<img src="assets/images/office-2.webp" loading="lazy">
							</picture>
						</div>
						<div class="office-picture-qtr">
							<picture>
								<source media="(max-width:768px)" srcset="assets/images/office-3-mob.webp"
									loading="lazy">
								<img src="assets/images/office-3.webp" loading="lazy">
							</picture>
						</div>
						<div class="office-picture-qtr">
							<picture>
								<source media="(max-width:768px)" srcset="assets/images/office-4-mob.webp"
									loading="lazy">
								<img src="assets/images/office-4.webp" loading="lazy">
							</picture>
						</div>
					</div>
				</div>

				<div class="get-in-touch-map">

					<div class="location-1">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.0918935801974!2d78.4427365!3d17.407377099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb97ada2884921%3A0x6a16288f52ea5c0c!2sPrecise%20Hospital!5e0!3m2!1sen!2sin!4v1782394440780!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>

						<div>

							<div class="cnt-inf">
								<a href="tel:09849792111" class="cnt-inf-a">
									<span class="cnt-inf-icon">
										<img src="assets/images/call-icon-w.webp" alt="" loading="lazy">
									</span>
									<p>098497 92111</p>
								</a>
							</div>

							<div class="cnt-inf get-in-touch-cont-address">
								<span class="cnt-inf-icon">
									<img src="assets/images/time1.webp" alt="" loading="lazy" class="time">
								</span>
								<p>
									<strong>Opening Hours:</strong> 10:30 AM to 3:30 PM
								</p>
							</div>

							<div class="cnt-inf get-in-touch-cont-address">
								<span class="cnt-inf-icon">
									<img src="assets/images/location-icon-w.webp" alt="" loading="lazy">
								</span>
								<p>
									Precise hospitals, Road no. 12, Banjara Hills, Hyderabad, Telangana
								</p>
							</div>

						</div>


					</div>

					<div class="location-1">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.614496253569!2d78.4410662!3d17.430278599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90d3f073b857%3A0x587da448454fe9e!2sAmrutha%20Clinic!5e0!3m2!1sen!2sin!4v1782484087003!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>

						<div>

							<div class="cnt-inf">
								<a href="tel:09849792111" class="cnt-inf-a">
									<span class="cnt-inf-icon">
										<img src="assets/images/call-icon-w.webp" alt="" loading="lazy">
									</span>
									<p>098497 92111</p>
								</a>
							</div>

							<div class="cnt-inf get-in-touch-cont-address">
								<span class="cnt-inf-icon">
									<img src="assets/images/time1.webp" alt="" loading="lazy" class="time">
								</span>
								<p>
									<strong>Opening Hours:</strong> 4:00 PM to 7:00 PM
								</p>
							</div>

							<div class="cnt-inf get-in-touch-cont-address">
								<span class="cnt-inf-icon">
									<img src="assets/images/location-icon-w.webp" alt="" loading="lazy">
								</span>
								<p>
									Amrutha clinic, Sri Nagar Colony, Hyderabad, Telangana
								</p>
							</div>

						</div>


					</div>


				</div>

			</div>

		</div>
	</div>
</section>

<!-- <section class="get-in-touch multi-adderss padng-sec" id="multi-add-sec">
	<div class="container-c">
		<div class="sub-head">
			<h2>
				Get in <span class="blu-clr"> Touch </span>
			</h2>
			<p>
				We're here to assist you every step of the way.
			</p>
		</div>

		<div class="get-in-touch-all">
			<div class="get-in-touch-single">
				<div class="get-in-touch-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.0165408443686!2d72.47440627509175!3d23.023164879173414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b0bd8d7a6e1%3A0xd218fdd9f79416b!2sSaraswati%20Hospital%20%7C%20Best%20Multispeciality%20Hospital%20in%20Bopal!5e0!3m2!1sen!2sin!4v1732628454158!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="cnt-inf-home-contaact">
					<h4>Saraswati Hospital | Best Multispeciality Hospital in Bopal</h4>
					<div class="cnt-inf">
						<a href="javascript:void(0);" data-number="tel:+918143892910" class="cnt-inf-a cnt-inf-call modal-link">
							<span class="cnt-inf-icon">
								<img src="assets/images/call-icon-w.webp" alt="" loading="lazy">
							</span>
							<span class="f-btn">
								Call to Enquire

							</span>
						</a>
					</div>
					<div class="cnt-inf">
						<a href="mailto:appointmentsgenesis@gmail.com" class="cnt-inf-a">
							<span class="cnt-inf-icon">
								<img src="assets/images/mail-icon-w.webp" alt="" loading="lazy">
							</span>
							appointmentsgenesis@gmail.com
						</a>

					</div>
					<div class="cnt-inf get-in-touch-cont-address">
						<span class="cnt-inf-icon">
							<img src="assets/images/location-icon-w.webp" alt="" loading="lazy">
						</span>
						<p>
							Nr Shivalik Satyamev, Vakil Saheb Bridge Ambli Bopal, Sardar Patel Ring Rd, T Junction, Bopal, Ahmedabad, Gujarat 380058
						</p>
					</div>
					<a href="javascript:void(0);" class="f-btn modal-link-auto">
						<img src="assets/images/btn-aro.webp" alt="">
						Book A Consultation
					</a>
				</div>
			</div>
			<div class="get-in-touch-single">
				<div class="get-in-touch-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.5171580161013!2d72.5068700750924!3d23.041494279160474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b4f9b56f671%3A0x710f96e3e2fe01e4!2sSterling%20Hospitals%20-%20Sindhu%20Bhavan%2C%20Ahmedabad!5e0!3m2!1sen!2sin!4v1732628709895!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="cnt-inf-home-contaact">
					<h4>Sterling Hospitals - Sindhu Bhavan, Ahmedabad</h4>
					<div class="cnt-inf">
						<a href="javascript:void(0);" data-number="tel:+918019462910" class="cnt-inf-a cnt-inf-call modal-link">
							<span class="cnt-inf-icon">
								<img src="assets/images/call-icon-w.webp" alt="" loading="lazy">
							</span>
							<span class="f-btn">
								Call to Enquire

							</span>
						</a>
					</div>
					<div class="cnt-inf">
						<a href="mailto:infogenesis.03@gmail.com" class="cnt-inf-a">
							<span class="cnt-inf-icon">
								<img src="assets/images/mail-icon-w.webp" alt="" loading="lazy">
							</span>
							infogenesis.03@gmail.com
						</a>

					</div>
					<div class="cnt-inf get-in-touch-cont-address">
						<span class="cnt-inf-icon">
							<img src="assets/images/location-icon-w.webp" alt="" loading="lazy">
						</span>
						<p>
							Off S G Highway, Auda Garden Rd, Bodakdev, Ahmedabad, Gujarat 380054
						</p>
					</div>
					<a href="javascript:void(0);" class="f-btn modal-link-auto">
						<img src="assets/images/btn-aro.webp" alt="">
						Book A Consultation
					</a>
				</div>
			</div>
			<div class="get-in-touch-single">
				<div class="get-in-touch-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.7395337760267!2d72.55338777509226!3d23.033333879166246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85dc1d3d3aa1%3A0x757879a4c249020e!2sPushya%20Hospital!5e0!3m2!1sen!2sin!4v1732628830508!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="cnt-inf-home-contaact">
					<h4> Pushya Hospital </h4>
					<div class="cnt-inf">
						<a href="javascript:void(0);" data-number="tel:+918121002910" class="cnt-inf-a cnt-inf-call modal-link">
							<span class="cnt-inf-icon">
								<img src="assets/images/call-icon-w.webp" alt="" loading="lazy">
							</span>
							<span class="f-btn">
								Call to Enquire
							</span>
						</a>
					</div>
					<div class="cnt-inf">
						<a href="mailto:infogenesis.03@gmail.com" class="cnt-inf-a">
							<span class="cnt-inf-icon">
								<img src="assets/images/mail-icon-w.webp" alt="" loading="lazy">
							</span>
							infogenesis.02@gmail.com
						</a>

					</div>
					<div class="cnt-inf get-in-touch-cont-address">
						<span class="cnt-inf-icon">
							<img src="assets/images/location-icon-w.webp" alt="" loading="lazy">
						</span>
						<p>
							32, Umashankar Joshi Marg, near Wagh Bakri Tea Lounge, Opposite ABC-1, Sardar Patel Nagar, Navrangpura, Ahmedabad, Gujarat 380009
						</p>
					</div>
					<a href="javascript:void(0);" class="f-btn modal-link-auto">
						<img src="assets/images/btn-aro.webp" alt="">
						Book A Consultation
					</a>

				</div>
			</div>

		</div>

	</div>
</section> -->

<!-- <section class="get-in-touch-single padng-sec" id="get-in-touch-sec">
	<div class="container-c">
		<div class="get-in-touch-single-all">
			<div class="get-in-touch-single-all-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60337.49864603316!2d72.834491!3d19.059619!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9da01027cb3%3A0xfbaba3e9ac2526af!2sAeon%20Clinic!5e0!3m2!1sen!2sin!4v1721658379890!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="get-in-touch-office-pic">
				<div class="office-picture-full">
					<picture>
						<source media="(max-width:768px)" srcset="assets/images/office-1-mob.webp" loading="lazy">
						<img src="assets/images/office-1.webp" loading="lazy">
					</picture>
				</div>
				<div class="office-picture-full">
					<div class="office-picture-qtr">
						<picture>
							<source media="(max-width:768px)" srcset="assets/images/office-2-mob.webp" loading="lazy">
							<img src="assets/images/office-2.webp" loading="lazy">
						</picture>
					</div>
					<div class="office-picture-qtr">
						<picture>
							<source media="(max-width:768px)" srcset="assets/images/office-3-mob.webp" loading="lazy">
							<img src="assets/images/office-3.webp" loading="lazy">
						</picture>
					</div>
					<div class="office-picture-qtr">
						<picture>
							<source media="(max-width:768px)" srcset="assets/images/office-4-mob.webp" loading="lazy">
							<img src="assets/images/office-4.webp" loading="lazy">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->


<div class="clearfix"></div>
<?php include 'inc/footer.php'; ?>