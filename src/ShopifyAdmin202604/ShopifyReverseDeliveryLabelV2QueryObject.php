<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The return label file information for a reverse delivery.
 */
class ShopifyReverseDeliveryLabelV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryLabelV2";

    /**
     * The date and time when the reverse delivery label was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A public link that can be used to download the label image.
     */
    public function selectPublicFileUrl(): static
    {
        $this->selectField("publicFileUrl");

        return $this;
    }

    /**
     * The date and time when the reverse delivery label was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
