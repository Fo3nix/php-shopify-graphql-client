<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderRiskAssessmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderRiskAssessment";

    public function selectFacts(ShopifyOrderRiskAssessmentFactsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRiskFactQueryObject("facts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProvider(ShopifyOrderRiskAssessmentProviderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("provider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRiskLevel()
    {
        $this->selectField("riskLevel");

        return $this;
    }
}
