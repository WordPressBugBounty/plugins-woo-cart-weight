<?php

namespace WCWeightVendor;

/**
 * WP Desk Tracker
 *
 * @class        WPDESK_Tracker
 * @version        1.3.2
 * @package        WPDESK/Helper
 * @category    Class
 * @author        WP Desk
 */
if (!\defined('ABSPATH')) {
    exit;
}
if (!\class_exists('WCWeightVendor\\WPDesk_Tracker_Data_Provider_Products')) {
    /**
     * Class WPDesk_Tracker_Data_Provider_Products
     */
    class WPDesk_Tracker_Data_Provider_Products implements \WPDesk_Tracker_Data_Provider
    {
        /**
         * Get product totals based on product type.
         *
         * @return array Data provided to tracker.
         */
        public function get_data()
        {
            $product_count = array();
            $product_count_data = \wp_count_posts('product');
            $product_count['total'] = $product_count_data->publish;
            $product_statuses = \get_terms(array('taxonomy' => 'product_type', 'hide_empty' => \false));
            foreach ($product_statuses as $product_status) {
                $product_count[$product_status->name] = $product_status->count;
            }
            return ['products' => $product_count];
        }
    }
}
