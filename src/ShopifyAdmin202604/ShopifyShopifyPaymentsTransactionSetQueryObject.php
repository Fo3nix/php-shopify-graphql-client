<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Presents all Shopify Payments specific information related to an order transaction.
 */
class ShopifyShopifyPaymentsTransactionSetQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsTransactionSet";

    /**
     * Contains all fields related to an extended authorization.
     */
    public function selectExtendedAuthorizationSet(?ShopifyShopifyPaymentsTransactionSetExtendedAuthorizationSetArgumentsObject $argsObject = null): ShopifyShopifyPaymentsExtendedAuthorizationQueryObject
    {
        $object = new ShopifyShopifyPaymentsExtendedAuthorizationQueryObject("extendedAuthorizationSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Contains all fields related to a refund.
     */
    public function selectRefundSet(?ShopifyShopifyPaymentsTransactionSetRefundSetArgumentsObject $argsObject = null): ShopifyShopifyPaymentsRefundSetQueryObject
    {
        $object = new ShopifyShopifyPaymentsRefundSetQueryObject("refundSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
