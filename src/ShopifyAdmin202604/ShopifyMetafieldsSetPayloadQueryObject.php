<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metafieldsSet` mutation.
 */
class ShopifyMetafieldsSetPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldsSetPayload";

    /**
     * The list of metafields that were set.
     */
    public function selectMetafields(?ShopifyMetafieldsSetPayloadMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMetafieldsSetPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetafieldsSetUserErrorQueryObject
    {
        $object = new ShopifyMetafieldsSetUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
