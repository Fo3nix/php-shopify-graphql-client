<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCustomerSegmentsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomerSegments";

    public function selectSegments(DiscountCustomerSegmentsSegmentsArgumentsObject $argsObject = null)
    {
        $object = new SegmentQueryObject("segments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
