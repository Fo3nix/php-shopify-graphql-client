<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCashManagementReasonCodeCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["code"];

    protected $code;

    /**
     * The reason code to create.
     */
    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
    }
}
