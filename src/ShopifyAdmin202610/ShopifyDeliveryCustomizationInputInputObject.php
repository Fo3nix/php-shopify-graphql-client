<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to create and update a delivery customization.
 */
class ShopifyDeliveryCustomizationInputInputObject extends InputObject
{
    protected $functionHandle;
    protected $title;
    protected $enabled;
    protected $metafields;

    /**
     * Function handle scoped to your current app ID. Only finds functions within your app.
     */
    public function setFunctionHandle($functionHandle): static
    {
        $this->functionHandle = $functionHandle;

        return $this;
    }

    /**
     * The title of the delivery customization.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The enabled status of the delivery customization.
     */
    public function setEnabled($enabled): static
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Additional metafields to associate to the delivery customization.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }
}
