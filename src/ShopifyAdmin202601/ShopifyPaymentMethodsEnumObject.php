<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Some of the payment methods used in Shopify.
 */
class ShopifyPaymentMethodsEnumObject extends EnumObject
{
    const VISA = "VISA";
    const MASTERCARD = "MASTERCARD";
    const DISCOVER = "DISCOVER";
    const AMERICAN_EXPRESS = "AMERICAN_EXPRESS";
    const DINERS_CLUB = "DINERS_CLUB";
    const JCB = "JCB";
    /**
     * The payment method for UnionPay payment.
     */
    const UNIONPAY = "UNIONPAY";
    /**
     * The payment method for Elo payment.
     */
    const ELO = "ELO";
    const DANKORT = "DANKORT";
    const MAESTRO = "MAESTRO";
    const FORBRUGSFORENINGEN = "FORBRUGSFORENINGEN";
    const PAYPAL = "PAYPAL";
    const BOGUS = "BOGUS";
    const BITCOIN = "BITCOIN";
    const LITECOIN = "LITECOIN";
    const DOGECOIN = "DOGECOIN";
    /**
     * The payment method for Interac payment.
     */
    const INTERAC = "INTERAC";
    /**
     * The payment method for eftpos_au payment.
     */
    const EFTPOS = "EFTPOS";
    /**
     * The payment method for Cartes Bancaires payment.
     */
    const CARTES_BANCAIRES = "CARTES_BANCAIRES";
    /**
     * The payment method for Bancontact payment.
     */
    const BANCONTACT = "BANCONTACT";
}
