<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationGiftCardDebitArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "debitInput"];

    protected $id;
    protected $debitInput;

    /**
     * The ID of the gift card to be debited.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields to debit a gift card.
     */
    public function setDebitInput(ShopifyGiftCardDebitInputInputObject $shopifyGiftCardDebitInputInputObject): static
    {
        $this->debitInput = $shopifyGiftCardDebitInputInputObject;

        return $this;
    }
}
