<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The code designating a country/region, which generally follows ISO 3166-1 alpha-2 guidelines.
 * If a territory doesn't have a country code value in the `CountryCode` enum, then it might be considered a subdivision
 * of another country. For example, the territories associated with Spain are represented by the country code `ES`,
 * and the territories associated with the United States of America are represented by the country code `US`.
 */
class ShopifyCountryCodeEnumObject extends EnumObject
{
    /**
     * Afghanistan.
     */
    const AF = "AF";
    /**
     * �
     * land Islands.
     */
    const AX = "AX";
    /**
     * Albania.
     */
    const AL = "AL";
    /**
     * Algeria.
     */
    const DZ = "DZ";
    /**
     * Andorra.
     */
    const AD = "AD";
    /**
     * Angola.
     */
    const AO = "AO";
    /**
     * Anguilla.
     */
    const AI = "AI";
    /**
     * Antigua & Barbuda.
     */
    const AG = "AG";
    /**
     * Argentina.
     */
    const AR = "AR";
    /**
     * Armenia.
     */
    const AM = "AM";
    /**
     * Aruba.
     */
    const AW = "AW";
    /**
     * Ascension Island.
     */
    const AC = "AC";
    /**
     * Australia.
     */
    const AU = "AU";
    /**
     * Austria.
     */
    const AT = "AT";
    /**
     * Azerbaijan.
     */
    const AZ = "AZ";
    /**
     * Bahamas.
     */
    const BS = "BS";
    /**
     * Bahrain.
     */
    const BH = "BH";
    /**
     * Bangladesh.
     */
    const BD = "BD";
    /**
     * Barbados.
     */
    const BB = "BB";
    /**
     * Belarus.
     */
    const BY = "BY";
    /**
     * Belgium.
     */
    const BE = "BE";
    /**
     * Belize.
     */
    const BZ = "BZ";
    /**
     * Benin.
     */
    const BJ = "BJ";
    /**
     * Bermuda.
     */
    const BM = "BM";
    /**
     * Bhutan.
     */
    const BT = "BT";
    /**
     * Bolivia.
     */
    const BO = "BO";
    /**
     * Bosnia & Herzegovina.
     */
    const BA = "BA";
    /**
     * Botswana.
     */
    const BW = "BW";
    /**
     * Bouvet Island.
     */
    const BV = "BV";
    /**
     * Brazil.
     */
    const BR = "BR";
    /**
     * British Indian Ocean Territory.
     */
    const IO = "IO";
    /**
     * Brunei.
     */
    const BN = "BN";
    /**
     * Bulgaria.
     */
    const BG = "BG";
    /**
     * Burkina Faso.
     */
    const BF = "BF";
    /**
     * Burundi.
     */
    const BI = "BI";
    /**
     * Cambodia.
     */
    const KH = "KH";
    /**
     * Canada.
     */
    const CA = "CA";
    /**
     * Cape Verde.
     */
    const CV = "CV";
    /**
     * Caribbean Netherlands.
     */
    const BQ = "BQ";
    /**
     * Cayman Islands.
     */
    const KY = "KY";
    /**
     * Central African Republic.
     */
    const CF = "CF";
    /**
     * Chad.
     */
    const TD = "TD";
    /**
     * Chile.
     */
    const CL = "CL";
    /**
     * China.
     */
    const CN = "CN";
    /**
     * Christmas Island.
     */
    const CX = "CX";
    /**
     * Cocos (Keeling) Islands.
     */
    const CC = "CC";
    /**
     * Colombia.
     */
    const CO = "CO";
    /**
     * Comoros.
     */
    const KM = "KM";
    /**
     * Congo - Brazzaville.
     */
    const CG = "CG";
    /**
     * Congo - Kinshasa.
     */
    const CD = "CD";
    /**
     * Cook Islands.
     */
    const CK = "CK";
    /**
     * Costa Rica.
     */
    const CR = "CR";
    /**
     * Croatia.
     */
    const HR = "HR";
    /**
     * Cuba.
     */
    const CU = "CU";
    /**
     * Curaçao.
     */
    const CW = "CW";
    /**
     * Cyprus.
     */
    const CY = "CY";
    /**
     * Czechia.
     */
    const CZ = "CZ";
    /**
     * Côte d’Ivoire.
     */
    const CI = "CI";
    /**
     * Denmark.
     */
    const DK = "DK";
    /**
     * Djibouti.
     */
    const DJ = "DJ";
    /**
     * Dominica.
     */
    const DM = "DM";
    /**
     * Dominican Republic.
     */
    const DO = "DO";
    /**
     * Ecuador.
     */
    const EC = "EC";
    /**
     * Egypt.
     */
    const EG = "EG";
    /**
     * El Salvador.
     */
    const SV = "SV";
    /**
     * Equatorial Guinea.
     */
    const GQ = "GQ";
    /**
     * Eritrea.
     */
    const ER = "ER";
    /**
     * Estonia.
     */
    const EE = "EE";
    /**
     * Eswatini.
     */
    const SZ = "SZ";
    /**
     * Ethiopia.
     */
    const ET = "ET";
    /**
     * Falkland Islands.
     */
    const FK = "FK";
    /**
     * Faroe Islands.
     */
    const FO = "FO";
    /**
     * Fiji.
     */
    const FJ = "FJ";
    /**
     * Finland.
     */
    const FI = "FI";
    /**
     * France.
     */
    const FR = "FR";
    /**
     * French Guiana.
     */
    const GF = "GF";
    /**
     * French Polynesia.
     */
    const PF = "PF";
    /**
     * French Southern Territories.
     */
    const TF = "TF";
    /**
     * Gabon.
     */
    const GA = "GA";
    /**
     * Gambia.
     */
    const GM = "GM";
    /**
     * Georgia.
     */
    const GE = "GE";
    /**
     * Germany.
     */
    const DE = "DE";
    /**
     * Ghana.
     */
    const GH = "GH";
    /**
     * Gibraltar.
     */
    const GI = "GI";
    /**
     * Greece.
     */
    const GR = "GR";
    /**
     * Greenland.
     */
    const GL = "GL";
    /**
     * Grenada.
     */
    const GD = "GD";
    /**
     * Guadeloupe.
     */
    const GP = "GP";
    /**
     * Guatemala.
     */
    const GT = "GT";
    /**
     * Guernsey.
     */
    const GG = "GG";
    /**
     * Guinea.
     */
    const GN = "GN";
    /**
     * Guinea-Bissau.
     */
    const GW = "GW";
    /**
     * Guyana.
     */
    const GY = "GY";
    /**
     * Haiti.
     */
    const HT = "HT";
    /**
     * Heard & McDonald Islands.
     */
    const HM = "HM";
    /**
     * Vatican City.
     */
    const VA = "VA";
    /**
     * Honduras.
     */
    const HN = "HN";
    /**
     * Hong Kong SAR.
     */
    const HK = "HK";
    /**
     * Hungary.
     */
    const HU = "HU";
    /**
     * Iceland.
     */
    const IS = "IS";
    /**
     * India.
     */
    const IN = "IN";
    /**
     * Indonesia.
     */
    const ID = "ID";
    /**
     * Iran.
     */
    const IR = "IR";
    /**
     * Iraq.
     */
    const IQ = "IQ";
    /**
     * Ireland.
     */
    const IE = "IE";
    /**
     * Isle of Man.
     */
    const IM = "IM";
    /**
     * Israel.
     */
    const IL = "IL";
    /**
     * Italy.
     */
    const IT = "IT";
    /**
     * Jamaica.
     */
    const JM = "JM";
    /**
     * Japan.
     */
    const JP = "JP";
    /**
     * Jersey.
     */
    const JE = "JE";
    /**
     * Jordan.
     */
    const JO = "JO";
    /**
     * Kazakhstan.
     */
    const KZ = "KZ";
    /**
     * Kenya.
     */
    const KE = "KE";
    /**
     * Kiribati.
     */
    const KI = "KI";
    /**
     * North Korea.
     */
    const KP = "KP";
    /**
     * Kosovo.
     */
    const XK = "XK";
    /**
     * Kuwait.
     */
    const KW = "KW";
    /**
     * Kyrgyzstan.
     */
    const KG = "KG";
    /**
     * Laos.
     */
    const LA = "LA";
    /**
     * Latvia.
     */
    const LV = "LV";
    /**
     * Lebanon.
     */
    const LB = "LB";
    /**
     * Lesotho.
     */
    const LS = "LS";
    /**
     * Liberia.
     */
    const LR = "LR";
    /**
     * Libya.
     */
    const LY = "LY";
    /**
     * Liechtenstein.
     */
    const LI = "LI";
    /**
     * Lithuania.
     */
    const LT = "LT";
    /**
     * Luxembourg.
     */
    const LU = "LU";
    /**
     * Macao SAR.
     */
    const MO = "MO";
    /**
     * Madagascar.
     */
    const MG = "MG";
    /**
     * Malawi.
     */
    const MW = "MW";
    /**
     * Malaysia.
     */
    const MY = "MY";
    /**
     * Maldives.
     */
    const MV = "MV";
    /**
     * Mali.
     */
    const ML = "ML";
    /**
     * Malta.
     */
    const MT = "MT";
    /**
     * Martinique.
     */
    const MQ = "MQ";
    /**
     * Mauritania.
     */
    const MR = "MR";
    /**
     * Mauritius.
     */
    const MU = "MU";
    /**
     * Mayotte.
     */
    const YT = "YT";
    /**
     * Mexico.
     */
    const MX = "MX";
    /**
     * Moldova.
     */
    const MD = "MD";
    /**
     * Monaco.
     */
    const MC = "MC";
    /**
     * Mongolia.
     */
    const MN = "MN";
    /**
     * Montenegro.
     */
    const ME = "ME";
    /**
     * Montserrat.
     */
    const MS = "MS";
    /**
     * Morocco.
     */
    const MA = "MA";
    /**
     * Mozambique.
     */
    const MZ = "MZ";
    /**
     * Myanmar (Burma).
     */
    const MM = "MM";
    /**
     * Namibia.
     */
    const NA = "NA";
    /**
     * Nauru.
     */
    const NR = "NR";
    /**
     * Nepal.
     */
    const NP = "NP";
    /**
     * Netherlands.
     */
    const NL = "NL";
    /**
     * Netherlands Antilles.
     */
    const AN = "AN";
    /**
     * New Caledonia.
     */
    const NC = "NC";
    /**
     * New Zealand.
     */
    const NZ = "NZ";
    /**
     * Nicaragua.
     */
    const NI = "NI";
    /**
     * Niger.
     */
    const NE = "NE";
    /**
     * Nigeria.
     */
    const NG = "NG";
    /**
     * Niue.
     */
    const NU = "NU";
    /**
     * Norfolk Island.
     */
    const NF = "NF";
    /**
     * North Macedonia.
     */
    const MK = "MK";
    /**
     * Norway.
     */
    const NO = "NO";
    /**
     * Oman.
     */
    const OM = "OM";
    /**
     * Pakistan.
     */
    const PK = "PK";
    /**
     * Palestinian Territories.
     */
    const PS = "PS";
    /**
     * Panama.
     */
    const PA = "PA";
    /**
     * Papua New Guinea.
     */
    const PG = "PG";
    /**
     * Paraguay.
     */
    const PY = "PY";
    /**
     * Peru.
     */
    const PE = "PE";
    /**
     * Philippines.
     */
    const PH = "PH";
    /**
     * Pitcairn Islands.
     */
    const PN = "PN";
    /**
     * Poland.
     */
    const PL = "PL";
    /**
     * Portugal.
     */
    const PT = "PT";
    /**
     * Qatar.
     */
    const QA = "QA";
    /**
     * Cameroon.
     */
    const CM = "CM";
    /**
     * Réunion.
     */
    const RE = "RE";
    /**
     * Romania.
     */
    const RO = "RO";
    /**
     * Russia.
     */
    const RU = "RU";
    /**
     * Rwanda.
     */
    const RW = "RW";
    /**
     * St. Barthélemy.
     */
    const BL = "BL";
    /**
     * St. Helena.
     */
    const SH = "SH";
    /**
     * St. Kitts & Nevis.
     */
    const KN = "KN";
    /**
     * St. Lucia.
     */
    const LC = "LC";
    /**
     * St. Martin.
     */
    const MF = "MF";
    /**
     * St. Pierre & Miquelon.
     */
    const PM = "PM";
    /**
     * Samoa.
     */
    const WS = "WS";
    /**
     * San Marino.
     */
    const SM = "SM";
    /**
     * São Tomé & Príncipe.
     */
    const ST = "ST";
    /**
     * Saudi Arabia.
     */
    const SA = "SA";
    /**
     * Senegal.
     */
    const SN = "SN";
    /**
     * Serbia.
     */
    const RS = "RS";
    /**
     * Seychelles.
     */
    const SC = "SC";
    /**
     * Sierra Leone.
     */
    const SL = "SL";
    /**
     * Singapore.
     */
    const SG = "SG";
    /**
     * Sint Maarten.
     */
    const SX = "SX";
    /**
     * Slovakia.
     */
    const SK = "SK";
    /**
     * Slovenia.
     */
    const SI = "SI";
    /**
     * Solomon Islands.
     */
    const SB = "SB";
    /**
     * Somalia.
     */
    const SO = "SO";
    /**
     * South Africa.
     */
    const ZA = "ZA";
    /**
     * South Georgia & South Sandwich Islands.
     */
    const GS = "GS";
    /**
     * South Korea.
     */
    const KR = "KR";
    /**
     * South Sudan.
     */
    const SS = "SS";
    /**
     * Spain.
     */
    const ES = "ES";
    /**
     * Sri Lanka.
     */
    const LK = "LK";
    /**
     * St. Vincent & Grenadines.
     */
    const VC = "VC";
    /**
     * Sudan.
     */
    const SD = "SD";
    /**
     * Suriname.
     */
    const SR = "SR";
    /**
     * Svalbard & Jan Mayen.
     */
    const SJ = "SJ";
    /**
     * Sweden.
     */
    const SE = "SE";
    /**
     * Switzerland.
     */
    const CH = "CH";
    /**
     * Syria.
     */
    const SY = "SY";
    /**
     * Taiwan.
     */
    const TW = "TW";
    /**
     * Tajikistan.
     */
    const TJ = "TJ";
    /**
     * Tanzania.
     */
    const TZ = "TZ";
    /**
     * Thailand.
     */
    const TH = "TH";
    /**
     * Timor-Leste.
     */
    const TL = "TL";
    /**
     * Togo.
     */
    const TG = "TG";
    /**
     * Tokelau.
     */
    const TK = "TK";
    /**
     * Tonga.
     */
    const TO = "TO";
    /**
     * Trinidad & Tobago.
     */
    const TT = "TT";
    /**
     * Tristan da Cunha.
     */
    const TA = "TA";
    /**
     * Tunisia.
     */
    const TN = "TN";
    /**
     * Türkiye.
     */
    const TR = "TR";
    /**
     * Turkmenistan.
     */
    const TM = "TM";
    /**
     * Turks & Caicos Islands.
     */
    const TC = "TC";
    /**
     * Tuvalu.
     */
    const TV = "TV";
    /**
     * Uganda.
     */
    const UG = "UG";
    /**
     * Ukraine.
     */
    const UA = "UA";
    /**
     * United Arab Emirates.
     */
    const AE = "AE";
    /**
     * United Kingdom.
     */
    const GB = "GB";
    /**
     * United States.
     */
    const US = "US";
    /**
     * U.S. Outlying Islands.
     */
    const UM = "UM";
    /**
     * Uruguay.
     */
    const UY = "UY";
    /**
     * Uzbekistan.
     */
    const UZ = "UZ";
    /**
     * Vanuatu.
     */
    const VU = "VU";
    /**
     * Venezuela.
     */
    const VE = "VE";
    /**
     * Vietnam.
     */
    const VN = "VN";
    /**
     * British Virgin Islands.
     */
    const VG = "VG";
    /**
     * Wallis & Futuna.
     */
    const WF = "WF";
    /**
     * Western Sahara.
     */
    const EH = "EH";
    /**
     * Yemen.
     */
    const YE = "YE";
    /**
     * Zambia.
     */
    const ZM = "ZM";
    /**
     * Zimbabwe.
     */
    const ZW = "ZW";
    /**
     * Unknown Region.
     */
    const ZZ = "ZZ";
}
