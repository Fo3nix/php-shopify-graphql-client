<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a reverse label.
 */
class ShopifyReverseDeliveryLabelInputInputObject extends InputObject
{
    const REQUIRED = ["fileUrl"];

    protected $fileUrl;

    /**
     * The URL of the label file. If a label file was uploaded to be attached to the delivery, then provide the temporary staged URL.
     */
    public function setFileUrl($fileUrl): static
    {
        $this->fileUrl = $fileUrl;

        return $this;
    }
}
