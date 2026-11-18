<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderRiskAssessmentCreate` mutation.
 */
class ShopifyOrderRiskAssessmentCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderRiskAssessmentCreatePayload";

    /**
     * The created risk assessment.
     */
    public function selectOrderRiskAssessment(?ShopifyOrderRiskAssessmentCreatePayloadOrderRiskAssessmentArgumentsObject $argsObject = null): ShopifyOrderRiskAssessmentQueryObject
    {
        $object = new ShopifyOrderRiskAssessmentQueryObject("orderRiskAssessment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyOrderRiskAssessmentCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderRiskAssessmentCreateUserErrorQueryObject
    {
        $object = new ShopifyOrderRiskAssessmentCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
