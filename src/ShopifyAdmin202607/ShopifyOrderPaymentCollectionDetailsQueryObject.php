<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The payment collection details for an order that requires additional payment following an edit to the order.
 */
class ShopifyOrderPaymentCollectionDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderPaymentCollectionDetails";

    /**
     * The URL to use for collecting an additional payment on the order.
     */
    public function selectAdditionalPaymentCollectionUrl(): static
    {
        $this->selectField("additionalPaymentCollectionUrl");

        return $this;
    }

    /**
     * The list of vaulted payment methods for the order with their permissions.
     */
    public function selectVaultedPaymentMethods(?ShopifyOrderPaymentCollectionDetailsVaultedPaymentMethodsArgumentsObject $argsObject = null): ShopifyPaymentMandateQueryObject
    {
        $object = new ShopifyPaymentMandateQueryObject("vaultedPaymentMethods");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
