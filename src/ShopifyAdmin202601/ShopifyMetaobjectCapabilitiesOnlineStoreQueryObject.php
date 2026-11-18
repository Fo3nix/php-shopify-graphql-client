<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The Online Store capability of a metaobject definition.
 */
class ShopifyMetaobjectCapabilitiesOnlineStoreQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilitiesOnlineStore";

    /**
     * The data associated with the Online Store capability.
     */
    public function selectData(?ShopifyMetaobjectCapabilitiesOnlineStoreDataArgumentsObject $argsObject = null): ShopifyMetaobjectCapabilityDefinitionDataOnlineStoreQueryObject
    {
        $object = new ShopifyMetaobjectCapabilityDefinitionDataOnlineStoreQueryObject("data");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Indicates if the capability is enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }
}
