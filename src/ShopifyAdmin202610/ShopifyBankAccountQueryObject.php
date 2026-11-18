<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a bank account payment instrument.
 */
class ShopifyBankAccountQueryObject extends QueryObject
{
    const OBJECT_NAME = "BankAccount";

    /**
     * The type of account holder.
     */
    public function selectAccountHolderType(): static
    {
        $this->selectField("accountHolderType");

        return $this;
    }

    /**
     * The type of bank account.
     */
    public function selectAccountType(): static
    {
        $this->selectField("accountType");

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
     * The billing address associated with the bank account.
     */
    public function selectBillingAddress(?ShopifyBankAccountBillingAddressArgumentsObject $argsObject = null): ShopifyCustomerPaymentInstrumentBillingAddressQueryObject
    {
        $object = new ShopifyCustomerPaymentInstrumentBillingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The last four digits of the account number.
     */
    public function selectLastDigits(): static
    {
        $this->selectField("lastDigits");

        return $this;
    }
}
