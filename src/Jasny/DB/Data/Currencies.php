<?php

/**
 * Jasny Social
 * World's best PHP library for webservice APIs
 *
 * @license http://www.jasny.net/mit MIT
 * @copyright 2012 Jasny
 */


namespace Jasny\DB\Data;
use Jasny\ISO\Data\Countries as Countries;
include_once($_SERVER['DOCUMENT_ROOT']."/ISO/Data/Countries/En.php");
include_once($_SERVER['DOCUMENT_ROOT']."/ISO/Data/Countries/Native.php");



class Currencies
{
    /**
     * List of countries currency name by code
     *
     * @var array
     */
    protected static $names = [
        "AED" => "United Arab Emirates dirham",
        "AFN" => "Afghan afghani",
        "ALL" => "Albanian lek",
        "AMD" => "Armenian dram",
        "ANG" => "Netherlands Antillean guilder",
        "AOA" => "Angolan kwanza",
        "ARS" => "Argentine peso",
        "AUD" => "Australian dollar",
        "AWG" => "Aruban florin",
        "AZN" => "Azerbaijani manat",
        "BAM" => "Bosnia and Herzegovina convertible mark",
        "BBD" => "Barbadian dollar",
        "BDT" => "Bangladeshi taka",
        "BGN" => "Bulgarian lev",
        "BHD" => "Bahraini dinar",
        "BIF" => "Burundian franc",
        "BMD" => "Bermudian dollar",
        "BND" => "Brunei dollar",
        "BOB" => "Bolivian boliviano",
        "BRL" => "Brazilian real",
        "BSD" => "Bahamian dollar",
        "BTN" => "Bhutanese ngultrum",
        "BWP" => "Botswana pula",
        "BYR" => "Belarusian ruble",
        "BZD" => "Belize dollar",
        "CAD" => "Canadian dollar",
        "CDF" => "Congolese franc",
        "CHF" => "Swiss franc",
        "CLP" => "Chilean peso",
        "CNY" => "Chinese yuan",
        "COP" => "Colombian peso",
        "CRC" => "Costa Rican colón",
        "CUC" => "Cuban convertible peso",
        "CUP" => "Cuban peso",
        "CVE" => "Cape Verdean escudo",
        "CZK" => "Czech koruna",
        "DJF" => "Djiboutian franc",
        "DKK" => "Danish krone",
        "DOP" => "Dominican peso",
        "DZD" => "Algerian dinar",
        "EGP" => "Egyptian pound",
        "ERN" => "Eritrean nakfa",
        "ETB" => "Ethiopian birr",
        "EUR" => "Euro",
        "FJD" => "Fijian dollar",
        "FKP" => "Falkland Islands pound",
        "GBP" => "British pound",
        "GEL" => "Georgian lari",
        "GHS" => "Ghana cedi",
        "GIP" => "Gibraltar pound",
        "GMD" => "Gambian dalasi",
        "GNF" => "Guinean franc",
        "GTQ" => "Guatemalan quetzal",
        "GYD" => "Guyanese dollar",
        "HKD" => "Hong Kong dollar",
        "HNL" => "Honduran lempira",
        "HRK" => "Croatian kuna",
        "HTG" => "Haitian gourde",
        "HUF" => "Hungarian forint",
        "IDR" => "Indonesian rupiah",
        "ILS" => "Israeli new shekel",
        "IMP" => "Manx pound",
        "INR" => "Indian rupee",
        "IQD" => "Iraqi dinar",
        "IRR" => "Iranian rial",
        "ISK" => "Icelandic króna",
        "JEP" => "Jersey pound",
        "JMD" => "Jamaican dollar",
        "JOD" => "Jordanian dinar",
        "JPY" => "Japanese yen",
        "KES" => "Kenyan shilling",
        "KGS" => "Kyrgyzstani som",
        "KHR" => "Cambodian riel",
        "KMF" => "Comorian franc",
        "KPW" => "North Korean won",
        "KRW" => "South Korean won",
        "KWD" => "Kuwaiti dinar",
        "KYD" => "Cayman Islands dollar",
        "KZT" => "Kazakhstani tenge",
        "LAK" => "Lao kip",
        "LBP" => "Lebanese pound",
        "LKR" => "Sri Lankan rupee",
        "LRD" => "Liberian dollar",
        "LSL" => "Lesotho loti",
        "LTL" => "Lithuanian litas",
        "LYD" => "Libyan dinar",
        "MAD" => "Moroccan dirham",
        "MDL" => "Moldovan leu",
        "MGA" => "Malagasy ariary",
        "MKD" => "Macedonian denar",
        "MMK" => "Burmese kyat",
        "MNT" => "Mongolian tögrög",
        "MOP" => "Macanese pataca",
        "MRO" => "Mauritanian ouguiya",
        "MUR" => "Mauritian rupee",
        "MVR" => "Maldivian rufiyaa",
        "MWK" => "Malawian kwacha",
        "MXN" => "Mexican peso",
        "MYR" => "Malaysian ringgit",
        "MZN" => "Mozambican metical",
        "NAD" => "Namibian dollar",
        "NGN" => "Nigerian naira",
        "NIO" => "Nicaraguan córdoba",
        "NOK" => "Norwegian krone",
        "NPR" => "Nepalese rupee",
        "NZD" => "New Zealand dollar",
        "OMR" => "Omani rial",
        "PAB" => "Panamanian balboa",
        "PEN" => "Peruvian nuevo sol",
        "PGK" => "Papua New Guinean kina",
        "PHP" => "Philippine peso",
        "PKR" => "Pakistani rupee",
        "PLN" => "Polish złoty",
        "PYG" => "Paraguayan guaraní",
        "QAR" => "Qatari riyal",
        "RON" => "Romanian leu",
        "RSD" => "Serbian dinar",
        "RUB" => "Russian ruble",
        "RWF" => "Rwandan franc",
        "SAR" => "Saudi riyal",
        "SBD" => "Solomon Islands dollar",
        "SCR" => "Seychellois rupee",
        "SDG" => "Sudanese pound",
        "SEK" => "Swedish krona",
        "SGD" => "Singapore dollar",
        "SHP" => "Saint Helena pound",
        "SLL" => "Sierra Leonean leone",
        "SOS" => "Somali shilling",
        "SRD" => "Surinamese dollar",
        "SSP" => "South Sudanese pound",
        "STD" => "São Tomé and Príncipe dobra",
        "SYP" => "Syrian pound",
        "SZL" => "Swazi lilangeni",
        "THB" => "Thai baht",
        "TJS" => "Tajikistani somoni",
        "TMT" => "Turkmenistan manat",
        "TND" => "Tunisian dinar",
        "TOP" => "Tongan paʻanga",
        "TRY" => "Turkish lira",
        "TTD" => "Trinidad and Tobago dollar",
        "TWD" => "New Taiwan dollar",
        "TZS" => "Tanzanian shilling",
        "UAH" => "Ukrainian hryvnia",
        "UGX" => "Ugandan shilling",
        "USD" => "United States dollar",
        "UYU" => "Uruguayan peso",
        "UZS" => "Uzbekistani som",
        "VEF" => "Venezuelan bolívar",
        "VND" => "Vietnamese đồng",
        "VUV" => "Vanuatu vatu",
        "WST" => "Samoan tālā",
        "XAF" => "Central African CFA franc",
        "XCD" => "East Caribbean dollar",
        "XOF" => "West African CFA franc",
        "XPF" => "CFP franc",
        "YER" => "Yemeni rial",
        "ZAR" => "South African rand",
        "ZMW" => "Zambian kwacha"
    ];

