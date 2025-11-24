<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerQueryObject extends QueryObject
{
    const OBJECT_NAME = "Customer";

    public function selectAddresses(ShopifyCustomerAddressesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("addresses");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAddressesV2(ShopifyCustomerAddressesV2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressConnectionQueryObject("addressesV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAmountSpent(ShopifyCustomerAmountSpentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amountSpent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCanDelete()
    {
        $this->selectField("canDelete");

        return $this;
    }

    public function selectCompanyContactProfiles(ShopifyCustomerCompanyContactProfilesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactQueryObject("companyContactProfiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDataSaleOptOut()
    {
        $this->selectField("dataSaleOptOut");

        return $this;
    }

    public function selectDefaultAddress(ShopifyCustomerDefaultAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("defaultAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultEmailAddress(ShopifyCustomerDefaultEmailAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerEmailAddressQueryObject("defaultEmailAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultPhoneNumber(ShopifyCustomerDefaultPhoneNumberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPhoneNumberQueryObject("defaultPhoneNumber");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * @deprecated Use `defaultEmailAddress.emailAddress` instead.
     */
    public function selectEmail()
    {
        $this->selectField("email");

        return $this;
    }

    /**
     * @deprecated Use `defaultEmailAddress.marketingState`, `defaultEmailAddress.marketingOptInLevel`, `defaultEmailAddress.marketingUpdatedAt`, and `defaultEmailAddress.sourceLocation` instead.
     */
    public function selectEmailMarketingConsent(ShopifyCustomerEmailMarketingConsentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerEmailMarketingConsentStateQueryObject("emailMarketingConsent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEvents(ShopifyCustomerEventsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFirstName()
    {
        $this->selectField("firstName");

        return $this;
    }

    /**
     * @deprecated To query for comments on the timeline, use the `events` connection and a 'query' argument containing `verb:comment`, or look for a 'CommentEvent' in the `__typename` of `events`.
     */
    public function selectHasTimelineComment()
    {
        $this->selectField("hasTimelineComment");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectImage(ShopifyCustomerImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLastName()
    {
        $this->selectField("lastName");

        return $this;
    }

    public function selectLastOrder(ShopifyCustomerLastOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("lastOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectLifetimeDuration()
    {
        $this->selectField("lifetimeDuration");

        return $this;
    }

    public function selectLocale()
    {
        $this->selectField("locale");

        return $this;
    }

    /**
     * @deprecated This `market` field will be removed in a future version of the API.
     */
    public function selectMarket(ShopifyCustomerMarketArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMergeable(ShopifyCustomerMergeableArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerMergeableQueryObject("mergeable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(ShopifyCustomerMetafieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(ShopifyCustomerMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyCustomerMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMultipassIdentifier()
    {
        $this->selectField("multipassIdentifier");

        return $this;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectNumberOfOrders()
    {
        $this->selectField("numberOfOrders");

        return $this;
    }

    public function selectOrders(ShopifyCustomerOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentMethods(ShopifyCustomerPaymentMethodsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPaymentMethodConnectionQueryObject("paymentMethods");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `defaultPhoneNumber.phoneNumber` instead.
     */
    public function selectPhone()
    {
        $this->selectField("phone");

        return $this;
    }

    public function selectProductSubscriberStatus()
    {
        $this->selectField("productSubscriberStatus");

        return $this;
    }

    /**
     * @deprecated Use `defaultPhoneNumber.marketingState`, `defaultPhoneNumber.marketingOptInLevel`, `defaultPhoneNumber.marketingUpdatedAt`, `defaultPhoneNumber.marketingCollectedFrom`, and `defaultPhoneNumber.sourceLocation` instead.
     */
    public function selectSmsMarketingConsent(ShopifyCustomerSmsMarketingConsentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerSmsMarketingConsentStateQueryObject("smsMarketingConsent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectState()
    {
        $this->selectField("state");

        return $this;
    }

    public function selectStatistics(ShopifyCustomerStatisticsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerStatisticsQueryObject("statistics");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStoreCreditAccounts(ShopifyCustomerStoreCreditAccountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStoreCreditAccountConnectionQueryObject("storeCreditAccounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionContracts(ShopifyCustomerSubscriptionContractsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractConnectionQueryObject("subscriptionContracts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTags()
    {
        $this->selectField("tags");

        return $this;
    }

    public function selectTaxExempt()
    {
        $this->selectField("taxExempt");

        return $this;
    }

    public function selectTaxExemptions()
    {
        $this->selectField("taxExemptions");

        return $this;
    }

    /**
     * @deprecated Use `defaultEmailAddress.marketingUnsubscribeUrl` instead.
     */
    public function selectUnsubscribeUrl()
    {
        $this->selectField("unsubscribeUrl");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * @deprecated Use `defaultEmailAddress.validFormat` instead.
     */
    public function selectValidEmailAddress()
    {
        $this->selectField("validEmailAddress");

        return $this;
    }

    public function selectVerifiedEmail()
    {
        $this->selectField("verifiedEmail");

        return $this;
    }
}
