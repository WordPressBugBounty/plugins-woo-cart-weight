<?php

namespace WCWeightVendor\Octolize\ShippingExtensions\Plugin;

class PluginFactory
{
    const CATEGORY_ALL = 'all';
    const CATEGORY_BUNDLES = 'bundles';
    const CATEGORY_LIVE_RATES = 'live_rates';
    const CATEGORY_CUSTOMIZABLE_RATES = 'customizable_rates';
    const CATEGORY_SHIPPING_LABELS = 'shipping_labels';
    const GROUP_UPS = 'ups';
    /**
     * @return Plugin[]
     */
    public static function get_plugins(): array
    {
        $categories = self::get_categories();
        $plugins = [];
        $plugin = new Plugin(__('Flexible Shipping PRO', 'woo-cart-weight'), __('The best and the most powerful Table Rate shipping plugin for WooCommerce. Define the shipping rules based on numerous conditions and configure even the most complex shipping scenarios with ease.', 'woo-cart-weight'), 'flexible-shipping-pro.svg', 'flexible-shipping-pro/flexible-shipping-pro.php', $categories[self::CATEGORY_CUSTOMIZABLE_RATES], ' https://octol.io/fs-extensions');
        $plugin->add_url('https://octol.io/fs-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('All Plugins Bundle', 'woo-cart-weight'), __('Grab a pack of all Octolize plugins as a cut-price tailor-made limited offer for developers, agencies and freelancers. Move the WooCommerce shipping to a whole new level. No strings attached, each plugin\'s 25‑sites subscription included.', 'woo-cart-weight'), 'all-plugins-bundle-avatar-icon.svg', 'all-plugins-bundle', $categories[self::CATEGORY_BUNDLES], 'https://octol.io/all-plugins-bundle-extensions');
        $plugin->add_url('https://octol.io/all-plugins-bundle-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Complete UPS Integration Bundle', 'woo-cart-weight'), __('Connect your WooCommerce store with your UPS account, offer your customers real-time shipping rates and generate printable shipping labels for each placed order.', 'woo-cart-weight'), 'ups-bundle-avatar-icon.svg', 'ups-bundle', $categories[self::CATEGORY_BUNDLES], 'https://octol.io/complete-ups-integration-bundle-extensions');
        $plugin->add_url('https://octol.io/complete-ups-integration-bundle-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Advanced DPD UK Integration Bundle', 'woo-cart-weight'), __('Integrate your WooCommerce store with your DPD UK account, customize the UK locations and automate the whole order processing including generating and printing the shipping labels.', 'woo-cart-weight'), 'dpd-bundle-avatar-icon.svg', 'dpd-uk-bundle', $categories[self::CATEGORY_BUNDLES], 'https://octol.io/advanced-dpd-uk-integration-bundle-extensions');
        $plugin->add_url('https://octol.io/advanced-dpd-uk-integration-bundle-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Flexible Shipping Bundle', 'woo-cart-weight'), __('Fully customize the shipping cost in your shop, define its calculation rules based on numerous conditions, hide and display the shipping methods and divide orders into separate packages.', 'woo-cart-weight'), 'customizable-rates-bundle-avatar-icon.svg', 'fs-bundle', $categories[self::CATEGORY_BUNDLES], 'https://octol.io/flexible-shipping-bundle-extensions');
        $plugin->add_url('https://octol.io/flexible-shipping-bundle-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Live Rates Bundle', 'woo-cart-weight'), __('Serve your customers the UPS, FedEx, DHL Express or USPS shipping methods with automatically calculated rates and use multiple conditions to display them according to your terms and needs.', 'woo-cart-weight'), 'live-rates-bundle-avatar-icon.svg', 'live-rates-bundle', $categories[self::CATEGORY_BUNDLES], 'https://octol.io/live-rates-bundle-extensions');
        $plugin->add_url('https://octol.io/live-rates-bundle-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('UPS Live Rates and Access Points PRO', 'woo-cart-weight'), __('WooCommerce UPS integration packed with many advanced features. Display the dynamically calculated live rates for UPS shipping methods and adjust them to your needs.', 'woo-cart-weight'), 'flexible-shipping-ups-pro.svg', 'flexible-shipping-ups-pro/flexible-shipping-ups-pro.php', $categories[self::CATEGORY_LIVE_RATES], 'https://octol.io/ups-extensions', self::GROUP_UPS);
        $plugin->add_url('https://octol.io/ups-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('FedEx WooCommerce Live Rates PRO', 'woo-cart-weight'), __('Enable the FedEx live rates for international delivery and integrate it with your shop in less than 5 minutes. Save your time and money – let the shipping cost be calculated automatically.', 'woo-cart-weight'), 'flexible-shipping-fedex-pro.svg', 'flexible-shipping-fedex-pro/flexible-shipping-fedex-pro.php', $categories[self::CATEGORY_LIVE_RATES], 'https://octol.io/fedex-extensions', self::GROUP_UPS);
        $plugin->add_url('https://octol.io/fedex-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('USPS Live Rates PRO', 'woo-cart-weight'), __('Serve your customers the automatically and real-time calculated USPS shipping rates. Add the handling fees, insurance and adjust them to your needs with just a few clicks.', 'woo-cart-weight'), 'flexible-shipping-usps-pro.svg', 'flexible-shipping-usps-pro/flexible-shipping-usps-pro.php', $categories[self::CATEGORY_LIVE_RATES], 'https://octol.io/usps-extensions', self::GROUP_UPS);
        $plugin->add_url('https://octol.io/usps-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Flexible Shipping Import / Export', 'woo-cart-weight'), __('Use the CSV files to import or export your shipping methods. Edit, update, move or backup the ready configurations and shipping scenarios.', 'woo-cart-weight'), 'flexible-shipping-import-export.svg', 'flexible-shipping-import-export/flexible-shipping-import-export.php', $categories[self::CATEGORY_CUSTOMIZABLE_RATES], 'https://octol.io/fsie-extensions');
        $plugin->add_url('https://octol.io/fsie-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Flexible Shipping Locations', 'woo-cart-weight'), __('Calculate the shipping cost based on location. Define your own custom locations, use the WooCommerce defaults or the ones created by 3rd party plugins.', 'woo-cart-weight'), 'flexible-shipping-locations.svg', 'flexible-shipping-locations/flexible-shipping-locations.php', $categories[self::CATEGORY_CUSTOMIZABLE_RATES], 'https://octol.io/locations-extensions');
        $plugin->add_url('https://octol.io/locations-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Distance Based Shipping Rates', 'woo-cart-weight'), __('Offer shipping rates based on Distance or Total Travel Time calculated by Google Distance Matrix API and don\'t overpay for shipping.', 'woo-cart-weight'), 'octolize-distance-based-shipping-rates.svg', 'octolize-distance-based-shipping-rates/octolize-distance-based-shipping-rates.php', $categories[self::CATEGORY_CUSTOMIZABLE_RATES], 'https://octol.io/dbs-extensions');
        $plugin->add_url('https://octol.io/dbs-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Pickup Points PRO WooCommerce Plugin', 'woo-cart-weight'), __('Provide your customers with multiple carriers\' pickup points at the checkout and let them choose the preferred one to collect their order from.', 'woo-cart-weight'), 'pickup-points-pro-woocommerce-avatar-icon.svg', 'flexible-shipping-pickup-points/flexible-shipping-pickup-points.php', $categories[self::CATEGORY_CUSTOMIZABLE_RATES], 'https://octol.io/pickup-points-pro-extensions');
        $plugin->add_url('https://octol.io/pickup-points-pro-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Shipping Cost on Product Page PRO', 'woo-cart-weight'), __('Let your customers calculate and see the shipping cost on product pages based on the entered shipping destination and cart contents. Decide how and when exactly you want the shipping cost calculator to display.', 'woo-cart-weight'), 'octolize-shipping-cost-on-product-page-pro.svg', 'octolize-shipping-cost-on-product-page-pro/octolize-shipping-cost-on-product-page-pro.php', $categories[self::CATEGORY_CUSTOMIZABLE_RATES], 'https://octol.io/scpp-extensions');
        $plugin->add_url('https://octol.io/scpp-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Flexible Shipping Box Packing', 'woo-cart-weight'), __('Use the advanced box packing WooCommerce algorithm to fit the ordered products into your shipping boxes the most optimal way. Configure the shipping cost based on the type and number of the used shipping boxes.', 'woo-cart-weight'), 'octolize-box-packing.svg', 'octolize-box-packing/octolize-box-packing.php', $categories[self::CATEGORY_CUSTOMIZABLE_RATES], 'https://octol.io/bp-extensions');
        $plugin->add_url('https://octol.io/bp-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Shipping Packages', 'woo-cart-weight'), __('Split the WooCommerce cart content into multiple packages based on various conditions like shipping class.', 'woo-cart-weight'), 'flexible-shipping-packages.svg', 'flexible-shipping-packages/flexible-shipping-packages.php', $categories[self::CATEGORY_CUSTOMIZABLE_RATES], 'https://octol.io/packages-extensions');
        $plugin->add_url('https://octol.io/packages-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Multi Vendor Shipping', 'woo-cart-weight'), __('Define precisely the shipping cost calculation rules for each Vendor / Product Author in your marketplace or multivendor store.', 'woo-cart-weight'), 'flexible-shipping-vendors.svg', 'flexible-shipping-vendors/flexible-shipping-vendors.php', $categories[self::CATEGORY_CUSTOMIZABLE_RATES], 'https://octol.io/mvs-extensions', self::GROUP_UPS);
        $plugin->add_url('https://octol.io/mvs-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Delivery Date Picker', 'woo-cart-weight'), __('Let your customers choose a convenient delivery date for the ordered products and make the shipping cost dependent on the date they choose.', 'woo-cart-weight'), 'octolize-delivery-date-picker.svg', 'octolize-delivery-date-picker/octolize-delivery-date-picker.php', $categories[self::CATEGORY_CUSTOMIZABLE_RATES], 'https://octol.io/ddp-extensions');
        $plugin->add_url('https://octol.io/ddp-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('DPD UK & DPD Local', 'woo-cart-weight'), __('Ship your DPD orders faster with advanced DPD UK & DPD Local WooCommerce integration. Gather shipping details, download printable shipping labels and track parcels - everything is automated.', 'woo-cart-weight'), 'woocommerce-dpd-uk.svg', 'woocommerce-dpd-uk/woocommerce-dpd-uk.php', $categories[self::CATEGORY_SHIPPING_LABELS], 'https://octol.io/dpd-uk-extensions');
        $plugin->add_url('https://octol.io/dpd-uk-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Flexible Printing', 'woo-cart-weight'), __('Automate your shipping process. Print the shipping labels on thermal printers via PrintNode service. Let the labels be printed automatically the same time the order is placed.', 'woo-cart-weight'), 'flexible-printing.svg', 'flexible-printing/flexible-printing.php', $categories[self::CATEGORY_SHIPPING_LABELS], 'https://octol.io/printing-extensions');
        $plugin->add_url('https://octol.io/printing-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('UPS Labels and Tracking', 'woo-cart-weight'), __('Create the shipments, generate the printable UPS shipping labels for the placed orders and track the parcels directly from your WooCommerce store.', 'woo-cart-weight'), 'flexible-shipping-ups-labels.svg', 'flexible-shipping-ups-labels/flexible-shipping-ups-labels.php', $categories[self::CATEGORY_SHIPPING_LABELS], 'https://octol.io/ups-labels-extensions', self::GROUP_UPS);
        $plugin->add_url('https://octol.io/ups-labels-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('DHL Express Live Rates PRO', 'woo-cart-weight'), __('WooCommerce DHL Express integration packed with many advanced features. Display the dynamically calculated live rates for DHL Express shipping methods and adjust them to your needs.', 'woo-cart-weight'), 'flexible-shipping-dhl-express-pro.svg', 'flexible-shipping-dhl-express-pro/flexible-shipping-dhl-express-pro.php', $categories[self::CATEGORY_LIVE_RATES], 'https://octol.io/dhl-express-extensions', self::GROUP_UPS);
        $plugin->add_url('https://octol.io/dhl-express-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Canada Post WooCommerce Plugin - Live Rates PRO', 'woo-cart-weight'), __('Offer your customers the Canada Post services with real-time calculated shipping rates. Add the handling fees, insurance and adjust them to your needs with just a few clicks.', 'woo-cart-weight'), 'canada-post-live-rate-avatar-icon.svg', 'octolize-canada-post-shipping-pro/octolize-canada-post-shipping-pro.php', $categories[self::CATEGORY_LIVE_RATES], 'https://octol.io/canada-post-pro-extensions');
        $plugin->add_url('https://octol.io/canada-post-pro-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Royal Mail WooCommerce - Live Rates PRO', 'woo-cart-weight'), __('Let your customers choose the Royal Mail shipping methods with the real-time calculated shipping rates. Add the handling fees, insurance and adjust them to your needs in no time.', 'woo-cart-weight'), 'royal-mail-live-rate-avatar-icon.svg', 'octolize-royal-mail-shipping-pro/octolize-royal-mail-shipping-pro.php', $categories[self::CATEGORY_LIVE_RATES], 'https://octol.io/royal-mail-pro-extensions');
        $plugin->add_url('https://octol.io/royal-mail-pro-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        $plugin = new Plugin(__('Conditional Shipping Methods', 'woo-cart-weight'), __('Conditionally display and hide the shipping methods in your WooCommerce store. Define the rules when the specific shipping methods, e.g., live rates should be available to pick and when not to.', 'woo-cart-weight'), 'flexible-shipping-conditional-methods.svg', 'flexible-shipping-conditional-methods/flexible-shipping-conditional-methods.php', $categories[self::CATEGORY_LIVE_RATES], 'https://octol.io/csm-extensions');
        $plugin->add_url('https://octol.io/csm-extensions-pl', 'pl_PL');
        $plugins[] = $plugin;
        return self::filter_plugins($plugins);
    }
    /**
     * @param Plugin[] $plugins
     *
     * @return Plugin[]
     */
    private static function filter_plugins(array $plugins): array
    {
        $active_plugins = get_option('active_plugins', array());
        foreach ($plugins as $key => $plugin) {
            if (in_array($plugin->get_plugin_file(), $active_plugins, \true)) {
                unset($plugins[$key]);
            }
        }
        return $plugins;
    }
    /**
     * @return array
     */
    public static function get_categories(): array
    {
        return [self::CATEGORY_ALL => __('All', 'woo-cart-weight'), self::CATEGORY_BUNDLES => __('Bundles', 'woo-cart-weight'), self::CATEGORY_LIVE_RATES => __('Live Rates', 'woo-cart-weight'), self::CATEGORY_CUSTOMIZABLE_RATES => __('Customizable Rates', 'woo-cart-weight'), self::CATEGORY_SHIPPING_LABELS => __('Shipping Labels', 'woo-cart-weight')];
    }
}
