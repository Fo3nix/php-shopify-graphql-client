<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationGiftCardCreditArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "creditInput"];

    protected $id;
    protected $creditInput;

    /**
     * The ID of the gift card to be credited.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields to credit a gift card.
     */
    public function setCreditInput(ShopifyGiftCardCreditInputInputObject $shopifyGiftCardCreditInputInputObject): static
    {
        $this->creditInput = $shopifyGiftCardCreditInputInputObject;

        return $this;
    }
}
