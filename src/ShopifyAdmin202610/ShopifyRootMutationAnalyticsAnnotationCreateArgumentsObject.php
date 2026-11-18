<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationAnalyticsAnnotationCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for creating an analytics annotation.
     */
    public function setInput(ShopifyAnalyticsAnnotationCreateInputInputObject $shopifyAnalyticsAnnotationCreateInputInputObject): static
    {
        $this->input = $shopifyAnalyticsAnnotationCreateInputInputObject;

        return $this;
    }
}
