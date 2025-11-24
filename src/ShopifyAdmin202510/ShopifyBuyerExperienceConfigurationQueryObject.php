<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyBuyerExperienceConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "BuyerExperienceConfiguration";

    public function selectCheckoutToDraft()
    {
        $this->selectField("checkoutToDraft");

        return $this;
    }

    public function selectDeposit(ShopifyBuyerExperienceConfigurationDepositArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDepositConfigurationUnionObject("deposit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEditableShippingAddress()
    {
        $this->selectField("editableShippingAddress");

        return $this;
    }

    /**
     * @deprecated Please use `checkoutToDraft`(must be false) and `paymentTermsTemplate`(must be nil) to derive this instead.
     */
    public function selectPayNowOnly()
    {
        $this->selectField("payNowOnly");

        return $this;
    }

    public function selectPaymentTermsTemplate(ShopifyBuyerExperienceConfigurationPaymentTermsTemplateArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentTermsTemplateQueryObject("paymentTermsTemplate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
