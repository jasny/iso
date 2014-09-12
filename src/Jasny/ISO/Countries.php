<?php
/**
 * Jasny ISO
 * 
 * @license http://www.jasny.net/mit MIT
 * @copyright 2012-2014 Arnold Daniels
 */

/** */
namespace Jasny\ISO;

/**
 * ISO 3166-1
 * 
 * ISO 3166 is the International Standard for country codes and codes for their subdivisions. The purpose of ISO 3166 is
 *  to establish internationally recognised codes for the representation of names of countries, territories or areas of
 *  geographical interest, and their subdivisions.
 */
class Countries
{
    /**
     * List of country codes by name
     * 
     * @var array
     */
    protected static $list = [
        "Afghanistan" => 'AF',
        "Åland Islands" => 'AX',
        "Albania" => 'AL',
        "Algeria" => 'DZ',
        "American Samoa" => 'AS',
        "Andorra" => 'AD',
        "Angola" => 'AO',
        "Anguilla" => 'AI',
        "Antarctica" => 'AQ',
        "Antigua and Barbuda" => 'AG',
        "Argentina" => 'AR',
        "Armenia" => 'AM',
        "Aruba" => 'AW',
        "Australia" => 'AU',
        "Austria" => 'AT',
        "Azerbaijan" => 'AZ',
        "Bahamas" => 'BS',
        "Bahrain" => 'BH',
        "Bangladesh" => 'BD',
        "Barbados" => 'BB',
        "Belarus" => 'BY',
        "Belgium" => 'BE',
        "Belize" => 'BZ',
        "Benin" => 'BJ',
        "Bermuda" => 'BM',
        "Bhutan" => 'BT',
        "Bolivia" => 'BO',
        "Bolivia, Plurinational State of" => 'BO',
        "Plurinational State of Bolivia" => 'BO',
        "Bonaire, Sint Eustatius and Saba" => 'BQ',
        "Bonaire" => 'BQ',
        "Sint Eustatius" => 'BQ',
        "Saba" => 'BQ',
        "Bosnia and Herzegovina" => 'BA',
        "Botswana" => 'BW',
        "Bouvet Island" => 'BV',
        "Brazil" => 'BR',
        "British Indian Ocean Territory" => 'IO',
        "Brunei Darussalam" => 'BN',
        "Bulgaria" => 'BG',
        "Burkina Faso" => 'BF',
        "Burundi" => 'BI',
        "Cambodia" => 'KH',
        "Cameroon" => 'CM',
        "Canada" => 'CA',
        "Cape Verde" => 'CV',
        "Cayman Islands" => 'KY',
        "Central African Republic" => 'CF',
        "Chad" => 'TD',
        "Chile" => 'CL',
        "China" => 'CN',
        "Christmas Island" => 'CX',
        "Cocos (keeling) Islands" => 'CC',
        "Colombia" => 'CO',
        "Comoros" => 'KM',
        "Congo" => 'CG',
        "Republic of the Congo" => 'CG',
        "The Democratic Republic of the Congo" => 'CD',
        "Congo, The Democratic Republic of The" => 'CD',
        "Cook Islands" => 'CK',
        "Costa Rica" => 'CR',
        "Cte D'ivoire" => 'CI',
        "Croatia" => 'HR',
        "Cuba" => 'CU',
        "Curaao" => 'CW',
        "Cyprus" => 'CY',
        "Czech Republic" => 'CZ',
        "Denmark" => 'DK',
        "Djibouti" => 'DJ',
        "Dominica" => 'DM',
        "Dominican Republic" => 'DO',
        "Ecuador" => 'EC',
        "Egypt" => 'EG',
        "El Salvador" => 'SV',
        "Equatorial Guinea" => 'GQ',
        "Eritrea" => 'ER',
        "Estonia" => 'EE',
        "Ethiopia" => 'ET',
        "Falkland Islands (malvinas)" => 'FK',
        "Faroe Islands" => 'FO',
        "Fiji" => 'FJ',
        "Finland" => 'FI',
        "France" => 'FR',
        "French Guiana" => 'GF',
        "French Polynesia" => 'PF',
        "French Southern Territories" => 'TF',
        "Gabon" => 'GA',
        "Gambia" => 'GM',
        "Georgia" => 'GE',
        "Germany" => 'DE',
        "Ghana" => 'GH',
        "Gibraltar" => 'GI',
        "Greece" => 'GR',
        "Greenland" => 'GL',
        "Grenada" => 'GD',
        "Guadeloupe" => 'GP',
        "Guam" => 'GU',
        "Guatemala" => 'GT',
        "Guernsey" => 'GG',
        "Guinea" => 'GN',
        "Guinea-bissau" => 'GW',
        "Guyana" => 'GY',
        "Haiti" => 'HT',
        "Heard Island and Mcdonald Islands" => 'HM',
        "Vatican" => 'VA',
        "Vatican city state" => 'VA',
        "Holy See" => 'VA',
        "Holy See (Vatican city state)" => 'VA',
        "Honduras" => 'HN',
        "Hong Kong" => 'HK',
        "Hungary" => 'HU',
        "Iceland" => 'IS',
        "India" => 'IN',
        "Indonesia" => 'ID',
        "Iran" => 'IR',
        "Islamic Republic of Iran" => 'IR',
        "Iran, Islamic Republic of" => 'IR',
        "Iraq" => 'IQ',
        "Ireland" => 'IE',
        "Isle of Man" => 'IM',
        "Israel" => 'IL',
        "Italy" => 'IT',
        "Jamaica" => 'JM',
        "Japan" => 'JP',
        "Jersey" => 'JE',
        "Jordan" => 'JO',
        "Kazakhstan" => 'KZ',
        "Kenya" => 'KE',
        "Kiribati" => 'KI',
        "Democratic People's Republic of Korea" => 'KP',
        "Korea, Democratic People's Republic of" => 'KP',
        "North Korea" => 'KP',
        "Korea, Republic of" => 'KR',
        "Republic of Korea" => 'KR',
        "South Korea" => 'KR',
        "Kuwait" => 'KW',
        "Kyrgyzstan" => 'KG',
        "Lao People's Democratic Republic" => 'LA',
        "Latvia" => 'LV',
        "Lebanon" => 'LB',
        "Lesotho" => 'LS',
        "Liberia" => 'LR',
        "Libya" => 'LY',
        "Liechtenstein" => 'LI',
        "Lithuania" => 'LT',
        "Luxembourg" => 'LU',
        "Macao" => 'MO',
        "Macedonia" => 'MK',
        "The Former Yugoslav Republic of Macedonia" => 'MK',
        "Macedonia, The Former Yugoslav Republic Of" => 'MK',
        "Madagascar" => 'MG',
        "Malawi" => 'MW',
        "Malaysia" => 'MY',
        "Maldives" => 'MV',
        "Mali" => 'ML',
        "Malta" => 'MT',
        "Marshall Islands" => 'MH',
        "Martinique" => 'MQ',
        "Mauritania" => 'MR',
        "Mauritius" => 'MU',
        "Mayotte" => 'YT',
        "Mexico" => 'MX',
        "Federated States of Micronesia" => 'FM',
        "Micronesia" => 'FM',
        "Micronesia, Federated States of" => 'FM',
        "Republic of Moldova" => 'MD',
        "Moldova" => 'MD',
        "Moldova, Republic of" => 'MD',
        "Monaco" => 'MC',
        "Mongolia" => 'MN',
        "Montenegro" => 'ME',
        "Montserrat" => 'MS',
        "Morocco" => 'MA',
        "Mozambique" => 'MZ',
        "Myanmar" => 'MM',
        "Namibia" => 'NA',
        "Nauru" => 'NR',
        "Nepal" => 'NP',
        "The Netherlands" => 'NL',
        "Netherlands" => 'NL',
        "New Caledonia" => 'NC',
        "New Zealand" => 'NZ',
        "Nicaragua" => 'NI',
        "Niger" => 'NE',
        "Nigeria" => 'NG',
        "Niue" => 'NU',
        "Norfolk Island" => 'NF',
        "Northern Mariana Islands" => 'MP',
        "Norway" => 'NO',
        "Oman" => 'OM',
        "Pakistan" => 'PK',
        "Palau" => 'PW',
        "Palestine" => 'PS',
        "Palestine, State of" => 'PS',
        "State of Palestine" => 'PS',
        "Panama" => 'PA',
        "Papua New Guinea" => 'PG',
        "Paraguay" => 'PY',
        "Peru" => 'PE',
        "Philippines" => 'PH',
        "Pitcairn" => 'PN',
        "Poland" => 'PL',
        "Portugal" => 'PT',
        "Puerto Rico" => 'PR',
        "Qatar" => 'QA',
        "Runion" => 'RE',
        "Romania" => 'RO',
        "Russian Federation" => 'RU',
        "Rwanda" => 'RW',
        "Saint Barthlemy" => 'BL',
        "Saint Helena, Ascension and Tristan Da Cunha" => 'SH',
        "Saint Kitts and Nevis" => 'KN',
        "Saint Lucia" => 'LC',
        "Saint Martin (french Part)" => 'MF',
        "Saint Pierre and Miquelon" => 'PM',
        "Saint Vincent and The Grenadines" => 'VC',
        "Samoa" => 'WS',
        "San Marino" => 'SM',
        "Sao Tome and Principe" => 'ST',
        "Saudi Arabia" => 'SA',
        "Senegal" => 'SN',
        "Serbia" => 'RS',
        "Seychelles" => 'SC',
        "Sierra Leone" => 'SL',
        "Singapore" => 'SG',
        "Sint Maarten (dutch Part)" => 'SX',
        "Slovakia" => 'SK',
        "Slovenia" => 'SI',
        "Solomon Islands" => 'SB',
        "Somalia" => 'SO',
        "South Africa" => 'ZA',
        "South Georgia and The South Sandwich Islands" => 'GS',
        "South Sudan" => 'SS',
        "Spain" => 'ES',
        "Sri Lanka" => 'LK',
        "Sudan" => 'SD',
        "Suriname" => 'SR',
        "Svalbard and Jan Mayen" => 'SJ',
        "Swaziland" => 'SZ',
        "Sweden" => 'SE',
        "Switzerland" => 'CH',
        "Syrian Arab Republic" => 'SY',
        "Taiwan" => 'TW',
        "Taiwan, Province of China" => 'TW',
        "Tajikistan" => 'TJ',
        "United Republic of Tanzania" => 'TZ',
        "Tanzania" => 'TZ',
        "Tanzania, United Republic of" => 'TZ',
        "Thailand" => 'TH',
        "Timor-leste" => 'TL',
        "Togo" => 'TG',
        "Tokelau" => 'TK',
        "Tonga" => 'TO',
        "Trinidad and Tobago" => 'TT',
        "Tunisia" => 'TN',
        "Turkey" => 'TR',
        "Turkmenistan" => 'TM',
        "Turks and Caicos Islands" => 'TC',
        "Tuvalu" => 'TV',
        "Uganda" => 'UG',
        "Ukraine" => 'UA',
        "United Arab Emirates" => 'AE',
        "United Kingdom" => 'GB',
        "Great Brittan" => 'GB',
        "United States of America" => 'US',
        "United States" => 'US',
        "USA" => 'US',
        "United States Minor Outlying Islands" => 'UM',
        "Uruguay" => 'UY',
        "Uzbekistan" => 'UZ',
        "Vanuatu" => 'VU',
        "Bolivarian Republic of Venezuela" => 'VE',
        "Venezuela" => 'VE',
        "Venezuela, Bolivarian Republic of" => 'VE',
        "Socialist Republic of Vietnam" => 'VN',
        "Vietnam" => 'VN',
        "Vietnam, Socialist Republic of" => 'VN',
        "Virgin Islands, British" => 'VG',
        "British Virgin Islands" => 'VG',
        "Virgin Islands, U.S." => 'VI',
        "U.S. Virgin Islands" => 'VI',
        "Wallis and Futuna" => 'WF',
        "Western Sahara" => 'EH',
        "Yemen" => 'YE',
        "Zambia" => 'ZM',
        "Zimbabwe" => 'ZW',
    ];
    
    
    /**
     * Get country code
     * 
     * @param string $country
     * @return string
     */
    protected static function countryCode($country)
    {
        $country = (string)$country;
        if (strlen($country) != 2) $country = static::getCode($country);
        
        return $country;
    }
    
    /**
     * Get list of countries
     * 
     * @return array
     */
    public static function getList()
    {
        return array_flip(array_unique(static::$list));
    }
    
    /**
     * Get country name by code
     * 
     * @param string $code  Country code or name
     * @return string
     */
    public static function getName($code)
    {
        return array_search(static::countryCode($code), static::$list) ?: null;
    }
    
    /**
     * Get country code by name
     * 
     * @param string $code
     * @return string
     */
    public static function getCode($code)
    {
        return isset(static::$list[$code]) ? static::$list[$code] : null;
    }
}
