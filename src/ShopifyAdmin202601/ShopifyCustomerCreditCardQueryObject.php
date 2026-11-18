<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a card instrument for customer payment method.
 */
class ShopifyCustomerCreditCardQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerCreditCard";

    /**
     * The billing address of the card.
     */
    public function selectBillingAddress(?ShopifyCustomerCreditCardBillingAddressArgumentsObject $argsObject = null): ShopifyCustomerCreditCardBillingAddressQueryObject
    {
        $object = new ShopifyCustomerCreditCardBillingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The brand of the card.
     */
    public function selectBrand(): static
    {
        $this->selectField("brand");

        return $this;
    }

    /**
     * Whether the card is about to expire.
     */
    public function selectExpiresSoon(): static
    {
        $this->selectField("expiresSoon");

        return $this;
    }

    /**
     * The expiry month of the card.
     */
    public function selectExpiryMonth(): static
    {
        $this->selectField("expiryMonth");

        return $this;
    }

    /**
     * The expiry year of the card.
     */
    public function selectExpiryYear(): static
    {
        $this->selectField("expiryYear");

        return $this;
    }

    /**
     * The card's BIN number.
     */
    public function selectFirstDigits(): static
    {
        $this->selectField("firstDigits");

        return $this;
    }

    /**
     * The payment method can be revoked if there are no active subscription contracts.
     */
    public function selectIsRevocable(): static
    {
        $this->selectField("isRevocable");

        return $this;
    }

    /**
     * The last 4 digits of the card.
     */
    public function selectLastDigits(): static
    {
        $this->selectField("lastDigits");

        return $this;
    }

    /**
     * The masked card number with only the last 4 digits displayed.
     */
    public function selectMaskedNumber(): static
    {
        $this->selectField("maskedNumber");

        return $this;
    }

    /**
     * The name of the card holder.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The source of the card if coming from a wallet such as Apple Pay.
     */
    public function selectSource(): static
    {
        $this->selectField("source");

        return $this;
    }

    /**
     * The last 4 digits of the Device Account Number.
     */
    public function selectVirtualLastDigits(): static
    {
        $this->selectField("virtualLastDigits");

        return $this;
    }
}
