<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationStoreCreditAccountCreditArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "creditInput"];

    protected $id;
    protected $creditInput;

    /**
     * The ID of the store credit account or the ID of the account owner.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields for a store credit account credit transaction.
     */
    public function setCreditInput(ShopifyStoreCreditAccountCreditInputInputObject $shopifyStoreCreditAccountCreditInputInputObject): static
    {
        $this->creditInput = $shopifyStoreCreditAccountCreditInputInputObject;

        return $this;
    }
}
