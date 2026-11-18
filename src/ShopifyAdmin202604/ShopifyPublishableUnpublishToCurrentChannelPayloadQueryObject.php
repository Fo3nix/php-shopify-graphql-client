<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `publishableUnpublishToCurrentChannel` mutation.
 */
class ShopifyPublishableUnpublishToCurrentChannelPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PublishableUnpublishToCurrentChannelPayload";

    /**
     * Resource that has been unpublished.
     */
    public function selectPublishable(?ShopifyPublishableUnpublishToCurrentChannelPayloadPublishableArgumentsObject $argsObject = null): ShopifyPublishableInterfaceObject
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
    public function selectShop(?ShopifyPublishableUnpublishToCurrentChannelPayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
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
    public function selectUserErrors(?ShopifyPublishableUnpublishToCurrentChannelPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
