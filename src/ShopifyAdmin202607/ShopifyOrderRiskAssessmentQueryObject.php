<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A risk assessment for an order.
 *
 * See the [example query "Retrieve order risk assessments"](https://shopify.dev/docs/api/admin-graphql/unstable/queries/order?example=retrieve-order-risk-assessments).
 */
class ShopifyOrderRiskAssessmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderRiskAssessment";

    /**
     * Facts included with the risk assessment. Fact values are specific to the provider.
     * See the [examples for the mutation orderRiskAssessmentCreate](https://shopify.dev/api/admin-graphql/unstable/mutations/orderRiskAssessmentCreate#section-examples).
     */
    public function selectFacts(?ShopifyOrderRiskAssessmentFactsArgumentsObject $argsObject = null): ShopifyRiskFactQueryObject
    {
        $object = new ShopifyRiskFactQueryObject("facts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The app that provided the assessment, `null` if the assessment was provided by Shopify.
     */
    public function selectProvider(?ShopifyOrderRiskAssessmentProviderArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("provider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The risk level assigned to the order.
     */
    public function selectRiskLevel(): static
    {
        $this->selectField("riskLevel");

        return $this;
    }
}
