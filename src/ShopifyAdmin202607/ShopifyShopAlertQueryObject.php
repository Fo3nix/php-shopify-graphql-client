<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An alert message that appears in the Shopify admin about a problem with a store setting, with an action to take. For example, you could show an alert to ask the merchant to enter their billing information to activate Shopify Plus.
 */
class ShopifyShopAlertQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopAlert";

    /**
     * The text for the button in the alert that links to related information. For example, _Add credit card_.
     */
    public function selectAction(?ShopifyShopAlertActionArgumentsObject $argsObject = null): ShopifyShopAlertActionQueryObject
    {
        $object = new ShopifyShopAlertActionQueryObject("action");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A description of the alert and further information, such as whether the merchant will be charged.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }
}
