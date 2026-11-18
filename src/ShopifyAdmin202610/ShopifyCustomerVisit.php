<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketingEvent;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyUTMParameters;

/**
 * A customer's session on the online store. Tracks how the [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) arrived at the store, including the landing page, referral source, and any associated marketing campaigns.
 *
 * The visit captures attribution data such as [`UTMParameters`](https://shopify.dev/docs/api/admin-graphql/latest/objects/UTMParameters), referral codes, and the [`MarketingEvent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MarketingEvent) that drove the session. This information helps merchants understand which marketing efforts successfully bring customers to their store.
 */
class ShopifyCustomerVisit implements ShopifyCustomerMoment, ShopifyNode
{
    protected $id;
    protected $landingPage;
    protected $landingPageHtml;
    protected $marketingEvent;
    protected $occurredAt;
    protected $referralCode;
    protected $referralInfoHtml;
    protected $referrerUrl;
    protected $source;
    protected $sourceDescription;
    protected $sourceType;
    protected $utmParameters;

    
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
     * URL of the first page the customer landed on for the session.
     *
     * @return string
     */
    public function getLandingPage(): mixed
    {
        return $this->landingPage;
    }

    
    /**
     * Landing page information with URL linked in HTML. For example, the first page the customer visited was store.myshopify.com/products/1.
     *
     * @return string
     */
    public function getLandingPageHtml(): mixed
    {
        return $this->landingPageHtml;
    }

    
    /**
     * Represent actions taken by an app, on behalf of a merchant,
     * to market Shopify resources such as products, collections, and discounts.
     *
     * @return ShopifyMarketingEvent
     */
    public function getMarketingEvent(): ?ShopifyMarketingEvent
    {
        return $this->marketingEvent;
    }

    
    /**
     * The date and time when the customer's session occurred.
     *
     * @return Carbon
     */
    public function getOccurredAt(): ?Carbon
    {
        return $this->occurredAt;
    }

    
    /**
     * Marketing referral code from the link that the customer clicked to visit the store.
     * Supports the following URL attributes: _ref_, _source_, or _r_.
     * For example, if the URL is myshopifystore.com/products/slide?ref=j2tj1tn2, then this value is j2tj1tn2.
     *
     * @return string
     */
    public function getReferralCode(): ?string
    {
        return $this->referralCode;
    }

    
    /**
     * Referral information with URLs linked in HTML.
     *
     * @return string
     */
    public function getReferralInfoHtml(): mixed
    {
        return $this->referralInfoHtml;
    }

    
    /**
     * Webpage where the customer clicked a link that sent them to the online store.
     * For example, _https://randomblog.com/page1_ or _android-app://com.google.android.gm_.
     *
     * @return string
     */
    public function getReferrerUrl(): mixed
    {
        return $this->referrerUrl;
    }

    
    /**
     * Source from which the customer visited the store, such as a platform (Facebook, Google), email, direct,
     * a website domain, QR code, or unknown.
     *
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    
    /**
     * Describes the source explicitly for first or last session.
     *
     * @return string
     */
    public function getSourceDescription(): ?string
    {
        return $this->sourceDescription;
    }

    
    /**
     * Type of marketing tactic.
     *
     * @return string A ShopifyMarketingTacticEnumObject value
     */
    public function getSourceType(): ?string
    {
        return $this->sourceType;
    }

    
    /**
     * A set of UTM parameters gathered from the URL parameters of the referrer.
     *
     * @return ShopifyUTMParameters
     */
    public function getUtmParameters(): ?ShopifyUTMParameters
    {
        return $this->utmParameters;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['landingPage']) && $data['landingPage'] !== null) {
                $instance->landingPage = $data['landingPage'];
            }
            if (isset($data['landingPageHtml']) && $data['landingPageHtml'] !== null) {
                $instance->landingPageHtml = $data['landingPageHtml'];
            }
            if (isset($data['marketingEvent']) && $data['marketingEvent'] !== null) {
                $instance->marketingEvent = ShopifyMarketingEvent::fromArray($data['marketingEvent']);
            }
            if (isset($data['occurredAt']) && $data['occurredAt'] !== null) {
                $instance->occurredAt = new Carbon($data['occurredAt']);
            }
            if (isset($data['referralCode']) && $data['referralCode'] !== null) {
                $instance->referralCode = $data['referralCode'];
            }
            if (isset($data['referralInfoHtml']) && $data['referralInfoHtml'] !== null) {
                $instance->referralInfoHtml = $data['referralInfoHtml'];
            }
            if (isset($data['referrerUrl']) && $data['referrerUrl'] !== null) {
                $instance->referrerUrl = $data['referrerUrl'];
            }
            if (isset($data['source']) && $data['source'] !== null) {
                $instance->source = $data['source'];
            }
            if (isset($data['sourceDescription']) && $data['sourceDescription'] !== null) {
                $instance->sourceDescription = $data['sourceDescription'];
            }
            if (isset($data['sourceType']) && $data['sourceType'] !== null) {
                $instance->sourceType = $data['sourceType'];
            }
            if (isset($data['utmParameters']) && $data['utmParameters'] !== null) {
                $instance->utmParameters = ShopifyUTMParameters::fromArray($data['utmParameters']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->landingPage !== null) {
                $data['landingPage'] = $this->landingPage;
            }
            if ($this->landingPageHtml !== null) {
                $data['landingPageHtml'] = $this->landingPageHtml;
            }
            if ($this->marketingEvent !== null) {
                $data['marketingEvent'] = $this->marketingEvent->asArray();
            }
            if ($this->occurredAt !== null) {
                $data['occurredAt'] = $this->occurredAt->toIso8601String();
            }
            if ($this->referralCode !== null) {
                $data['referralCode'] = $this->referralCode;
            }
            if ($this->referralInfoHtml !== null) {
                $data['referralInfoHtml'] = $this->referralInfoHtml;
            }
            if ($this->referrerUrl !== null) {
                $data['referrerUrl'] = $this->referrerUrl;
            }
            if ($this->source !== null) {
                $data['source'] = $this->source;
            }
            if ($this->sourceDescription !== null) {
                $data['sourceDescription'] = $this->sourceDescription;
            }
            if ($this->sourceType !== null) {
                $data['sourceType'] = $this->sourceType;
            }
            if ($this->utmParameters !== null) {
                $data['utmParameters'] = $this->utmParameters->asArray();
            }
            return $data;
        }
}
