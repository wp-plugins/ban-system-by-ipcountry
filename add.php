<?php
if (!function_exists('country_code_to_country')) {

    function country_code_to_country($code) {
        $country = $code;
        if ($code == 'AF')
            $country = 'Afghanistan';
        if ($code == 'AX')
            $country = 'Aland Islands';
        if ($code == 'AL')
            $country = 'Albania';
        if ($code == 'DZ')
            $country = 'Algeria';
        if ($code == 'AS')
            $country = 'American Samoa';
        if ($code == 'AD')
            $country = 'Andorra';
        if ($code == 'AO')
            $country = 'Angola';
        if ($code == 'AI')
            $country = 'Anguilla';
        if ($code == 'AQ')
            $country = 'Antarctica';
        if ($code == 'AG')
            $country = 'Antigua and Barbuda';
        if ($code == 'AR')
            $country = 'Argentina';
        if ($code == 'AM')
            $country = 'Armenia';
        if ($code == 'AW')
            $country = 'Aruba';
        if ($code == 'AU')
            $country = 'Australia';
        if ($code == 'AT')
            $country = 'Austria';
        if ($code == 'AZ')
            $country = 'Azerbaijan';
        if ($code == 'BS')
            $country = 'Bahamas';
        if ($code == 'BH')
            $country = 'Bahrain';
        if ($code == 'BD')
            $country = 'Bangladesh';
        if ($code == 'BB')
            $country = 'Barbados';
        if ($code == 'BY')
            $country = 'Belarus';
        if ($code == 'BE')
            $country = 'Belgium';
        if ($code == 'BZ')
            $country = 'Belize';
        if ($code == 'BJ')
            $country = 'Benin';
        if ($code == 'BM')
            $country = 'Bermuda';
        if ($code == 'BT')
            $country = 'Bhutan';
        if ($code == 'BO')
            $country = 'Bolivia';
        if ($code == 'BA')
            $country = 'Bosnia and Herzegovina';
        if ($code == 'BW')
            $country = 'Botswana';
        if ($code == 'BV')
            $country = 'Bouvet Island (Bouvetoya)';
        if ($code == 'BR')
            $country = 'Brazil';
        if ($code == 'IO')
            $country = 'British Indian Ocean Territory (Chagos Archipelago)';
        if ($code == 'VG')
            $country = 'British Virgin Islands';
        if ($code == 'BN')
            $country = 'Brunei Darussalam';
        if ($code == 'BG')
            $country = 'Bulgaria';
        if ($code == 'BF')
            $country = 'Burkina Faso';
        if ($code == 'BI')
            $country = 'Burundi';
        if ($code == 'KH')
            $country = 'Cambodia';
        if ($code == 'CM')
            $country = 'Cameroon';
        if ($code == 'CA')
            $country = 'Canada';
        if ($code == 'CV')
            $country = 'Cape Verde';
        if ($code == 'KY')
            $country = 'Cayman Islands';
        if ($code == 'CF')
            $country = 'Central African Republic';
        if ($code == 'TD')
            $country = 'Chad';
        if ($code == 'CL')
            $country = 'Chile';
        if ($code == 'CN')
            $country = 'China';
        if ($code == 'CX')
            $country = 'Christmas Island';
        if ($code == 'CC')
            $country = 'Cocos (Keeling) Islands';
        if ($code == 'CO')
            $country = 'Colombia';
        if ($code == 'KM')
            $country = 'Comoros the';
        if ($code == 'CD')
            $country = 'Congo';
        if ($code == 'CG')
            $country = 'Congo the';
        if ($code == 'CK')
            $country = 'Cook Islands';
        if ($code == 'CR')
            $country = 'Costa Rica';
        if ($code == 'CI')
            $country = 'Cote d\'Ivoire';
        if ($code == 'HR')
            $country = 'Croatia';
        if ($code == 'CU')
            $country = 'Cuba';
        if ($code == 'CY')
            $country = 'Cyprus';
        if ($code == 'CZ')
            $country = 'Czech Republic';
        if ($code == 'DK')
            $country = 'Denmark';
        if ($code == 'DJ')
            $country = 'Djibouti';
        if ($code == 'DM')
            $country = 'Dominica';
        if ($code == 'DO')
            $country = 'Dominican Republic';
        if ($code == 'EC')
            $country = 'Ecuador';
        if ($code == 'EG')
            $country = 'Egypt';
        if ($code == 'SV')
            $country = 'El Salvador';
        if ($code == 'GQ')
            $country = 'Equatorial Guinea';
        if ($code == 'ER')
            $country = 'Eritrea';
        if ($code == 'EE')
            $country = 'Estonia';
        if ($code == 'ET')
            $country = 'Ethiopia';
        if ($code == 'FO')
            $country = 'Faroe Islands';
        if ($code == 'FK')
            $country = 'Falkland Islands (Malvinas)';
        if ($code == 'FJ')
            $country = 'Fiji the Fiji Islands';
        if ($code == 'FI')
            $country = 'Finland';
        if ($code == 'FR')
            $country = 'France, French Republic';
        if ($code == 'GF')
            $country = 'French Guiana';
        if ($code == 'PF')
            $country = 'French Polynesia';
        if ($code == 'TF')
            $country = 'French Southern Territories';
        if ($code == 'GA')
            $country = 'Gabon';
        if ($code == 'GM')
            $country = 'Gambia the';
        if ($code == 'GE')
            $country = 'Georgia';
        if ($code == 'DE')
            $country = 'Germany';
        if ($code == 'GH')
            $country = 'Ghana';
        if ($code == 'GI')
            $country = 'Gibraltar';
        if ($code == 'GR')
            $country = 'Greece';
        if ($code == 'GL')
            $country = 'Greenland';
        if ($code == 'GD')
            $country = 'Grenada';
        if ($code == 'GP')
            $country = 'Guadeloupe';
        if ($code == 'GU')
            $country = 'Guam';
        if ($code == 'GT')
            $country = 'Guatemala';
        if ($code == 'GG')
            $country = 'Guernsey';
        if ($code == 'GN')
            $country = 'Guinea';
        if ($code == 'GW')
            $country = 'Guinea-Bissau';
        if ($code == 'GY')
            $country = 'Guyana';
        if ($code == 'HT')
            $country = 'Haiti';
        if ($code == 'HM')
            $country = 'Heard Island and McDonald Islands';
        if ($code == 'VA')
            $country = 'Holy See (Vatican City State)';
        if ($code == 'HN')
            $country = 'Honduras';
        if ($code == 'HK')
            $country = 'Hong Kong';
        if ($code == 'HU')
            $country = 'Hungary';
        if ($code == 'IS')
            $country = 'Iceland';
        if ($code == 'IN')
            $country = 'India';
        if ($code == 'ID')
            $country = 'Indonesia';
        if ($code == 'IR')
            $country = 'Iran';
        if ($code == 'IQ')
            $country = 'Iraq';
        if ($code == 'IE')
            $country = 'Ireland';
        if ($code == 'IM')
            $country = 'Isle of Man';
        if ($code == 'IL')
            $country = 'Israel';
        if ($code == 'IT')
            $country = 'Italy';
        if ($code == 'JM')
            $country = 'Jamaica';
        if ($code == 'JP')
            $country = 'Japan';
        if ($code == 'JE')
            $country = 'Jersey';
        if ($code == 'JO')
            $country = 'Jordan';
        if ($code == 'KZ')
            $country = 'Kazakhstan';
        if ($code == 'KE')
            $country = 'Kenya';
        if ($code == 'KI')
            $country = 'Kiribati';
        if ($code == 'KP')
            $country = 'Korea';
        if ($code == 'KR')
            $country = 'Korea';
        if ($code == 'KW')
            $country = 'Kuwait';
        if ($code == 'KG')
            $country = 'Kyrgyz Republic';
        if ($code == 'LA')
            $country = 'Lao';
        if ($code == 'LV')
            $country = 'Latvia';
        if ($code == 'LB')
            $country = 'Lebanon';
        if ($code == 'LS')
            $country = 'Lesotho';
        if ($code == 'LR')
            $country = 'Liberia';
        if ($code == 'LY')
            $country = 'Libyan Arab Jamahiriya';
        if ($code == 'LI')
            $country = 'Liechtenstein';
        if ($code == 'LT')
            $country = 'Lithuania';
        if ($code == 'LU')
            $country = 'Luxembourg';
        if ($code == 'MO')
            $country = 'Macao';
        if ($code == 'MK')
            $country = 'Macedonia';
        if ($code == 'MG')
            $country = 'Madagascar';
        if ($code == 'MW')
            $country = 'Malawi';
        if ($code == 'MY')
            $country = 'Malaysia';
        if ($code == 'MV')
            $country = 'Maldives';
        if ($code == 'ML')
            $country = 'Mali';
        if ($code == 'MT')
            $country = 'Malta';
        if ($code == 'MH')
            $country = 'Marshall Islands';
        if ($code == 'MQ')
            $country = 'Martinique';
        if ($code == 'MR')
            $country = 'Mauritania';
        if ($code == 'MU')
            $country = 'Mauritius';
        if ($code == 'YT')
            $country = 'Mayotte';
        if ($code == 'MX')
            $country = 'Mexico';
        if ($code == 'FM')
            $country = 'Micronesia';
        if ($code == 'MD')
            $country = 'Moldova';
        if ($code == 'MC')
            $country = 'Monaco';
        if ($code == 'MN')
            $country = 'Mongolia';
        if ($code == 'ME')
            $country = 'Montenegro';
        if ($code == 'MS')
            $country = 'Montserrat';
        if ($code == 'MA')
            $country = 'Morocco';
        if ($code == 'MZ')
            $country = 'Mozambique';
        if ($code == 'MM')
            $country = 'Myanmar';
        if ($code == 'NA')
            $country = 'Namibia';
        if ($code == 'NR')
            $country = 'Nauru';
        if ($code == 'NP')
            $country = 'Nepal';
        if ($code == 'AN')
            $country = 'Netherlands Antilles';
        if ($code == 'NL')
            $country = 'Netherlands the';
        if ($code == 'NC')
            $country = 'New Caledonia';
        if ($code == 'NZ')
            $country = 'New Zealand';
        if ($code == 'NI')
            $country = 'Nicaragua';
        if ($code == 'NE')
            $country = 'Niger';
        if ($code == 'NG')
            $country = 'Nigeria';
        if ($code == 'NU')
            $country = 'Niue';
        if ($code == 'NF')
            $country = 'Norfolk Island';
        if ($code == 'MP')
            $country = 'Northern Mariana Islands';
        if ($code == 'NO')
            $country = 'Norway';
        if ($code == 'OM')
            $country = 'Oman';
        if ($code == 'PK')
            $country = 'Pakistan';
        if ($code == 'PW')
            $country = 'Palau';
        if ($code == 'PS')
            $country = 'Palestinian Territory';
        if ($code == 'PA')
            $country = 'Panama';
        if ($code == 'PG')
            $country = 'Papua New Guinea';
        if ($code == 'PY')
            $country = 'Paraguay';
        if ($code == 'PE')
            $country = 'Peru';
        if ($code == 'PH')
            $country = 'Philippines';
        if ($code == 'PN')
            $country = 'Pitcairn Islands';
        if ($code == 'PL')
            $country = 'Poland';
        if ($code == 'PT')
            $country = 'Portugal, Portuguese Republic';
        if ($code == 'PR')
            $country = 'Puerto Rico';
        if ($code == 'QA')
            $country = 'Qatar';
        if ($code == 'RE')
            $country = 'Reunion';
        if ($code == 'RO')
            $country = 'Romania';
        if ($code == 'RU')
            $country = 'Russian Federation';
        if ($code == 'RW')
            $country = 'Rwanda';
        if ($code == 'BL')
            $country = 'Saint Barthelemy';
        if ($code == 'SH')
            $country = 'Saint Helena';
        if ($code == 'KN')
            $country = 'Saint Kitts and Nevis';
        if ($code == 'LC')
            $country = 'Saint Lucia';
        if ($code == 'MF')
            $country = 'Saint Martin';
        if ($code == 'PM')
            $country = 'Saint Pierre and Miquelon';
        if ($code == 'VC')
            $country = 'Saint Vincent and the Grenadines';
        if ($code == 'WS')
            $country = 'Samoa';
        if ($code == 'SM')
            $country = 'San Marino';
        if ($code == 'ST')
            $country = 'Sao Tome and Principe';
        if ($code == 'SA')
            $country = 'Saudi Arabia';
        if ($code == 'SN')
            $country = 'Senegal';
        if ($code == 'RS')
            $country = 'Serbia';
        if ($code == 'SC')
            $country = 'Seychelles';
        if ($code == 'SL')
            $country = 'Sierra Leone';
        if ($code == 'SG')
            $country = 'Singapore';
        if ($code == 'SK')
            $country = 'Slovakia (Slovak Republic)';
        if ($code == 'SI')
            $country = 'Slovenia';
        if ($code == 'SB')
            $country = 'Solomon Islands';
        if ($code == 'SO')
            $country = 'Somalia, Somali Republic';
        if ($code == 'ZA')
            $country = 'South Africa';
        if ($code == 'GS')
            $country = 'South Georgia and the South Sandwich Islands';
        if ($code == 'ES')
            $country = 'Spain';
        if ($code == 'LK')
            $country = 'Sri Lanka';
        if ($code == 'SD')
            $country = 'Sudan';
        if ($code == 'SR')
            $country = 'Suriname';
        if ($code == 'SJ')
            $country = 'Svalbard & Jan Mayen Islands';
        if ($code == 'SZ')
            $country = 'Swaziland';
        if ($code == 'SE')
            $country = 'Sweden';
        if ($code == 'CH')
            $country = 'Switzerland, Swiss Confederation';
        if ($code == 'SY')
            $country = 'Syrian Arab Republic';
        if ($code == 'TW')
            $country = 'Taiwan';
        if ($code == 'TJ')
            $country = 'Tajikistan';
        if ($code == 'TZ')
            $country = 'Tanzania';
        if ($code == 'TH')
            $country = 'Thailand';
        if ($code == 'TL')
            $country = 'Timor-Leste';
        if ($code == 'TG')
            $country = 'Togo';
        if ($code == 'TK')
            $country = 'Tokelau';
        if ($code == 'TO')
            $country = 'Tonga';
        if ($code == 'TT')
            $country = 'Trinidad and Tobago';
        if ($code == 'TN')
            $country = 'Tunisia';
        if ($code == 'TR')
            $country = 'Turkey';
        if ($code == 'TM')
            $country = 'Turkmenistan';
        if ($code == 'TC')
            $country = 'Turks and Caicos Islands';
        if ($code == 'TV')
            $country = 'Tuvalu';
        if ($code == 'UG')
            $country = 'Uganda';
        if ($code == 'UA')
            $country = 'Ukraine';
        if ($code == 'AE')
            $country = 'United Arab Emirates';
        if ($code == 'GB')
            $country = 'United Kingdom';
        if ($code == 'US')
            $country = 'United States of America';
        if ($code == 'UM')
            $country = 'United States Minor Outlying Islands';
        if ($code == 'VI')
            $country = 'United States Virgin Islands';
        if ($code == 'UY')
            $country = 'Uruguay, Eastern Republic of';
        if ($code == 'UZ')
            $country = 'Uzbekistan';
        if ($code == 'VU')
            $country = 'Vanuatu';
        if ($code == 'VE')
            $country = 'Venezuela';
        if ($code == 'VN')
            $country = 'Vietnam';
        if ($code == 'WF')
            $country = 'Wallis and Futuna';
        if ($code == 'EH')
            $country = 'Western Sahara';
        if ($code == 'YE')
            $country = 'Yemen';
        if ($code == 'ZM')
            $country = 'Zambia';
        if ($code == 'ZW')
            $country = 'Zimbabwe';
        if ($country == '')
            $country = $code;
        return $country;
    }

}
?>
<div class="wrap about-wrap">
    <h1>Ban System</h1>
    <h2 class="nav-tab-wrapper">
        <a href="admin.php?page=bans" class="nav-tab">Home</a>
        <a href="admin.php?page=bansadd" class="nav-tab nav-tab-active">Add</a>
        <a href="admin.php?page=bansopt" class="nav-tab">Options</a>
        <a href="admin.php?page=bansstat" class="nav-tab">Statistics</a>
    </h2>
    <div class="widefatbox">
        <form action="admin.php?page=bansadd" method="POST">
            <table><tr><td>IP:</td><td><input type="text" name="ip" value="<?php
                        if (isset($_GET['i'])) {
                            echo $_GET['i'];
                        }
                        ?>"></td></tr>
                <tr><td>Duration:</td><td><select name="duration">
                            <option value="1h">1 Hour</option>
                            <option value="6h">6 Hours</option>
                            <option value="12h">12 Hours</option>
                            <option value="24h">24 Hours</option>
                            <option value="2d">2 Days</option>
                            <option value="3d">3 Days</option>
                            <option value="7d">7 Days</option>
                            <option value="30d">30 Days</option>
                            <option value="1y">1 Year</option>
                            <option value="p">Permanent</option>
                        </select></td></tr>
                <tr><td>Reason:</td><td><input type="text" name="reason"></td></tr>
                <tr><td style="width: 140px;">If detect banned IP:</td><td><input type="radio" style="font-size: 20px; line-height: 23px;" name="or" value="msg" CHECKED>Show default message<br><input type="radio" style="font-size: 23px; line-height: 23px;" name="or" value="redir">Redirect to:</td></tr>
                <tr><td>Redirect URL:</td><td><input type="text" name="redirurl"></td></tr>
                <tr><td></td><td><input type="submit" value="Add" class="button"></td></tr>
            </table></form>
        <?php
        if (isset($_POST['ip'])) {
            if ($_POST['ip'] == "") {
                echo("<span style='color:red'>Pease fill the IP input!</span>");
            } else {
                $date = new DateTime(date('m/d/Y H:i'));
                $dur = $_POST['duration'];
                if ($dur == "1h") {
                    $add = "+1 hours";
                }
                if ($dur == "6h") {
                    $add = "+6 hours";
                }
                if ($dur == "12h") {
                    $add = "+12 hours";
                }
                if ($dur == "24h") {
                    $add = "+24 hours";
                }
                if ($dur == "2d") {
                    $add = "+2 days";
                }
                if ($dur == "3d") {
                    $add = "+3 days";
                }
                if ($dur == "7d") {
                    $add = "+7 days";
                }
                if ($dur == "30d") {
                    $add = "+30 days";
                }
                if ($dur == "1y") {
                    $add = "+365 days";
                }
                if ($dur == "p") {
                    $add = "+999999 days";
                }
                $date->modify($add);
                $date = $date->format("m/d/Y H:i");
                $file = simplexml_load_string(get_option('b_xml'));
                $id = get_option('id') + 1;
                $aaaa = get_option('nr') + 1;
                update_option('nr', $aaaa);
                update_option('id', $id);
                $add = $file->addChild('Ban');
                $add->addChild('id', $id);
                $add->addChild('ip', $_POST['ip']);
                $add->addChild('time', $_POST['duration']);
                $add->addChild('reason', $_POST['reason']);
                $add->addChild('date', date('m/d/Y H:i'));
                $add->addChild('end', $date);
                $add->addChild('or', $_POST['or']);
                $add->addChild('redirurl', $_POST['redirurl']);
                $output = $file->asXML();
                update_option('b_xml', $output);
                echo ("<span style='color:green'>Successfully added!</span>");
            }
        }
        ?>
        <hr><form action="admin.php?page=bansadd" method="POST">
            <table><tr><td style="width: 140px;">Or add a country:</td>

                    <td><select name="country">
                            <option value="">Country...</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AG">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AG">Antigua &amp; Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AA">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BL">Bonaire</option>
                            <option value="BA">Bosnia &amp; Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BR">Brazil</option>
                            <option value="BC">British Indian Ocean Ter</option>
                            <option value="BN">Brunei</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="IC">Canary Islands</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CD">Channel Islands</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CI">Christmas Island</option>
                            <option value="CS">Cocos Island</option>
                            <option value="CO">Colombia</option>
                            <option value="CC">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CT">Cote D'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CB">Curacao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="TM">East Timor</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FA">Falkland Islands</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="FS">French Southern Ter</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GB">Great Britain</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GN">Guinea</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HW">Hawaii</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IA">Iran</option>
                            <option value="IQ">Iraq</option>
                            <option value="IR">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="NK">Korea North</option>
                            <option value="KS">Korea South</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Laos</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macau</option>
                            <option value="MK">Macedonia</option>
                            <option value="MG">Madagascar</option>
                            <option value="MY">Malaysia</option>
                            <option value="MW">Malawi</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="ME">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="MI">Midway Islands</option>
                            <option value="MD">Moldova</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Nambia</option>
                            <option value="NU">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="AN">Netherland Antilles</option>
                            <option value="NL">Netherlands(Holland)</option>
                            <option value="NV">Nevis</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NW">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau Island</option>
                            <option value="PS">Palestine</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PO">Pitcairn Island</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="ME">Republic of Montenegro</option>
                            <option value="RS">Republic of Serbia</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russia</option>
                            <option value="RW">Rwanda</option>
                            <option value="NT">St Barthelemy</option>
                            <option value="EU">St Eustatius</option>
                            <option value="HE">St Helena</option>
                            <option value="KN">St Kitts-Nevis</option>
                            <option value="LC">St Lucia</option>
                            <option value="MB">St Maarten</option>
                            <option value="PM">St Pierre &amp; Miquelon</option>
                            <option value="VC">St Vincent &amp; Grenadines</option>
                            <option value="SP">Saipan</option>
                            <option value="SO">Samoa</option>
                            <option value="AS">Samoa American</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome &amp; Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="OI">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syria</option>
                            <option value="TA">Tahiti</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania</option>
                            <option value="TH">Thailand</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad &amp; Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TU">Turkmenistan</option>
                            <option value="TC">Turks &amp; Caicos Is</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States of America</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VS">Vatican City State</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Vietnam</option>
                            <option value="VB">Virgin Islands (Brit)</option>
                            <option value="VA">Virgin Islands (USA)</option>
                            <option value="WK">Wake Island</option>
                            <option value="WF">Wallis &amp; Futana Is</option>
                            <option value="YE">Yemen</option>
                            <option value="ZR">Zaire</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select></td></tr><tr><td></td><td><input type="submit" value="Add" class="button"></td></tr></table></form>
                        <?php
                        if (isset($_GET['del'])) {
                            $del = $_GET['del'];
                            $data = simplexml_load_string(get_option('c_xml'));
                            for ($i = 0, $length = count($data->Country); $i < $length; $i++) {

                                if ($data->Country[$i]->name == $del) {
                                    unset($data->Country[$i]);
                                    update_option('c_xml', $data->saveXML());
                                    $g = get_option('cnr');
                                    update_option('cnr', $g - 1);
                                }
                            }
                        }
                        if (isset($_POST['country'])) {
                            if ($_POST['country'] == "") {
                                die("<br><span style='color:red'>Pease select a country!</span><br>");
                            }

                            $name = $_POST['country'];
                            $file = simplexml_load_string(get_option('c_xml'));
                            $id = get_option('cnr') + 1;
                            update_option('cnr', $id);
                            $add = $file->addChild('Country');
                            $add->addChild('name', $name);
                            $output = $file->asXML();
                            update_option('c_xml', $output);
                            echo ("<span style='color:green'>Successfully added!</span><br><br>");
                        }
                        echo 'Banned countries:<br><br>';

                        $m = get_option('cnr');
                        if ($m == 0) {
                            echo '<div style="color:grey;text-align:center;">No country banned yet!</div>';
                        } else {
                            $m = $m - 1;
                            echo '<table>';
                            for ($i = 0; $i <= $m; $i++) {
                                $get = simplexml_load_string(get_option('c_xml'));
                                $name = $get->Country[$i]->name;
                                $namec = country_code_to_country($name);
                                echo '<tr><td style="width: 100px;">' . $namec . '</td><td><a href="admin.php?page=bansadd&del=' . $name . '"><img style="vertical-align:middle;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAARlSURBVHjapJbPbxRlHMY/78zO7nZbdoZSoGN7qBFFqThTAqYHsWPUKBFjQSsH0wiGYPCiHPxDPBiuJCQSggdMMB6IyYsnNDTsFvlhUShBu5UiO9vtdn/Mj9fDJkDZbbXwJHN6583nfd48zzevsG2bdjo/dngEyA2fOlrif+j82GETcIdPHT3Xbl08Cpr5+Euz/nSfTKTSbv3ydV9Foffsia/yK0FuffSFI5wXpCrOW8Gtv3JRFHibT3695IDaEsj4EZOn+2VqcJOrVypkujJWB0pO7T3kLAeZGT/iGC9vlYm+jZbRaJDp6nBTsZBTew+ZbUFXdx8wGeiTDG5yuXYDogiyaTQra2WUkNfe/aQF9ueeTx22DUrWd1tc/QOSBphdJNd0ugaavLr7gLkEdPud/aa55RnJS5tdfr0G5XmIGoCCTAqtx7SyRkLO7D5wHzaz56CjjWxvQi79Bo1qc49Q0JUi1ZlyU0rJyTf3mQAJgHBTv9RffM7lwiRUa633k0zA2qxFpSJnxj/fD8C2LcfoNi0mJpvuH5ZSYBikdeUuhKEEhkRx32cjmeFtMnmvBILm1yIFSkAcgwL6bLB74PIUBEHb3wkCmCsyN+/jh4En/hk7aKYV0xnTtFhrga7zxFIxLFbhbpHZet0vx+GAsG2bm8O7nKRQUqzrsehILeNqFQpCKJZYqFT8eRV72y/8mL/fo+tDrzmdyaTEXGORSj2Zm2KJ6kLZrwndG8zJfEthr2/d6XQKJJZpkX4MZ1EMlQqV+bK/oJQ3dOV8ftnJcPv5HY6uG02YvkpSI4TiPf+OUp47NZFfcQQBTA9sfS9pZU+TTK4S1IDF2uhTUxPfPbqUaLuhVgGyUKuuPgTL7GlxdLO7z0nsGZV6Z8bih7OrA4UBUbns3w0Db8gv5Jd1dKVrvaPvfkvq3VmL02eg3lgdKFboAisdhfJCZq23fbHYGoZJo8uxxt6XiY0bLE6dhnrt8eIdN8taikK/piJvKKg8iPclUk7Hhx/IzIYei5Pfrt5JyxVGRLUq91B+OQy9V7QwL6bX9ZrZ0dHpbH+/pX9zopmcJx5BAhp1FsMGBTR/XsUDCcLYVb/fsDjzPcQRCLHs/RMEhLFCAzQjAQl9RVda0ABNs0C5wrZtLhbLF02Fm04aILQ2jQ8JoogFpXyl6/uTaOhxdKxDExYJY5lO1fGBOUFuxFoz1ExdFHmLcSSNes3VEwnQtQdzK4qpxxElofuBpnk7urN5gPydoqfiUGYQFoa+9ICNgIoQVDSRU5rhLUndT7NzpqlimQY3iUBHEaGoolMm9hsIb6e9YUk3Jgp/OwZCdqCsJAKBIkSwiGIBkWsI4b3au77UUthfCgUzRsgkyhUIQqGoKvwGeG/YdtuX0M+FgqMQMi2UBRAAFSVyEXiv272lZSfDuULBrIIE3Bjha0J5b/faKz63zs4WnEghAStG5ATK22Xbpf8cqgDHC7MjQG78oVOtpOOFWRNwx+3etg/IfwcAyojpcbk4/Z8AAAAASUVORK5CYII=" alt="Unban this country"></a></td></tr>';
                            }echo '</table>';
                        }
                        ?>
    </div></div>