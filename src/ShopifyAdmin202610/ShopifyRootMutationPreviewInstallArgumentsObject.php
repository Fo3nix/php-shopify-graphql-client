<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPreviewInstallArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["storefrontGenerationPreviewUuid"];

    protected $storefrontGenerationPreviewUuid;

    /**
     * The UUID of the storefront_generation_preview to install.
     */
    public function setStorefrontGenerationPreviewUuid($storefrontGenerationPreviewUuid): static
    {
        $this->storefrontGenerationPreviewUuid = $storefrontGenerationPreviewUuid;

        return $this;
    }
}
