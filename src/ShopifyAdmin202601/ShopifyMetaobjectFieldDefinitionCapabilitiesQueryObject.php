<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Capabilities available for a metaobject field definition.
 */
class ShopifyMetaobjectFieldDefinitionCapabilitiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectFieldDefinitionCapabilities";

    /**
     * Indicate whether a metaobject field definition is configured for filtering.
     */
    public function selectAdminFilterable(?ShopifyMetaobjectFieldDefinitionCapabilitiesAdminFilterableArgumentsObject $argsObject = null): ShopifyMetaobjectFieldCapabilityAdminFilterableQueryObject
    {
        $object = new ShopifyMetaobjectFieldCapabilityAdminFilterableQueryObject("adminFilterable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
