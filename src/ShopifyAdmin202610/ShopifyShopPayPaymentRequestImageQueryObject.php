<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents an image for a Shop Pay payment request line item.
 */
class ShopifyShopPayPaymentRequestImageQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestImage";

    /**
     * The alt text of the image.
     */
    public function selectAlt(): static
    {
        $this->selectField("alt");

        return $this;
    }

    /**
     * The source URL of the image.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
