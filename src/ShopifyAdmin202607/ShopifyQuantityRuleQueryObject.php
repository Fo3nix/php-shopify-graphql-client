<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyQuantityRuleQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityRule";

    public function selectIncrement()
    {
        $this->selectField("increment");

        return $this;
    }

    public function selectIsDefault()
    {
        $this->selectField("isDefault");

        return $this;
    }

    public function selectMaximum()
    {
        $this->selectField("maximum");

        return $this;
    }

    public function selectMinimum()
    {
        $this->selectField("minimum");

        return $this;
    }

    public function selectOriginType()
    {
        $this->selectField("originType");

        return $this;
    }

    public function selectProductVariant(ShopifyQuantityRuleProductVariantArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("productVariant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
