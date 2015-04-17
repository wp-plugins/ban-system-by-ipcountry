<?php

if (!function_exists('is_login_page')) {

    function is_login_page() {
        return in_array($GLOBALS['pagenow'], array('wp-login.php'));
    }

}

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

if (isset($_SERVER['HTTP_REFERER'])) {
    $site = parse_url($_SERVER['HTTP_REFERER']);
    $site = $site['host'];
} else {
    $site = "Dirrect";
}
$ip = $_SERVER["REMOTE_ADDR"];
$browser = $_SERVER["HTTP_USER_AGENT"];
$path = $_SERVER['DOCUMENT_ROOT'] . $path . "ban-system-by-ipcountry/";
$onurl = $_SERVER['SCRIPT_FILENAME'];
$on = parse_url($onurl);
$on = $on["path"] . $on["query"];
$timedate = date('D, d M Y - H:i:s');
$c = 0;

function getBrowser() {
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version = "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    } elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    } elseif (preg_match('/Firefox/i', $u_agent)) {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    } elseif (preg_match('/Chrome/i', $u_agent)) {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    } elseif (preg_match('/Safari/i', $u_agent)) {
        $bname = 'Apple Safari';
        $ub = "Safari";
    } elseif (preg_match('/Opera/i', $u_agent)) {
        $bname = 'Opera';
        $ub = "Opera";
    } elseif (preg_match('/Netscape/i', $u_agent)) {
        $bname = 'Netscape';
        $ub = "Netscape";
    }

    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
            ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
            $version = $matches['version'][0];
        } else {
            $version = $matches['version'][1];
        }
    } else {
        $version = $matches['version'][0];
    }

    // check if we have a number
    if ($version == null || $version == "") {
        $version = "?";
    }

    return array(
        'userAgent' => $u_agent,
        'name' => $bname,
        'version' => $version,
        'platform' => $platform,
        'pattern' => $pattern
    );
}

// now try it
$ua = getBrowser();
$browser = $ua['name'] . " " . $ua['version'];
$platform = ucfirst($ua['platform']);

function visitor_country() {
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = $_SERVER['REMOTE_ADDR'];
    $result = "Unknown";
    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

    if ($ip_data && $ip_data->geoplugin_countryCode != null) {
        $result = $ip_data->geoplugin_countryCode;
    }

    return $result;
}

$cc = "";
$country = visitor_country();

