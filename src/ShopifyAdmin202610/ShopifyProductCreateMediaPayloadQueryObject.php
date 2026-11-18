<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productCreateMedia` mutation.
 */
class ShopifyProductCreateMediaPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductCreateMediaPayload";

    /**
     * The newly created media.
     */
    public function selectMedia(?ShopifyProductCreateMediaPayloadMediaArgumentsObject $argsObject = null): ShopifyMediaInterfaceObject
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
    public function selectMediaUserErrors(?ShopifyProductCreateMediaPayloadMediaUserErrorsArgumentsObject $argsObject = null): ShopifyMediaUserErrorQueryObject
    {
        $object = new ShopifyMediaUserErrorQueryObject("mediaUserErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product associated with the media.
     */
    public function selectProduct(?ShopifyProductCreateMediaPayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
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
    public function selectUserErrors(?ShopifyProductCreateMediaPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
