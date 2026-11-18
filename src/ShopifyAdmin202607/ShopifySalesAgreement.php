<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyApp;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySaleConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyStaffMember;

/**
 * A contract between a merchant and a customer to do business. Shopify creates a sales agreement whenever an order is placed, edited, or refunded. A sales agreement has one or more sales records, which provide itemized details about the initial agreement or subsequent changes made to the order. For example, when a customer places an order, Shopify creates the order, generates a sales agreement, and records a sale for each line item purchased in the order. A sale record is specific to a type of order line. Order lines can represent different things such as a purchased product, a tip added by a customer, shipping costs collected at checkout, and more.
 */
interface ShopifySalesAgreement
{
    
    /**
     * The application that created the agreement.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp;

    
    /**
     * The date and time at which the agreement occurred.
     *
     * @return Carbon
     */
    public function getHappenedAt(): ?Carbon;

    
    /**
     * The unique ID for the agreement.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * The reason the agreement was created.
     *
     * @return string A ShopifyOrderActionTypeEnumObject value
     */
    public function getReason(): ?string;

    
    /**
     * The sales associated with the agreement.
     *
     * @return ShopifySaleConnection
     */
    public function getSales(): ?ShopifySaleConnection;

    
    /**
     * The staff member associated with the agreement.
     *
     * @return ShopifyStaffMember
     */
    public function getUser(): ?ShopifyStaffMember;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
