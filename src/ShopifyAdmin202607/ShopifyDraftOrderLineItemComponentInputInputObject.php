<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields representing the components of a line item.
 */
class ShopifyDraftOrderLineItemComponentInputInputObject extends InputObject
{
    const REQUIRED = ["quantity"];

    protected $variantId;
    protected $quantity;
    protected $uuid;

    /**
     * The ID of the product variant corresponding to the component.
     */
    public function setVariantId($variantId): static
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * The quantity of the component.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The UUID of the component. Must be unique and consistent across requests.
     * This field is mandatory in order to manipulate drafts with parent line items.
     */
    public function setUuid($uuid): static
    {
        $this->uuid = $uuid;

        return $this;
    }
}
