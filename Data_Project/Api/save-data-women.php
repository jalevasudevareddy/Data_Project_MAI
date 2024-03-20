<?php
$conn = mysqli_connect("103.198.77.141", "gmb_users1", "l.)b.g4hcD.d", "gmb_users1");




// $_POST["business_photograph"];

$tmp_name = array_key_exists("business_photograph",$_FILES) ? $_FILES['business_photograph']['tmp_name']:false;
$extention = array_key_exists("business_photograph",$_FILES) ? explode("/",$_FILES['business_photograph']['type'])[1]:false;
$file_name = uniqid(date("Y-m-d")).".".$extention;

if($tmp_name && $file_name){
  if(move_uploaded_file($tmp_name,"upload/".$file_name)){
    $_POST['business_photograph'] = "https://".$_SERVER['HTTP_HOST']."/gmb/google_form/e-form-registration/upload/".$file_name;
    // print_r($content["Report"]);exit;
  }
}

// echo "<pre>";print_r($_POST);exit;
$_POST['prefix'] = json_encode($_POST['prefix']);
$_POST['formtype'] = 'pizer';
// $dr_name = $_POST['dr_name'];
// print_r($dr_name);exit;

$keys = array_keys($_POST);
// echo "<pre>";print_r($_POST);exit;
$colums = "(";
$value = "(";
for ($i=0; $i < sizeof($keys); $i++) { 
    if(sizeof($keys) == ($i+1)){
        $colums .= $keys[$i].")";
        $value .= "'".$_POST[$keys[$i]]."')";
    }else{
        $colums .= $keys[$i].",";
        $value .= "'".$_POST[$keys[$i]]."',"; 
    }   
}
$sql = "INSERT INTO ajant_pharma_form ".$colums." VALUES ".$value;
// print_r($sql);exit;




// $sql = "INSERT INTO gmb_users1 (formID,check_Doc,bussiness_name,business_category_,business_address,business_area,business_city,business_state,business_country,pin_code,g_num,p_num,email,url,m_day_in,q159_name159,m_day_out,t_day_in,t_day_out,w_day_in,w_day_out,th_day_in,th_day_out,f_day_in,f_day_out,s_day_in,s_day_out,sun_day_in,sun_day_out,q118_declaration,website,simple_spc,event_id) VALUES ('220272319991458','NO','test','test','test','test','test','test','test','123456','9898989789','9515457182','test@gmail.com','https://test.com','6','Array','9','6','9','6','9','6','9','6','9','6','9','6','9','I agree to share the required details for the creation of Google My Business Profile.','','220272319991458-220272319991458','1656766806678_220272319991458_3foq9aE')";
// echo "<pre>";print_r($sql);exit;
// $result = mysqli_query($conn, $sql) or die("query failed" . mysqli_connect_error());



// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
// } // 
// $gmb_existing = $_POST['check_Doc'];

// $name = $_POST['dr_name'];
// $speciality = $_POST['speciality'];
// $address = $_POST['address'];
// $area = $_POST['area'];
// $city = $_POST['city'];


// $state = $_POST['state'];
// $country = $_POST['country'];

// $pin_code = $_POST['pin_code'];
// $g_num = $_POST['g_num'];
// $p_num = $_POST['p_num'];
// $email = $_POST['email'];
// $rg_manager_name = $_POST['rg_manager_name'];
// $rg_manager_num = $_POST['rg_manager_num'];
// $manager_name = $_POST['manager_name'];
// $manager_num = $_POST['manager_num'];
// $region_name = $_POST['region_name'];
// // $dr_patient_img = $_POST['multi_fileUpload'];
// $url = $_POST['url'];
// $covid_offer = $_POST['covid_offer'];
// $treat_avail = $_POST['treat_avail'];
// $special_service = $_POST['special_service'];
// $w_mon_in = $_POST['m_day_in'];
// $w_tue_in = $_POST['t_day_in'];
// $w_wed_in = $_POST['w_day_in'];
// $w_thu_inr = $_POST['th_day_in'];
// $w_fri_in = $_POST['f_day_in'];
// $w_sat_in = $_POST['s_day_in'];
// $w_sun_in = $_POST['sun_day_in'];
// $w_mon_out = $_POST['m_day_out'];
// $w_tue_out = $_POST['t_day_out'];
// $w_wed_out = $_POST['w_day_out'];
// $w_thu_outr = $_POST['th_day_out'];
// $w_fri_out = $_POST['f_day_out'];
// $w_sat_out = $_POST['s_day_out'];
// $w_sun_out = $_POST['sun_day_out'];
// $doclink = $_POST['doclink'];



