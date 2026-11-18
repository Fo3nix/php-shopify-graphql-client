<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Summary of risk characteristics for an order.
 *
 * See the [example query "Retrieve order risk assessments"](https://shopify.dev/docs/api/admin-graphql/unstable/queries/order?example=retrieve-order-risk-assessments).
 */
class ShopifyOrderRiskSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderRiskSummary";

    /**
     * The risk assessments for the order.
     */
    public function selectAssessments(?ShopifyOrderRiskSummaryAssessmentsArgumentsObject $argsObject = null): ShopifyOrderRiskAssessmentQueryObject
    {
        $object = new ShopifyOrderRiskAssessmentQueryObject("assessments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The recommended action for the order based on its risk assessments.
     */
    public function selectRecommendation(): static
    {
        $this->selectField("recommendation");

        return $this;
    }
}
