<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a componentized product.
 */
class ShopifyProductBundleCreateInputInputObject extends InputObject
{
    const REQUIRED = ["title", "components"];

    protected $title;
    protected $consolidatedOptions;
    protected $components;

    /**
     * The title of the product to create.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The consolidated options of the componentized product to create, if provided.
     */
    public function setConsolidatedOptions(array $consolidatedOptions): static
    {
        $this->consolidatedOptions = $consolidatedOptions;

        return $this;
    }

    /**
     * The component products to bundle with the bundle product.
     */
    public function setComponents(array $components): static
    {
        $this->components = $components;

        return $this;
    }
}
