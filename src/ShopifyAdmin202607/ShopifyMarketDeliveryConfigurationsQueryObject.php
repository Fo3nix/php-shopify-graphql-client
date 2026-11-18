<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Delivery configurations for a market. Container type for shipping configuration.
 */
class ShopifyMarketDeliveryConfigurationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketDeliveryConfigurations";

    /**
     * The shipping configuration for this market. Null means the market inherits shipping from its parent.
     */
    public function selectShipping(?ShopifyMarketDeliveryConfigurationsShippingArgumentsObject $argsObject = null): ShopifyShippingConfigurationQueryObject
    {
        $object = new ShopifyShippingConfigurationQueryObject("shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
