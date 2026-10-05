<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCartTransformFeatureQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartTransformFeature";

    public function selectEligibleOperations(ShopifyCartTransformFeatureEligibleOperationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCartTransformEligibleOperationsQueryObject("eligibleOperations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
