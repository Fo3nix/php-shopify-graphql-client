<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsMerchantCategoryCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsMerchantCategoryCode";

    public function selectCategory()
    {
        $this->selectField("category");

        return $this;
    }

    public function selectCategoryLabel()
    {
        $this->selectField("categoryLabel");

        return $this;
    }

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectSubcategoryLabel()
    {
        $this->selectField("subcategoryLabel");

        return $this;
    }
}
