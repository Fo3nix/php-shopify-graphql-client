<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A MerchantCategoryCode (MCC) is a four-digit number listed in ISO 18245 for retail financial services and used to classify the business by the type of goods or services it provides.
 */
class ShopifyShopifyPaymentsMerchantCategoryCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsMerchantCategoryCode";

    /**
     * The category of the MCC.
     */
    public function selectCategory(): static
    {
        $this->selectField("category");

        return $this;
    }

    /**
     * The category label of the MCC.
     */
    public function selectCategoryLabel(): static
    {
        $this->selectField("categoryLabel");

        return $this;
    }

    /**
     * A four-digit number listed in ISO 18245.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The ID of the MCC.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The subcategory label of the MCC.
     */
    public function selectSubcategoryLabel(): static
    {
        $this->selectField("subcategoryLabel");

        return $this;
    }
}
