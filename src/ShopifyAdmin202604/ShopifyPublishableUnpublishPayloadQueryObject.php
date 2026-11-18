<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `publishableUnpublish` mutation.
 */
class ShopifyPublishableUnpublishPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PublishableUnpublishPayload";

    /**
     * Resource that has been unpublished.
     */
    public function selectPublishable(?ShopifyPublishableUnpublishPayloadPublishableArgumentsObject $argsObject = null): ShopifyPublishableInterfaceObject
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
    public function selectShop(?ShopifyPublishableUnpublishPayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
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
    public function selectUserErrors(?ShopifyPublishableUnpublishPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
