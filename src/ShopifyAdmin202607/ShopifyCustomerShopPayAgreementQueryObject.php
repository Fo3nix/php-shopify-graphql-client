<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a Shop Pay card instrument for customer payment method.
 */
class ShopifyCustomerShopPayAgreementQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerShopPayAgreement";

    /**
     * The billing address of the card.
     */
    public function selectBillingAddress(?ShopifyCustomerShopPayAgreementBillingAddressArgumentsObject $argsObject = null): ShopifyCustomerCreditCardBillingAddressQueryObject
    {
        $object = new ShopifyCustomerCreditCardBillingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * Whether the Shop Pay billing agreement is inactive.
     */
    public function selectInactive(): static
    {
        $this->selectField("inactive");

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
}
