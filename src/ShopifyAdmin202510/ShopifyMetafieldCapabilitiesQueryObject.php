<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldCapabilitiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldCapabilities";

    public function selectAdminFilterable(ShopifyMetafieldCapabilitiesAdminFilterableArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldCapabilityAdminFilterableQueryObject("adminFilterable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSmartCollectionCondition(ShopifyMetafieldCapabilitiesSmartCollectionConditionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldCapabilitySmartCollectionConditionQueryObject("smartCollectionCondition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUniqueValues(ShopifyMetafieldCapabilitiesUniqueValuesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldCapabilityUniqueValuesQueryObject("uniqueValues");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
