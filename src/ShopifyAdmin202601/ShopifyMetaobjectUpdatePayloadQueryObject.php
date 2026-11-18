<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metaobjectUpdate` mutation.
 */
class ShopifyMetaobjectUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectUpdatePayload";

    /**
     * The updated metaobject.
     */
    public function selectMetaobject(?ShopifyMetaobjectUpdatePayloadMetaobjectArgumentsObject $argsObject = null): ShopifyMetaobjectQueryObject
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
    public function selectUserErrors(?ShopifyMetaobjectUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetaobjectUserErrorQueryObject
    {
        $object = new ShopifyMetaobjectUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
