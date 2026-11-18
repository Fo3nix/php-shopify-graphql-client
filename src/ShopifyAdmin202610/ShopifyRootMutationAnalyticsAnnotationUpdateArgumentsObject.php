<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationAnalyticsAnnotationUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the analytics annotation to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields for updating the analytics annotation.
     */
    public function setInput(ShopifyAnalyticsAnnotationUpdateInputInputObject $shopifyAnalyticsAnnotationUpdateInputInputObject): static
    {
        $this->input = $shopifyAnalyticsAnnotationUpdateInputInputObject;

        return $this;
    }
}
