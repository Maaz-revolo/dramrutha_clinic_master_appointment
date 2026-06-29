<?php

class ScoringConstants
{
    const AGE_BRACKET_SCORE = [
        "16-25" => 5,
        "25-29" => 4,
        "30-34" => 3,
        "35-37" => 2,
        "38-40" => 1,
        "41 or above" => 0,
    ];

    const MENSTRUAL_CYCLE_LENGTH_SCORE = [
        "Regular, 27-34 days" => 3,
        "Long, 35-40 days" => 2,
        "Short, 24-26 days or Irregular" => 1,
        "Never or rarely" => 0,
    ];

    const
        PREVIOUS_PREGNANCIES_SCORE = [
            "one or more live births" => 3,
            "one or more elective pregnancy terminations" => 2,
            "one or more miscarriages" => 1,
            "Never tried" => 1,
            "Have tried, not successful" => 0,
        ];

    const PREVIOUS_SURGERIES_HISTORY_SCORE = [
        "No previous surgeries" => 3,
        "previous minor surgery on uterus" => 2,
        "previous major surgery on uterus,tubes" => 1,
        "Removal of an ovary" => 0,
    ];

    const SEXUAL_INTERCOURSE_FREQUENCY_SCORE = [
        "three or more times a week" => 5,
        "one to two times a week" => 4,
        "< once a week" => 2,
        "About once a month" => 1,
    ];

    const MOTHERS_AGE_AT_MENOPAUSE_SCORE = [
        "50 years or older" => 3,
        "45-50 years" => 2,
        "40-44 years" => 1,
        "less than 40 years" => 0
    ];

    const HISTORY_OF_SEXUAL_TRANSMITTED_DISEASES_SCORE = [
        "No known prior" => 3,
        "Positive for herpes, HPV or any other STD besides" => 2,
        "gonorrhea or Chlamydia" => 2,
        "History of exposure to gonorrhea or Chlamydia" => 1,
        "History of pelvic inflammatory disease" => 0,
    ];
}


define('QUICK_APPOINTMENT', 'quick_appointment');
define('FOOTER_APPOINTMENT', 'footer_appointment');
define('SIDE_APPOINTMENT', 'side_appointment');
define('MODAL_POPUP_APPOINTMENT', 'modal_popup_appointment');
define('SIMPLE_MODAL_POPUP_APPOINTMENT', 'simple_modal_popup_appointment');
define('FINAL_WA_FORM', 'final_wa_form');
define('FINAL_CALL_FORM', 'final_call_form');
define('PROJECT_NAME', 'Precise Hospital');


define('GO_HIGH_LEVEL_API_URL', 'https://rest.gohighlevel.com/v1/contacts/');
define('GO_HIGH_LEVEL_API_KEY', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJsb2NhdGlvbl9pZCI6IkFIemxEVDVmazhTcjY0cWdJVFFrIiwidmVyc2lvbiI6MSwiaWF0IjoxNzI4OTkwMjgzMjQ2LCJzdWIiOiJZbk1EaG5OUVdtVUFVZjM3UU01MyJ9.Na00Y_nQqcvAZ2bnTrM8s0xTmgtCV1rqI8N51dQOqYg');

define('LEAD_SOURCE_ID', 'bVCITSS8ltcycEuvJkKR');
define('YT', 'Youtube');
define('GOOGLE_ADS', 'Google Ads');
define('FACEBOOK_ADS', 'Facebook Ads');
define('OTHER_PLATFORMS', 'Other Platforms');

define('LEAD_ENQUIR_TYPE_ID', 'N9OhJw0Oja4glH1SBGzB');
define('CALL_FROM_WEBSITE', 'Call From Website');
define('WHATSAPP', 'WhatsApp');
define('LEAD_FORM', 'Lead Form');
define('WEBSITE_CHAT', 'Website Chat');
define('CALL_FROM_GOOGLE_ADS', 'Call From Google Ads');

define('LEAD_COMMENT_ID', 'pnAahCGuqzMKHmsfJVUi');

define('CAMPAIGN_NAME_ID', 'JlUGLSmvpSIsIcM4oqCC');
define('CAMPAIGN_NAME', 'Search/ Precise Hospital');


define('LEAD_SERVICE_ENQUIRY_ID', 'dqKgpYw7Urhjc5hsSPsu');
define('LS', 'Laparoscopy');
define('UTM_PARAM_ID', '2QBcwPgRm0aMXsN16YkC');

define('treatmentReasonId', 'XHHfQLJeKO7lOM2ExfWs');
define('treatmentAdviseId', 'AqkMz8C4B8vCxJT6qWmJ');
define('treatmentStartId', 'QpQqRiHStYLhgarDFl8B');
define('dateId', 'QpQqRiHStYLhgarDFl8B');