    /**
     * List of countries currency short name by code
     *
     * @var array
     */
    protected static $shortNames = [
        "AED" => "dirham",
        "AFN" => "afghani",
        "ALL" => "lek",
        "AMD" => "dram",
        "ANG" => "guilder",
        "AOA" => "kwanza",
        "ARS" => "peso",
        "AUD" => "dollar",
        "AWG" => "florin",
        "AZN" => "manat",
        "BAM" => "mark",
        "BBD" => "dollar",
        "BDT" => "taka",
        "BGN" => "lev",
        "BHD" => "dinar",
        "BIF" => "franc",
        "BMD" => "dollar",
        "BND" => "dollar",
        "BOB" => "boliviano",
        "BRL" => "real",
        "BSD" => "dollar",
        "BTN" => "ngultrum",
        "BWP" => "pula",
        "BYR" => "ruble",
        "BZD" => "dollar",
        "CAD" => "dollar",
        "CDF" => "franc",
        "CHF" => "franc",
        "CLP" => "peso",
        "CNY" => "yuan",
        "COP" => "peso",
        "CRC" => "colón",
        "CUC" => "peso",
        "CUP" => "peso",
        "CVE" => "escudo",
        "CZK" => "koruna",
        "DJF" => "franc",
        "DKK" => "krone",
        "DOP" => "peso",
        "DZD" => "dinar",
        "EGP" => "pound",
        "ERN" => "nakfa",
        "ETB" => "birr",
        "EUR" => "euro",
        "FJD" => "dollar",
        "FKP" => "pound",
        "GBP" => "pound",
        "GEL" => "lari",
        "GHS" => "cedi",
        "GIP" => "pound",
        "GMD" => "dalasi",
        "GNF" => "franc",
        "GTQ" => "quetzal",
        "GYD" => "dollar",
        "HKD" => "dollar",
        "HNL" => "lempira",
        "HRK" => "kuna",
        "HTG" => "gourde",
        "HUF" => "forint",
        "IDR" => "rupiah",
        "ILS" => "shekel",
        "IMP" => "pound",
        "INR" => "rupee",
        "IQD" => "dinar",
        "IRR" => "rial",
        "ISK" => "króna",
        "JEP" => "pound",
        "JMD" => "dollar",
        "JOD" => "dinar",
        "JPY" => "yen",
        "KES" => "shilling",
        "KGS" => "som",
        "KHR" => "riel",
        "KMF" => "franc",
        "KPW" => "won",
        "KRW" => "won",
        "KWD" => "dinar",
        "KYD" => "dollar",
        "KZT" => "tenge",
        "LAK" => "kip",
        "LBP" => "pound",
        "LKR" => "rupee",
        "LRD" => "dollar",
        "LSL" => "loti",
        "LTL" => "litas",
        "LYD" => "dinar",
        "MAD" => "dirham",
        "MDL" => "leu",
        "MGA" => "ariary",
        "MKD" => "denar",
        "MMK" => "kyat",
        "MNT" => "tögrög",
        "MOP" => "pataca",
        "MRO" => "ouguiya",
        "MUR" => "rupee",
        "MVR" => "rufiyaa",
        "MWK" => "kwacha",
        "MXN" => "peso",
        "MYR" => "ringgit",
        "MZN" => "metical",
        "NAD" => "dollar",
        "NGN" => "naira",
        "NIO" => "córdoba",
        "NOK" => "krone",
        "NPR" => "rupee",
        "NZD" => "dollar",
        "OMR" => "rial",
        "PAB" => "balboa",
        "PEN" => "sol",
        "PGK" => "kina",
        "PHP" => "peso",
        "PKR" => "rupee",
        "PLN" => "złoty",
        "PYG" => "guaraní",
        "QAR" => "riyal",
        "RON" => "leu",
        "RSD" => "dinar",
        "RUB" => "ruble",
        "RWF" => "franc",
        "SAR" => "riyal",
        "SBD" => "dollar",
        "SCR" => "rupee",
        "SDG" => "pound",
        "SEK" => "krona",
        "SGD" => "dollar",
        "SHP" => "pound",
        "SLL" => "leone",
        "SOS" => "shilling",
        "SRD" => "dollar",
        "SSP" => "pound",
        "STD" => "dobra",
        "SYP" => "pound",
        "SZL" => "lilangeni",
        "THB" => "baht",
        "TJS" => "somoni",
        "TMT" => "manat",
        "TND" => "dinar",
        "TOP" => "paʻanga",
        "TRY" => "lira",
        "TTD" => "dollar",
        "TWD" => "dollar",
        "TZS" => "shilling",
        "UAH" => "hryvnia",
        "UGX" => "shilling",
        "USD" => "dollar",
        "UYU" => "peso",
        "UZS" => "som",
        "VEF" => "bolívar",
        "VND" => "đồng",
        "VUV" => "vatu",
        "WST" => "tālā",
        "XAF" => "franc",
        "XCD" => "dollar",
        "XOF" => "franc",
        "XPF" => "franc",
        "YER" => "rial",
        "ZAR" => "rand",
        "ZMW" => "kwacha"
    ];
    /**
     * List of countries currency sign by code
     *
     * @var array
     */
    protected static $signs = [
        "AED" => "د.إ",
        "AFN" => "؋",
        "ALL" => "L",
        "AMD" => "&#1423;",
        "ANG" => "ƒ",
        "AOA" => "Kz",
        "ARS" => "$",
        "AUD" => "$",
        "AWG" => "ƒ",
        "AZN" => "&#8380;",
        "BAM" => "KM",
        "BBD" => "$",
        "BDT" => "৳",
        "BGN" => "лв",
        "BHD" => ".د.ب",
        "BIF" => "Fr",
        "BMD" => "$",
        "BND" => "$",
        "BOB" => "Bs.",
        "BRL" => "R$",
        "BSD" => "$",
        "BTN" => "Nu.",
        "BWP" => "P",
        "BYR" => "Br",
        "BZD" => "$",
        "CAD" => "$",
        "CDF" => "Fr",
        "CHF" => "Fr",
        "CLP" => "$",
        "CNY" => "¥ or 元",
        "COP" => "$",
        "CRC" => "₡",
        "CUC" => "$",
        "CUP" => "$",
        "CVE" => "Esc or $",
        "CZK" => "Kč",
        "DJF" => "Fr",
        "DKK" => "kr",
        "DOP" => "$",
        "DZD" => "د.ج",
        "EGP" => "£ or ج.م",
        "ERN" => "Nfk",
        "ETB" => "Br",
        "EUR" => "€",
        "FJD" => "$",
        "FKP" => "£",
        "GBP" => "£",
        "GEL" => "ლ",
        "GHS" => "₵",
        "GIP" => "£",
        "GMD" => "D",
        "GNF" => "Fr",
        "GTQ" => "Q",
        "GYD" => "$",
        "HKD" => "$",
        "HNL" => "L",
        "HRK" => "kn",
        "HTG" => "G",
        "HUF" => "Ft",
        "IDR" => "Rp",
        "ILS" => "₪",
        "IMP" => "£",
        "INR" => "₹",
        "IQD" => "ع.د",
        "IRR" => "﷼",
        "ISK" => "kr",
        "JEP" => "£",
        "JMD" => "$",
        "JOD" => "د.ا",
        "JPY" => "¥",
        "KES" => "Sh",
        "KGS" => "лв",
        "KHR" => "៛",
        "KMF" => "KMF",
        "KPW" => "₩",
        "KRW" => "₩",
        "KWD" => "د.ك",
        "KYD" => "$",
        "KZT" => "₸",
        "LAK" => "₭",
        "LBP" => "ل.ل",
        "LKR" => "Rs or රු",
        "LRD" => "$",
        "LSL" => "L",
        "LTL" => "Lt",
        "LYD" => "ل.د",
        "MAD" => "د.م.",
        "MDL" => "L",
        "MGA" => "Ar",
        "MKD" => "ден",
        "MMK" => "Ks",
        "MNT" => "₮",
        "MOP" => "P",
        "MRO" => "UM",
        "MUR" => "₨",
        "MVR" => ".ރ",
        "MWK" => "MK",
        "MXN" => "$",
        "MYR" => "RM",
        "MZN" => "MT",
        "NAD" => "$",
        "NGN" => "₦",
        "NIO" => "C$",
        "NOK" => "kr",
        "NPR" => "₨",
        "NZD" => "$",
        "OMR" => "ر.ع.",
        "PAB" => "B/.",
        "PEN" => "S/.",
        "PGK" => "K",
        "PHP" => "₱",
        "PKR" => "₨",
        "PLN" => "zł",
        "PYG" => "₲",
        "QAR" => "ر.ق",
        "RON" => "lei",
        "RSD" => "дин. or din.",
        "RUB" => "&#8381;",
        "RWF" => "Fr",
        "SAR" => "ر.س",
        "SBD" => "$",
        "SCR" => "₨",
        "SDG" => "£",
        "SEK" => "kr",
        "SGD" => "$",
        "SHP" => "£",
        "SLL" => "Le",
        "SOS" => "Sh",
        "SRD" => "$",
        "SSP" => "£",
        "STD" => "Db",
        "SYP" => "£ or ل.س",
        "SZL" => "L",
        "THB" => "฿",
        "TJS" => "ЅМ",
        "TMT" => "m",
        "TND" => "د.ت",
        "TOP" => "T$",
        "TRY" => "&#8378;",
        "TTD" => "$",
        "TWD" => "$",
        "TZS" => "Sh",
        "UAH" => "₴",
        "UGX" => "Sh",
        "USD" => "$",
        "UYU" => "peso",
        "UZS" => "лв",
        "VEF" => "Bs F",
        "VND" => "₫",
        "VUV" => "Vt",
        "WST" => "T",
        "XAF" => "ZK",
        "XCD" => "$",
        "XOF" => "Fr",
        "XPF" => "Fr",
        "YER" => "﷼",
        "ZAR" => "R",
        "ZMW" => "ZK"
    ];
    /**
     * List of countries currency unit and division by code
     *
     * @var array
     */
    protected static $fractal = [
        "AED" => ["unit" => "fils", "division" => 100],
        "AFN" => ["unit" => "pul", "division" => 100],
        "ALL" => ["unit" => "qindarkë", "division" => 100],
        "AMD" => ["unit" => "luma", "division" => 100],
        "ANG" => ["unit" => "cent", "division" => 100],
        "AOA" => ["unit" => "cêntimo", "division" => 100],
        "ARS" => ["unit" => "centavo", "division" => 100],
        "AUD" => ["unit" => "cent", "division" => 100],
        "AWG" => ["unit" => "cent", "division" => 100],
        "AZN" => ["unit" => "qəpik", "division" => 100],
        "BAM" => ["unit" => "fening", "division" => 100],
        "BBD" => ["unit" => "cent", "division" => 100],
        "BDT" => ["unit" => "paisa", "division" => 100],
        "BGN" => ["unit" => "stotinka", "division" => 100],
        "BHD" => ["unit" => "fils", "division" => 1000],
        "BIF" => ["unit" => "centime", "division" => 100],
        "BMD" => ["unit" => "cent", "division" => 100],
        "BND" => ["unit" => "sen", "division" => 100],
        "BOB" => ["unit" => "centavo", "division" => 100],
        "BRL" => ["unit" => "centavo", "division" => 100],
        "BSD" => ["unit" => "cent", "division" => 100],
        "BTN" => ["unit" => "chetrum", "division" => 100],
        "BWP" => ["unit" => "thebe", "division" => 100],
        "BYR" => ["unit" => "kapyeyka", "division" => 100],
        "BZD" => ["unit" => "cent", "division" => 100],
        "CAD" => ["unit" => "cent", "division" => 100],
        "CDF" => ["unit" => "centime", "division" => 100],
        "CHF" => ["unit" => "rappen", "division" => 100],
        "CLP" => ["unit" => "centavo", "division" => 100],
        "CNY" => ["unit" => "fen", "division" => 100],
        "COP" => ["unit" => "centavo", "division" => 100],
        "CRC" => ["unit" => "céntimo", "division" => 100],
        "CUC" => ["unit" => "centavo", "division" => 100],
        "CUP" => ["unit" => "centavo", "division" => 100],
        "CVE" => ["unit" => "centavo", "division" => 100],
        "CZK" => ["unit" => "haléř", "division" => 100],
        "DJF" => ["unit" => "centime", "division" => 100],
        "DKK" => ["unit" => "Øre", "division" => 100],
        "DOP" => ["unit" => "centavo", "division" => 100],
        "DZD" => ["unit" => "santeem", "division" => 100],
        "EGP" => ["unit" => "piastre", "division" => 100],
        "ERN" => ["unit" => "cent", "division" => 100],
        "ETB" => ["unit" => "santim", "division" => 100],
        "EUR" => ["unit" => "cent", "division" => 100],
        "FJD" => ["unit" => "cent", "division" => 100],
        "FKP" => ["unit" => "penny", "division" => 100],
        "GBP" => ["unit" => "penny", "division" => 100],
        "GEL" => ["unit" => "tetri", "division" => 100],
        "GHS" => ["unit" => "pesewa", "division" => 100],
        "GIP" => ["unit" => "penny", "division" => 100],
        "GMD" => ["unit" => "butut", "division" => 100],
        "GNF" => ["unit" => "centime", "division" => 100],
        "GTQ" => ["unit" => "centavo", "division" => 100],
        "GYD" => ["unit" => "cent", "division" => 100],
        "HKD" => ["unit" => "cent", "division" => 100],
        "HNL" => ["unit" => "centavo", "division" => 100],
        "HRK" => ["unit" => "lipa", "division" => 100],
        "HTG" => ["unit" => "centime", "division" => 100],
        "HUF" => ["unit" => "fillér", "division" => 100],
        "IDR" => ["unit" => "sen", "division" => 100],
        "ILS" => ["unit" => "agora", "division" => 100],
        "IMP" => ["unit" => "penny", "division" => 100],
        "INR" => ["unit" => "paisa", "division" => 100],
        "IQD" => ["unit" => "fils", "division" => 1000],
        "IRR" => ["unit" => "dinar", "division" => 100],
        "ISK" => ["unit" => "eyrir", "division" => 100],
        "JEP" => ["unit" => "penny", "division" => 100],
        "JMD" => ["unit" => "cent", "division" => 100],
        "JOD" => ["unit" => "piastre", "division" => 100],
        "JPY" => ["unit" => "sen", "division" => 100],
        "KES" => ["unit" => "cent", "division" => 100],
        "KGS" => ["unit" => "tyiyn", "division" => 100],
        "KHR" => ["unit" => "sen", "division" => 100],
        "KMF" => ["unit" => "centime", "division" => 100],
        "KPW" => ["unit" => "chon", "division" => 100],
        "KRW" => ["unit" => "jeon", "division" => 100],
        "KWD" => ["unit" => "fils", "division" => 100],
        "KYD" => ["unit" => "cent", "division" => 100],
        "KZT" => ["unit" => "tïın", "division" => 100],
        "LAK" => ["unit" => "att", "division" => 100],
        "LBP" => ["unit" => "piastre", "division" => 100],
        "LKR" => ["unit" => "cent", "division" => 100],
        "LRD" => ["unit" => "cent", "division" => 100],
        "LSL" => ["unit" => "sente", "division" => 100],
        "LTL" => ["unit" => "centas", "division" => 100],
        "LYD" => ["unit" => "dirham", "division" => 100],
        "MAD" => ["unit" => "centime", "division" => 100],
        "MDL" => ["unit" => "ban", "division" => 100],
        "MGA" => ["unit" => "iraimbilanja", "division" => 5],
        "MKD" => ["unit" => "deni", "division" => 100],
        "MMK" => ["unit" => "pya", "division" => 100],
        "MNT" => ["unit" => "möngö", "division" => 100],
        "MOP" => ["unit" => "avo", "division" => 100],
        "MRO" => ["unit" => "khoums", "division" => 100],
        "MUR" => ["unit" => "cent", "division" => 100],
        "MVR" => ["unit" => "laari", "division" => 100],
        "MWK" => ["unit" => "tambala", "division" => 100],
        "MXN" => ["unit" => "centavo", "division" => 100],
        "MYR" => ["unit" => "sen", "division" => 100],
        "MZN" => ["unit" => "centavo", "division" => 100],
        "NAD" => ["unit" => "cent", "division" => 100],
        "NGN" => ["unit" => "kobo", "division" => 100],
        "NIO" => ["unit" => "centavo", "division" => 100],
        "NOK" => ["unit" => "Øre", "division" => 100],
        "NPR" => ["unit" => "paisa", "division" => 100],
        "NZD" => ["unit" => "cent", "division" => 100],
        "OMR" => ["unit" => "baisa", "division" => 1000],
        "PAB" => ["unit" => "centésimo", "division" => 100],
        "PEN" => ["unit" => "céntimo", "division" => 100],
        "PGK" => ["unit" => "toea", "division" => 100],
        "PHP" => ["unit" => "centavo", "division" => 100],
        "PKR" => ["unit" => "paisa", "division" => 100],
        "PLN" => ["unit" => "grosz", "division" => 100],
        "PYG" => ["unit" => "céntimo", "division" => 100],
        "QAR" => ["unit" => "dirham", "division" => 100],
        "RON" => ["unit" => "ban", "division" => 100],
        "RSD" => ["unit" => "para", "division" => 100],
        "RUB" => ["unit" => "kopek", "division" => 100],
        "RWF" => ["unit" => "centime", "division" => 100],
        "SAR" => ["unit" => "halala", "division" => 100],
        "SBD" => ["unit" => "cent", "division" => 100],
        "SCR" => ["unit" => "cent", "division" => 100],
        "SDG" => ["unit" => "piastre", "division" => 100],
        "SEK" => ["unit" => "öre", "division" => 100],
        "SGD" => ["unit" => "cent", "division" => 100],
        "SHP" => ["unit" => "penny", "division" => 100],
        "SLL" => ["unit" => "cent", "division" => 100],
        "SOS" => ["unit" => "cent", "division" => 100],
        "SRD" => ["unit" => "cent", "division" => 100],
        "SSP" => ["unit" => "piastre", "division" => 100],
        "STD" => ["unit" => "cêntimo", "division" => 100],
        "SYP" => ["unit" => "piastre", "division" => 100],
        "SZL" => ["unit" => "cent", "division" => 100],
        "THB" => ["unit" => "satang", "division" => 100],
        "TJS" => ["unit" => "diram", "division" => 100],
        "TMT" => ["unit" => "tennesi", "division" => 100],
        "TND" => ["unit" => "millime", "division" => 1000],
        "TOP" => ["unit" => "ceniti", "division" => 100],
        "TRY" => ["unit" => "kuruş", "division" => 100],
        "TTD" => ["unit" => "cent", "division" => 100],
        "TWD" => ["unit" => "cent", "division" => 100],
        "TZS" => ["unit" => "cent", "division" => 100],
        "UAH" => ["unit" => "kopiyka", "division" => 100],
        "UGX" => ["unit" => "cent", "division" => 100],
        "USD" => ["unit" => "cent", "division" => 100],
        "UYU" => ["unit" => "centésimo", "division" => 100],
        "UZS" => ["unit" => "tiyin", "division" => 100],
        "VEF" => ["unit" => "céntimo", "division" => 100],
        "VND" => ["unit" => "hào", "division" => 10],
        "VUV" => ["unit" => "none", "division" => 0],
        "WST" => ["unit" => "sene", "division" => 100],
        "XAF" => ["unit" => "centime", "division" => 100],
        "XCD" => ["unit" => "cent", "division" => 100],
        "XOF" => ["unit" => "centime", "division" => 100],
        "XPF" => ["unit" => "centime", "division" => 100],
        "YER" => ["unit" => "fils", "division" => 100],
        "ZAR" => ["unit" => "cent", "division" => 100],
        "ZMW" => ["unit" => "ngwee", "division" => 100]
    ];

