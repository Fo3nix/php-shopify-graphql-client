<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `publishablePublish` mutation.
 */
class ShopifyPublishablePublishPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PublishablePublishPayload";

    /**
     * Resource that has been published.
     */
    public function selectPublishable(?ShopifyPublishablePublishPayloadPublishableArgumentsObject $argsObject = null): ShopifyPublishableInterfaceObject
    {
        $object = new ShopifyPublishableInterfaceObject("publishable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The user's shop.
     */
    public function selectShop(?ShopifyPublishablePublishPayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject("shop");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPublishablePublishPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
