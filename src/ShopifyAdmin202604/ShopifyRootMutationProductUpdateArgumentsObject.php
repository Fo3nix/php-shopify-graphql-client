<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductUpdateArgumentsObject extends ArgumentsObject
{
    protected $product;
    protected $media;
    protected $identifier;

    /**
     * The updated properties for a product.
     */
    public function setProduct(ShopifyProductUpdateInputInputObject $shopifyProductUpdateInputInputObject): static
    {
        $this->product = $shopifyProductUpdateInputInputObject;

        return $this;
    }

    /**
     * List of new media to be added to the product.
     */
    public function setMedia(array $media): static
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Specifies the identifier that will be used to lookup the resource.
     */
    public function setIdentifier(ShopifyProductUpdateIdentifiersInputObject $shopifyProductUpdateIdentifiersInputObject): static
    {
        $this->identifier = $shopifyProductUpdateIdentifiersInputObject;

        return $this;
    }
}
