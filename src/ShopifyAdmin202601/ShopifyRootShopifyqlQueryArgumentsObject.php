<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootShopifyqlQueryArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["query"];

    protected $query;

    /**
     * A ShopifyQL query string following the [ShopifyQL syntax](https://shopify.dev/docs/api/shopifyql). Queries must include `FROM` to specify the data source (such as `sales`, `orders`, or `customers`) and `SHOW` to select metrics and dimensions. Example: `FROM sales SHOW total_sales TIMESERIES month SINCE -12m`.
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }
}
