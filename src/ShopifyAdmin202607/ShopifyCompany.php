<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCompanyContactRoleConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCompanyContactConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCount;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCompanyContactRole;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDraftOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCompanyLocationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCompanyContact;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;

/**
 * A business entity that purchases from the shop as part of B2B commerce. Companies organize multiple locations and contacts who can place orders on behalf of the organization. [`CompanyLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation) objects can have custom pricing through [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) and [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList) configurations.
 */
class ShopifyCompany implements ShopifyCommentEventSubject, ShopifyHasEvents, ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyNavigable, ShopifyNode
{
    protected $contactCount;
    protected $contactRoles;
    protected $contacts;
    protected $contactsCount;
    protected $createdAt;
    protected $customerSince;
    protected $defaultCursor;
    protected $defaultRole;
    protected $draftOrders;
    protected $events;
    protected $externalId;
    protected $hasTimelineComment;
    protected $id;
    protected $lifetimeDuration;
    protected $locations;
    protected $locationsCount;
    protected $mainContact;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $name;
    protected $note;
    protected $orders;
    protected $ordersCount;
    protected $totalSpent;
    protected $updatedAt;

    
    /**
     * The number of contacts that belong to the company.
     *
     * @return int
     */
    public function getContactCount(): ?int
    {
        return $this->contactCount;
    }

    
    /**
     * The list of roles for the company contacts.
     *
     * @return ShopifyCompanyContactRoleConnection
     */
    public function getContactRoles(): ?ShopifyCompanyContactRoleConnection
    {
        return $this->contactRoles;
    }

    
    /**
     * The list of contacts in the company.
     *
     * @return ShopifyCompanyContactConnection
     */
    public function getContacts(): ?ShopifyCompanyContactConnection
    {
        return $this->contacts;
    }

    
    /**
     * The number of contacts that belong to the company.
     *
     * @return ShopifyCount
     */
    public function getContactsCount(): ?ShopifyCount
    {
        return $this->contactsCount;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company was created in Shopify.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company became the customer.
     *
     * @return Carbon
     */
    public function getCustomerSince(): ?Carbon
    {
        return $this->customerSince;
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
     * The role proposed by default for a contact at the company.
     *
     * @return ShopifyCompanyContactRole
     */
    public function getDefaultRole(): ?ShopifyCompanyContactRole
    {
        return $this->defaultRole;
    }

    
    /**
     * The list of the company's draft orders.
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
     * A unique externally-supplied ID for the company.
     *
     * @return string
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    
    /**
     * Whether the merchant added a timeline comment to the company.
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
     * The lifetime duration of the company, since it became a customer of the shop. Examples: `2 days`, `3 months`, `1 year`.
     *
     * @return string
     */
    public function getLifetimeDuration(): ?string
    {
        return $this->lifetimeDuration;
    }

    
    /**
     * The list of locations in the company.
     *
     * @return ShopifyCompanyLocationConnection
     */
    public function getLocations(): ?ShopifyCompanyLocationConnection
    {
        return $this->locations;
    }

    
    /**
     * The number of locations that belong to the company.
     *
     * @return ShopifyCount
     */
    public function getLocationsCount(): ?ShopifyCount
    {
        return $this->locationsCount;
    }

    
    /**
     * The main contact for the company.
     *
     * @return ShopifyCompanyContact
     */
    public function getMainContact(): ?ShopifyCompanyContact
    {
        return $this->mainContact;
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
     * The name of the company.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * A note about the company.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * The list of the company's orders.
     *
     * @return ShopifyOrderConnection
     */
    public function getOrders(): ?ShopifyOrderConnection
    {
        return $this->orders;
    }

    
    /**
     * The total number of orders placed for this company, across all its locations.
     *
     * @return ShopifyCount
     */
    public function getOrdersCount(): ?ShopifyCount
    {
        return $this->ordersCount;
    }

    
    /**
     * The total amount spent by this company, across all its locations.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalSpent(): ?ShopifyMoneyV2
    {
        return $this->totalSpent;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company was last modified.
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
            if (isset($data['contactCount']) && $data['contactCount'] !== null) {
                $instance->contactCount = $data['contactCount'];
            }
            if (isset($data['contactRoles']) && $data['contactRoles'] !== null) {
                $instance->contactRoles = ShopifyCompanyContactRoleConnection::fromArray($data['contactRoles']);
            }
            if (isset($data['contacts']) && $data['contacts'] !== null) {
                $instance->contacts = ShopifyCompanyContactConnection::fromArray($data['contacts']);
            }
            if (isset($data['contactsCount']) && $data['contactsCount'] !== null) {
                $instance->contactsCount = ShopifyCount::fromArray($data['contactsCount']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customerSince']) && $data['customerSince'] !== null) {
                $instance->customerSince = new Carbon($data['customerSince']);
            }
            if (isset($data['defaultCursor']) && $data['defaultCursor'] !== null) {
                $instance->defaultCursor = $data['defaultCursor'];
            }
            if (isset($data['defaultRole']) && $data['defaultRole'] !== null) {
                $instance->defaultRole = ShopifyCompanyContactRole::fromArray($data['defaultRole']);
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
            if (isset($data['lifetimeDuration']) && $data['lifetimeDuration'] !== null) {
                $instance->lifetimeDuration = $data['lifetimeDuration'];
            }
            if (isset($data['locations']) && $data['locations'] !== null) {
                $instance->locations = ShopifyCompanyLocationConnection::fromArray($data['locations']);
            }
            if (isset($data['locationsCount']) && $data['locationsCount'] !== null) {
                $instance->locationsCount = ShopifyCount::fromArray($data['locationsCount']);
            }
            if (isset($data['mainContact']) && $data['mainContact'] !== null) {
                $instance->mainContact = ShopifyCompanyContact::fromArray($data['mainContact']);
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
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = ShopifyOrderConnection::fromArray($data['orders']);
            }
            if (isset($data['ordersCount']) && $data['ordersCount'] !== null) {
                $instance->ordersCount = ShopifyCount::fromArray($data['ordersCount']);
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
            if ($this->contactCount !== null) {
                $data['contactCount'] = $this->contactCount;
            }
            if ($this->contactRoles !== null) {
                $data['contactRoles'] = $this->contactRoles->asArray();
            }
            if ($this->contacts !== null) {
                $data['contacts'] = $this->contacts->asArray();
            }
            if ($this->contactsCount !== null) {
                $data['contactsCount'] = $this->contactsCount->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->customerSince !== null) {
                $data['customerSince'] = $this->customerSince->toIso8601String();
            }
            if ($this->defaultCursor !== null) {
                $data['defaultCursor'] = $this->defaultCursor;
            }
            if ($this->defaultRole !== null) {
                $data['defaultRole'] = $this->defaultRole->asArray();
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
            if ($this->lifetimeDuration !== null) {
                $data['lifetimeDuration'] = $this->lifetimeDuration;
            }
            if ($this->locations !== null) {
                $data['locations'] = $this->locations->asArray();
            }
            if ($this->locationsCount !== null) {
                $data['locationsCount'] = $this->locationsCount->asArray();
            }
            if ($this->mainContact !== null) {
                $data['mainContact'] = $this->mainContact->asArray();
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
            if ($this->orders !== null) {
                $data['orders'] = $this->orders->asArray();
            }
            if ($this->ordersCount !== null) {
                $data['ordersCount'] = $this->ordersCount->asArray();
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
