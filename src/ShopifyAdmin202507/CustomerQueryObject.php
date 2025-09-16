<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerQueryObject extends QueryObject
{
    const OBJECT_NAME = "Customer";

    public function selectAddresses(CustomerAddressesArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("addresses");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAddressesV2(CustomerAddressesV2ArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressConnectionQueryObject("addressesV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAmountSpent(CustomerAmountSpentArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amountSpent");
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

    public function selectCompanyContactProfiles(CustomerCompanyContactProfilesArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactQueryObject("companyContactProfiles");
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

    public function selectDefaultAddress(CustomerDefaultAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("defaultAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultEmailAddress(CustomerDefaultEmailAddressArgumentsObject $argsObject = null)
    {
        $object = new CustomerEmailAddressQueryObject("defaultEmailAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultPhoneNumber(CustomerDefaultPhoneNumberArgumentsObject $argsObject = null)
    {
        $object = new CustomerPhoneNumberQueryObject("defaultPhoneNumber");
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
    public function selectEmailMarketingConsent(CustomerEmailMarketingConsentArgumentsObject $argsObject = null)
    {
        $object = new CustomerEmailMarketingConsentStateQueryObject("emailMarketingConsent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEvents(CustomerEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
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

    public function selectImage(CustomerImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("image");
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

    public function selectLastOrder(CustomerLastOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("lastOrder");
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
    public function selectMarket(CustomerMarketArgumentsObject $argsObject = null)
    {
        $object = new MarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMergeable(CustomerMergeableArgumentsObject $argsObject = null)
    {
        $object = new CustomerMergeableQueryObject("mergeable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(CustomerMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(CustomerMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(CustomerMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
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

    public function selectOrders(CustomerOrdersArgumentsObject $argsObject = null)
    {
        $object = new OrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentMethods(CustomerPaymentMethodsArgumentsObject $argsObject = null)
    {
        $object = new CustomerPaymentMethodConnectionQueryObject("paymentMethods");
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
    public function selectSmsMarketingConsent(CustomerSmsMarketingConsentArgumentsObject $argsObject = null)
    {
        $object = new CustomerSmsMarketingConsentStateQueryObject("smsMarketingConsent");
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

    public function selectStatistics(CustomerStatisticsArgumentsObject $argsObject = null)
    {
        $object = new CustomerStatisticsQueryObject("statistics");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStoreCreditAccounts(CustomerStoreCreditAccountsArgumentsObject $argsObject = null)
    {
        $object = new StoreCreditAccountConnectionQueryObject("storeCreditAccounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionContracts(CustomerSubscriptionContractsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionContractConnectionQueryObject("subscriptionContracts");
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
