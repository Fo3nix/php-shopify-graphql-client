<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationReturnRefundArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["returnRefundInput"];

    protected $returnRefundInput;

    /**
     * The input fields to refund a return.
     */
    public function setReturnRefundInput(ShopifyReturnRefundInputInputObject $shopifyReturnRefundInputInputObject): static
    {
        $this->returnRefundInput = $shopifyReturnRefundInputInputObject;

        return $this;
    }
}
