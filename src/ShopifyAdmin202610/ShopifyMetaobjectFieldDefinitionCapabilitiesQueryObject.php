<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectFieldDefinitionCapabilitiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectFieldDefinitionCapabilities";

    public function selectAdminFilterable(ShopifyMetaobjectFieldDefinitionCapabilitiesAdminFilterableArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectFieldCapabilityAdminFilterableQueryObject("adminFilterable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
