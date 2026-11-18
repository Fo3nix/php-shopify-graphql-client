<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A region that is used to define a shipping zone.
 */
class ShopifyDeliveryProvinceQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProvince";

    /**
     * The code of the region.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The full name of the region.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The translated name of the region. The translation returned is based on the system's locale.
     */
    public function selectTranslatedName(): static
    {
        $this->selectField("translatedName");

        return $this;
    }
}
