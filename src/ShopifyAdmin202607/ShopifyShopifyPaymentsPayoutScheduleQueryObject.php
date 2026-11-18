<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The payment schedule for a payments account.
 */
class ShopifyShopifyPaymentsPayoutScheduleQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsPayoutSchedule";

    /**
     * The interval at which payouts are sent to the connected bank account.
     */
    public function selectInterval(): static
    {
        $this->selectField("interval");

        return $this;
    }

    /**
     * The day of the month funds will be paid out.
     *
     * The value can be any day of the month from the 1st to the 31st.
     * If the payment interval is set to monthly, this value will be used.
     * Payouts scheduled between 29-31st of the month are sent on the last day of shorter months.
     */
    public function selectMonthlyAnchor(): static
    {
        $this->selectField("monthlyAnchor");

        return $this;
    }

    /**
     * The day of the week funds will be paid out.
     *
     * The value can be any weekday from Monday to Friday.
     * If the payment interval is set to weekly, this value will be used.
     */
    public function selectWeeklyAnchor(): static
    {
        $this->selectField("weeklyAnchor");

        return $this;
    }
}
