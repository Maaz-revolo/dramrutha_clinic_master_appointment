$(document).ready(function () {
  const ranges = [
    { range: [-Infinity, 9], text: "You should see infertility specialist" },
    {
      range: [10, 14],
      text: "You should see your gynecologist & have some testing done",
    },
    { range: [15, 19], text: "Chances are pretty good" },
    { range: [20, 24], text: "Very fertile" },
  ];
  function getScoreTextFromRange(value) {
    for (let i = 0; i < ranges.length; i++) {
      const range = ranges[i].range;
      if (value >= range[0] && value <= range[1]) {
        return ranges[i].text;
      }
    }
    return "";
  }

  var otherParamDetails =
    (utm_matchtype ? '"' + utm_matchtype + '", ' : "") +
    (utm_adposition ? '"' + utm_adposition + '", ' : "") +
    (utm_devicemodel ? '"' + utm_devicemodel + '", ' : "") +
    (utm_content ? '"' + utm_content + '", ' : "") +
    (utm_location ? '"' + utm_location + '"' : "");

    var treatmentReasomValidateMessage =
    "We prioritize patients looking for laparoscopy. Contact us when you're ready for treatment!";
  var treatmentReasonValidateValue = "Just exploring";

  var treatmentStartValidateMessage =
    "We prioritize patients ready for treatment within 1-3 months. Contact us when you're ready!";
  var treatmentStartValidateValue = "After 3 months";

  $("#quick_appointment_btn").click(function (e) {
    // e.preventDefault();
    var email_type = $("#quick_appointment").val();
    var fields = [
      {
        id: "quick_appointment_name",
        message: "Please enter your name.",
      },
      {
        id: "quick_appointment_mobile",
        message: "Please enter a valid mobile number.",
        validationFunction: isValidMobile,
      },
      {
        id: "quick_appointment_email",
        message: "Please enter a valid Email.",
        validationFunction: isValidEmail,
        allowEmpty: true,
      },
      {
        id: "quick_appointment_treatment_reason",
        message: "Please select value",
        validationFunction: validateTreatmentReason,
        allowEmpty: true,
      },
      {
        id: "quick_appointment_treatment_advised",
        message: "Please select value",
        allowEmpty: true,
      },
      {
        id: "quick_appointment_treatment_start",
        message: "Please select value",
        validationFunction: validateTreatmentStart,
        allowEmpty: true,
      },
      
    ];
    // Validate form fields
    if (!validateForm(fields)) {
      return;
    }

    var name = $("#quick_appointment_name").val();
    var mobile = $("#quick_appointment_mobile").val();
    var email = $("#quick_appointment_email").val();
    var treatmentReason = $("#quick_appointment_treatment_reason").val();
    var treatmentAdvise = $("#quick_appointment_treatment_advised").val();
    var treatmentStart = $("#quick_appointment_treatment_start").val();
    var date = $("#quick_appointment_date").val();
    // Gather form data

    var originalBtnText = $(this).text();
    // Perform AJAX request
    $.ajax({
      url: "send_email.php",
      method: "POST",
      data: {
        name: name,
        mobile: mobile,
        email: email,
        treatmentReason: treatmentReason,
        treatmentAdvise: treatmentAdvise,
        treatmentStart: treatmentStart,
        date: date,
        email_type: email_type,
        campaigntype: campaignTypeValue,
        utm_campaign: utm_campaign,
        utm_term: utm_term,
        adName: adName,
        otherParamDetails: otherParamDetails,
      },
      dataType: "json",
      beforeSend: function () {
        $("#quick_appointment_btn").prop("disabled", true);
        $("#quick_appointment_btn").text("Submitting...");
      },
      success: function (response) {
        if (response.success) {
          alert(response.message); // Show success message
          window.location.href =
            "thank-you.php?campaigntype=" +
            campaignTypeValue +
            "&utm_campaign=" +
            utm_campaign +
            "&utm_term=" +
            utm_term +
            "&utm_adname=" +
            adName +
            "&utm_matchtype=" +
            utm_matchtype +
            "&utm_adposition=" +
            utm_adposition +
            "&utm_devicemodel=" +
            utm_devicemodel +
            "&utm_content=" +
            utm_content +
            "&utm_location=" +
            utm_location;
        } else {
          alert("Error: " + response.message); // Show error message
        }
      },
      error: function () {
        alert("Error submitting form.");
      },
      complete: function () {
        $("#quick_appointment_btn").prop("disabled", false);
        $("#quick_appointment_btn").text(originalBtnText);
      },
    });
  });

  $("#footer_appointment_btn").click(function (e) {
    // e.preventDefault();
    var email_type = $("#footer_appointment").val();
    var fields = [
      {
        id: "footer_appointment_name",
        message: "Please enter your name.",
      },
      {
        id: "footer_appointment_mobile",
        message: "Please enter a valid mobile number.",
        validationFunction: isValidMobile,
      },
      {
        id: "footer_appointment_email",
        message: "Please enter a valid Email.",
        validationFunction: isValidEmail,
        allowEmpty: true,
      },
      {
        id: "footer_appointment_treatment_reason",
        message: "Please select value",
        validationFunction: validateTreatmentReason,
        allowEmpty: true,
      },
      {
        id: "footer_appointment_treatment_advised",
        message: "Please select value",
        allowEmpty: true,
      },
      {
        id: "footer_appointment_treatment_start",
        message: "Please select value",
        validationFunction: validateTreatmentStart,
        allowEmpty: true,
      },
      
    ];
    // Validate form fields
    if (!validateForm(fields)) {
      return;
    }

    var name = $("#footer_appointment_name").val();
    var mobile = $("#footer_appointment_mobile").val();
    var email = $("#footer_appointment_email").val();
    var treatmentReason = $("#footer_appointment_treatment_reason").val();
    var treatmentAdvise = $("#footer_appointment_treatment_advised").val();
    var treatmentStart = $("#footer_appointment_treatment_start").val();
    var date = $("#footer_appointment_date").val();
    // Gather form data

    var originalBtnText = $(this).text();
    // Perform AJAX request
    $.ajax({
      url: "send_email.php",
      method: "POST",
      data: {
        name: name,
        mobile: mobile,
        email: email,
        treatmentReason: treatmentReason,
        treatmentAdvise: treatmentAdvise,
        treatmentStart: treatmentStart,
        date: date,
        email_type: email_type,
        campaigntype: campaignTypeValue,
        utm_campaign: utm_campaign,
        utm_term: utm_term,
        adName: adName,
        otherParamDetails: otherParamDetails,
      },
      dataType: "json",
      beforeSend: function () {
        $("#footer_appointment_btn").prop("disabled", true);
        $("#footer_appointment_btn").text("Submitting...");
      },
      success: function (response) {
        if (response.success) {
          alert(response.message); // Show success message
          window.location.href =
            "thank-you.php?campaigntype=" +
            campaignTypeValue +
            "&utm_campaign=" +
            utm_campaign +
            "&utm_term=" +
            utm_term +
            "&utm_adname=" +
            adName +
            "&utm_matchtype=" +
            utm_matchtype +
            "&utm_adposition=" +
            utm_adposition +
            "&utm_devicemodel=" +
            utm_devicemodel +
            "&utm_content=" +
            utm_content +
            "&utm_location=" +
            utm_location;
        } else {
          alert("Error: " + response.message); // Show error message
        }
      },
      error: function () {
        alert("Error submitting form.");
      },
      complete: function () {
        $("#footer_appointment_btn").prop("disabled", false);
        $("#footer_appointment_btn").text(originalBtnText);
      },
    });
  });

  $("#modal_popup_appointment_btn").click(function (e) {
    // e.preventDefault();
    var email_type = $("#modal_popup_appointment").val();
    var fields = [
      {
        id: "modal_popup_appointment_first_name",
        message: "Please enter your first name.",
      },
      {
        id: "modal_popup_appointment_last_name",
        message: "Please enter your last name.",
      },
      {
        id: "modal_popup_appointment_mobile",
        message: "Please enter a valid mobile number",
        validationFunction: isValidMobile,
      },
      {
        id: "modal_popup_appointment_age_bracket",
        message: "Please select Age Bracket.",
      },
      {
        id: "modal_popup_appointment_menstrual_cycle_length",
        message: "Please select Menstrual Cycle Length.",
      },
      {
        id: "modal_popup_appointment_previous_pregnancies",
        message: "Please select Previous Pregnancies.",
      },
      {
        id: "modal_popup_appointment_previous_surgeries_history",
        message: "Please select Previous Surgeries History.",
      },
      {
        id: "modal_popup_appointment_sexual_intercourse_frequency",
        message: "Please select Sexual Intercourse Frequency.",
      },
      {
        id: "modal_popup_appointment_mothers_age_at_menopause",
        message: "Please select Mothers age at menopause.",
      },
      {
        id: "modal_popup_appointment_history_of_sexual_transmitted_diseases",
        message: "Please History of sexual transmitted diseases.",
      },
    ];

    // Validate form fields
    if (!validateForm(fields)) {
      return;
    }

    var firstName = $("#modal_popup_appointment_first_name").val();
    var lastName = $("#modal_popup_appointment_last_name").val();
    var mobile = $("#modal_popup_appointment_mobile").val();
    var ageBracket = $("#modal_popup_appointment_age_bracket").val();
    var menstrualCycleLength = $(
      "#modal_popup_appointment_menstrual_cycle_length"
    ).val();
    var previousPregnancies = $(
      "#modal_popup_appointment_previous_pregnancies"
    ).val();
    var previousSurgeriesHistory = $(
      "#modal_popup_appointment_previous_surgeries_history"
    ).val();
    var sexualIntercourseFrequency = $(
      "#modal_popup_appointment_sexual_intercourse_frequency"
    ).val();
    var mothersAgeAtMenopause = $(
      "#modal_popup_appointment_mothers_age_at_menopause"
    ).val();
    var historyOfSexualTransmittedDiseases = $(
      "#modal_popup_appointment_history_of_sexual_transmitted_diseases"
    ).val();

    var totalScore =
      Number(ageBracketScore[ageBracket] ?? 0) +
      Number(menstrualCycleLengthScore[menstrualCycleLength] ?? 0) +
      Number(previousPregnanciesScore[previousPregnancies] ?? 0) +
      Number(previousSurgeriesHistoryScore[previousSurgeriesHistory] ?? 0) +
      Number(sexualIntercourseFrequencyScore[sexualIntercourseFrequency] ?? 0) +
      Number(mothersAgeAtMenopauseScore[mothersAgeAtMenopause] ?? 0) +
      Number(
        historyOfSexualTransmittedDiseasesScore[
          historyOfSexualTransmittedDiseases
        ] ?? 0
      );
    // Gather form data

    var scoreMsg = getScoreTextFromRange(totalScore);
    // $('.custom-modal-score-dtl h5 span').text(firstName + ' ' +lastName);
    // $('.custom-modal-score-dtl .counter').text(totalScore);
    // $('body').addClass("modal-open-score-dtl");
    // $('body').removeClass("modal-open-score");

    var originalBtnText = $(this).text();
    // Perform AJAX request
    $.ajax({
      url: "send_email.php",
      method: "POST",
      data: {
        firstName: firstName,
        lastName: lastName,
        mobile: mobile,
        ageBracket: ageBracket + " (" + ageBracketScore[ageBracket] + ")",
        menstrualCycleLength:
          menstrualCycleLength +
          " (" +
          menstrualCycleLengthScore[menstrualCycleLength] +
          ")",
        previousPregnancies:
          previousPregnancies +
          " (" +
          previousPregnanciesScore[previousPregnancies] +
          ")",
        previousSurgeriesHistory:
          previousSurgeriesHistory +
          " (" +
          previousSurgeriesHistoryScore[previousSurgeriesHistory] +
          ")",
        sexualIntercourseFrequency:
          sexualIntercourseFrequency +
          " (" +
          sexualIntercourseFrequencyScore[sexualIntercourseFrequency] +
          ")",
        mothersAgeAtMenopause:
          mothersAgeAtMenopause +
          " (" +
          mothersAgeAtMenopauseScore[mothersAgeAtMenopause] +
          ")",
        historyOfSexualTransmittedDiseases:
          historyOfSexualTransmittedDiseases +
          " (" +
          historyOfSexualTransmittedDiseasesScore[
            historyOfSexualTransmittedDiseases
          ] +
          ")",
        totalScore: totalScore,
        scoreMsg: scoreMsg,
        email_type: email_type,
        campaigntype: campaignTypeValue,
        utm_campaign: utm_campaign,
        utm_term: utm_term,
        adName: adName,
        otherParamDetails: otherParamDetails,
      },
      dataType: "json",
      beforeSend: function () {
        $("#modal_popup_appointment_btn").prop("disabled", true);
        $("#modal_popup_appointment_btn").text("Calculating...");
      },
      success: function (response) {
        if (response.success) {
          alert(response.message); // Show success message
          window.location.href =
            "thank-you-score.php?campaigntype=" +
            campaignTypeValue +
            "&utm_campaign=" +
            utm_campaign +
            "&utm_term=" +
            utm_term +
            "&utm_adname=" +
            adName +
            "&utm_matchtype=" +
            utm_matchtype +
            "&utm_adposition=" +
            utm_adposition +
            "&utm_devicemodel=" +
            utm_devicemodel +
            "&utm_content=" +
            utm_content +
            "&utm_location=" +
            utm_location +
            "&firstName=" +
            firstName +
            "&lastName=" +
            lastName +
            "&totalScore=" +
            totalScore +
            "&scoreMsg=" +
            scoreMsg;
          // alert(response.message); // Show success message
          // window.location.href = 'thank-you.php';
        } else {
          alert("Error: " + response.message); // Show error message
        }
      },
      error: function () {
        alert("Error submitting form.");
      },
      complete: function () {
        $("#modal_popup_appointment_btn").prop("disabled", false);
        $("#modal_popup_appointment_btn").text(originalBtnText);
      },
    });
  });

  $("#simple_modal_popup_appointment_btn").click(function (e) {
    // e.preventDefault();
    var email_type = $("#simple_modal_popup_appointment").val();
    var fields = [
      {
        id: "simple_modal_popup_appointment_name",
        message: "Please enter your name.",
      },
      {
        id: "simple_modal_popup_appointment_mobile",
        message: "Please enter a valid mobile number.",
        validationFunction: isValidMobile,
      },
      {
        id: "simple_modal_popup_appointment_email",
        message: "Please enter a valid Email.",
        validationFunction: isValidEmail,
        allowEmpty: true,
      },
      {
        id: "simple_modal_popup_appointment_treatment_reason",
        message: "Please select value",
        validationFunction: validateTreatmentReason,
        allowEmpty: true,
      },
      {
        id: "simple_modal_popup_appointment_treatment_advised",
        message: "Please select value",
        allowEmpty: true,
      },
      {
        id: "simple_modal_popup_appointment_treatment_start",
        message: "Please select value",
        validationFunction: validateTreatmentStart,
        allowEmpty: true,
      },
      
    ];
    // Validate form fields
    if (!validateForm(fields)) {
      return;
    }

    var name = $("#simple_modal_popup_appointment_name").val();
    var mobile = $("#simple_modal_popup_appointment_mobile").val();
    var email = $("#simple_modal_popup_appointment_email").val();
    var treatmentReason = $("#simple_modal_popup_appointment_treatment_reason").val();
    var treatmentAdvise = $("#simple_modal_popup_appointment_treatment_advised").val();
    var treatmentStart = $("#simple_modal_popup_appointment_treatment_start").val();
    var date = $("#simple_modal_popup_appointment_date").val();
    // Gather form data

    var originalBtnText = $(this).text();
    // Perform AJAX request
    $.ajax({
      url: "send_email.php",
      method: "POST",
      data: {
        name: name,
        mobile: mobile,
        email: email,
        treatmentReason: treatmentReason,
        treatmentAdvise: treatmentAdvise,
        treatmentStart: treatmentStart,
        date: date,
        email_type: email_type,
        campaigntype: campaignTypeValue,
        utm_campaign: utm_campaign,
        utm_term: utm_term,
        adName: adName,
        otherParamDetails: otherParamDetails,
      },
      dataType: "json",
      beforeSend: function () {
        $("#simple_modal_popup_appointment_btn").prop("disabled", true);
        $("#simple_modal_popup_appointment_btn").text("Submitting...");
      },
      success: function (response) {
        if (response.success) {
          alert(response.message); // Show success message
          window.location.href =
            "thank-you.php?campaigntype=" +
            campaignTypeValue +
            "&utm_campaign=" +
            utm_campaign +
            "&utm_term=" +
            utm_term +
            "&utm_adname=" +
            adName +
            "&utm_matchtype=" +
            utm_matchtype +
            "&utm_adposition=" +
            utm_adposition +
            "&utm_devicemodel=" +
            utm_devicemodel +
            "&utm_content=" +
            utm_content +
            "&utm_location=" +
            utm_location;
        } else {
          alert("Error: " + response.message); // Show error message
        }
      },
      error: function () {
        alert("Error submitting form.");
      },
      complete: function () {
        $("#simple_modal_popup_appointment_btn").prop("disabled", false);
        $("#simple_modal_popup_appointment_btn").text(originalBtnText);
      },
    });
  });

  $("#f_call_btn").click(function (e) {
    // e.preventDefault();
    // e.stopPropagation();
    var email_type = $(this).data("for");
    var fields = [
      {
        id: "f_call_mobile",
        message: "Please enter a valid mobile number.",
        validationFunction: isValidMobile,
      },
    ];

    // Validate form fields
    if (!validateForm(fields)) {
      return;
    }

    var mobile = $("#f_call_mobile").val();

    // Gather form data

    var originalBtnText = $(this).text();
    var linkHref = $(this).attr("href");
    // Perform AJAX request
    $.ajax({
      url: "send_email.php",
      method: "POST",
      data: {
        mobile: mobile,
        email_type: email_type,
        campaigntype: campaignTypeValue,
        utm_campaign: utm_campaign,
        utm_term: utm_term,
        adName: adName,
        otherParamDetails: otherParamDetails,
      },
      dataType: "json",
      beforeSend: function () {
        $("#f_call_btn").prop("disabled", true);
        $("#f_call_btn").text("Redirecting...");
      },
      success: function (response) {
        if (response.success) {
          // window.open(linkHref, '_blank');
          window.location.href = linkHref;
        } else {
          alert("Error: " + response.message); // Show error message
        }
      },
      error: function () {
        alert("Error submitting form.");
      },
      complete: function () {
        $("#f_call_btn").prop("disabled", false);
        $("#f_call_btn").text(originalBtnText);
      },
    });
  });

  $("#f_wa_btn").click(function (e) {
    // e.preventDefault();
    // e.stopPropagation();

    var email_type = $(this).data("for");
    var fields = [
      {
        id: "f_wa_mobile",
        message: "Please enter a valid mobile number.",
        validationFunction: isValidMobile,
      },
    ];

    // Validate form fields
    if (!validateForm(fields)) {
      return;
    }

    var mobile = $("#f_wa_mobile").val();

    // Gather form data

    var originalBtnText = $(this).text();
    var linkHref = $(this).attr("href");
    window.open(linkHref, "_blank");
    // Perform AJAX request
    $.ajax({
      url: "send_email.php",
      method: "POST",
      data: {
        mobile: mobile,
        email_type: email_type,
        campaigntype: campaignTypeValue,
        utm_campaign: utm_campaign,
        utm_term: utm_term,
        adName: adName,
        otherParamDetails: otherParamDetails,
      },
      dataType: "json",
      beforeSend: function () {
        $("#f_wa_btn").prop("disabled", true);
        $("#f_wa_btn").text("Redirecting...");
      },
      success: function (response) {
        if (response.success) {
          // window.open(linkHref, '_blank');
          // window.location.href = linkHref;
        } else {
          alert("Error: " + response.message); // Show error message
        }
      },
      error: function () {
        alert("Error submitting form.");
      },
      complete: function () {
        $("#f_wa_btn").prop("disabled", false);
        $("#f_wa_btn").text(originalBtnText);
      },
    });
  });

  function validateForm(fields) {
    for (var i = 0; i < fields.length; i++) {
      var field = fields[i];
      var value = $("#" + field.id).val() || "";
      $("#" + field.id)
        .next(".validation-message")
        .remove();

      if (value.trim() === "" && !field.allowEmpty) {
        displayValidationMessage(field.id, field.message);
        return false;
      }

      if (field.validationFunction && !field.validationFunction(value)) {
        if (field.validationFunction == validateTreatmentStart) {
          displayValidationMessage(field.id, treatmentStartValidateMessage);
        } else if (field.validationFunction == validateTreatmentReason) {
          displayValidationMessage(field.id, treatmentReasomValidateMessage);
        } else {
          displayValidationMessage(field.id, field.message);
        }
        return false;
      }
    }

    return true;
  }


  function isValidMobile(mobile) {
    // Mobile number validation regex (10 digits)
    // var mobileRegex = /^[0-9]{10}$/;

    // var mobileRegex = /^\+?[\d\s\-()]+$/; // will match formatted nos also
    // var mobileRegex = /^\+?\d+$/; // validate only no with + and without plus
    var mobileRegex = /^\+?\d[\d\s-]*$/; // validate only no with + and without plus and spaces, Hyphen also


    return mobileRegex.test(mobile);
  }

  function isValidEmail(email) {

    if (email.trim() === "") {
      return true; // Allow empty email
    }
    // Basic email validation using regex
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  function validateTreatmentStart(value) {
    return !(value.trim() === treatmentStartValidateValue.trim());
  }

  function validateTreatmentReason(value) {
    return !(value.trim() === treatmentReasonValidateValue.trim());
  }

  function displayValidationMessage(fieldId, message) {
    $("#" + fieldId).after(
      '<span class="validation-message" style="color:red; font-size:12px; margin-top:2px; line-height:0;">' +
        message +
        "</span>"
    );
  }

  var clinics = {
    Pune: ["Baner", "Karve Road", "Koregaon Park"],
    Jaipur: ["Bapu Nagar"],
  };

  function populateClinics(cityDropdown, clinicsData) {
    var selectedCity = $(cityDropdown).val();
    var clinicDropdown = $(cityDropdown)
      .closest("form")
      .find(".clinic_dropdown");
    var clinicOptions = clinicsData[selectedCity] || [];

    $(clinicDropdown).html(
      '<option value="" selected=""> Select Clinic </option>'
    );

    $.each(clinicOptions, function (index, value) {
      $(clinicDropdown).append(
        '<option value="' + value + '">' + value + "</option>"
      );
    });

    // $(clinicDropdown).append('<option value="Others">Others</option>');
  }

  $(".city_dropdown").change(function () {
    console.log($(this).val());
    populateClinics(this, clinics);
  });
});
