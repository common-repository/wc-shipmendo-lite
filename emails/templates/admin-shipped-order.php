<?phpdefined('ABSPATH') || exit;/* * @hooked WC_Emails::email_header() Output the email header */do_action('woocommerce_email_header', $email_heading, $email); ?>    <p><?php printf(esc_html__('Your order(#%s) has been shipped!', 'shipmendo-lite'), $order->get_order_number()); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>    <p>        <?php echo __('You can view the shipment information following.', 'shipmendo-lite') ?>    </p>    <table>        <tbody>        <tr>            <th><?php echo __('Shipping Company', 'shipmendo-lite') ?></th>            <td>                <img src="<?php echo $cargo_company_logo ?>" width="50" height="50" alt="<?php echo $cargo_company_name ?> Logo">                <?php echo $cargo_company_name ?>            </td>        </tr>        <tr>            <th><?php echo __('Tracking Number', 'shipmendo-lite') ?></th>            <td><?php echo $tracking_number ?></td>        </tr>        <tr>            <th><?php echo __('Online Tracking', 'shipmendo-lite') ?></th>            <td>                <a class="link" href="<?php echo $tracking_url ?>">                    <?php esc_html_e('Track Order', 'shipmendo-lite'); ?>                </a>            </td>        </tr>        </tbody>    </table>    <p>&nbsp;</p><?php/* * @hooked WC_Emails::order_details() Shows the order details table. * @hooked WC_Structured_Data::generate_order_data() Generates structured data. * @hooked WC_Structured_Data::output_structured_data() Outputs structured data. * @since 2.5.0 */do_action('woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email);/* * @hooked WC_Emails::order_meta() Shows order meta data. */do_action('woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email);/* * @hooked WC_Emails::customer_details() Shows customer details * @hooked WC_Emails::email_address() Shows email address */do_action('woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email);/** * Show user-defined additional content - this is set in each email's settings. */if ($additional_content) {    echo wp_kses_post(wpautop(wptexturize($additional_content)));}/* * @hooked WC_Emails::email_footer() Output the email footer */do_action('woocommerce_email_footer', $email);