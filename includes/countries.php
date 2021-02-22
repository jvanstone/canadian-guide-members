<?php
	//thanks JigoShop
	global $pmpro_countries, $pmpro_default_country;
	$pmpro_default_country = apply_filters("pmpro_default_country", "CA");

	$pmpro_countries = array(
		'AD' => __( 'Andorra', 'paid-memberships-pro' ),
    	'AE' => __( 'United Arab Emirates', 'paid-memberships-pro' ),
		'AF' => __( 'Afghanistan', 'paid-memberships-pro' ),
		'AG' => __( 'Antigua and Barbuda', 'paid-memberships-pro' ),
		'AI' => __( 'Anguilla', 'paid-memberships-pro' ),
		'AL' => __( 'Albania', 'paid-memberships-pro' ),
		'AM' => __( 'Armenia', 'paid-memberships-pro' ),
		'AN' => __( 'Netherlands Antilles', 'paid-memberships-pro' ),
		'AO' => __( 'Angola', 'paid-memberships-pro' ),
		'AQ' => __( 'Antarctica', 'paid-memberships-pro' ),
		'AR' => __( 'Argentina', 'paid-memberships-pro' ),
		'AS' => __( 'American Samoa', 'paid-memberships-pro' ),
		'AT' => __( 'Austria', 'paid-memberships-pro' ),
		'AU' => __( 'Australia', 'paid-memberships-pro' ),
		'AW' => __( 'Aruba', 'paid-memberships-pro' ),
		'AX' => __( 'Aland Islands', 'paid-memberships-pro' ),
		'AZ' => __( 'Azerbaijan', 'paid-memberships-pro' ),
		'BA' => __( 'Bosnia and Herzegovina', 'paid-memberships-pro' ),
		'BB' => __( 'Barbados', 'paid-memberships-pro' ),
		'BD' => __( 'Bangladesh', 'paid-memberships-pro' ),
		'BE' => __( 'Belgium', 'paid-memberships-pro' ),
		'BF' => __( 'Burkina Faso', 'paid-memberships-pro' ),
		'BG' => __( 'Bulgaria', 'paid-memberships-pro' ),
		'BH' => __( 'Bahrain', 'paid-memberships-pro' ),
		'BI' => __( 'Burundi', 'paid-memberships-pro' ),
		'BJ' => __( 'Benin', 'paid-memberships-pro' ),
		'BL' => __( 'Saint Barthelemy', 'paid-memberships-pro' ),
		'BM' => __( 'Bermuda', 'paid-memberships-pro' ),
		'BN' => __( 'Brunei', 'paid-memberships-pro' ),
		'BO' => __( 'Bolivia', 'paid-memberships-pro' ),
		'BR' => __( 'Brazil', 'paid-memberships-pro' ),
		'BS' => __( 'Bahamas', 'paid-memberships-pro' ),
		'BT' => __( 'Bhutan', 'paid-memberships-pro' ),
		'BV' => __( 'Bouvet Island', 'paid-memberships-pro' ),
		'BW' => __( 'Botswana', 'paid-memberships-pro' ),
		'BY' => __( 'Belarus', 'paid-memberships-pro' ),
		'BZ' => __( 'Belize', 'paid-memberships-pro' ),
		'CA' => __( 'Canada', 'paid-memberships-pro' ),
		'CC' => __( 'Cocos (Keeling) Islands', 'paid-memberships-pro' ),
		'CD' => __( 'Congo (Kinshasa)', 'paid-memberships-pro' ),
		'CF' => __( 'Central African Republic', 'paid-memberships-pro' ),
		'CG' => __( 'Congo (Brazzaville)', 'paid-memberships-pro' ),
		'CH' => __( 'Switzerland', 'paid-memberships-pro' ),
		'CI' => __( 'Ivory Coast', 'paid-memberships-pro' ),
		'CK' => __( 'Cook Islands', 'paid-memberships-pro' ),
		'CL' => __( 'Chile', 'paid-memberships-pro' ),
		'CM' => __( 'Cameroon', 'paid-memberships-pro' ),
		'CN' => __( 'China', 'paid-memberships-pro' ),
		'CO' => __( 'Colombia', 'paid-memberships-pro' ),
		'CR' => __( 'Costa Rica', 'paid-memberships-pro' ),
		'CU' => __( 'Cuba', 'paid-memberships-pro' ),
		'CV' => __( 'Cape Verde', 'paid-memberships-pro' ),
		'CX' => __( 'Christmas Island', 'paid-memberships-pro' ),
		'CY' => __( 'Cyprus', 'paid-memberships-pro' ),
		'CZ' => __( 'Czech Republic', 'paid-memberships-pro' ),
		'DE' => __( 'Germany', 'paid-memberships-pro' ),
		'DJ' => __( 'Djibouti', 'paid-memberships-pro' ),
		'DK' => __( 'Denmark', 'paid-memberships-pro' ),
		'DM' => __( 'Dominica', 'paid-memberships-pro' ),
		'DO' => __( 'Dominican Republic', 'paid-memberships-pro' ),
		'DZ' => __( 'Algeria', 'paid-memberships-pro' ),
		'EC' => __( 'Ecuador', 'paid-memberships-pro' ),
		'EE' => __( 'Estonia', 'paid-memberships-pro' ),
		'EG' => __( 'Egypt', 'paid-memberships-pro' ),
		'EH' => __( 'Western Sahara', 'paid-memberships-pro' ),
		'ER' => __( 'Eritrea', 'paid-memberships-pro' ),
		'ES' => __( 'Spain', 'paid-memberships-pro' ),
		'ET' => __( 'Ethiopia', 'paid-memberships-pro' ),
		'FI' => __( 'Finland', 'paid-memberships-pro' ),
		'FJ' => __( 'Fiji', 'paid-memberships-pro' ),
		'FK' => __( 'Falkland Islands', 'paid-memberships-pro' ),
		'FM' => __( 'Micronesia', 'paid-memberships-pro' ),
		'FO' => __( 'Faroe Islands', 'paid-memberships-pro' ),
		'FR' => __( 'France', 'paid-memberships-pro' ),
		'GA' => __( 'Gabon', 'paid-memberships-pro' ),
		'GB' => __( 'United Kingdom', 'paid-memberships-pro' ),
		'GD' => __( 'Grenada', 'paid-memberships-pro' ),
		'GE' => __( 'Georgia', 'paid-memberships-pro' ),
		'GF' => __( 'French Guiana', 'paid-memberships-pro' ),
		'GG' => __( 'Guernsey', 'paid-memberships-pro' ),
		'GH' => __( 'Ghana', 'paid-memberships-pro' ),
		'GI' => __( 'Gibraltar', 'paid-memberships-pro' ),
		'GL' => __( 'Greenland', 'paid-memberships-pro' ),
		'GM' => __( 'Gambia', 'paid-memberships-pro' ),
		'GN' => __( 'Guinea', 'paid-memberships-pro' ),
		'GP' => __( 'Guadeloupe', 'paid-memberships-pro' ),
		'GQ' => __( 'Equatorial Guinea', 'paid-memberships-pro' ),
		'GR' => __( 'Greece', 'paid-memberships-pro' ),
		'GS' => __( 'South Georgia and the South Sandwich Islands', 'paid-memberships-pro' ),
		'GT' => __( 'Guatemala', 'paid-memberships-pro' ),
		'GU' => __( 'Guam', 'paid-memberships-pro' ),
		'GW' => __( 'Guinea-Bissau', 'paid-memberships-pro' ),
		'GY' => __( 'Guyana', 'paid-memberships-pro' ),
		'HK' => __( 'Hong Kong S.A.R., China', 'paid-memberships-pro' ),
		'HM' => __( 'Heard Island and McDonald Islands', 'paid-memberships-pro' ),
		'HN' => __( 'Honduras', 'paid-memberships-pro' ),
		'HR' => __( 'Croatia', 'paid-memberships-pro' ),
		'HT' => __( 'Haiti', 'paid-memberships-pro' ),
		'HU' => __( 'Hungary', 'paid-memberships-pro' ),
		'ID' => __( 'Indonesia', 'paid-memberships-pro' ),
		'IE' => __( 'Ireland', 'paid-memberships-pro' ),
		'IL' => __( 'Israel', 'paid-memberships-pro' ),
		'IM' => __( 'Isle of Man', 'paid-memberships-pro' ),
		'IN' => __( 'India', 'paid-memberships-pro' ),
		'IO' => __( 'British Indian Ocean Territory', 'paid-memberships-pro' ),
		'IQ' => __( 'Iraq', 'paid-memberships-pro' ),
		'IR' => __( 'Iran', 'paid-memberships-pro' ),
		'IS' => __( 'Iceland', 'paid-memberships-pro' ),
		'IT' => __( 'Italy', 'paid-memberships-pro' ),
		'JE' => __( 'Jersey', 'paid-memberships-pro' ),
		'JM' => __( 'Jamaica', 'paid-memberships-pro' ),
		'JO' => __( 'Jordan', 'paid-memberships-pro' ),
		'JP' => __( 'Japan', 'paid-memberships-pro' ),
		'KE' => __( 'Kenya', 'paid-memberships-pro' ),
		'KG' => __( 'Kyrgyzstan', 'paid-memberships-pro' ),
		'KH' => __( 'Cambodia', 'paid-memberships-pro' ),
		'KI' => __( 'Kiribati', 'paid-memberships-pro' ),
		'KM' => __( 'Comoros', 'paid-memberships-pro' ),
		'KN' => __( 'Saint Kitts and Nevis', 'paid-memberships-pro' ),
		'KP' => __( 'North Korea', 'paid-memberships-pro' ),
		'KR' => __( 'South Korea', 'paid-memberships-pro' ),
		'KW' => __( 'Kuwait', 'paid-memberships-pro' ),
		'KY' => __( 'Cayman Islands', 'paid-memberships-pro' ),
		'KZ' => __( 'Kazakhstan', 'paid-memberships-pro' ),
		'LA' => __( 'Laos', 'paid-memberships-pro' ),
		'LB' => __( 'Lebanon', 'paid-memberships-pro' ),
		'LC' => __( 'Saint Lucia', 'paid-memberships-pro' ),
		'LI' => __( 'Liechtenstein', 'paid-memberships-pro' ),
		'LK' => __( 'Sri Lanka', 'paid-memberships-pro' ),
		'LR' => __( 'Liberia', 'paid-memberships-pro' ),
		'LS' => __( 'Lesotho', 'paid-memberships-pro' ),
		'LT' => __( 'Lithuania', 'paid-memberships-pro' ),
		'LU' => __( 'Luxembourg', 'paid-memberships-pro' ),
		'LV' => __( 'Latvia', 'paid-memberships-pro' ),
		'LY' => __( 'Libya', 'paid-memberships-pro' ),
		'MA' => __( 'Morocco', 'paid-memberships-pro' ),
		'MC' => __( 'Monaco', 'paid-memberships-pro' ),
		'MD' => __( 'Moldova', 'paid-memberships-pro' ),
		'ME' => __( 'Montenegro', 'paid-memberships-pro' ),
		'MF' => __( 'Saint Martin (French part)', 'paid-memberships-pro' ),
		'MG' => __( 'Madagascar', 'paid-memberships-pro' ),
		'MH' => __( 'Marshall Islands', 'paid-memberships-pro' ),
		'MK' => __( 'Macedonia', 'paid-memberships-pro' ),
		'ML' => __( 'Mali', 'paid-memberships-pro' ),
		'MM' => __( 'Myanmar', 'paid-memberships-pro' ),
		'MN' => __( 'Mongolia', 'paid-memberships-pro' ),
		'MO' => __( 'Macao S.A.R., China', 'paid-memberships-pro' ),
		'MP' => __( 'Northern Mariana Islands', 'paid-memberships-pro' ),
		'MQ' => __( 'Martinique', 'paid-memberships-pro' ),
		'MR' => __( 'Mauritania', 'paid-memberships-pro' ),
		'MS' => __( 'Montserrat', 'paid-memberships-pro' ),
		'MT' => __( 'Malta', 'paid-memberships-pro' ),
		'MU' => __( 'Mauritius', 'paid-memberships-pro' ),
		'MV' => __( 'Maldives', 'paid-memberships-pro' ),
		'MW' => __( 'Malawi', 'paid-memberships-pro' ),
		'MX' => __( 'Mexico', 'paid-memberships-pro' ),
		'MY' => __( 'Malaysia', 'paid-memberships-pro' ),
		'MZ' => __( 'Mozambique', 'paid-memberships-pro' ),
		'NA' => __( 'Namibia', 'paid-memberships-pro' ),
		'NC' => __( 'New Caledonia', 'paid-memberships-pro' ),
		'NE' => __( 'Niger', 'paid-memberships-pro' ),
		'NF' => __( 'Norfolk Island', 'paid-memberships-pro' ),
		'NG' => __( 'Nigeria', 'paid-memberships-pro' ),
		'NI' => __( 'Nicaragua', 'paid-memberships-pro' ),
		'NL' => __( 'Netherlands', 'paid-memberships-pro' ),
		'NO' => __( 'Norway', 'paid-memberships-pro' ),
		'NP' => __( 'Nepal', 'paid-memberships-pro' ),
		'NR' => __( 'Nauru', 'paid-memberships-pro' ),
		'NU' => __( 'Niue', 'paid-memberships-pro' ),
		'NZ' => __( 'New Zealand', 'paid-memberships-pro' ),
		'OM' => __( 'Oman', 'paid-memberships-pro' ),
		'PA' => __( 'Panama', 'paid-memberships-pro' ),
		'PE' => __( 'Peru', 'paid-memberships-pro' ),
		'PF' => __( 'French Polynesia', 'paid-memberships-pro' ),
		'PG' => __( 'Papua New Guinea', 'paid-memberships-pro' ),
		'PH' => __( 'Philippines', 'paid-memberships-pro' ),
		'PK' => __( 'Pakistan', 'paid-memberships-pro' ),
		'PL' => __( 'Poland', 'paid-memberships-pro' ),
		'PM' => __( 'Saint Pierre and Miquelon', 'paid-memberships-pro' ),
		'PN' => __( 'Pitcairn', 'paid-memberships-pro' ),
		'PR' => __( 'Puerto Rico', 'paid-memberships-pro' ),
		'PS' => __( 'Palestinian Territory', 'paid-memberships-pro' ),
		'PT' => __( 'Portugal', 'paid-memberships-pro' ),
		'PW' => __( 'Palau', 'paid-memberships-pro' ),
		'PY' => __( 'Paraguay', 'paid-memberships-pro' ),
		'QA' => __( 'Qatar', 'paid-memberships-pro' ),
		'RE' => __( 'Reunion', 'paid-memberships-pro' ),
		'RO' => __( 'Romania', 'paid-memberships-pro' ),
		'RS' => __( 'Serbia', 'paid-memberships-pro' ),
		'RU' => __( 'Russia', 'paid-memberships-pro' ),
		'RW' => __( 'Rwanda', 'paid-memberships-pro' ),
		'SA' => __( 'Saudi Arabia', 'paid-memberships-pro' ),
		'SB' => __( 'Solomon Islands', 'paid-memberships-pro' ),
		'SC' => __( 'Seychelles', 'paid-memberships-pro' ),
		'SD' => __( 'Sudan', 'paid-memberships-pro' ),
		'SE' => __( 'Sweden', 'paid-memberships-pro' ),
		'SG' => __( 'Singapore', 'paid-memberships-pro' ),
		'SH' => __( 'Saint Helena', 'paid-memberships-pro' ),
		'SI' => __( 'Slovenia', 'paid-memberships-pro' ),
		'SJ' => __( 'Svalbard and Jan Mayen', 'paid-memberships-pro' ),
		'SK' => __( 'Slovakia', 'paid-memberships-pro' ),
		'SL' => __( 'Sierra Leone', 'paid-memberships-pro' ),
		'SM' => __( 'San Marino', 'paid-memberships-pro' ),
		'SN' => __( 'Senegal', 'paid-memberships-pro' ),
		'SO' => __( 'Somalia', 'paid-memberships-pro' ),
		'SR' => __( 'Suriname', 'paid-memberships-pro' ),
		'ST' => __( 'Sao Tome and Principe', 'paid-memberships-pro' ),
		'SV' => __( 'El Salvador', 'paid-memberships-pro' ),
		'SY' => __( 'Syria', 'paid-memberships-pro' ),
		'SZ' => __( 'Swaziland', 'paid-memberships-pro' ),
		'TC' => __( 'Turks and Caicos Islands', 'paid-memberships-pro' ),
		'TD' => __( 'Chad', 'paid-memberships-pro' ),
		'TF' => __( 'French Southern Territories', 'paid-memberships-pro' ),
		'TG' => __( 'Togo', 'paid-memberships-pro' ),
		'TH' => __( 'Thailand', 'paid-memberships-pro' ),
		'TJ' => __( 'Tajikistan', 'paid-memberships-pro' ),
		'TK' => __( 'Tokelau', 'paid-memberships-pro' ),
		'TL' => __( 'Timor-Leste', 'paid-memberships-pro' ),
		'TM' => __( 'Turkmenistan', 'paid-memberships-pro' ),
		'TN' => __( 'Tunisia', 'paid-memberships-pro' ),
		'TO' => __( 'Tonga', 'paid-memberships-pro' ),
		'TR' => __( 'Turkey', 'paid-memberships-pro' ),
		'TT' => __( 'Trinidad and Tobago', 'paid-memberships-pro' ),
		'TV' => __( 'Tuvalu', 'paid-memberships-pro' ),
		'TW' => __( 'Taiwan', 'paid-memberships-pro' ),
		'TZ' => __( 'Tanzania', 'paid-memberships-pro' ),
		'UA' => __( 'Ukraine', 'paid-memberships-pro' ),
		'UG' => __( 'Uganda', 'paid-memberships-pro' ),
		'UM' => __( 'United States Minor Outlying Islands', 'paid-memberships-pro' ),
		'US' => __( 'United States', 'paid-memberships-pro' ),
		'UY' => __( 'Uruguay', 'paid-memberships-pro' ),
		'UZ' => __( 'Uzbekistan', 'paid-memberships-pro' ),
		'VA' => __( 'Vatican', 'paid-memberships-pro' ),
		'VC' => __( 'Saint Vincent and the Grenadines', 'paid-memberships-pro' ),
		'VE' => __( 'Venezuela', 'paid-memberships-pro' ),
		'VG' => __( 'British Virgin Islands', 'paid-memberships-pro' ),
		'VI' => __( 'U.S. Virgin Islands', 'paid-memberships-pro' ),
		'VN' => __( 'Vietnam', 'paid-memberships-pro' ),
		'VU' => __( 'Vanuatu', 'paid-memberships-pro' ),
		'WF' => __( 'Wallis and Futuna', 'paid-memberships-pro' ),
		'WS' => __( 'Samoa', 'paid-memberships-pro' ),
		'YE' => __( 'Yemen', 'paid-memberships-pro' ),
		'YT' => __( 'Mayotte', 'paid-memberships-pro' ),
		'ZA' => __( 'South Africa', 'paid-memberships-pro' ),
		'ZM' => __( 'Zambia', 'paid-memberships-pro' ),
		'ZW' => __( 'Zimbabwe', 'paid-memberships-pro' ),
	  	'USAF' => __( 'US Armed Forces', 'paid-memberships-pro' ),
		'VE' => __( 'Venezuela', 'paid-memberships-pro' ),
	);

	asort($pmpro_countries);

	$pmpro_countries = apply_filters("pmpro_countries", $pmpro_countries);
