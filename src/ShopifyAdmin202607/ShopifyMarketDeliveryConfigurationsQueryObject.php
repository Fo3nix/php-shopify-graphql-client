<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketDeliveryConfigurationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketDeliveryConfigurations";

    public function selectShipping(ShopifyMarketDeliveryConfigurationsShippingArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShippingConfigurationQueryObject("shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
