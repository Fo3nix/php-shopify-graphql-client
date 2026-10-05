<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCustomerSegmentsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomerSegments";

    public function selectSegments(ShopifyDiscountCustomerSegmentsSegmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentQueryObject("segments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
