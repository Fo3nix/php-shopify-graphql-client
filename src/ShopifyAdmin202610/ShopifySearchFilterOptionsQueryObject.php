<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A list of search filters along with their specific options in value and label pair for filtering.
 */
class ShopifySearchFilterOptionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchFilterOptions";

    /**
     * A list of options that can be use to filter product availability.
     */
    public function selectProductAvailability(?ShopifySearchFilterOptionsProductAvailabilityArgumentsObject $argsObject = null): ShopifyFilterOptionQueryObject
    {
        $object = new ShopifyFilterOptionQueryObject("productAvailability");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