// if (isset($_FILES['fileToUpload'])) {
//     $img_name = $_FILES['fileToUpload']['name'];
//     $img_tmp = $_FILES['fileToUpload']['tmp_name'];
//     $img_size = $_FILES['fileToUpload']['size'];
//     $error = $_FILES['fileToUpload']['error'];

//     if ($error === 0) {
//         if ($img_size > 10058118) {
//             echo "File is too large";
//         } else {
//             $new_name = time() . "-" . basename($img_name);
//             $target = "https://docrank.us/gmb/google_form/cipla/upload/" . $new_name;
//             $image_name = $new_name;

//             move_uploaded_file($img_tmp, "./upload/" . $image_name);
//         }
//         // insert into prod_doctor_mapping (client_name, department_name, uploaded_by_username, 
//         // client_ID, doctor_status, doctor_image, doclink, 
//         // doctor_stage, doctor_priority, doctor_account_url, google_email,
//         //  first_Name, last_Name, gmb_existing, fully_live, partially_live, 
//         //  gmb_creation, access, doc_Phone_Number, med_rep_RBM_name, med_rep_RBM, med_rep_name, med_rep_number, 
//         //  med_rep_ABM_name, med_rep_ABM_number, verification_type, survey_Link, region, state, city, doctor_speciality, 
//         //  doctor_area_name, doctor_Address, doctor_pincode, doctor_phone_number_for_appointment, doctor_feasible_time_to_contact, 
//         //  doc_email_id, upload_doctors_photograph, upload_doctor_patient_interaction_photos, enter_video_URL, competing_physician,
//         //   working_hours_on_Monday, working_hours_on_Tuesday, working_hours_on_Wednesday, working_hours_on_Thursday, working_hours_on_Friday,
//         //    working_hours_on_Saturday, working_hours_on_Sunday, enter_any_Covid_Updates_or_Offers, enter_treatments_or_Procedures_or_facilities_available, 
//         //    specify_any_other_special_services, keyword_1, keyword_2) values ('Manipal', 'MHW', '', '', 'Active', '', 'drRashmiSR4', 'op-adv', 'normal', 'accounts/112946410153312799437/locations/14040815463481816437', 'manipalwhitefield@gmail.com', 'Dr Rashmi SR', '--', 'no', 'yes', 'no', 'yes', 'no', '1800 102 4647', '', '', '', '', '', '', '', '', 'Whitefield', 'Karnataka', 'Bangalore', 'Nephrologist', 'whitefield', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Nephrologist', 'best Nephrologist near me in whitefileds');

//         $check = "SELECT * FROM prod_doctor_mapping WHERE doclink ='$doclink' ";
//         $result2 = mysqli_query($conn, $check);

//         if (mysqli_num_rows($result2) > 0) {

