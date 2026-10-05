<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySearchFilterOptionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchFilterOptions";

    public function selectProductAvailability(ShopifySearchFilterOptionsProductAvailabilityArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFilterOptionQueryObject("productAvailability");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
