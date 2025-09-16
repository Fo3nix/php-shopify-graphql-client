<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryProvinceQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProvince";

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

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectTranslatedName()
    {
        $this->selectField("translatedName");

        return $this;
    }
}
