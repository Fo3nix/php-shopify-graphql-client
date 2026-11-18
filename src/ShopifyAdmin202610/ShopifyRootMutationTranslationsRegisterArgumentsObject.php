<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationTranslationsRegisterArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["resourceId", "translations"];

    protected $resourceId;
    protected $translations;

    /**
     * ID of the resource that is being translated.
     */
    public function setResourceId($resourceId): static
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    /**
     * Specifies the input fields for a translation.
     */
    public function setTranslations(array $translations): static
    {
        $this->translations = $translations;

        return $this;
    }
}
