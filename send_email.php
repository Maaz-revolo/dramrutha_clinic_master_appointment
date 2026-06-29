<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';
include 'constant.php';
include 'env.php';

header('Content-Type: application/json');

$response = array();
$response['success'] = false;
$response['message'] = "Invalid request.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email_type = $_POST["email_type"] ?? '';


    $campaigntype = $_POST["campaigntype"] ?? '';
    $utm_campaign = $_POST["utm_campaign"] ?? '';
    $utm_term = $_POST["utm_term"] ?? '';
    $adName = $_POST["adName"] ?? '';
    $otherParamDetails = $_POST["otherParamDetails"] ?? '';

    $subject = '';
    $body = '';
    $campaign = YT;

    $postFieldsArray = [];
    $customFieldsArray = [];

    $postFieldsArray['tags'] = ["Lead"];
    $customFieldsArray[LEAD_ENQUIR_TYPE_ID] = LEAD_FORM;
    $customFieldsArray[LEAD_SOURCE_ID] = YT;
    $customFieldsArray[CAMPAIGN_NAME_ID] = CAMPAIGN_NAME;
    $customFieldsArray[LEAD_SERVICE_ENQUIRY_ID] = LS;
    $customFieldsArray[UTM_PARAM_ID] =
        "Ad Name : " . $adName . "
        Campaign Name : " . $utm_campaign . "
        Search Term : " . $utm_term . "
        Other Parameters Details : " . $otherParamDetails . "
    ";

    if ($email_type == '') {
        $response['success'] = false;
        $response['message'] = "Email Type can not be blank";
        echo json_encode($response);
        return;
    }

    if ($email_type != QUICK_APPOINTMENT && $email_type != FOOTER_APPOINTMENT &&  $email_type != MODAL_POPUP_APPOINTMENT && $email_type != FINAL_WA_FORM && $email_type != FINAL_CALL_FORM && $email_type != SIMPLE_MODAL_POPUP_APPOINTMENT) {
        $response['success'] = false;
        $response['message'] = "Invalid Email Type.";
        echo json_encode($response);
        return;
    }

    if ($email_type == QUICK_APPOINTMENT) {
        $name = $_POST["name"] ?? '';
        $mobile = $_POST["mobile"] ?? '';
        $email = $_POST["email"] ?? '';
        $date = $_POST["date"] ?? '';
        // $date = !empty($date) ? date('d M Y', strtotime($date)) : '';
        // $treatmentReason = $_POST["treatmentReason"] ?? '';
        // $treatmentAdvise = $_POST["treatmentAdvise"] ?? '';
        // $treatmentStart = $_POST["treatmentStart"] ?? '';
        $subject = 'Appointment - Laparoscopy';
        $body = "
        Campaign Type: $campaign <br> 
        Ad Name: $adName <br> 
        Campaign Name: $utm_campaign <br> 
        Search Term: $utm_term <br> 
        Other Parameters Details: $otherParamDetails <br> 
        Name: $name <br> 
        Mobile: $mobile <br>
        Email: $email <br>
        Preferred consultation date: $date <br>
        ";

        $postFieldsArray['firstName'] = $name;
        $postFieldsArray['phone'] =  $mobile;
        if ($email != '') {
            $postFieldsArray['email'] = $email;
        }
        // $customFieldsArray[treatmentReasonId] = $treatmentReason;
        // $customFieldsArray[treatmentAdviseId] = $treatmentAdvise;
        // $customFieldsArray[treatmentStartId] = $treatmentStart;
        $customFieldsArray[dateId] = $date;
    }

    if ($email_type == FOOTER_APPOINTMENT) {
        $name = $_POST["name"] ?? '';
        $mobile = $_POST["mobile"] ?? '';
        $email = $_POST["email"] ?? '';
        $date = $_POST["date"] ?? '';
        // $date = !empty($date) ? date('d M Y', strtotime($date)) : '';
        // $treatmentReason = $_POST["treatmentReason"] ?? '';
        // $treatmentAdvise = $_POST["treatmentAdvise"] ?? '';
        // $treatmentStart = $_POST["treatmentStart"] ?? '';
        $subject = 'Appointment - Laparoscopy';
        $body = "
        Campaign Type: $campaign <br> 
        Ad Name: $adName <br> 
        Campaign Name: $utm_campaign <br> 
        Search Term: $utm_term <br> 
        Other Parameters Details: $otherParamDetails <br> 
        Name: $name <br> 
        Mobile: $mobile <br>
        Email: $email <br>
        Preferred consultation date: $date <br>
        ";

        $postFieldsArray['firstName'] = $name;
        $postFieldsArray['phone'] =  $mobile;
        if ($email != '') {
            $postFieldsArray['email'] = $email;
        }
        // $customFieldsArray[treatmentReasonId] = $treatmentReason;
        // $customFieldsArray[treatmentAdviseId] = $treatmentAdvise;
        // $customFieldsArray[treatmentStartId] = $treatmentStart;
        $customFieldsArray[dateId] = $date;
    }

    if ($email_type == SIMPLE_MODAL_POPUP_APPOINTMENT) {
        $name = $_POST["name"] ?? '';
        $mobile = $_POST["mobile"] ?? '';
        $email = $_POST["email"] ?? '';
        $date = $_POST["date"] ?? '';
        // $date = !empty($date) ? date('d M Y', strtotime($date)) : '';
        // $treatmentReason = $_POST["treatmentReason"] ?? '';
        // $treatmentAdvise = $_POST["treatmentAdvise"] ?? '';
        // $treatmentStart = $_POST["treatmentStart"] ?? '';
        $subject = 'Appointment - Laparoscopy';
        $body = "
        Campaign Type: $campaign <br> 
        Ad Name: $adName <br> 
        Campaign Name: $utm_campaign <br> 
        Search Term: $utm_term <br> 
        Other Parameters Details: $otherParamDetails <br> 
        Name: $name <br> 
        Mobile: $mobile <br>
        Email: $email <br>
        Preferred consultation date: $date <br>
        ";

        $postFieldsArray['firstName'] = $name;
        $postFieldsArray['phone'] =  $mobile;
        if ($email != '') {
            $postFieldsArray['email'] = $email;
        }
        // $customFieldsArray[treatmentReasonId] = $treatmentReason;
        // $customFieldsArray[treatmentAdviseId] = $treatmentAdvise;
        // $customFieldsArray[treatmentStartId] = $treatmentStart;
        $customFieldsArray[dateId] = $date;
    }

    if ($email_type == MODAL_POPUP_APPOINTMENT) {
        $firstName = $_POST["firstName"] ?? '';
        $lastName = $_POST["lastName"] ?? '';
        $mobile = $_POST["mobile"] ?? '';
        $ageBracket = $_POST["ageBracket"] ?? '';
        $menstrualCycleLength = $_POST["menstrualCycleLength"] ?? '';
        $previousPregnancies = $_POST["previousPregnancies"] ?? '';
        $previousSurgeriesHistory = $_POST["previousSurgeriesHistory"] ?? '';
        $sexualIntercourseFrequency = $_POST["sexualIntercourseFrequency"] ?? '';
        $mothersAgeAtMenopause = $_POST["mothersAgeAtMenopause"] ?? '';
        $historyOfSexualTransmittedDiseases = $_POST["historyOfSexualTransmittedDiseases"] ?? '';
        $totalScore = $_POST["totalScore"] ?? '';
        $scoreMsg = $_POST["scoreMsg"] ?? '';
        $subject = 'Appointment - Laparoscopy';
        $body = "
        Campaign Type: $campaign <br> 
        Ad Name: $adName <br> 
        Campaign Name: $utm_campaign <br> 
        Search Term: $utm_term <br> 
        Other Parameters Details: $otherParamDetails <br> 
        First  Name: $firstName <br> 
        Last Name: $lastName <br>
        Phone No: $mobile <br>
        Age Bracket: $ageBracket <br>
        Menstrual Cycle Length : $menstrualCycleLength <br>
        Previous Pregnancies : $previousPregnancies <br>
        Previous Surgeries History : $previousSurgeriesHistory <br>
        Sexual Intercourse Frequency : $sexualIntercourseFrequency <br>
        Mothers age at menopause : $mothersAgeAtMenopause <br>
        History of sexual transmitted diseases : $historyOfSexualTransmittedDiseases <br>
        Total Score : $totalScore <br>
        Suggestion : $scoreMsg <br>
        ";
    }


    if ($email_type == FINAL_WA_FORM || $email_type == FINAL_CALL_FORM) {
        $mobile = $_POST["mobile"] ?? '';
        $emailSubject = "Laparoscopy WhatsApp Lead";
        $customFieldsArray[LEAD_ENQUIR_TYPE_ID] = WHATSAPP;
        if ($email_type == FINAL_CALL_FORM) {
            $emailSubject = "Laparoscopy Call Lead";
            $customFieldsArray[LEAD_ENQUIR_TYPE_ID] = CALL_FROM_WEBSITE;
        }

        $subject = $emailSubject;
        $body = "
        Campaign Type: $campaign <br> 
        Ad Name: $adName <br> 
        Campaign Name: $utm_campaign <br> 
        Search Term: $utm_term <br> 
        Other Parameters Details: $otherParamDetails <br> 
        Mobile: $mobile <br>
        ";
        $postFieldsArray['phone'] = $mobile;
    }

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();
        $mail->Host       = 'smtp.zoho.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply@revolotech.com';
        $mail->Password   = 'qQRmFkAjnWuU';
        // $mail->Password   = 'Rev@l@2017';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('noreply@revolotech.com', 'Lead Enquiry ' . PROJECT_NAME);
        if (LIVE_ENVIRONMENT) {
            $mail->addAddress('nitin@revolotech.com');
            $mail->addAddress('shiv@revolotech.com');
            $mail->addAddress('precisehospitals@gmail.com');
        } else {
            $mail->addAddress('maaz.revolo@gmail.com');
            $mail->addAddress('adit.revolo@gmail.com');
        }

        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();
        $response['success'] = true;
        $response['message'] = "Form submitted successfully!";
        if ($email_type != FINAL_WA_FORM && $email_type != FINAL_CALL_FORM) {
            setcookie('enquiry_submitted', true);
        }

        $postFieldsArray['customField'] = $customFieldsArray;
        // if (LIVE_ENVIRONMENT) {
        //     GoHighLevel::dispatch($postFieldsArray);
        // }
    } catch (Exception $e) {
        $response['success'] = false;
        $response['message'] = "Error sending email: {$mail->ErrorInfo}";
    }
    echo json_encode($response);
}


class GoHighLevel
{
    public static function dispatch($postFieldsArray)
    {
        try {
            $ch = curl_init();

            // Set the options for the cURL request
            curl_setopt($ch, CURLOPT_URL, GO_HIGH_LEVEL_API_URL);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: Bearer ' . GO_HIGH_LEVEL_API_KEY
            ]);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postFieldsArray, JSON_INVALID_UTF8_IGNORE));

            // Execute the cURL request
            $response = curl_exec($ch);

            // Check for cURL errors
            if (curl_errno($ch)) {
                throw new Exception('cURL Error: ' . curl_error($ch));
            }

            // Get the HTTP response code
            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            // Close the cURL session
            curl_close($ch);

            // Handle the response
            if ($http_code == 200) {
                return [
                    'success' => true,
                    'message' => 'Lead added successfully!',
                    'response' => $response
                ];
            } else {
                return [
                    'success' => false,
                    'message' => 'Failed to add lead. HTTP Status Code: ' . $http_code,
                    'response' => $response
                ];
            }
        } catch (Exception $e) {
            // Handle any exceptions or errors that occur
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
