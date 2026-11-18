<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a componentized product.
 */
class ShopifyProductBundleUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["productId"];

    protected $productId;
    protected $title;
    protected $consolidatedOptions;
    protected $components;

    /**
     * The ID of the componentized product to update.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * The title to rename the componentized product to, if provided.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The consolidated options of the componentized product to update, if provided.
     */
    public function setConsolidatedOptions(array $consolidatedOptions): static
    {
        $this->consolidatedOptions = $consolidatedOptions;

        return $this;
    }

    /**
     * The components to update existing ones. If none provided, no changes occur. Note: This replaces, not adds to, current components.
     */
    public function setComponents(array $components): static
    {
        $this->components = $components;

        return $this;
    }
}
