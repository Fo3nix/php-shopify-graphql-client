<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The currency codes that represent the world currencies throughout the Admin API. Currency codes include
 * [standard ISO 4217 codes](https://en.wikipedia.org/wiki/ISO_4217), legacy codes, non-standard codes,
 * digital currency codes.
 */
class ShopifyCurrencyCodeEnumObject extends EnumObject
{
    /**
     * United States Dollars (USD).
     */
    const USD = "USD";
    /**
     * Euro (EUR).
     */
    const EUR = "EUR";
    /**
     * United Kingdom Pounds (GBP).
     */
    const GBP = "GBP";
    /**
     * Canadian Dollars (CAD).
     */
    const CAD = "CAD";
    /**
     * Afghan Afghani (AFN).
     */
    const AFN = "AFN";
    /**
     * Albanian Lek (ALL).
     */
    const ALL = "ALL";
    /**
     * Algerian Dinar (DZD).
     */
    const DZD = "DZD";
    /**
     * Angolan Kwanza (AOA).
     */
    const AOA = "AOA";
    /**
     * Argentine Pesos (ARS).
     */
    const ARS = "ARS";
    /**
     * Armenian Dram (AMD).
     */
    const AMD = "AMD";
    /**
     * Aruban Florin (AWG).
     */
    const AWG = "AWG";
    /**
     * Australian Dollars (AUD).
     */
    const AUD = "AUD";
    /**
     * Barbadian Dollar (BBD).
     */
    const BBD = "BBD";
    /**
     * Azerbaijani Manat (AZN).
     */
    const AZN = "AZN";
    /**
     * Bangladesh Taka (BDT).
     */
    const BDT = "BDT";
    /**
     * Bahamian Dollar (BSD).
     */
    const BSD = "BSD";
    /**
     * Bahraini Dinar (BHD).
     */
    const BHD = "BHD";
    /**
     * Burundian Franc (BIF).
     */
    const BIF = "BIF";
    /**
     * Belarusian Ruble (BYN).
     */
    const BYN = "BYN";
    /**
     * Belize Dollar (BZD).
     */
    const BZD = "BZD";
    /**
     * Bermudian Dollar (BMD).
     */
    const BMD = "BMD";
    /**
     * Bhutanese Ngultrum (BTN).
     */
    const BTN = "BTN";
    /**
     * Bosnia and Herzegovina Convertible Mark (BAM).
     */
    const BAM = "BAM";
    /**
     * Brazilian Real (BRL).
     */
    const BRL = "BRL";
    /**
     * Bolivian Boliviano (BOB).
     */
    const BOB = "BOB";
    /**
     * Botswana Pula (BWP).
     */
    const BWP = "BWP";
    /**
     * Brunei Dollar (BND).
     */
    const BND = "BND";
    /**
     * Bulgarian Lev (BGN).
     */
    const BGN = "BGN";
    /**
     * Burmese Kyat (MMK).
     */
    const MMK = "MMK";
    /**
     * Cambodian Riel.
     */
    const KHR = "KHR";
    /**
     * Cape Verdean escudo (CVE).
     */
    const CVE = "CVE";
    /**
     * Caribbean Guilder (XCG).
     */
    const XCG = "XCG";
    /**
     * Cayman Dollars (KYD).
     */
    const KYD = "KYD";
    /**
     * Central African CFA Franc (XAF).
     */
    const XAF = "XAF";
    /**
     * Chilean Peso (CLP).
     */
    const CLP = "CLP";
    /**
     * Chinese Yuan Renminbi (CNY).
     */
    const CNY = "CNY";
    /**
     * Colombian Peso (COP).
     */
    const COP = "COP";
    /**
     * Comorian Franc (KMF).
     */
    const KMF = "KMF";
    /**
     * Congolese franc (CDF).
     */
    const CDF = "CDF";
    /**
     * Costa Rican Colones (CRC).
     */
    const CRC = "CRC";
    /**
     * Croatian Kuna (HRK).
     */
    const HRK = "HRK";
    /**
     * Czech Koruny (CZK).
     */
    const CZK = "CZK";
    /**
     * Danish Kroner (DKK).
     */
    const DKK = "DKK";
    /**
     * Djiboutian Franc (DJF).
     */
    const DJF = "DJF";
    /**
     * Dominican Peso (DOP).
     */
    const DOP = "DOP";
    /**
     * East Caribbean Dollar (XCD).
     */
    const XCD = "XCD";
    /**
     * Egyptian Pound (EGP).
     */
    const EGP = "EGP";
    /**
     * Eritrean Nakfa (ERN).
     */
    const ERN = "ERN";
    /**
     * Ethiopian Birr (ETB).
     */
    const ETB = "ETB";
    /**
     * Falkland Islands Pounds (FKP).
     */
    const FKP = "FKP";
    /**
     * CFP Franc (XPF).
     */
    const XPF = "XPF";
    /**
     * Fijian Dollars (FJD).
     */
    const FJD = "FJD";
    /**
     * Gibraltar Pounds (GIP).
     */
    const GIP = "GIP";
    /**
     * Gambian Dalasi (GMD).
     */
    const GMD = "GMD";
    /**
     * Ghanaian Cedi (GHS).
     */
    const GHS = "GHS";
    /**
     * Guatemalan Quetzal (GTQ).
     */
    const GTQ = "GTQ";
    /**
     * Guyanese Dollar (GYD).
     */
    const GYD = "GYD";
    /**
     * Georgian Lari (GEL).
     */
    const GEL = "GEL";
    /**
     * Guinean Franc (GNF).
     */
    const GNF = "GNF";
    /**
     * Haitian Gourde (HTG).
     */
    const HTG = "HTG";
    /**
     * Honduran Lempira (HNL).
     */
    const HNL = "HNL";
    /**
     * Hong Kong Dollars (HKD).
     */
    const HKD = "HKD";
    /**
     * Hungarian Forint (HUF).
     */
    const HUF = "HUF";
    /**
     * Icelandic Kronur (ISK).
     */
    const ISK = "ISK";
    /**
     * Indian Rupees (INR).
     */
    const INR = "INR";
    /**
     * Indonesian Rupiah (IDR).
     */
    const IDR = "IDR";
    /**
     * Israeli New Shekel (NIS).
     */
    const ILS = "ILS";
    /**
     * Iranian Rial (IRR).
     */
    const IRR = "IRR";
    /**
     * Iraqi Dinar (IQD).
     */
    const IQD = "IQD";
    /**
     * Jamaican Dollars (JMD).
     */
    const JMD = "JMD";
    /**
     * Japanese Yen (JPY).
     */
    const JPY = "JPY";
    /**
     * Jersey Pound.
     */
    const JEP = "JEP";
    /**
     * Jordanian Dinar (JOD).
     */
    const JOD = "JOD";
    /**
     * Kazakhstani Tenge (KZT).
     */
    const KZT = "KZT";
    /**
     * Kenyan Shilling (KES).
     */
    const KES = "KES";
    /**
     * Kiribati Dollar (KID).
     */
    const KID = "KID";
    /**
     * Kuwaiti Dinar (KWD).
     */
    const KWD = "KWD";
    /**
     * Kyrgyzstani Som (KGS).
     */
    const KGS = "KGS";
    /**
     * Laotian Kip (LAK).
     */
    const LAK = "LAK";
    /**
     * Latvian Lati (LVL).
     */
    const LVL = "LVL";
    /**
     * Lebanese Pounds (LBP).
     */
    const LBP = "LBP";
    /**
     * Lesotho Loti (LSL).
     */
    const LSL = "LSL";
    /**
     * Liberian Dollar (LRD).
     */
    const LRD = "LRD";
    /**
     * Libyan Dinar (LYD).
     */
    const LYD = "LYD";
    /**
     * Lithuanian Litai (LTL).
     */
    const LTL = "LTL";
    /**
     * Malagasy Ariary (MGA).
     */
    const MGA = "MGA";
    /**
     * Macedonia Denar (MKD).
     */
    const MKD = "MKD";
    /**
     * Macanese Pataca (MOP).
     */
    const MOP = "MOP";
    /**
     * Malawian Kwacha (MWK).
     */
    const MWK = "MWK";
    /**
     * Maldivian Rufiyaa (MVR).
     */
    const MVR = "MVR";
    /**
     * Mauritanian Ouguiya (MRU).
     */
    const MRU = "MRU";
    /**
     * Mexican Pesos (MXN).
     */
    const MXN = "MXN";
    /**
     * Malaysian Ringgits (MYR).
     */
    const MYR = "MYR";
    /**
     * Mauritian Rupee (MUR).
     */
    const MUR = "MUR";
    /**
     * Moldovan Leu (MDL).
     */
    const MDL = "MDL";
    /**
     * Moroccan Dirham.
     */
    const MAD = "MAD";
    /**
     * Mongolian Tugrik.
     */
    const MNT = "MNT";
    /**
     * Mozambican Metical.
     */
    const MZN = "MZN";
    /**
     * Namibian Dollar.
     */
    const NAD = "NAD";
    /**
     * Nepalese Rupee (NPR).
     */
    const NPR = "NPR";
    /**
     * New Zealand Dollars (NZD).
     */
    const NZD = "NZD";
    /**
     * Nicaraguan Córdoba (NIO).
     */
    const NIO = "NIO";
    /**
     * Nigerian Naira (NGN).
     */
    const NGN = "NGN";
    /**
     * Norwegian Kroner (NOK).
     */
    const NOK = "NOK";
    /**
     * Omani Rial (OMR).
     */
    const OMR = "OMR";
    /**
     * Panamian Balboa (PAB).
     */
    const PAB = "PAB";
    /**
     * Pakistani Rupee (PKR).
     */
    const PKR = "PKR";
    /**
     * Papua New Guinean Kina (PGK).
     */
    const PGK = "PGK";
    /**
     * Paraguayan Guarani (PYG).
     */
    const PYG = "PYG";
    /**
     * Peruvian Nuevo Sol (PEN).
     */
    const PEN = "PEN";
    /**
     * Philippine Peso (PHP).
     */
    const PHP = "PHP";
    /**
     * Polish Zlotych (PLN).
     */
    const PLN = "PLN";
    /**
     * Qatari Rial (QAR).
     */
    const QAR = "QAR";
    /**
     * Romanian Lei (RON).
     */
    const RON = "RON";
    /**
     * Russian Rubles (RUB).
     */
    const RUB = "RUB";
    /**
     * Rwandan Franc (RWF).
     */
    const RWF = "RWF";
    /**
     * Samoan Tala (WST).
     */
    const WST = "WST";
    /**
     * Saint Helena Pounds (SHP).
     */
    const SHP = "SHP";
    /**
     * Saudi Riyal (SAR).
     */
    const SAR = "SAR";
    /**
     * Serbian dinar (RSD).
     */
    const RSD = "RSD";
    /**
     * Seychellois Rupee (SCR).
     */
    const SCR = "SCR";
    /**
     * Sierra Leonean Leone (SLL).
     */
    const SLL = "SLL";
    /**
     * Singapore Dollars (SGD).
     */
    const SGD = "SGD";
    /**
     * Sudanese Pound (SDG).
     */
    const SDG = "SDG";
    /**
     * Somali Shilling (SOS).
     */
    const SOS = "SOS";
    /**
     * Syrian Pound (SYP).
     */
    const SYP = "SYP";
    /**
     * South African Rand (ZAR).
     */
    const ZAR = "ZAR";
    /**
     * South Korean Won (KRW).
     */
    const KRW = "KRW";
    /**
     * South Sudanese Pound (SSP).
     */
    const SSP = "SSP";
    /**
     * Solomon Islands Dollar (SBD).
     */
    const SBD = "SBD";
    /**
     * Sri Lankan Rupees (LKR).
     */
    const LKR = "LKR";
    /**
     * Surinamese Dollar (SRD).
     */
    const SRD = "SRD";
    /**
     * Swazi Lilangeni (SZL).
     */
    const SZL = "SZL";
    /**
     * Swedish Kronor (SEK).
     */
    const SEK = "SEK";
    /**
     * Swiss Francs (CHF).
     */
    const CHF = "CHF";
    /**
     * Taiwan Dollars (TWD).
     */
    const TWD = "TWD";
    /**
     * Thai baht (THB).
     */
    const THB = "THB";
    /**
     * Tajikistani Somoni (TJS).
     */
    const TJS = "TJS";
    /**
     * Tanzanian Shilling (TZS).
     */
    const TZS = "TZS";
    /**
     * Tongan Pa'anga (TOP).
     */
    const TOP = "TOP";
    /**
     * Trinidad and Tobago Dollars (TTD).
     */
    const TTD = "TTD";
    /**
     * Tunisian Dinar (TND).
     */
    const TND = "TND";
    /**
     * Turkish Lira (TRY).
     */
    const TRY = "TRY";
    /**
     * Turkmenistani Manat (TMT).
     */
    const TMT = "TMT";
    /**
     * Ugandan Shilling (UGX).
     */
    const UGX = "UGX";
    /**
     * Ukrainian Hryvnia (UAH).
     */
    const UAH = "UAH";
    /**
     * United Arab Emirates Dirham (AED).
     */
    const AED = "AED";
    /**
     * Uruguayan Pesos (UYU).
     */
    const UYU = "UYU";
    /**
     * Uzbekistan som (UZS).
     */
    const UZS = "UZS";
    /**
     * Vanuatu Vatu (VUV).
     */
    const VUV = "VUV";
    /**
     * Venezuelan Bolivares Soberanos (VES).
     */
    const VES = "VES";
    /**
     * Vietnamese đồng (VND).
     */
    const VND = "VND";
    /**
     * West African CFA franc (XOF).
     */
    const XOF = "XOF";
    /**
     * Yemeni Rial (YER).
     */
    const YER = "YER";
    /**
     * Zambian Kwacha (ZMW).
     */
    const ZMW = "ZMW";
    /**
     * United States Dollars Coin (USDC).
     */
    const USDC = "USDC";
    /**
     * Sao Tome And Principe Dobra (STN).
     */
    const STN = "STN";
    /**
     * Venezuelan Bolivares (VED).
     */
    const VED = "VED";
    /**
     * Unrecognized currency.
     */
    const XXX = "XXX";
}
