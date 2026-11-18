<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `cartTransformCreate` mutation.
 */
class ShopifyCartTransformCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartTransformCreatePayload";

    /**
     * The newly created cart transform function.
     */
    public function selectCartTransform(?ShopifyCartTransformCreatePayloadCartTransformArgumentsObject $argsObject = null): ShopifyCartTransformQueryObject
    {
        $object = new ShopifyCartTransformQueryObject("cartTransform");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCartTransformCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCartTransformCreateUserErrorQueryObject
    {
        $object = new ShopifyCartTransformCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
