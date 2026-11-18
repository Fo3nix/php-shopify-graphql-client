<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A quantity option value related to a componentized product.
 */
class ShopifyProductBundleComponentQuantityOptionValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentQuantityOptionValue";

    /**
     * The name of the option value.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The quantity of the option value.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }
}
