<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `publishablePublishToCurrentChannel` mutation.
 */
class ShopifyPublishablePublishToCurrentChannelPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PublishablePublishToCurrentChannelPayload";

    /**
     * Resource that has been published.
     */
    public function selectPublishable(?ShopifyPublishablePublishToCurrentChannelPayloadPublishableArgumentsObject $argsObject = null): ShopifyPublishableInterfaceObject
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
    public function selectShop(?ShopifyPublishablePublishToCurrentChannelPayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
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
    public function selectUserErrors(?ShopifyPublishablePublishToCurrentChannelPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
