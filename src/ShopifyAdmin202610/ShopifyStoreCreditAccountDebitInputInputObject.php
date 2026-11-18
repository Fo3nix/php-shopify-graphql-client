<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a store credit account debit transaction.
 */
class ShopifyStoreCreditAccountDebitInputInputObject extends InputObject
{
    const REQUIRED = ["debitAmount"];

    protected $debitAmount;

    /**
     * The amount to debit the store credit account.
     */
    public function setDebitAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->debitAmount = $shopifyMoneyInputInputObject;

        return $this;
    }
}
