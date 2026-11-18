<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a credit card payment instrument.
 */
class ShopifyVaultCreditCardQueryObject extends QueryObject
{
    const OBJECT_NAME = "VaultCreditCard";

    /**
     * The billing address of the card.
     */
    public function selectBillingAddress(?ShopifyVaultCreditCardBillingAddressArgumentsObject $argsObject = null): ShopifyCustomerCreditCardBillingAddressQueryObject
    {
        $object = new ShopifyCustomerCreditCardBillingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The brand for the card.
     */
    public function selectBrand(): static
    {
        $this->selectField("brand");

        return $this;
    }

    /**
     * Whether the card has been expired.
     */
    public function selectExpired(): static
    {
        $this->selectField("expired");

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
     * The last four digits for the card.
     */
    public function selectLastDigits(): static
    {
        $this->selectField("lastDigits");

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
}
