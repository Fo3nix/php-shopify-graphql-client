<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipping service and a list of countries that the service is available for.
 */
class ShopifyDeliveryAvailableServiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryAvailableService";

    /**
     * The countries the service provider ships to.
     */
    public function selectCountries(?ShopifyDeliveryAvailableServiceCountriesArgumentsObject $argsObject = null): ShopifyDeliveryCountryCodesOrRestOfWorldQueryObject
    {
        $object = new ShopifyDeliveryCountryCodesOrRestOfWorldQueryObject("countries");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the service.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