    /**
     * List of countries by currency code
     *
     * @var array
     */
    protected static $countries = [
        "AED" => ["AE"],
        "AFN" => ["AF"],
        "ALL" => ["AL"],
        "AMD" => ["AM"],
        "ANG" => ["AN", "CW", "SX"],
        "AOA" => ["AO"],
        "ARS" => ["AR"],
        "AUD" => ["AU", "CC", "CX", "HM", "KI", "NF", "NR", "TV"],
        "AWG" => ["AW"],
        "AZN" => ["AZ"],
        "BAM" => ["BA"],
        "BBD" => ["BB"],
        "BDT" => ["BD"],
        "BGN" => ["BG"],
        "BHD" => ["BH"],
        "BIF" => ["BI"],
        "BMD" => ["BM"],
        "BND" => ["BN", "SG"],
        "BOB" => ["BO"],
        "BRL" => ["BR"],
        "BSD" => ["BS"],
        "BTN" => ["BT"],
        "BWP" => ["BW", "ZW"],
        "BYR" => ["BY"],
        "BZD" => ["BZ"],
        "CAD" => ["CA"],
        "CDF" => ["CD"],
        "CHF" => ["CH", "LI"],
        "CLP" => ["CL"],
        "CNY" => ["CN"],
        "COP" => ["CO"],
        "CRC" => ["CR"],
        "CUC" => ["CU"],
        "CUP" => ["CU"],
        "CVE" => ["CV"],
        "CZK" => ["CZ"],
        "DJF" => ["DJ"],
        "DKK" => ["DK", "FO", "GL"],
        "DOP" => ["DO"],
        "DZD" => ["DZ"],
        "EGP" => ["EG"],
        "ERN" => ["ER"],
        "ETB" => ["ET"],
        "EUR" => ["EU", "AD", "AT", "AX", "BE", "BL", "CY", "DE", "EE", "ES", "FI", "FR", "GF", "GP", "GR", "IE", "IT", "KV", "LU", "LV", "MC", "ME", "MF", "MQ", "MT", "NL", "PM", "PT", "RE", "SI", "SK", "SM", "TF", "VA", "YT", "ZW"],
        "FJD" => ["FJ"],
        "FKP" => ["FK"],
        "GBP" => ["GB", "GG", "GS", "IM", "JE", "ZW"],
        "GEL" => ["GE"],
        "GHS" => ["GH"],
        "GIP" => ["GI"],
        "GMD" => ["GM"],
        "GNF" => ["GN"],
        "GTQ" => ["GT"],
        "GYD" => ["GY"],
        "HKD" => ["HK"],
        "HNL" => ["HN"],
        "HRK" => ["HR"],
        "HTG" => ["HT"],
        "HUF" => ["HU"],
        "IDR" => ["ID"],
        "ILS" => ["IL", "PS"],
        "IMP" => ["IM"],
        "INR" => ["IN", "BT"],
        "IQD" => ["IQ"],
        "IRR" => ["IR"],
        "ISK" => ["IS"],
        "JEP" => ["JE"],
        "JMD" => ["JM"],
        "JOD" => ["JO", "PS"],
        "JPY" => ["JP"],
        "KES" => ["KE"],
        "KGS" => ["KG"],
        "KHR" => ["KH"],
        "KMF" => ["KM"],
        "KPW" => ["KP"],
        "KRW" => ["KR"],
        "KWD" => ["KW"],
        "KYD" => ["KY"],
        "KZT" => ["KZ"],
        "LAK" => ["LA"],
        "LBP" => ["LB"],
        "LKR" => ["LK"],
        "LRD" => ["LR"],
        "LSL" => ["LS"],
        "LTL" => ["LT"],
        "LYD" => ["LY"],
        "MAD" => ["MA", "EH"],
        "MDL" => ["MD"],
        "MGA" => ["MG"],
        "MKD" => ["MK"],
        "MMK" => ["MM"],
        "MNT" => ["MN"],
        "MOP" => ["MO"],
        "MRO" => ["MR"],
        "MUR" => ["MU"],
        "MVR" => ["MV"],
        "MWK" => ["MW"],
        "MXN" => ["MX"],
        "MYR" => ["MYR"],
        "MZN" => ["MZ"],
        "NAD" => ["NA"],
        "NGN" => ["NG"],
        "NIO" => ["NI"],
        "NOK" => ["NO", "BV", "SJ"],
        "NPR" => ["NP"],
        "NZD" => ["NZ", "CK", "NU", "PN", "TK"],
        "OMR" => ["OM"],
        "PAB" => ["PA"],
        "PEN" => ["PE"],
        "PGK" => ["PG"],
        "PHP" => ["PH"],
        "PKR" => ["PK"],
        "PLN" => ["PL"],
        "PYG" => ["PY"],
        "QAR" => ["QA"],
        "RON" => ["RO"],
        "RSD" => ["RS"],
        "RUB" => ["RU"],
        "RWF" => ["RW"],
        "SAR" => ["SA"],
        "SBD" => ["SB"],
        "SCR" => ["SC"],
        "SDG" => ["SD"],
        "SEK" => ["SE"],
        "SGD" => ["SG", "BN"],
        "SHP" => ["SH", "AC"],
        "SLL" => ["SL"],
        "SOS" => ["SO"],
        "SRD" => ["SR"],
        "SSP" => ["SS"],
        "STD" => ["ST"],
        "SYP" => ["SY"],
        "SZL" => ["SZ"],
        "THB" => ["TH"],
        "TJS" => ["TJ"],
        "TMT" => ["TM"],
        "TND" => ["TN"],
        "TOP" => ["TO"],
        "TRY" => ["TR"],
        "TTD" => ["TT"],
        "TWD" => ["TW"],
        "TZS" => ["TZ"],
        "UAH" => ["UA"],
        "UGX" => ["UG"],
        "USD" => ["US", "AS", "BQ", "EC", "FM", "GU", "IO", "KH", "MH", "MP", "PA", "PR", "PW", "SV", "TC", "TL", "UM", "VG", "VI", "ZW"],
        "UYU" => ["UY"],
        "UZS" => ["UZ"],
        "VEF" => ["VE"],
        "VND" => ["VN"],
        "VUV" => ["VU"],
        "WST" => ["WS"],
        "XAF" => ["CF", "CG", "CM", "GA", "GQ", "TD"],
        "XCD" => ["AC", "AI", "DM", "GD", "KN", "LC", "MS", "VC"],
        "XOF" => ["BF", "BJ", "CI", "GW", "ML", "NE", "SN", "TG"],
        "XPF" => ["NC", "PF", "WF"],
        "YER" => ["YE"],
        "ZAR" => ["ZA", "LS", "NA", "ZW"],
        "ZMW" => ["ZM"]

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
        if (isset(Countries\En::getList()[$country])) return $country;
        return (Countries\En::getCode($country)) ? : Countries\Native::getCode($country);

    }

