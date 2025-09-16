<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderRiskAssessmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderRiskAssessment";

    public function selectFacts(OrderRiskAssessmentFactsArgumentsObject $argsObject = null)
    {
        $object = new RiskFactQueryObject("facts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProvider(OrderRiskAssessmentProviderArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("provider");
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
