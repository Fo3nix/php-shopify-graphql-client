<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productChangeStatus` mutation.
 */
class ShopifyProductChangeStatusPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductChangeStatusPayload";

    /**
     * The product object.
     */
    public function selectProduct(?ShopifyProductChangeStatusPayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
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
    public function selectUserErrors(?ShopifyProductChangeStatusPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductChangeStatusUserErrorQueryObject
    {
        $object = new ShopifyProductChangeStatusUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
