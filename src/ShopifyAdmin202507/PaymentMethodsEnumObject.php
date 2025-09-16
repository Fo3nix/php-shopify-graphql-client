<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class PaymentMethodsEnumObject extends EnumObject
{
    const VISA = "VISA";
    const MASTERCARD = "MASTERCARD";
    const DISCOVER = "DISCOVER";
    const AMERICAN_EXPRESS = "AMERICAN_EXPRESS";
    const DINERS_CLUB = "DINERS_CLUB";
    const JCB = "JCB";
    const UNIONPAY = "UNIONPAY";
    const ELO = "ELO";
    const DANKORT = "DANKORT";
    const MAESTRO = "MAESTRO";
    const FORBRUGSFORENINGEN = "FORBRUGSFORENINGEN";
    const PAYPAL = "PAYPAL";
    const BOGUS = "BOGUS";
    const BITCOIN = "BITCOIN";
    const LITECOIN = "LITECOIN";
    const DOGECOIN = "DOGECOIN";
    const INTERAC = "INTERAC";
    const EFTPOS = "EFTPOS";
    const CARTES_BANCAIRES = "CARTES_BANCAIRES";
    const BANCONTACT = "BANCONTACT";
}
