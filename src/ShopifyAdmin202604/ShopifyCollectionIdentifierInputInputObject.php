<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for identifying a collection.
 */
class ShopifyCollectionIdentifierInputInputObject extends InputObject
{
    protected $id;
    protected $customId;
    protected $handle;

    /**
     * The ID of the collection.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The [custom ID](https://shopify.dev/docs/apps/build/custom-data/metafields/working-with-custom-ids) of the collection.
     */
    public function setCustomId(ShopifyUniqueMetafieldValueInputInputObject $shopifyUniqueMetafieldValueInputInputObject): static
    {
        $this->customId = $shopifyUniqueMetafieldValueInputInputObject;

        return $this;
    }

    /**
     * The handle of the collection.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }
}
