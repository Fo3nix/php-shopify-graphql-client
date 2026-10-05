<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyLocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocation";

    public function selectBillingAddress(ShopifyCompanyLocationBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBuyerExperienceConfiguration(ShopifyCompanyLocationBuyerExperienceConfigurationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBuyerExperienceConfigurationQueryObject("buyerExperienceConfiguration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCatalogs(ShopifyCompanyLocationCatalogsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCatalogConnectionQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCatalogsCount(ShopifyCompanyLocationCatalogsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("catalogsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompany(ShopifyCompanyLocationCompanyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyQueryObject("company");
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

    public function selectCurrency()
    {
        $this->selectField("currency");

        return $this;
    }

    public function selectDefaultCursor()
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    public function selectDraftOrders(ShopifyCompanyLocationDraftOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderConnectionQueryObject("draftOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEvents(ShopifyCompanyLocationEventsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExternalId()
    {
        $this->selectField("externalId");

        return $this;
    }

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

    public function selectInCatalog()
    {
        $this->selectField("inCatalog");

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
    public function selectMarket(ShopifyCompanyLocationMarketArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(ShopifyCompanyLocationMetafieldArgumentsObject $argsObject = null)
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
    public function selectMetafieldDefinitions(ShopifyCompanyLocationMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyCompanyLocationMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * @deprecated Use `ordersCount` instead.
     */
    public function selectOrderCount()
    {
        $this->selectField("orderCount");

        return $this;
    }

    public function selectOrders(ShopifyCompanyLocationOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrdersCount(ShopifyCompanyLocationOrdersCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("ordersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPhone()
    {
        $this->selectField("phone");

        return $this;
    }

    public function selectRoleAssignments(ShopifyCompanyLocationRoleAssignmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactRoleAssignmentConnectionQueryObject("roleAssignments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingAddress(ShopifyCompanyLocationShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStaffMemberAssignments(ShopifyCompanyLocationStaffMemberAssignmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationStaffMemberAssignmentConnectionQueryObject("staffMemberAssignments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStoreCreditAccounts(ShopifyCompanyLocationStoreCreditAccountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStoreCreditAccountConnectionQueryObject("storeCreditAccounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `taxSettings` instead.
     */
    public function selectTaxExemptions()
    {
        $this->selectField("taxExemptions");

        return $this;
    }

    /**
     * @deprecated Use `taxSettings` instead.
     */
    public function selectTaxRegistrationId()
    {
        $this->selectField("taxRegistrationId");

        return $this;
    }

    public function selectTaxSettings(ShopifyCompanyLocationTaxSettingsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationTaxSettingsQueryObject("taxSettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalSpent(ShopifyCompanyLocationTotalSpentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalSpent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
