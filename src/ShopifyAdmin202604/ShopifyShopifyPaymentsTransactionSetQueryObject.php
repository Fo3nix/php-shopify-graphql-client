<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsTransactionSetQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsTransactionSet";

    public function selectExtendedAuthorizationSet(ShopifyShopifyPaymentsTransactionSetExtendedAuthorizationSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsExtendedAuthorizationQueryObject("extendedAuthorizationSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundSet(ShopifyShopifyPaymentsTransactionSetRefundSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsRefundSetQueryObject("refundSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
