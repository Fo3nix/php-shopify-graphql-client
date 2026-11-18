<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for identifying a order.
 */
class ShopifyOrderIdentifierInputInputObject extends InputObject
{
    protected $id;
    protected $customId;

    /**
     * The ID of the order.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The [custom ID](https://shopify.dev/docs/apps/build/custom-data/metafields/working-with-custom-ids) of the order.
     */
    public function setCustomId(ShopifyUniqueMetafieldValueInputInputObject $shopifyUniqueMetafieldValueInputInputObject): static
    {
        $this->customId = $shopifyUniqueMetafieldValueInputInputObject;

        return $this;
    }
}