$cnr = get_option('cnr');
if ($cnr != "0") {
    $data = simplexml_load_string(get_option("c_xml"));
    for ($i = 0; $i < $cnr; $i++) {
        $co = $data->Country[$i]->name;
        if (strtolower($co) == strtolower($country)) {
            $c = 1;
            $cc = "country";
        }
    }
}
if ($c == 0) {

    $m = get_option('nr') - 1;
    $get = simplexml_load_string(get_option("b_xml"));
    $found = "a";
    $cookie = get_option("cookie");
    //check dirrect&cookie
    for ($i = 0; $i <= $m; $i++) {
        $dtnow = new DateTime(date('m/d/Y H:i'));
        $tm = $get->Ban[$i]->end;
        $dtthan = new DateTime($tm);
        if ($dtnow > $dtthan) {
            $expired = "TRUE";
        } else {
            $expired = "FALSE";
        }
        $ipg = $get->Ban[$i]->ip;
        if ($ip == $ipg && $expired == "FALSE") {
            $found = $i;
            $c = 1;
            $cc = "dir";
        }
        if ($cookie == "1") {
            if (isset($_COOKIE['ban']) && $found == 'a') {
                $ip_xml = $get->Ban[$i]->ip;
                if ($ip_xml == $_COOKIE['ban'] && $expired == "FALSE") {
                    $c = 1;
                    $found = $i;
                }
            }
        } else {
            setcookie("ban", "", time() - 3600);
        }
        if ($c == 0) {
            setcookie("ban", "", time() - 3600);
        }
    }
    //adding cookie if necessary
    if (!isset($_COOKIE['ban']) && $cc == "dir" && $cookie == "1") {
        $dtnow = new DateTime(date('m/d/Y H:i'));
        $tm = $get->Ban[$found]->end;
        $dtthan = new DateTime($tm);
        if ($dtnow > $dtthan) {
            $expired = TRUE;
        } else {
            $expired = FALSE;
        } $name = $get->Ban[$found]->ip;
        if ($ip == $name && $expired == FALSE) {
            $c = 1;
        } if (!isset($_COOKIE['ban']) && $c > 0) {
            $diff = abs(strtotime(date('m/d/Y H:i')) - strtotime($tm));
            setcookie("ban", $ip, time() + $diff);
        }
    }
    //finished checking
}
if ($c > 0) {
    $ban = 'Banned';
} else {
    $ban = 'Not Banned';
}
if ($cc == "country") {
    $ban = 'Banned by country';
}
$fullc = country_code_to_country($country);
$d = date("ymd");
$dy = date("ymd", time() - 86400);
if (!is_admin()) {
    if ($d == get_option("date")) {
        $ccc = get_option("today");
        $data = "<div class='visitor'><table class='det'><tr><td class='dl'>Time/Date</td><td>$timedate</td></tr><tr><td class='dl'>IP</td><td>$ip <a href='admin.php?page=bansadd&i=$ip'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAYAAACN1PRVAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAdKSURBVHjajJZLrF1VGYC/f6219zlnn3va3pZCobaUXvqgDw3WpIPSkURMbVQiGtAQAsbEsTrUDtCZ4lQcSDUOYGCDGCQiBoVSQgMNUKChVSiQlrb3fXse+7Eev4NzayEQ9U929h6s/X/rf/9y9uA9AKAKWUbmWtg8p1JQEay4lVmnvV2Kzh5TdHaYVr7eiMlT8k1swvlUNqeoqxNNXb+t0S+pKh0MMVT4poaUuCKOTxMFDWHSdrsHi89cf3d33br9ruj0RBPEiITxG1U0JnxZ9YcLC0fLhYXHfFU9ibDwaWrdp5Ji3NvdcMOh7tapA512G7M4gHMXoaogxPEZBIyAMbgs63V6EwcqZw70Z+efCmX9IHD8f8IM3FXcsvWh4sb1G930HEyfBe9BDMgyAFk2n6shEKFtDa2ic2AU066lsvkh8IdPhSmQwV293dsfLq5Zs8acPAWDIWQOREjeE5JC0goYAYUY03bOItb8R6EA3dxuNCF7eM436jUeEZExrBr1URVa1u3t7dj+82Kiu8a8dhLqBpxDhw2jqrpUxvB0renPSdNpEYZgu8bYbRPI7b129nXJs7Vj1JjYsbJmpbG/mPblOd+Ux0UTTgENYWV7w4ZDxepVm8zrp6CuwVqacsRC1TwxIv2syLJXQMFakq9JocaZ7PVRVb7UXrnh8zmsZVSO3b0sXcOmtsihRtO3gSWTqgrXzu+cWLf2juxf78LiAnhP07/M3OXFXw9C8x3gFZtliBhC/zJ+fpZ6+gJx7uImd+MNv5ebNu5hNIRyBFU5fuoS4xtWonc45c7gPY6q7HVuWH9P0R9Yzp0HY4hNzUxT/2mI/sjmdig2Y3DhHNHXhKZBjGCTbGlvvulwb9PGfe7kW+jCIpK7qwmwLIWq7aR4z6iujjiTZbsmWtlt9sPzpLpErGUp+EuDlH6iLhsYI/iZ8zTTH2KsoVX0SF6nutu2Hl4xtXlf9vJrMD8PrZxYeYJywopsMMK1giIInZhuizHtMpkzt7aGw4LFRSQGfF3Tr+q/aNKTxmU059+juXgOkzlEDFrVN3Wnbj686uapfa1XTsCli2CgqWpmhsPnlprqW0tV+USsK7RpwNe0UygK0q0O73fKwgKMRqgRfEr44J+0XqAcoJeXQECSoiFubu/Y9sjKLZv358dfRufnkTynLktmQnO0EvNAV1rvDur6mbY13+sYMy5/VbLgdzlbjm5IviEiqEBIqUqN/6caQxoNiIM+eafAhPLGYvfO367aMrXfvfgiaW4eWi18XTIb/LEB5rspy971/UVsSmdCnlfRmPaVmrfeX+9aTd3SGIjGgELSVKYQhikltBqBs6Smmeru3vm7Vdu27nPHjpFmpjGdLr4qmY3h2EjMfSnP3zG+QZoaVR0m1TIZ00YgqdKK0bmyKesJm6EyhqGpoxq7KURS4xHVLcXOnYcnt23Z5557njQ9i7TbVFXFXAxHK2Pvtbl9PxmLlgO0GiJiuhpTR5c7i2qijCG4uvYfJqeoGBKApraJfmurql5vQtjc2bnrN6t33LLPPneUOD2NtDv4pmQ2xuf6xjwgGt4PQbAxQH9p3ECM2ULRbaeqhhBJotTBX3DRN29FDaiMg2lV6cZ4ewjhRPeW7Y+s2LF9v/nHs8RL00i7ja9L5lI8Wjp3v1h7VsUQF+eo52bAGCTL6a1ec9B2Wuj8LFhDk4QqhjddHfyrVWTUhgIBo9AL4c6w7vo9bmpqj/n7s+jFi9Bu0zQ1cykdGxlzvzXmLMagoyFh5hJihIRiQ/hsce21X7aDPjoaQJ4zSoyG6KsupvjmUgwvdIQvOZVx8Wtam19eXJue+StxcQmT5/i6ZhaOjYy7X4x9p+lfRuoKV1dj1ylIiBPd9et+2u11r4tnTiOArxuGml4w1r7ptKn7wxQfHcIXe2CvdJo0OwMxIXlO8DXz6POVy+/TFN9rhhWxrrHDAa4olpNAu93JyYdW79r5VTl5klSOkNwxTMQh+ijR9p0ET4THl2L8Zkv0gPvoZDJAqKmUE43L7vV1/UETI0nHV3LGouPvL3TXr//x6s/t/lp2+gzpwkXEQuUbFpSno3GPmxSQl/Js/EMMe1fAY5PCJoHlzARjBC2KmaXEH/t18zcf4/I8k65zbltnxYqv9KY231FMTl6nb7xBPHceDKjADLy3pNydG3dcRZCj9mqHFuGunvKrHlwjV9ypYNsd7JpJYt4mGioyN5JWq3DtTtu2O+jsHP70GWgasJAE+srsEnzfK0eu6PoYLAJB+EYXftmDjW55KUlxnAC2U2C6BbRyQNCyJs7Pk1JC3PhsVOjDByPlByhHPjpuPgHzAh72inBoAg50BLIrIyqCpo/PK7GAhbC8mAwSTwEPZnDc6rgv/ldYBPrCpMLBlnB3F/Zn0JOrGxgq47gmhRr6lXK0UR4DnlwBC5Zxav9fsOHYQiKsNLBdYY+BHQjrVcmt0ETlvIdTKpywibetsJQpTIyN/QTs3wMAahocZuBwg08AAAAASUVORK5CYII=' title='Ban!'></a></td></tr><tr><td class='dl'>Came from:</td><td>$site</td></tr><tr><td class='dl'>On:</td><td>$on</td></tr><tr><td class='dl'>Browser:</td><td>$browser</td></tr><tr><td class='dl'>Country:</td><td>$fullc</td></tr><tr><td class='dl'>Platform:</td><td>$platform</td></tr><tr><td class='dl'>When accessed was:</td><td>$ban</td></tr></table></div>";
        update_option("today", $ccc . $data);
    } elseif ($dy == get_option("date")) {
        update_option("yesterday", get_option("today"));
        $data = "<div class='visitor'><table class='det'><tr><td class='dl'>Time/Date</td><td>$timedate</td></tr><tr><td class='dl'>IP</td><td>$ip <a href='admin.php?page=bansadd&i=$ip'><img src='data:image/png;base64,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' title='Ban!'></a></td></tr><tr><td class='dl'>Came from:</td><td>$site</td></tr><tr><td class='dl'>On:</td><td>$on</td></tr><tr><td class='dl'>Browser:</td><td>$browser</td></tr><tr><td class='dl'>Country:</td><td>$fullc</td></tr><tr><td class='dl'>Platform:</td><td>$platform</td></tr><tr><td class='dl'>When accessed was:</td><td>$ban</td></tr></table></div>";
        update_option("today", $data);
        update_option("date", $d);
        update_option("datey", $dy);
    } else {
        update_option("yesterday", "");
        $data = "<div class='visitor'><table class='det'><tr><td class='dl'>Time/Date</td><td>$timedate</td></tr><tr><td class='dl'>IP</td><td>$ip <a href='admin.php?page=bansadd&i=$ip'><img src='data:image/png;base64,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' title='Ban!'></a></td></tr><tr><td class='dl'>Came from:</td><td>$site</td></tr><tr><td class='dl'>On:</td><td>$on</td></tr><tr><td class='dl'>Browser:</td><td>$browser</td></tr><tr><td class='dl'>Country:</td><td>$fullc</td></tr><tr><td class='dl'>Platform:</td><td>$platform</td></tr><tr><td class='dl'>When accessed was:</td><td>$ban</td></tr></table></div>";
        update_option("today", $data);
        update_option("date", $d);
        update_option("datey", $dy);
    }
}

if ($cc == "country") {
    $txt = get_option('c');
    die(stripslashes_deep($txt));
} elseif ($c > 0) {
    if (!((is_admin() && get_option("wp-admin") == 0) || (is_login_page() && get_option("wp-login") == 0))) {
        $or = $get->Ban[$found]->or;
        if ($or == "redir") {
            Header('Location: ' . $get->Ban[$found]->redirurl);
        } else {
            $reason = $get->Ban[$found]->reason;
            if ($reason == "") {
                $reason = "None";
            }
        }
        $txt = get_option("b");
        $txt = str_replace('[reason]', $reason, $txt);
        die(stripslashes_deep($txt));
    }
}
echo '';
?>