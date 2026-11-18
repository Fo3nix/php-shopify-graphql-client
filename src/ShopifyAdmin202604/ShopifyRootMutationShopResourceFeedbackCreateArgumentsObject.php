<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationShopResourceFeedbackCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The fields required to create shop feedback.
     */
    public function setInput(ShopifyResourceFeedbackCreateInputInputObject $shopifyResourceFeedbackCreateInputInputObject): static
    {
        $this->input = $shopifyResourceFeedbackCreateInputInputObject;

        return $this;
    }
}
