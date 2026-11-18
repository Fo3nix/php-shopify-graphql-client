<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for product variant bundle parent subscription lines in the calculate API.
 */
class ShopifySubscriptionContractCalculationProductVariantParentLineInputInputObject extends InputObject
{
    const REQUIRED = ["productVariantId", "quantity", "components"];

    protected $id;
    protected $productVariantId;
    protected $quantity;
    protected $customAttributes;
    protected $components;

    /**
     * The ID of an existing line to update. Omit for new lines. The ID keeps the line's identity
     * but doesn't carry over any stored values, so restate every field of the line.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the product variant for this bundle parent line.
     */
    public function setProductVariantId($productVariantId): static
    {
        $this->productVariantId = $productVariantId;

        return $this;
    }

    /**
     * The quantity of the bundle parent line. Must be at least 1.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The custom attributes for this subscription line. Defaults to an empty list when omitted,
     * which clears the line's stored attributes.
     */
    public function setCustomAttributes(array $customAttributes): static
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * The components for this parent line.
     */
    public function setComponents(array $components): static
    {
        $this->components = $components;

        return $this;
    }
}
