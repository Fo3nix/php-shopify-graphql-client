<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productOptionsReorder` mutation.
 */
class ShopifyProductOptionsReorderPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductOptionsReorderPayload";

    /**
     * The updated product object.
     */
    public function selectProduct(?ShopifyProductOptionsReorderPayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductOptionsReorderPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductOptionsReorderUserErrorQueryObject
    {
        $object = new ShopifyProductOptionsReorderUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
