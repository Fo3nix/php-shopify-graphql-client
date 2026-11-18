<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for identifying a product.
 */
class ShopifyProductIdentifierInputInputObject extends InputObject
{
    protected $id;
    protected $customId;
    protected $handle;

    /**
     * The ID of the product.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The [custom ID](https://shopify.dev/docs/apps/build/custom-data/metafields/working-with-custom-ids) of the product.
     */
    public function setCustomId(ShopifyUniqueMetafieldValueInputInputObject $shopifyUniqueMetafieldValueInputInputObject): static
    {
        $this->customId = $shopifyUniqueMetafieldValueInputInputObject;

        return $this;
    }

    /**
     * The handle of the product.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }
}
