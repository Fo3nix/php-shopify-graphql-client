<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppPlanV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "AppPlanV2";

    public function selectPricingDetails(AppPlanV2PricingDetailsArgumentsObject $argsObject = null)
    {
        $object = new AppPricingDetailsUnionObject("pricingDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
