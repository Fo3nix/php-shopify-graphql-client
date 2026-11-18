<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPointOfSaleDevicePaymentSession;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStaffMember;
use Carbon\Carbon;

/**
 * An activity on a cash drawer.
 */
interface ShopifyCashActivity
{
    
    /**
     * The amount of cash added or removed as part of the activity.
     *
     * @return ShopifyMoneyV2
     */
    public function getCash(): ?ShopifyMoneyV2;

    
    /**
     * The point of sale device payment session associated with the activity.
     *
     * @return ShopifyPointOfSaleDevicePaymentSession
     */
    public function getPaymentSession(): ?ShopifyPointOfSaleDevicePaymentSession;

    
    /**
     * The staff member who performed the activity.
     *
     * @return ShopifyStaffMember
     */
    public function getStaffMember(): ?ShopifyStaffMember;

    
    /**
     * The time at which the activity occurred.
     *
     * @return Carbon
     */
    public function getTime(): ?Carbon;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
