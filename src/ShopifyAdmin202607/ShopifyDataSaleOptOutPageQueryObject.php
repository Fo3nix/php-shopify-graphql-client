<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shop's data sale opt out page.
 */
class ShopifyDataSaleOptOutPageQueryObject extends QueryObject
{
    const OBJECT_NAME = "DataSaleOptOutPage";

    /**
     * If the data sale opt out page is auto managed.
     */
    public function selectAutoManaged(): static
    {
        $this->selectField("autoManaged");

        return $this;
    }
}
