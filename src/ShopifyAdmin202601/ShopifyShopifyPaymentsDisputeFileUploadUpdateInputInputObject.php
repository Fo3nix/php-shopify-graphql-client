<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to update a dispute file upload object.
 */
class ShopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $destroy;

    /**
     * The ID of the file upload to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Whether to delete this file upload.
     */
    public function setDestroy($destroy): static
    {
        $this->destroy = $destroy;

        return $this;
    }
}
