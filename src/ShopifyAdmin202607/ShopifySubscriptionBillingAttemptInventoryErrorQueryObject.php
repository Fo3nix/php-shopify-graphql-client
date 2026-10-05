<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingAttemptInventoryErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptInventoryError";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectInsufficientStockProductVariants(ShopifySubscriptionBillingAttemptInventoryErrorInsufficientStockProductVariantsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantConnectionQueryObject("insufficientStockProductVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
