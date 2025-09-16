<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CartTransformFeatureQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartTransformFeature";

    public function selectEligibleOperations(CartTransformFeatureEligibleOperationsArgumentsObject $argsObject = null)
    {
        $object = new CartTransformEligibleOperationsQueryObject("eligibleOperations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
