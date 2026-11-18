<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPublicationCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields to use when creating the publication.
     */
    public function setInput(ShopifyPublicationCreateInputInputObject $shopifyPublicationCreateInputInputObject): static
    {
        $this->input = $shopifyPublicationCreateInputInputObject;

        return $this;
    }
}