    /**
     * Get list of currencies
     *
     * @return array
     */
    public static function getList()
    {
        return static::$names;
    }

    /**
     * Get country currency code
     *
     * @param string $currency currency name or sign
     * @return string
     */
    public static function getCode($currency)
    {
        if (array_key_exists($currency, static::$names)) return $currency;
        return array_search($currency, static::$names) ? : array_search($currency, static::$signs) ? : null;

    }

    /**
     * Get currency name
     *
     * @param string $currency currency code or sign
     * @return string
     */
    public static function getName($currency)
    {
        return isset(static::$names[static::getCode($currency)]) ? static::$names[static::getCode($currency)] : null;
    }

    /**
     * Get currency short name
     *
     * @param string $currency currency code or sign
     * @return string
     */
    public static function getShortName($currency)
    {
        return isset(static::$shortNames[static::getCode($currency)]) ? static::$shortNames[static::getCode($currency)] : null;
    }

    /**
     * Get currency sign
     *
     * @param string $currency currency code or name
     * @return string
     */
    public static function getSign($currency)
    {
        return isset(static::$signs[static::getCode($currency)]) ? static::$signs[static::getCode($currency)] : null;
    }

    /**
     * Get currency unit and division
     *
     * @param string $currency currency code,sign or name
     * @return string
     */
    public static function getFractal($currency)
    {
        return isset(static::$fractal[static::getCode($currency)]) ? static::$fractal[static::getCode($currency)]['unit'] . '(' . static::$fractal[static::getCode($currency)]['division'] . ')' : null;
    }