//             $sql = "UPDATE prod_doctor_mapping SET gmb_existing ='{$gmb_existing}',eform_status='YES' ,first_name='{$name}',doctor_Address='{$address}', doctor_speciality='{$speciality}',
//         doctor_area_name='{$area}',city='{$city}',state='{$state}',country='{$country}',doctor_pincode='{$pin_code}',doctor_phone_number_for_appointment='{$g_num}',
//         doc_Phone_Number='{$p_num}',doc_email_id='{$email}', med_rep_ABM_name='{$manager_name}', med_rep_ABM_number='{$manager_num}',upload_doctors_photograph='{$target}',
//         enter_video_URL='{$url}',enter_any_Covid_Updates_or_Offers='{$covid_offer}',enter_treatments_or_Procedures_or_facilities_available='{$treat_avail}',
//         specify_any_other_special_services='{$special_services}',
//         working_hours_on_Monday_in='{$w_mon_in}',working_hours_on_Tuesday_in='{$w_tue_in}',working_hours_on_Wednesday_in='{$w_wed_in}',
//         working_hours_on_Thursday_in='{$w_thu_inr}',working_hours_on_Friday_in='{$w_fri_in}',working_hours_on_Saturday_in='{$w_sat_in}',working_hours_on_Sunday_in='{$w_sun_in}'
//         ,working_hours_on_Monday_out='{$w_mon_out}',working_hours_on_Tuesday_out='{$w_tue_out}',working_hours_on_Wednesday_out='{$w_wed_out}',
//         working_hours_on_Thursday_out='{$w_thu_outr}',working_hours_on_Friday_out='{$w_fri_out}',working_hours_on_Saturday_out='{$w_sat_out}',
//         working_hours_on_Sunday_out='{$w_sun_out}' WHERE doclink = '$doclink'";
//         } else {
//             function removeSpecialChar($str)
//             {
//                 $arr =  array('\ ', '"', ',', ';', '<', '>', '.', '-', ')', '(', ' ');
//                 $res = str_replace($arr, "", $str);
//                 return strtolower($res);
//             }
//             $doclink = removeSpecialChar($name) . rand(10, 99);

//             $sql = "INSERT INTO prod_doctor_mapping(gmb_existing,eform_status,doclink,client_name,department_name,first_name,doctor_Address, doctor_speciality,doctor_area_name,city,state,country,doctor_pincode,doctor_phone_number_for_appointment,
//         doc_Phone_Number,doc_email_id,
//         med_rep_ABM_name, med_rep_ABM_number,upload_doctors_photograph,enter_video_URL,enter_any_Covid_Updates_or_Offers,enter_treatments_or_Procedures_or_facilities_available,
//         specify_any_other_special_services,
//         working_hours_on_Monday_in,working_hours_on_Tuesday_in,working_hours_on_Wednesday_in,
//         working_hours_on_Thursday_in,working_hours_on_Friday_in,working_hours_on_Saturday_in,working_hours_on_Sunday_in
//         ,working_hours_on_Monday_out,working_hours_on_Tuesday_out,working_hours_on_Wednesday_out,
//         working_hours_on_Thursday_out,working_hours_on_Friday_out,working_hours_on_Saturday_out,working_hours_on_Sunday_out)
//          VALUES('{$gmb_existing}','YES','{$doclink}' ,'Cipla', 'women health','{$name}','{$address}','{$speciality}' ,'{$area}','{$city}','{$state}','{$country}', '{$pin_code}','{$g_num}',
//         '{$p_num}','{$email}','{$manager_name}','{$manager_num}',
//         '{$target}','{$url}','{$covid_offer}','{$treat_avail}','{$special_services}','{$w_mon_in}',
//         '{$w_tue_in}','{$w_wed_in}','{$w_thu_inr}','{$w_fri_in}','{$w_sat_in}','{$w_sun_in}','{$w_mon_out}',
//         '{$w_tue_out}','{$w_wed_out}','{$w_thu_outr}','{$w_fri_out}','{$w_sat_out}','{$w_sun_out}')";
//         }
//     } else {
//         echo "<p> file not uploaded</p>";
//     }
// }
$result = mysqli_query($conn, $sql) or die("query failed" . mysqli_connect_error());
if ($result) {
    ob_start();
    echo "<div>Your form is submitted </div>";
    usleep(1000000);
    header("Location:https://docrank.us/gmb/google_form/newform/thankyou.php");
    ob_end_flush();
} else {
    echo "<div>Query Failed</div>";
}
?>