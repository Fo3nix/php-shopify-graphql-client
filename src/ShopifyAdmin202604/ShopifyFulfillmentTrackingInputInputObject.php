<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields that specify all possible fields for tracking information.
 *
 * > Note:
 * > If you provide the `url` field, you should not provide the `urls` field.
 * >
 * > If you provide the `number` field, you should not provide the `numbers` field.
 * >
 * > If you provide the `url` field, you should provide the `number` field.
 * >
 * > If you provide the `urls` field, you should provide the `numbers` field.
 */
class ShopifyFulfillmentTrackingInputInputObject extends InputObject
{
    protected $number;
    protected $url;
    protected $company;
    protected $numbers;
    protected $urls;

    /**
     * The tracking number of the fulfillment.
     *
     * The tracking number will be clickable in the interface if one of the following applies
     * (the highest in the list has the highest priority):
     *
     * * Tracking url provided in the `url` field.
     * * [Shopify-known tracking company name](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#supported-tracking-companies)
     *   specified in the `company` field.
     *   Shopify will build the tracking URL automatically based on the tracking number specified.
     * * The tracking number has a Shopify-known format.
     *   Shopify will guess the tracking provider and build the tracking url based on the tracking number format.
     *   Not all tracking carriers are supported, and multiple tracking carriers may use similarly formatted tracking numbers.
     *   This can result in an invalid tracking URL.
     *   It is highly recommended that you send the tracking company and the tracking URL.
     */
    public function setNumber($number): static
    {
        $this->number = $number;

        return $this;
    }

    /**
     * The URL to track the fulfillment.
     *
     * The tracking URL is displayed in the merchant's admin on the order page.
     * The tracking URL is displayed in the shipping confirmation email, which can optionally be sent to the customer.
     * When accounts are enabled, it's also displayed in the customer's order history.
     *
     * The URL must be an [RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986) and
     * [RFC 3987](https://datatracker.ietf.org/doc/html/rfc3987)-compliant URI string.
     * For example, `"https://www.myshipping.com/track/?tracknumbers=TRACKING_NUMBER"` is a valid URL.
     * It includes a scheme (`https`) and a host (`myshipping.com`).
     */
    public function setUrl($url): static
    {
        $this->url = $url;

        return $this;
    }

    /**
     * The name of the tracking company.
     *
     * If you specify a tracking company name from
     * [the list](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#supported-tracking-companies),
     * Shopify will automatically build tracking URLs for all provided tracking numbers,
     * which will make the tracking numbers clickable in the interface. This doesn't mean
     * that Shopify automatically updates the fulfillment's `shipment_status` field in Admin.
     * The same tracking company will be applied to all tracking numbers specified.
     *
     * For tracking companies whose `shipment_status` field is updated automatically, see
     * [Tracking companies with automatic tracking updates](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#tracking-companies-with-automatic-tracking-updates).
     *
     * > Note:
     * > Send the tracking company name exactly as written in
     * > [the list](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#supported-tracking-companies)
     * > (capitalization matters).
     */
    public function setCompany($company): static
    {
        $this->company = $company;

        return $this;
    }

    /**
     * The tracking numbers of the fulfillment, one or many.
     *
     * With multiple tracking numbers, you can provide tracking information
     * for all shipments associated with the fulfillment, if there are more than one.
     * For example, if you're shipping assembly parts of one furniture item in several boxes.
     *
     * Tracking numbers will be clickable in the interface if one of the following applies
     * (the highest in the list has the highest priority):
     *
     * * Tracking URLs provided in the `urls` field.
     *   The tracking URLs will be matched to the tracking numbers based on their positions in the arrays.
     * * [Shopify-known tracking company name](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#supported-tracking-companies)
     *   specified in the `company` field.
     *   Shopify will build tracking URLs automatically for all tracking numbers specified.
     *   The same tracking company will be applied to all tracking numbers.
     * * Tracking numbers have a Shopify-known format.
     *   Shopify will guess tracking providers and build tracking URLs based on the tracking number formats.
     *   Not all tracking carriers are supported, and multiple tracking carriers may use similarly formatted tracking numbers.
     *   This can result in an invalid tracking URL.
     *   It is highly recommended that you send the tracking company and the tracking URLs.
     */
    public function setNumbers(array $numbers): static
    {
        $this->numbers = $numbers;

        return $this;
    }

    /**
     * The URLs to track the fulfillment, one or many.
     *
     * The tracking URLs are displayed in the merchant's admin on the order page.
     * The tracking URLs are displayed in the shipping confirmation email, which can optionally be sent to the customer.
     * When accounts are enabled, the tracking URLs are also displayed in the customer's order history.
     *
     * If you're not specifying a
     * [Shopify-known](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#supported-tracking-companies)
     * tracking company name in the `company` field,
     * then provide tracking URLs for all tracking numbers from the `numbers` field.
     *
     * Tracking URLs from the `urls` array field are being matched with the tracking numbers from the `numbers` array
     * field correspondingly their positions in the arrays.
     *
     * Each URL must be an [RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986) and
     * [RFC 3987](https://datatracker.ietf.org/doc/html/rfc3987)-compliant URI string.
     * For example, `"https://www.myshipping.com/track/?tracknumbers=TRACKING_NUMBER"` is a valid URL.
     * It includes a scheme (`https`) and a host (`myshipping.com`).
     */
    public function setUrls(array $urls): static
    {
        $this->urls = $urls;

        return $this;
    }
}
