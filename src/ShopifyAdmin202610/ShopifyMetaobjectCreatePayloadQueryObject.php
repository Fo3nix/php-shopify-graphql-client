<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metaobjectCreate` mutation.
 */
class ShopifyMetaobjectCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectCreatePayload";

    /**
     * The created metaobject.
     */
    public function selectMetaobject(?ShopifyMetaobjectCreatePayloadMetaobjectArgumentsObject $argsObject = null): ShopifyMetaobjectQueryObject
    {
        $object = new ShopifyMetaobjectQueryObject("metaobject");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMetaobjectCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetaobjectUserErrorQueryObject
    {
        $object = new ShopifyMetaobjectUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
