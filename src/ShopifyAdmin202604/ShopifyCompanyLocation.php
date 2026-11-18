<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCompanyAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyBuyerExperienceConfiguration;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCatalogConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCompany;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDraftOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMarket;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCompanyContactRoleAssignmentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCompanyLocationStaffMemberAssignmentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyStoreCreditAccountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCompanyLocationTaxSettings;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;

/**
 * A location or branch of a [`Company`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Company) that's a customer of the shop. Company locations enable B2B customers to manage multiple branches with distinct billing and shipping addresses, tax settings, and checkout configurations.
 *
 * Each location can have its own [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) objects that determine which products are published and their pricing. The [`BuyerExperienceConfiguration`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BuyerExperienceConfiguration) determines checkout behavior including [`PaymentTerms`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PaymentTerms), and whether orders require merchant review. B2B customers select which location they're purchasing for, which determines the applicable catalogs, pricing, [`TaxExemption`](https://shopify.dev/docs/api/admin-graphql/latest/enums/TaxExemption) values, and checkout settings for their [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) objects.
 */
class ShopifyCompanyLocation implements ShopifyCommentEventSubject, ShopifyHasEvents, ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyHasStoreCreditAccounts, ShopifyNavigable, ShopifyNode
{
    protected $billingAddress;
    protected $buyerExperienceConfiguration;
    protected $catalogs;
    protected $catalogsCount;
    protected $company;
    protected $createdAt;
    protected $currency;
    protected $defaultCursor;
    protected $draftOrders;
    protected $events;
    protected $externalId;
    protected $hasTimelineComment;
    protected $id;
    protected $inCatalog;
    protected $locale;
    protected $market;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $name;
    protected $note;
    protected $orderCount;
    protected $orders;
    protected $ordersCount;
    protected $phone;
    protected $roleAssignments;
    protected $shippingAddress;
    protected $staffMemberAssignments;
    protected $storeCreditAccounts;
    protected $taxExemptions;
    protected $taxRegistrationId;
    protected $taxSettings;
    protected $totalSpent;
    protected $updatedAt;

    
    /**
     * The address used as billing address for the location.
     *
     * @return ShopifyCompanyAddress
     */
    public function getBillingAddress(): ?ShopifyCompanyAddress
    {
        return $this->billingAddress;
    }

    
    /**
     * The configuration for the buyer's B2B checkout.
     *
     * @return ShopifyBuyerExperienceConfiguration
     */
    public function getBuyerExperienceConfiguration(): ?ShopifyBuyerExperienceConfiguration
    {
        return $this->buyerExperienceConfiguration;
    }

    
    /**
     * The list of catalogs associated with the company location.
     *
     * @return ShopifyCatalogConnection
     */
    public function getCatalogs(): ?ShopifyCatalogConnection
    {
        return $this->catalogs;
    }

    
    /**
     * The number of catalogs associated with the company location. Limited to a maximum of 10000 by default.
     *
     * @return ShopifyCount
     */
    public function getCatalogsCount(): ?ShopifyCount
    {
        return $this->catalogsCount;
    }

    
    /**
     * The company that the company location belongs to.
     *
     * @return ShopifyCompany
     */
    public function getCompany(): ?ShopifyCompany
    {
        return $this->company;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company location was created in Shopify.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The location's currency based on the shipping address. If the shipping address is empty, then the value is the shop's primary market.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    
    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     *
     * @return string
     */
    public function getDefaultCursor(): ?string
    {
        return $this->defaultCursor;
    }

    
    /**
     * The list of draft orders for the company location.
     *
     * @return ShopifyDraftOrderConnection
     */
    public function getDraftOrders(): ?ShopifyDraftOrderConnection
    {
        return $this->draftOrders;
    }

    
    /**
     * The paginated list of events associated with the host subject.
     *
     * @return ShopifyEventConnection
     */
    public function getEvents(): ?ShopifyEventConnection
    {
        return $this->events;
    }

    
    /**
     * A unique externally-supplied ID for the company location.
     *
     * @return string
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    
    /**
     * Whether the merchant added a timeline comment to the company location.
     *
     * @return bool
     */
    public function getHasTimelineComment(): ?bool
    {
        return $this->hasTimelineComment;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Whether the company location is assigned a specific catalog.
     *
     * @return bool
     */
    public function getInCatalog(): ?bool
    {
        return $this->inCatalog;
    }

    
    /**
     * The preferred locale of the company location.
     *
     * @return string
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    
    /**
     * The market that applies to the location's shipping address country. In cases where multiple markets match, this returns the most-specific country region market. If the shipping address is empty, then the value is the shop's backup region market.
     *
     * @return ShopifyMarket
     */
    public function getMarket(): ?ShopifyMarket
    {
        return $this->market;
    }

    
    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * List of metafield definitions.
     *
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions(): ?ShopifyMetafieldDefinitionConnection
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

    
    /**
     * The name of the company location.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * A note about the company location.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * The total number of orders placed for the location.
     *
     * @return int
     */
    public function getOrderCount(): ?int
    {
        return $this->orderCount;
    }

    
    /**
     * The list of orders for the company location.
     *
     * @return ShopifyOrderConnection
     */
    public function getOrders(): ?ShopifyOrderConnection
    {
        return $this->orders;
    }

    
    /**
     * The total number of orders placed for the location.
     *
     * @return ShopifyCount
     */
    public function getOrdersCount(): ?ShopifyCount
    {
        return $this->ordersCount;
    }

    
    /**
     * The phone number of the company location.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    
    /**
     * The list of roles assigned to the company location.
     *
     * @return ShopifyCompanyContactRoleAssignmentConnection
     */
    public function getRoleAssignments(): ?ShopifyCompanyContactRoleAssignmentConnection
    {
        return $this->roleAssignments;
    }

    
    /**
     * The address used as shipping address for the location.
     *
     * @return ShopifyCompanyAddress
     */
    public function getShippingAddress(): ?ShopifyCompanyAddress
    {
        return $this->shippingAddress;
    }

    
    /**
     * The list of staff members assigned to the company location.
     *
     * @return ShopifyCompanyLocationStaffMemberAssignmentConnection
     */
    public function getStaffMemberAssignments(): ?ShopifyCompanyLocationStaffMemberAssignmentConnection
    {
        return $this->staffMemberAssignments;
    }

    
    /**
     * Returns a list of store credit accounts that belong to the owner resource.
     * A store credit account owner can hold multiple accounts each with a different currency.
     *
     * @return ShopifyStoreCreditAccountConnection
     */
    public function getStoreCreditAccounts(): ?ShopifyStoreCreditAccountConnection
    {
        return $this->storeCreditAccounts;
    }

    
    /**
     * The list of tax exemptions applied to the location.
     *
     * @return string[] ShopifyTaxExemptionEnumObject values
     */
    public function getTaxExemptions(): ?array
    {
        return $this->taxExemptions;
    }

    
    /**
     * The tax registration ID for the company location.
     *
     * @return string
     */
    public function getTaxRegistrationId(): ?string
    {
        return $this->taxRegistrationId;
    }

    
    /**
     * The tax settings for the company location.
     *
     * @return ShopifyCompanyLocationTaxSettings
     */
    public function getTaxSettings(): ?ShopifyCompanyLocationTaxSettings
    {
        return $this->taxSettings;
    }

    
    /**
     * The total amount spent by the location.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalSpent(): ?ShopifyMoneyV2
    {
        return $this->totalSpent;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company location was last modified.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = ShopifyCompanyAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['buyerExperienceConfiguration']) && $data['buyerExperienceConfiguration'] !== null) {
                $instance->buyerExperienceConfiguration = ShopifyBuyerExperienceConfiguration::fromArray($data['buyerExperienceConfiguration']);
            }
            if (isset($data['catalogs']) && $data['catalogs'] !== null) {
                $instance->catalogs = ShopifyCatalogConnection::fromArray($data['catalogs']);
            }
            if (isset($data['catalogsCount']) && $data['catalogsCount'] !== null) {
                $instance->catalogsCount = ShopifyCount::fromArray($data['catalogsCount']);
            }
            if (isset($data['company']) && $data['company'] !== null) {
                $instance->company = ShopifyCompany::fromArray($data['company']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currency']) && $data['currency'] !== null) {
                $instance->currency = $data['currency'];
            }
            if (isset($data['defaultCursor']) && $data['defaultCursor'] !== null) {
                $instance->defaultCursor = $data['defaultCursor'];
            }
            if (isset($data['draftOrders']) && $data['draftOrders'] !== null) {
                $instance->draftOrders = ShopifyDraftOrderConnection::fromArray($data['draftOrders']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['externalId']) && $data['externalId'] !== null) {
                $instance->externalId = $data['externalId'];
            }
            if (isset($data['hasTimelineComment']) && $data['hasTimelineComment'] !== null) {
                $instance->hasTimelineComment = $data['hasTimelineComment'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inCatalog']) && $data['inCatalog'] !== null) {
                $instance->inCatalog = $data['inCatalog'];
            }
            if (isset($data['locale']) && $data['locale'] !== null) {
                $instance->locale = $data['locale'];
            }
            if (isset($data['market']) && $data['market'] !== null) {
                $instance->market = ShopifyMarket::fromArray($data['market']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = ShopifyMetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['orderCount']) && $data['orderCount'] !== null) {
                $instance->orderCount = $data['orderCount'];
            }
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = ShopifyOrderConnection::fromArray($data['orders']);
            }
            if (isset($data['ordersCount']) && $data['ordersCount'] !== null) {
                $instance->ordersCount = ShopifyCount::fromArray($data['ordersCount']);
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['roleAssignments']) && $data['roleAssignments'] !== null) {
                $instance->roleAssignments = ShopifyCompanyContactRoleAssignmentConnection::fromArray($data['roleAssignments']);
            }
            if (isset($data['shippingAddress']) && $data['shippingAddress'] !== null) {
                $instance->shippingAddress = ShopifyCompanyAddress::fromArray($data['shippingAddress']);
            }
            if (isset($data['staffMemberAssignments']) && $data['staffMemberAssignments'] !== null) {
                $instance->staffMemberAssignments = ShopifyCompanyLocationStaffMemberAssignmentConnection::fromArray($data['staffMemberAssignments']);
            }
            if (isset($data['storeCreditAccounts']) && $data['storeCreditAccounts'] !== null) {
                $instance->storeCreditAccounts = ShopifyStoreCreditAccountConnection::fromArray($data['storeCreditAccounts']);
            }
            if (isset($data['taxExemptions']) && $data['taxExemptions'] !== null) {
                $instance->taxExemptions = $data['taxExemptions'];
            }
            if (isset($data['taxRegistrationId']) && $data['taxRegistrationId'] !== null) {
                $instance->taxRegistrationId = $data['taxRegistrationId'];
            }
            if (isset($data['taxSettings']) && $data['taxSettings'] !== null) {
                $instance->taxSettings = ShopifyCompanyLocationTaxSettings::fromArray($data['taxSettings']);
            }
            if (isset($data['totalSpent']) && $data['totalSpent'] !== null) {
                $instance->totalSpent = ShopifyMoneyV2::fromArray($data['totalSpent']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->billingAddress !== null) {
                $data['billingAddress'] = $this->billingAddress->asArray();
            }
            if ($this->buyerExperienceConfiguration !== null) {
                $data['buyerExperienceConfiguration'] = $this->buyerExperienceConfiguration->asArray();
            }
            if ($this->catalogs !== null) {
                $data['catalogs'] = $this->catalogs->asArray();
            }
            if ($this->catalogsCount !== null) {
                $data['catalogsCount'] = $this->catalogsCount->asArray();
            }
            if ($this->company !== null) {
                $data['company'] = $this->company->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currency !== null) {
                $data['currency'] = $this->currency;
            }
            if ($this->defaultCursor !== null) {
                $data['defaultCursor'] = $this->defaultCursor;
            }
            if ($this->draftOrders !== null) {
                $data['draftOrders'] = $this->draftOrders->asArray();
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->externalId !== null) {
                $data['externalId'] = $this->externalId;
            }
            if ($this->hasTimelineComment !== null) {
                $data['hasTimelineComment'] = $this->hasTimelineComment;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inCatalog !== null) {
                $data['inCatalog'] = $this->inCatalog;
            }
            if ($this->locale !== null) {
                $data['locale'] = $this->locale;
            }
            if ($this->market !== null) {
                $data['market'] = $this->market->asArray();
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->orderCount !== null) {
                $data['orderCount'] = $this->orderCount;
            }
            if ($this->orders !== null) {
                $data['orders'] = $this->orders->asArray();
            }
            if ($this->ordersCount !== null) {
                $data['ordersCount'] = $this->ordersCount->asArray();
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->roleAssignments !== null) {
                $data['roleAssignments'] = $this->roleAssignments->asArray();
            }
            if ($this->shippingAddress !== null) {
                $data['shippingAddress'] = $this->shippingAddress->asArray();
            }
            if ($this->staffMemberAssignments !== null) {
                $data['staffMemberAssignments'] = $this->staffMemberAssignments->asArray();
            }
            if ($this->storeCreditAccounts !== null) {
                $data['storeCreditAccounts'] = $this->storeCreditAccounts->asArray();
            }
            if ($this->taxExemptions !== null) {
                $data['taxExemptions'] = $this->taxExemptions;
            }
            if ($this->taxRegistrationId !== null) {
                $data['taxRegistrationId'] = $this->taxRegistrationId;
            }
            if ($this->taxSettings !== null) {
                $data['taxSettings'] = $this->taxSettings->asArray();
            }
            if ($this->totalSpent !== null) {
                $data['totalSpent'] = $this->totalSpent->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
