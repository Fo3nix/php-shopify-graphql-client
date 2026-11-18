<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for identifying a product variant.
 */
class ShopifyProductVariantIdentifierInputInputObject extends InputObject
{
    protected $id;
    protected $customId;

    /**
     * The ID of the product variant.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The [custom ID](https://shopify.dev/docs/apps/build/custom-data/metafields/working-with-custom-ids) of the product variant.
     */
    public function setCustomId(ShopifyUniqueMetafieldValueInputInputObject $shopifyUniqueMetafieldValueInputInputObject): static
    {
        $this->customId = $shopifyUniqueMetafieldValueInputInputObject;

        return $this;
    }
}
