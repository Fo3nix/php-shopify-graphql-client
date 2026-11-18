<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The shipping configuration attached to a market. Defines the shipping
 * options available when a buyer is resolved to that market.
 */
class ShopifyShippingConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingConfiguration";

    /**
     * Whether shipping is enabled for this market. When false, customers in this market won't see any shipping options.
     */
    public function selectIsEnabled(): static
    {
        $this->selectField("isEnabled");

        return $this;
    }

    /**
     * The shipping options configured for this market.
     */
    public function selectOptionDefinitions(?ShopifyShippingConfigurationOptionDefinitionsArgumentsObject $argsObject = null): ShopifyDeliveryOptionDefinitionConnectionQueryObject
    {
        $object = new ShopifyDeliveryOptionDefinitionConnectionQueryObject("optionDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of shipping options in this configuration.
     */
    public function selectOptionDefinitionsCount(?ShopifyShippingConfigurationOptionDefinitionsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("optionDefinitionsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
