<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanFixedDeliveryPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanFixedDeliveryPolicy";

    public function selectAnchors(SellingPlanFixedDeliveryPolicyAnchorsArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanAnchorQueryObject("anchors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCutoff()
    {
        $this->selectField("cutoff");

        return $this;
    }

    public function selectFulfillmentExactTime()
    {
        $this->selectField("fulfillmentExactTime");

        return $this;
    }

    public function selectFulfillmentTrigger()
    {
        $this->selectField("fulfillmentTrigger");

        return $this;
    }

    public function selectIntent()
    {
        $this->selectField("intent");

        return $this;
    }

    public function selectPreAnchorBehavior()
    {
        $this->selectField("preAnchorBehavior");

        return $this;
    }
}