    /**
     * Get country currencies
     *
     * @param string $country
     * @return string
     */
    public static function forCountry($country)
    {
        $result = [];
        foreach (static::$countries as $code => $countries) {
            if (in_array(static::countryCode($country), $countries)) array_push($result, static::getName($code));
        }
        return (count($result) !== 0) ? implode(", ", $result) : null;

    }
    /**
     * Get countries where currency is used
     * returns codes if $codes is true, else returns names
     *
     * @param string $currency
     * @param boolean $codes
     * @return string
     */
    public static function getCountry($currency, $codes = false)
    {
        if (isset(static::$countries[static::getCode($currency)])) {
            $result = [];
            foreach (static::$countries[static::getCode($currency)] as $countryCode) {
                ($codes === true) ? array_push($result, $countryCode) :array_push($result, Countries\En::getName($countryCode));
            }
            return implode(", ", $result);
        } else {
            return null;
        }
    }
    /**
     * Get full info about currency
     *
     * @param string $currency
     * @return string
     */
    public static function getInfo($currency)
    {
        if (isset(static::$names[static::getCode($currency)])) {
            return static::getName($currency)
            . ': code - ' . static::getCode($currency)
            . '; sign - ' . static::getSign($currency)
            . '; fractal unit - ' . static::getFractal($currency)
            . '; used in countries - ' . static::getCountry($currency);
        } else {
            return null;
        }
    }
}

