<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDraftOrderShippingRateQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderShippingRate";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectPrice(ShopifyDraftOrderShippingRatePriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSource()
    {
        $this->selectField("source");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
