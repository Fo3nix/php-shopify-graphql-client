<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderRiskSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderRiskSummary";

    public function selectAssessments(ShopifyOrderRiskSummaryAssessmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderRiskAssessmentQueryObject("assessments");
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
