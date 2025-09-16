<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldCapabilitiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldCapabilities";

    public function selectAdminFilterable(MetafieldCapabilitiesAdminFilterableArgumentsObject $argsObject = null)
    {
        $object = new MetafieldCapabilityAdminFilterableQueryObject("adminFilterable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSmartCollectionCondition(MetafieldCapabilitiesSmartCollectionConditionArgumentsObject $argsObject = null)
    {
        $object = new MetafieldCapabilitySmartCollectionConditionQueryObject("smartCollectionCondition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUniqueValues(MetafieldCapabilitiesUniqueValuesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldCapabilityUniqueValuesQueryObject("uniqueValues");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
