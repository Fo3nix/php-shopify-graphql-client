<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShippingConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingConfiguration";

    public function selectIsEnabled()
    {
        $this->selectField("isEnabled");

        return $this;
    }

    public function selectOptionDefinitions(ShopifyShippingConfigurationOptionDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryOptionDefinitionConnectionQueryObject("optionDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOptionDefinitionsCount(ShopifyShippingConfigurationOptionDefinitionsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("optionDefinitionsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
