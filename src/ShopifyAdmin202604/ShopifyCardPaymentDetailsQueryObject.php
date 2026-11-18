<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Credit card payment information captured during a transaction. Includes cardholder details, card metadata, verification response codes, and the [`DigitalWallet`](https://shopify.dev/docs/api/admin-graphql/latest/enums/DigitalWallet#valid-values) when used.
 */
class ShopifyCardPaymentDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CardPaymentDetails";

    /**
     * The response code from the address verification system (AVS). The code is always a single letter.
     */
    public function selectAvsResultCode(): static
    {
        $this->selectField("avsResultCode");

        return $this;
    }

    /**
     * The issuer identification number (IIN), formerly known as bank identification number (BIN) of the customer's credit card. This is made up of the first few digits of the credit card number.
     */
    public function selectBin(): static
    {
        $this->selectField("bin");

        return $this;
    }

    /**
     * The name of the company that issued the customer's credit card.
     */
    public function selectCompany(): static
    {
        $this->selectField("company");

        return $this;
    }

    /**
     * The date and time when the card payment details were created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The response code from the credit card company indicating whether the customer entered the card security code, or card verification value, correctly. The code is a single letter or empty string.
     */
    public function selectCvvResultCode(): static
    {
        $this->selectField("cvvResultCode");

        return $this;
    }

    /**
     * The month in which the used credit card expires.
     */
    public function selectExpirationMonth(): static
    {
        $this->selectField("expirationMonth");

        return $this;
    }

    /**
     * The year in which the used credit card expires.
     */
    public function selectExpirationYear(): static
    {
        $this->selectField("expirationYear");

        return $this;
    }

    /**
     * The holder of the credit card.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The customer's credit card number, with most of the leading digits redacted.
     */
    public function selectNumber(): static
    {
        $this->selectField("number");

        return $this;
    }

    /**
     * The name of payment method used by the buyer.
     */
    public function selectPaymentMethodName(): static
    {
        $this->selectField("paymentMethodName");

        return $this;
    }

    /**
     * Digital wallet used for the payment.
     */
    public function selectWallet(): static
    {
        $this->selectField("wallet");

        return $this;
    }
}
