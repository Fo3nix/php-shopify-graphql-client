<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SearchFilterOptionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchFilterOptions";

    public function selectProductAvailability(SearchFilterOptionsProductAvailabilityArgumentsObject $argsObject = null)
    {
        $object = new FilterOptionQueryObject("productAvailability");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
