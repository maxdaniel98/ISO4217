<?php
namespace maxdaniel98\iso4217;

/**
 * An ISO4217 helper class
 *
 * @package iso4217
 * @author Max van den Bosch
 */
class ISO4217{
    public static function getByISO4217($currency){
        return self::getArray("currency",$currency);
    }

    public static function getByCurrencyNumeric($currency_numeric){
        return self::getArray("currency_numeric",$currency_numeric);
    }

    public static function getByCurrencyName($currency_name){
        return self::getArray("currency_name",$currency_name);
    }

    public static function getBySymbol($symbol){
        return self::getArray("symbol",$symbol);
    }

    private static function getArray($field, $value){
        $index=array_search($value, array_column(self::$currency, $field));
        return new Currency(self::$currency[$index]);
    }

    private static $currency=array(
array("currency"=>"AED","currency_numeric"=>784,"currency_name"=>"United Arab Emirates dirham","symbol"=>"د.إ","subunit"=>"fils"),
array("currency"=>"AFN","currency_numeric"=>971,"currency_name"=>"Afghan afghani","symbol"=>"؋","subunit"=>"pul"),
array("currency"=>"ALL","currency_numeric"=>8,"currency_name"=>"Albanian lek","symbol"=>"L","subunit"=>"qindarkë"),
array("currency"=>"AMD","currency_numeric"=>51,"currency_name"=>"Armenian dram","symbol"=>"դր.","subunit"=>"luma"),
array("currency"=>"ANG","currency_numeric"=>532,"currency_name"=>"Netherlands Antillean guilder","symbol"=>"ƒ","subunit"=>"cent"),
array("currency"=>"AOA","currency_numeric"=>973,"currency_name"=>"Angolan kwanza","symbol"=>"Kz","subunit"=>"cêntimo"),
array("currency"=>"ARS","currency_numeric"=>32,"currency_name"=>"Argentine peso","symbol"=>"$","subunit"=>"centavo"),
array("currency"=>"AUD","currency_numeric"=>36,"currency_name"=>"Australian dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"AWG","currency_numeric"=>533,"currency_name"=>"Aruban florin","symbol"=>"ƒ","subunit"=>"cent"),
array("currency"=>"AZN","currency_numeric"=>944,"currency_name"=>"Azerbaijani manat","symbol"=>"m","subunit"=>"qəpik"),
array("currency"=>"BAM","currency_numeric"=>977,"currency_name"=>"Bosnia and Herzegovina convertible mark","symbol"=>"КМ","subunit"=>"fening"),
array("currency"=>"BBD","currency_numeric"=>52,"currency_name"=>"Barbados dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"BDT","currency_numeric"=>50,"currency_name"=>"Bangladeshi taka","symbol"=>"৳","subunit"=>"paisa"),
array("currency"=>"BGN","currency_numeric"=>975,"currency_name"=>"Bulgarian lev","symbol"=>"лв","subunit"=>"stotinka"),
array("currency"=>"BHD","currency_numeric"=>48,"currency_name"=>"Bahraini dinar","symbol"=>".د.ب","subunit"=>"fils"),
array("currency"=>"BIF","currency_numeric"=>108,"currency_name"=>"Burundian franc","symbol"=>"Fr","subunit"=>"centime"),
array("currency"=>"BMD","currency_numeric"=>60,"currency_name"=>"Bermudian dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"BND","currency_numeric"=>96,"currency_name"=>"Brunei dollar","symbol"=>"$","subunit"=>"sen"),
array("currency"=>"BOB","currency_numeric"=>68,"currency_name"=>"Boliviano","symbol"=>"Bs.","subunit"=>"centavo"),
array("currency"=>"BRL","currency_numeric"=>986,"currency_name"=>"Brazilian real","symbol"=>"R$","subunit"=>"centavo"),
array("currency"=>"BSD","currency_numeric"=>44,"currency_name"=>"Bahamian dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"BTN","currency_numeric"=>64,"currency_name"=>"Bhutanese ngultrum","symbol"=>"Nu.","subunit"=>"chetrum"),
array("currency"=>"BWP","currency_numeric"=>72,"currency_name"=>"Botswana pula","symbol"=>"P","subunit"=>"thebe"),
array("currency"=>"BYR","currency_numeric"=>974,"currency_name"=>"Belarusian ruble","symbol"=>"Br","subunit"=>"kapyeyka"),
array("currency"=>"BZD","currency_numeric"=>84,"currency_name"=>"Belize dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"CAD","currency_numeric"=>124,"currency_name"=>"Canadian dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"CDF","currency_numeric"=>976,"currency_name"=>"Congolese franc","symbol"=>"Fr","subunit"=>"centime"),
array("currency"=>"CHF","currency_numeric"=>756,"currency_name"=>"Swiss franc","symbol"=>"Fr","subunit"=>"rappen"),
array("currency"=>"CLP","currency_numeric"=>152,"currency_name"=>"Chilean peso","symbol"=>"$","subunit"=>"centavo"),
array("currency"=>"CNY","currency_numeric"=>156,"currency_name"=>"Chinese yuan","symbol"=>"¥","subunit"=>"fen"),
array("currency"=>"COP","currency_numeric"=>170,"currency_name"=>"Colombian peso","symbol"=>"$","subunit"=>"centavo"),
array("currency"=>"CRC","currency_numeric"=>188,"currency_name"=>"Costa Rican colon","symbol"=>"₡","subunit"=>"cêntimo"),
array("currency"=>"CUC","currency_numeric"=>931,"currency_name"=>"Cuban convertible peso","symbol"=>"$","subunit"=>"centavo"),
array("currency"=>"CUP","currency_numeric"=>192,"currency_name"=>"Cuban peso","symbol"=>"$","subunit"=>"centavo"),
array("currency"=>"CVE","currency_numeric"=>132,"currency_name"=>"Cape Verde escudo","symbol"=>"Esc or $","subunit"=>"centavo"),
array("currency"=>"CZK","currency_numeric"=>203,"currency_name"=>"Czech koruna","symbol"=>"Kč","subunit"=>"haléř"),
array("currency"=>"DJF","currency_numeric"=>262,"currency_name"=>"Djiboutian franc","symbol"=>"Fr","subunit"=>"centime"),
array("currency"=>"DKK","currency_numeric"=>208,"currency_name"=>"Danish krone","symbol"=>"kr","subunit"=>"øre"),
array("currency"=>"DOP","currency_numeric"=>214,"currency_name"=>"Dominican peso","symbol"=>"$","subunit"=>"centavo"),
array("currency"=>"DZD","currency_numeric"=>12,"currency_name"=>"Algerian dinar","symbol"=>"د.ج","subunit"=>"Santeem"),
array("currency"=>"EGP","currency_numeric"=>818,"currency_name"=>"Egyptian pound","symbol"=>"ج.م","subunit"=>"piaster"),
array("currency"=>"ERN","currency_numeric"=>232,"currency_name"=>"Eritrean nakfa","symbol"=>"Nfk","subunit"=>"cent"),
array("currency"=>"ETB","currency_numeric"=>230,"currency_name"=>"Ethiopian birr","symbol"=>"Br","subunit"=>"santim"),
array("currency"=>"EUR","currency_numeric"=>978,"currency_name"=>"Euro","symbol"=>"€","subunit"=>"cent"),
array("currency"=>"FJD","currency_numeric"=>242,"currency_name"=>"Fiji dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"FKP","currency_numeric"=>238,"currency_name"=>"Falkland Islands pound","symbol"=>"£","subunit"=>"penny"),
array("currency"=>"GBP","currency_numeric"=>826,"currency_name"=>"Pound sterling","symbol"=>"£","subunit"=>"penny"),
array("currency"=>"GEL","currency_numeric"=>981,"currency_name"=>"Georgian lari","symbol"=>"ლ","subunit"=>"tetri"),
array("currency"=>"GHS","currency_numeric"=>936,"currency_name"=>"Ghanaian cedi","symbol"=>"₵","subunit"=>"pesewa"),
array("currency"=>"GIP","currency_numeric"=>292,"currency_name"=>"Gibraltar pound","symbol"=>"£","subunit"=>"penny"),
array("currency"=>"GMD","currency_numeric"=>270,"currency_name"=>"Gambian dalasi","symbol"=>"D","subunit"=>"butut"),
array("currency"=>"GNF","currency_numeric"=>324,"currency_name"=>"Guinean franc","symbol"=>"Fr","subunit"=>"centime"),
array("currency"=>"GTQ","currency_numeric"=>320,"currency_name"=>"Guatemalan quetzal","symbol"=>"Q","subunit"=>"centavo"),
array("currency"=>"GYD","currency_numeric"=>328,"currency_name"=>"Guyanese dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"HKD","currency_numeric"=>344,"currency_name"=>"Hong Kong dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"HNL","currency_numeric"=>340,"currency_name"=>"Honduran lempira","symbol"=>"L","subunit"=>"centavo"),
array("currency"=>"HRK","currency_numeric"=>191,"currency_name"=>"Croatian kuna","symbol"=>"kn","subunit"=>"lipa"),
array("currency"=>"HTG","currency_numeric"=>332,"currency_name"=>"Haitian gourde","symbol"=>"G","subunit"=>"centime"),
array("currency"=>"HUF","currency_numeric"=>348,"currency_name"=>"Hungarian forint","symbol"=>"Ft","subunit"=>"fillér"),
array("currency"=>"IDR","currency_numeric"=>360,"currency_name"=>"Indonesian rupiah","symbol"=>"Rp","subunit"=>"sen"),
array("currency"=>"ILS","currency_numeric"=>376,"currency_name"=>"Israeli new shekel","symbol"=>"₪","subunit"=>"agora"),
array("currency"=>"INR","currency_numeric"=>356,"currency_name"=>"Indian rupee","symbol"=>"₹","subunit"=>"paisa"),
array("currency"=>"IQD","currency_numeric"=>368,"currency_name"=>"Iraqi dinar","symbol"=>"ع.د","subunit"=>"fils"),
array("currency"=>"IRR","currency_numeric"=>364,"currency_name"=>"Iranian rial","symbol"=>"﷼","subunit"=>"NULL"),
array("currency"=>"ISK","currency_numeric"=>352,"currency_name"=>"Icelandic króna","symbol"=>"kr","subunit"=>"eyrir"),
array("currency"=>"JMD","currency_numeric"=>388,"currency_name"=>"Jamaican dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"JOD","currency_numeric"=>400,"currency_name"=>"Jordanian dinar","symbol"=>"د.ا","subunit"=>"piastre"),
array("currency"=>"JPY","currency_numeric"=>392,"currency_name"=>"Japanese yen","symbol"=>"¥","subunit"=>"sen"),
array("currency"=>"KES","currency_numeric"=>404,"currency_name"=>"Kenyan shilling","symbol"=>"Sh","subunit"=>"cent"),
array("currency"=>"KGS","currency_numeric"=>417,"currency_name"=>"Kyrgyzstani som","symbol"=>"лв","subunit"=>"tyiyn"),
array("currency"=>"KHR","currency_numeric"=>116,"currency_name"=>"Cambodian riel","symbol"=>"៛","subunit"=>"sen"),
array("currency"=>"KMF","currency_numeric"=>174,"currency_name"=>"Comoro franc","symbol"=>"Fr","subunit"=>"centime"),
array("currency"=>"KPW","currency_numeric"=>408,"currency_name"=>"North Korean won","symbol"=>"₩","subunit"=>"chon"),
array("currency"=>"KRW","currency_numeric"=>410,"currency_name"=>"South Korean won","symbol"=>"₩","subunit"=>"jeon"),
array("currency"=>"KWD","currency_numeric"=>414,"currency_name"=>"Kuwaiti dinar","symbol"=>"د.ك","subunit"=>"fils"),
array("currency"=>"KYD","currency_numeric"=>136,"currency_name"=>"Cayman Islands dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"KZT","currency_numeric"=>398,"currency_name"=>"Kazakhstani tenge","symbol"=>"₸","subunit"=>"tïın"),
array("currency"=>"LAK","currency_numeric"=>418,"currency_name"=>"Lao kip","symbol"=>"₭","subunit"=>"att"),
array("currency"=>"LBP","currency_numeric"=>422,"currency_name"=>"Lebanese pound","symbol"=>"ل.ل","subunit"=>"piastre"),
array("currency"=>"LKR","currency_numeric"=>144,"currency_name"=>"Sri Lankan rupee","symbol"=>"Rs","subunit"=>"cent"),
array("currency"=>"LRD","currency_numeric"=>430,"currency_name"=>"Liberian dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"LSL","currency_numeric"=>426,"currency_name"=>"Lesotho loti","symbol"=>"L","subunit"=>"sente"),
array("currency"=>"LTL","currency_numeric"=>440,"currency_name"=>"Lithuanian litas","symbol"=>"Lt","subunit"=>"centas"),
array("currency"=>"LYD","currency_numeric"=>434,"currency_name"=>"Libyan dinar","symbol"=>"ل.د","subunit"=>"dirham"),
array("currency"=>"MAD","currency_numeric"=>504,"currency_name"=>"Moroccan dirham","symbol"=>"د.م.","subunit"=>"centime"),
array("currency"=>"MDL","currency_numeric"=>498,"currency_name"=>"Moldovan leu","symbol"=>"L","subunit"=>"ban"),
array("currency"=>"MGA","currency_numeric"=>969,"currency_name"=>"Malagasy ariary","symbol"=>"Ar","subunit"=>"iraimbilanja"),
array("currency"=>"MKD","currency_numeric"=>807,"currency_name"=>"Macedonian denar","symbol"=>"ден","subunit"=>"deni"),
array("currency"=>"MMK","currency_numeric"=>104,"currency_name"=>"Myanma kyat","symbol"=>"Ks","subunit"=>"pya"),
array("currency"=>"MNT","currency_numeric"=>496,"currency_name"=>"Mongolian tugrik","symbol"=>"₮","subunit"=>"möngö"),
array("currency"=>"MOP","currency_numeric"=>446,"currency_name"=>"Macanese pataca","symbol"=>"P","subunit"=>"avo"),
array("currency"=>"MRO","currency_numeric"=>478,"currency_name"=>"Mauritanian ouguiya","symbol"=>"UM","subunit"=>"khoums"),
array("currency"=>"MUR","currency_numeric"=>480,"currency_name"=>"Mauritian rupee","symbol"=>"₨","subunit"=>"cent"),
array("currency"=>"MVR","currency_numeric"=>462,"currency_name"=>"Maldivian rufiyaa","symbol"=>".ރ","subunit"=>"laari"),
array("currency"=>"MWK","currency_numeric"=>454,"currency_name"=>"Malawian kwacha","symbol"=>"MK","subunit"=>"tambala"),
array("currency"=>"MXN","currency_numeric"=>484,"currency_name"=>"Mexican peso","symbol"=>"$","subunit"=>"centavo"),
array("currency"=>"MYR","currency_numeric"=>458,"currency_name"=>"Malaysian ringgit","symbol"=>"RM","subunit"=>"sen"),
array("currency"=>"MZN","currency_numeric"=>943,"currency_name"=>"Mozambican metical","symbol"=>"MT","subunit"=>"centavo"),
array("currency"=>"NAD","currency_numeric"=>516,"currency_name"=>"Namibian dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"NGN","currency_numeric"=>566,"currency_name"=>"Nigerian naira","symbol"=>"₦","subunit"=>"kobo"),
array("currency"=>"NIO","currency_numeric"=>558,"currency_name"=>"Nicaraguan córdoba","symbol"=>"C$","subunit"=>"centavo"),
array("currency"=>"NOK","currency_numeric"=>578,"currency_name"=>"Norwegian krone","symbol"=>"kr","subunit"=>"øre"),
array("currency"=>"NPR","currency_numeric"=>524,"currency_name"=>"Nepalese rupee","symbol"=>"₨","subunit"=>"paisa"),
array("currency"=>"NZD","currency_numeric"=>554,"currency_name"=>"New Zealand dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"OMR","currency_numeric"=>512,"currency_name"=>"Omani rial","symbol"=>"ر.ع.","subunit"=>"Baisa"),
array("currency"=>"PAB","currency_numeric"=>590,"currency_name"=>"Panamanian balboa","symbol"=>"B/.","subunit"=>"centésimo"),
array("currency"=>"PEN","currency_numeric"=>604,"currency_name"=>"Peruvian nuevo sol","symbol"=>"S/.","subunit"=>"cêntimo"),
array("currency"=>"PGK","currency_numeric"=>598,"currency_name"=>"Papua New Guinean kina","symbol"=>"K","subunit"=>"toea"),
array("currency"=>"PHP","currency_numeric"=>608,"currency_name"=>"Philippine peso","symbol"=>"₱","subunit"=>"centavo"),
array("currency"=>"PKR","currency_numeric"=>586,"currency_name"=>"Pakistani rupee","symbol"=>"₨","subunit"=>"paisa"),
array("currency"=>"PLN","currency_numeric"=>985,"currency_name"=>"Polish złoty","symbol"=>"zł","subunit"=>"grosz"),
array("currency"=>"PYG","currency_numeric"=>600,"currency_name"=>"Paraguayan guaraní","symbol"=>"₲","subunit"=>"cêntimo"),
array("currency"=>"QAR","currency_numeric"=>634,"currency_name"=>"Qatari riyal","symbol"=>"ر.ق","subunit"=>"dirham"),
array("currency"=>"RON","currency_numeric"=>946,"currency_name"=>"Romanian new leu","symbol"=>"L","subunit"=>"ban"),
array("currency"=>"RSD","currency_numeric"=>941,"currency_name"=>"Serbian dinar","symbol"=>"дин.","subunit"=>"para"),
array("currency"=>"RUB","currency_numeric"=>643,"currency_name"=>"Russian rouble","symbol"=>"руб.","subunit"=>"kopek"),
array("currency"=>"RWF","currency_numeric"=>646,"currency_name"=>"Rwandan franc","symbol"=>"Fr","subunit"=>"centime"),
array("currency"=>"SAR","currency_numeric"=>682,"currency_name"=>"Saudi riyal","symbol"=>"ر.س","subunit"=>"halala"),
array("currency"=>"SBD","currency_numeric"=>90,"currency_name"=>"Solomon Islands dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"SCR","currency_numeric"=>690,"currency_name"=>"Seychelles rupee","symbol"=>"₨","subunit"=>"cent"),
array("currency"=>"SDG","currency_numeric"=>938,"currency_name"=>"Sudanese pound","symbol"=>"£","subunit"=>"piastre"),
array("currency"=>"SEK","currency_numeric"=>752,"currency_name"=>"Swedish krona","symbol"=>"kr","subunit"=>"öre"),
array("currency"=>"SGD","currency_numeric"=>702,"currency_name"=>"Singapore dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"SHP","currency_numeric"=>654,"currency_name"=>"Saint Helena pound","symbol"=>"£","subunit"=>"penny"),
array("currency"=>"SLL","currency_numeric"=>694,"currency_name"=>"Sierra leonean leone","symbol"=>"Le","subunit"=>"cent"),
array("currency"=>"SOS","currency_numeric"=>706,"currency_name"=>"Somali shilling","symbol"=>"Sh","subunit"=>"cent"),
array("currency"=>"SRD","currency_numeric"=>968,"currency_name"=>"Surinamese dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"SSP","currency_numeric"=>728,"currency_name"=>"South Sudanese pound","symbol"=>"£","subunit"=>"piastre"),
array("currency"=>"STD","currency_numeric"=>678,"currency_name"=>"São Tomé and Príncipe dobra","symbol"=>"Db","subunit"=>"cêntimo"),
array("currency"=>"SYP","currency_numeric"=>760,"currency_name"=>"Syrian pound","symbol"=>"ل.س","subunit"=>"piastre"),
array("currency"=>"SZL","currency_numeric"=>748,"currency_name"=>"Swazi lilangeni","symbol"=>"L","subunit"=>"cent"),
array("currency"=>"THB","currency_numeric"=>764,"currency_name"=>"Thai baht","symbol"=>"฿","subunit"=>"satang"),
array("currency"=>"TJS","currency_numeric"=>972,"currency_name"=>"Tajikistani somoni","symbol"=>"ЅМ","subunit"=>"diram"),
array("currency"=>"TMT","currency_numeric"=>934,"currency_name"=>"Turkmenistani manat","symbol"=>"m","subunit"=>"tennesi"),
array("currency"=>"TND","currency_numeric"=>788,"currency_name"=>"Tunisian dinar","symbol"=>"د.ت","subunit"=>"millime"),
array("currency"=>"TOP","currency_numeric"=>776,"currency_name"=>"Tongan paʻanga","symbol"=>"T$","subunit"=>"seniti"),
array("currency"=>"TRY","currency_numeric"=>949,"currency_name"=>"Turkish lira","symbol"=>"NULL","subunit"=>"kuruş"),
array("currency"=>"TTD","currency_numeric"=>780,"currency_name"=>"Trinidad and Tobago dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"TWD","currency_numeric"=>901,"currency_name"=>"New Taiwan dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"TZS","currency_numeric"=>834,"currency_name"=>"Tanzanian shilling","symbol"=>"Sh","subunit"=>"cent"),
array("currency"=>"UAH","currency_numeric"=>980,"currency_name"=>"Ukrainian hryvnia","symbol"=>"₴","subunit"=>"kopiyka"),
array("currency"=>"UGX","currency_numeric"=>800,"currency_name"=>"Ugandan shilling","symbol"=>"Sh","subunit"=>"cent"),
array("currency"=>"USD","currency_numeric"=>840,"currency_name"=>"United States dollar","symbol"=>"$","subunit"=>"cent"),
array("currency"=>"UYU","currency_numeric"=>858,"currency_name"=>"Uruguayan peso","symbol"=>"$","subunit"=>"centésimo"),
array("currency"=>"UZS","currency_numeric"=>860,"currency_name"=>"Uzbekistan som","symbol"=>"лв","subunit"=>"")
);

}
