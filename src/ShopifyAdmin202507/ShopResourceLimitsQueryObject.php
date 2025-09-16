<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopResourceLimitsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopResourceLimits";

    public function selectLocationLimit()
    {
        $this->selectField("locationLimit");

        return $this;
    }

    public function selectMaxProductOptions()
    {
        $this->selectField("maxProductOptions");

        return $this;
    }

    public function selectMaxProductVariants()
    {
        $this->selectField("maxProductVariants");

        return $this;
    }

    public function selectRedirectLimitReached()
    {
        $this->selectField("redirectLimitReached");

        return $this;
    }
}
