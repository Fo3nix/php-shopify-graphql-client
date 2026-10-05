<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppPlanV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "AppPlanV2";

    public function selectPricingDetails(ShopifyAppPlanV2PricingDetailsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppPricingDetailsUnionObject("pricingDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
