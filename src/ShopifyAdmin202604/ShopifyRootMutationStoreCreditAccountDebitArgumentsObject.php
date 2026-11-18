<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationStoreCreditAccountDebitArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "debitInput"];

    protected $id;
    protected $debitInput;

    /**
     * The ID of the store credit account or the ID of the account owner.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields for a store credit account debit transaction.
     */
    public function setDebitInput(ShopifyStoreCreditAccountDebitInputInputObject $shopifyStoreCreditAccountDebitInputInputObject): static
    {
        $this->debitInput = $shopifyStoreCreditAccountDebitInputInputObject;

        return $this;
    }
}
