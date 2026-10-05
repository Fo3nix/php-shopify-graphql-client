<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectCapabilitiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCapabilities";

    public function selectOnlineStore(ShopifyMetaobjectCapabilitiesOnlineStoreArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectCapabilitiesOnlineStoreQueryObject("onlineStore");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublishable(ShopifyMetaobjectCapabilitiesPublishableArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectCapabilitiesPublishableQueryObject("publishable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRenderable(ShopifyMetaobjectCapabilitiesRenderableArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectCapabilitiesRenderableQueryObject("renderable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslatable(ShopifyMetaobjectCapabilitiesTranslatableArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectCapabilitiesTranslatableQueryObject("translatable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
