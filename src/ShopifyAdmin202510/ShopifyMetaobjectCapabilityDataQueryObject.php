<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectCapabilityDataQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilityData";

    public function selectOnlineStore(ShopifyMetaobjectCapabilityDataOnlineStoreArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectCapabilityDataOnlineStoreQueryObject("onlineStore");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublishable(ShopifyMetaobjectCapabilityDataPublishableArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectCapabilityDataPublishableQueryObject("publishable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
