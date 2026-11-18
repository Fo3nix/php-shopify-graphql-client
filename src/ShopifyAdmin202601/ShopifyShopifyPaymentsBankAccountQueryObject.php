<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A bank account that can receive payouts.
 */
class ShopifyShopifyPaymentsBankAccountQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBankAccount";

    /**
     * The last digits of the account number (the rest is redacted).
     */
    public function selectAccountNumberLastDigits(): static
    {
        $this->selectField("accountNumberLastDigits");

        return $this;
    }

    /**
     * The name of the bank.
     */
    public function selectBankName(): static
    {
        $this->selectField("bankName");

        return $this;
    }

    /**
     * The country of the bank.
     */
    public function selectCountry(): static
    {
        $this->selectField("country");

        return $this;
    }

    /**
     * The date that the bank account was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The currency of the bank account.
     */
    public function selectCurrency(): static
    {
        $this->selectField("currency");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * All current and previous payouts made between the account and the bank account.
     */
    public function selectPayouts(?ShopifyShopifyPaymentsBankAccountPayoutsArgumentsObject $argsObject = null): ShopifyShopifyPaymentsPayoutConnectionQueryObject
    {
        $object = new ShopifyShopifyPaymentsPayoutConnectionQueryObject("payouts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the bank account.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
