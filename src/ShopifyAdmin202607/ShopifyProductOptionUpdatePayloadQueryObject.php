<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productOptionUpdate` mutation.
 */
class ShopifyProductOptionUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductOptionUpdatePayload";

    /**
     * The product with which the option being updated is associated.
     */
    public function selectProduct(?ShopifyProductOptionUpdatePayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
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
    public function selectUserErrors(?ShopifyProductOptionUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductOptionUpdateUserErrorQueryObject
    {
        $object = new ShopifyProductOptionUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
