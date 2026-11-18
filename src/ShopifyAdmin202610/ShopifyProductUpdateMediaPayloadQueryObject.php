<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productUpdateMedia` mutation.
 */
class ShopifyProductUpdateMediaPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductUpdateMediaPayload";

    /**
     * The updated media object.
     */
    public function selectMedia(?ShopifyProductUpdateMediaPayloadMediaArgumentsObject $argsObject = null): ShopifyMediaInterfaceObject
    {
        $object = new ShopifyMediaInterfaceObject("media");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectMediaUserErrors(?ShopifyProductUpdateMediaPayloadMediaUserErrorsArgumentsObject $argsObject = null): ShopifyMediaUserErrorQueryObject
    {
        $object = new ShopifyMediaUserErrorQueryObject("mediaUserErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product on which media was updated.
     */
    public function selectProduct(?ShopifyProductUpdateMediaPayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
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
     *
     * @deprecated Use `mediaUserErrors` instead.
     */
    public function selectUserErrors(?ShopifyProductUpdateMediaPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
