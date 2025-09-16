<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderRiskSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderRiskSummary";

    public function selectAssessments(OrderRiskSummaryAssessmentsArgumentsObject $argsObject = null)
    {
        $object = new OrderRiskAssessmentQueryObject("assessments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRecommendation()
    {
        $this->selectField("recommendation");

        return $this;
    }
}
