<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Provides the capabilities of a metaobject.
 */
class ShopifyMetaobjectCapabilityDataQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityData";

    /**
     * The Online Store capability for this metaobject.
     */
    public function selectOnlineStore(?ShopifyMetaobjectCapabilityDataOnlineStoreArgumentsObject $argsObject = null): ShopifyMetaobjectCapabilityDataOnlineStoreQueryObject
    {
        $object = new ShopifyMetaobjectCapabilityDataOnlineStoreQueryObject("onlineStore");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The publishable capability for this metaobject.
     */
    public function selectPublishable(?ShopifyMetaobjectCapabilityDataPublishableArgumentsObject $argsObject = null): ShopifyMetaobjectCapabilityDataPublishableQueryObject
    {
        $object = new ShopifyMetaobjectCapabilityDataPublishableQueryObject("publishable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
