<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
*/

@setlocale(LC_TIME, ['en_US', 'en_US.utf8', 'en', 'English_United States.1252']);

$define = [
    'CONNECTION_TYPE_UNKNOWN' => '\'%s\' is not a valid connection type for generating URLs' . PHP_EOL . '%s' . PHP_EOL,
    'HEADER_ALT_TEXT' => 'Admin Powered by Zen Cart :: The Art of E-Commerce',
    'HEADER_LOGO_WIDTH' => '192',
    'HEADER_LOGO_HEIGHT' => '68',
    'HEADER_LOGO_IMAGE' => 'logo.gif',
    'DATE_FORMAT_SHORT' => '%m/%d/%Y',
    'DATE_FORMAT_LONG' => '%A %d %B, %Y',
    'DATE_FORMAT' => 'm/d/Y',
    'DATE_TIME_FORMAT' => '%%DATE_FORMAT_SHORT%%' . ' %H:%M:%S',
    'PHP_DATE_TIME_FORMAT' => 'm/d/Y H:i:s',
    'DATE_FORMAT_SPIFFYCAL' => 'MM/dd/yyyy',
    'DATE_FORMAT_DATE_PICKER' => 'yy-mm-dd',
    'ADMIN_NAV_DATE_TIME_FORMAT' => '%A %d %b %Y %X',
    'TEXT_ADMIN_TAB_PREFIX' => 'Admin',
    'TEXT_LEGEND_META_TAGS' => 'Meta Tags Defined:',
    'TEXT_INFO_META_TAGS_USAGE' => '<strong>NOTE:</strong> The Site/Tagline is your defined definition for your site in the meta_tags.php file.',
    'HTML_PARAMS' => 'dir="ltr" lang="en"',
    'CHARSET' => 'utf-8',
    'HEADER_TITLE_TOP' => 'Home',
    'HEADER_TITLE_SUPPORT_SITE' => 'Support',
    'HEADER_TITLE_ONLINE_CATALOG' => 'Storefront',
    'HEADER_TITLE_VERSION' => 'Version',
    'HEADER_TITLE_ACCOUNT' => 'Account',
    'HEADER_TITLE_LOGOFF' => 'Logoff',
    'TEXT_DISCOUNT_COUPON' => 'Discount Coupon',
    'MALE' => 'Male',
    'FEMALE' => 'Female',
    'TEXT_CHECK_ALL' => 'Check All',
    'TEXT_UNCHECK_ALL' => 'Uncheck All',
    'NONE' => 'None',
    'TEXT_UNKNOWN' => 'Unknown',
    'BOX_HEADING_CONFIGURATION' => 'Configuration',
    'BOX_CONFIGURATION_MY_STORE' => 'My Store',
    'BOX_CONFIGURATION_MINIMUM_VALUES' => 'Minimum Values',
    'BOX_CONFIGURATION_MAXIMUM_VALUES' => 'Maximum Values',
    'BOX_CONFIGURATION_IMAGES' => 'Images',
    'BOX_CONFIGURATION_CUSTOMER_DETAILS' => 'Customer Details',
    'BOX_CONFIGURATION_SHIPPING_PACKAGING' => 'Shipping/Packaging',
    'BOX_CONFIGURATION_PRODUCT_LISTING' => 'Product Listing',
    'BOX_CONFIGURATION_STOCK' => 'Stock',
    'BOX_CONFIGURATION_LOGGING' => 'Logging',
    'BOX_CONFIGURATION_EMAIL_OPTIONS' => 'E-Mail Options',
    'BOX_CONFIGURATION_ATTRIBUTE_OPTIONS' => 'Attribute Settings',
    'BOX_CONFIGURATION_GZIP_COMPRESSION' => 'GZip Compression',
    'BOX_CONFIGURATION_SESSIONS' => 'Sessions',
    'BOX_CONFIGURATION_REGULATIONS' => 'Regulations',
    'BOX_CONFIGURATION_GV_COUPONS' => 'GV Coupons',
    'BOX_CONFIGURATION_CREDIT_CARDS' => 'Credit Cards',
    'BOX_CONFIGURATION_PRODUCT_INFO' => 'Product Info',
    'BOX_CONFIGURATION_LAYOUT_SETTINGS' => 'Layout Settings',
    'BOX_CONFIGURATION_WEBSITE_MAINTENANCE' => 'Website Maintenance',
    'BOX_CONFIGURATION_NEW_LISTING' => 'New Listing',
    'BOX_CONFIGURATION_FEATURED_LISTING' => 'Featured Listing',
    'BOX_CONFIGURATION_ALL_LISTING' => 'All Listing',
    'BOX_CONFIGURATION_INDEX_LISTING' => 'Index Listing',
    'BOX_CONFIGURATION_DEFINE_PAGE_STATUS' => 'Define Page Status',
    'BOX_CONFIGURATION_EZPAGES_SETTINGS' => 'EZ-Pages Settings',
    'BOX_HEADING_MODULES' => 'Modules',
    'BOX_MODULES_PAYMENT' => 'Payment',
    'BOX_MODULES_SHIPPING' => 'Shipping',
    'BOX_MODULES_ORDER_TOTAL' => 'Order Total',
    'BOX_MODULES_PLUGINS' => 'Plugin Manager',
    'BOX_HEADING_CATALOG' => 'Catalog',
    'BOX_CATALOG_CATEGORIES_PRODUCTS' => 'Categories/Products',
    'BOX_CATALOG_PRODUCT_TYPES' => 'Product Types',
    'BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER' => 'Option Name Manager',
    'BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER' => 'Option Value Manager',
    'BOX_CATALOG_MANUFACTURERS' => 'Manufacturers',
    'BOX_CATALOG_REVIEWS' => 'Reviews',
    'BOX_CATALOG_SPECIALS' => 'Specials',
    'BOX_CATALOG_PRODUCTS_EXPECTED' => 'Products Expected',
    'BOX_CATALOG_SALEMAKER' => 'SaleMaker',
    'BOX_CATALOG_PRODUCTS_PRICE_MANAGER' => 'Products Price Manager',
    'BOX_CATALOG_PRODUCT' => 'Product',
    'BOX_CATALOG_PRODUCTS_TO_CATEGORIES' => 'Products to Categories',
    'BOX_CATALOG_CATEGORY' => 'Category',
    'BOX_HEADING_CUSTOMERS' => 'Customers',
    'BOX_CUSTOMERS_CUSTOMERS' => 'Customers',
    'BOX_CUSTOMERS_ORDERS' => 'Orders',
    'BOX_CUSTOMERS_GROUP_PRICING' => 'Group Pricing',
    'BOX_CUSTOMERS_PAYPAL' => 'PayPal IPN',
    'BOX_CUSTOMERS_INVOICE' => 'Invoice',
    'BOX_CUSTOMERS_PACKING_SLIP' => 'Packing Slip',
    'BOX_HEADING_LOCATION_AND_TAXES' => 'Locations / Taxes',
    'BOX_TAXES_COUNTRIES' => 'Countries',
    'BOX_TAXES_ZONES' => 'Zones',
    'BOX_TAXES_GEO_ZONES' => 'Zones Definitions',
    'BOX_TAXES_TAX_CLASSES' => 'Tax Classes',
    'BOX_TAXES_TAX_RATES' => 'Tax Rates',
    'BOX_HEADING_REPORTS' => 'Reports',
    'BOX_REPORTS_PRODUCTS_VIEWED' => 'Products Viewed',
    'BOX_REPORTS_PRODUCTS_PURCHASED' => 'Products Purchased',
    'BOX_REPORTS_ORDERS_TOTAL' => 'Customer Orders-Total',
    'BOX_REPORTS_PRODUCTS_LOWSTOCK' => 'Products Low Stock',
    'BOX_REPORTS_CUSTOMERS_REFERRALS' => 'Customers Referral',
    'BOX_HEADING_TOOLS' => 'Tools',
    'BOX_TOOLS_TEMPLATE_SELECT' => 'Template Selection',
    'BOX_TOOLS_BANNER_MANAGER' => 'Banner Manager',
    'BOX_TOOLS_MAIL' => 'Send Email',
    'BOX_TOOLS_NEWSLETTER_MANAGER' => 'Newsletter and Product Notifications Manager',
    'BOX_TOOLS_DEFINE_PAGES_EDITOR' => 'Define Pages Editor',
    'BOX_TOOLS_SERVER_INFO' => 'Server/Version Info',
    'BOX_TOOLS_WHOS_ONLINE' => 'Who\'s Online',
    'BOX_TOOLS_STORE_MANAGER' => 'Store Manager',
    'BOX_TOOLS_DEVELOPERS_TOOL_KIT' => 'Developers Tool Kit',
    'BOX_TOOLS_SQLPATCH' => 'Install SQL Patches',
    'BOX_TOOLS_EZPAGES' => 'EZ-Pages',
    'BOX_HEADING_EXTRAS' => 'Extras',
    'BOX_TOOLS_DEFINE_CONDITIONS' => 'Conditions of Use',
    'BOX_HEADING_LOCALIZATION' => 'Localization',
    'BOX_LOCALIZATION_CURRENCIES' => 'Currencies',
    'BOX_LOCALIZATION_LANGUAGES' => 'Languages',
    'BOX_LOCALIZATION_ORDERS_STATUS' => 'Orders Status',
    'BOX_HEADING_GV_ADMIN' => 'Discounts',
    'BOX_GV_ADMIN_QUEUE' => '%%TEXT_GV_NAMES%%' . ' Queue',
    'BOX_GV_ADMIN_MAIL' => 'Send a ' . '%%TEXT_GV_NAME%%',
    'BOX_GV_ADMIN_SENT' => '%%TEXT_GV_NAMES%%' . ' sent',
    'BOX_COUPON_ADMIN' => 'Coupon Admin',
    'BOX_COUPON_RESTRICT' => 'Coupon Restrictions',
    'BOX_HEADING_ADMIN_ACCESS' => 'Admins',
    'BOX_ADMIN_ACCESS_USERS' => 'Admin Users',
    'BOX_ADMIN_ACCESS_PROFILES' => 'Admin Profiles',
    'BOX_ADMIN_ACCESS_PAGE_REGISTRATION' => 'Admin Page Registration',
    'BOX_ADMIN_ACCESS_LOGS' => 'Admin Activity Logs',
    'IMAGE_RELEASE' => 'Redeem ' . '%%TEXT_GV_NAME%%',
    'JS_ERROR' => 'Errors have occurred during the processing of your form!\nPlease make the following corrections:\n\n',
    'JS_GENDER' => '* The Gender value must be chosen.\n',
    'JS_FIRST_NAME' => '* The First Name entry must have at least ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' characters.\n',
    'JS_LAST_NAME' => '* The Last Name entry must have at least ' . ENTRY_LAST_NAME_MIN_LENGTH . ' characters.\n',
    'JS_DOB' => '* The Date of Birth entry must be in the format: xx/xx/xxxx (month/date/year).\n',
    'JS_EMAIL_ADDRESS' => '* The E-Mail Address entry must have at least ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' characters.\n',
    'JS_ADDRESS' => '* The Street Address entry must have at least ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' characters.\n',
    'JS_POST_CODE' => '* The Post Code entry must have at least ' . ENTRY_POSTCODE_MIN_LENGTH . ' characters.\n',
    'JS_CITY' => '* The City entry must have at least ' . ENTRY_CITY_MIN_LENGTH . ' characters.\n',
    'JS_STATE' => '* The State entry must be selected.\n',
    'JS_STATE_SELECT' => '-- Select Above --',
    'JS_COUNTRY' => '* The Country value must be chosen.\n',
    'JS_TELEPHONE' => '* The Telephone Number entry must have at least ' . ENTRY_TELEPHONE_MIN_LENGTH . ' characters.\n',
    'JS_ERROR_SUBMITTED' => 'This form has already been submitted. Please press OK and wait for this process to be completed.',
    'TEXT_NO_ORDER_HISTORY' => 'No Order History Available',
    'CATEGORY_PERSONAL' => 'Personal',
    'CATEGORY_ADDRESS' => 'Address',
    'CATEGORY_CONTACT' => 'Contact',
    'CATEGORY_COMPANY' => 'Company',
    'CATEGORY_OPTIONS' => 'Options',
    'ENTRY_GENDER' => 'Gender:',
    'ENTRY_GENDER_ERROR' => '&nbsp;<span class="errorText">required</span>',
    'ENTRY_FIRST_NAME' => 'First Name:',
    'ENTRY_FIRST_NAME_ERROR' => '&nbsp;<span class="errorText">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' chars</span>',
    'ENTRY_LAST_NAME' => 'Last Name:',
    'ENTRY_LAST_NAME_ERROR' => '&nbsp;<span class="errorText">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' chars</span>',
    'ENTRY_DATE_OF_BIRTH' => 'Date of Birth:',
    'ENTRY_DATE_OF_BIRTH_ERROR' => '&nbsp;<span class="errorText">(eg. 05/21/1970)</span>',
    'ENTRY_EMAIL_ADDRESS' => 'E-Mail Address:',
    'ENTRY_EMAIL_ADDRESS_ERROR' => '&nbsp;<span class="errorText">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' chars</span>',
    'ENTRY_EMAIL_ADDRESS_CHECK_ERROR' => '&nbsp;<span class="errorText">The email address doesn\'t appear to be valid!</span>',
    'ENTRY_EMAIL_ADDRESS_ERROR_EXISTS' => '&nbsp;<span class="errorText">This email address already exists!</span>',
    'ENTRY_COMPANY' => 'Company name:',
    'ENTRY_COMPANY_ERROR' => '',
    'ENTRY_PRICING_GROUP' => 'Discount Pricing Group',
    'ENTRY_STREET_ADDRESS' => 'Street Address:',
    'ENTRY_STREET_ADDRESS_ERROR' => '&nbsp;<span class="errorText">min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' chars</span>',
    'ENTRY_SUBURB' => 'Suburb:',
    'ENTRY_SUBURB_ERROR' => '',
    'ENTRY_POST_CODE' => 'Post Code:',
    'ENTRY_POST_CODE_ERROR' => '&nbsp;<span class="errorText">min ' . ENTRY_POSTCODE_MIN_LENGTH . ' chars</span>',
    'ENTRY_CITY' => 'City:',
    'ENTRY_CITY_ERROR' => '&nbsp;<span class="errorText">min ' . ENTRY_CITY_MIN_LENGTH . ' chars</span>',
    'ENTRY_STATE' => 'State:',
    'ENTRY_STATE_ERROR' => '&nbsp;<span class="errorText">required</span>',
    'ENTRY_COUNTRY' => 'Country:',
    'ENTRY_COUNTRY_ERROR' => '',
    'ENTRY_TELEPHONE_NUMBER' => 'Telephone Number:',
    'ENTRY_TELEPHONE_NUMBER_ERROR' => '&nbsp;<span class="errorText">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' chars</span>',
    'ENTRY_FAX_NUMBER' => 'Fax Number:',
    'ENTRY_NEWSLETTER' => 'Newsletter:',
    'ENTRY_NEWSLETTER_YES' => 'Subscribed',
    'ENTRY_NEWSLETTER_NO' => 'Unsubscribed',
    'ERROR_PASSWORDS_NOT_MATCHING' => 'Password and confirmation must match',
    'ENTRY_PASSWORD_CHANGE_ERROR' => '<strong>Sorry, your new password was rejected.</strong><br>',
    'ERROR_PASSWORD_RULES' => 'Passwords must contain both letters and numbers, must be at least %s characters long, and must not be the same as the last 4 passwords used. Passwords expire every 90 days, after which you will be prompted to choose a new password.',
    'ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT' => 'ERROR: Sorry, there was an error processing your data. Please re-submit the information again.',
    'IMAGE_BACK' => 'Back',
    'IMAGE_CANCEL' => 'Cancel',
    'IMAGE_CONFIRM' => 'Confirm',
    'IMAGE_COPY' => 'Copy',
    'IMAGE_COPY_TO' => 'Copy To',
    'IMAGE_DETAILS' => 'Details',
    'IMAGE_DELETE' => 'Delete',
    'IMAGE_EDIT' => 'Edit',
    'IMAGE_EMAIL' => 'Email',
    'IMAGE_GO' => 'Go',
    'IMAGE_ICON_STATUS_GREEN' => 'Active',
    'IMAGE_ICON_STATUS_RED' => 'Inactive',
    'IMAGE_ICON_STATUS_RED_LIGHT' => 'Set Inactive',
    'IMAGE_ICON_STATUS_RED_EZPAGES' => 'Error -- too many URL/content types entered',
    'IMAGE_ICON_INFO' => 'Info',
    'IMAGE_INSERT' => 'Insert',
    'IMAGE_MODULE_INSTALL' => 'Install Module',
    'IMAGE_MODULE_REMOVE' => 'Remove Module',
    'IMAGE_MOVE' => 'Move',
    'IMAGE_NEW_BANNER' => 'New Banner',
    'IMAGE_NEW_CATEGORY' => 'New Category',
    'IMAGE_NEW_COUNTRY' => 'New Country',
    'IMAGE_NEW_CURRENCY' => 'New Currency',
    'IMAGE_NEW_LANGUAGE' => 'New Language',
    'IMAGE_NEW_NEWSLETTER' => 'New Newsletter',
    'IMAGE_NEW_PRODUCT' => 'New Product',
    'IMAGE_NEW_SALE' => 'New Sale',
    'IMAGE_NEW_TAX_CLASS' => 'New Tax Class',
    'IMAGE_NEW_TAX_RATE' => 'New Tax Rate',
    'IMAGE_NEW_ZONE' => 'New Zone',
    'IMAGE_OPTION_NAMES' => 'Option Names Manager',
    'IMAGE_OPTION_VALUES' => 'Option Values Manager',
    'IMAGE_ORDERS' => 'Orders',
    'IMAGE_ORDERS_INVOICE' => 'Invoice',
    'IMAGE_ORDERS_PACKINGSLIP' => 'Packing Slip',
    'IMAGE_PREVIEW' => 'Preview',
    'IMAGE_RESET' => 'Reset',
    'IMAGE_RESET_PWD' => 'Reset Password',
    'IMAGE_SAVE' => 'Save',
    'IMAGE_SELECT' => 'Select',
    'IMAGE_SEND' => 'Send',
    'IMAGE_SEND_EMAIL' => 'Send Email',
    'IMAGE_SUBMIT' => 'Submit',
    'IMAGE_UPDATE' => 'Update',
    'IMAGE_UPDATE_CURRENCIES' => 'Update Exchange Rate',
    'IMAGE_UPLOAD' => 'Upload',
    'IMAGE_TAX_RATES' => 'Tax Rate',
    'IMAGE_DEFINE_ZONES' => 'Define Zones',
    'IMAGE_PRODUCTS_PRICE_MANAGER' => 'Products Price Manager',
    'IMAGE_UPDATE_PRICE_CHANGES' => 'Update Price Changes',
    'IMAGE_ADD_BLANK_DISCOUNTS' => 'Add ' . DISCOUNT_QTY_ADD . ' Blank Discount Qty',
    'IMAGE_PRODUCTS_TO_CATEGORIES' => 'Multiple Categories Link Manager',
    'IMAGE_ICON_STATUS_ON' => 'Status - Enabled',
    'IMAGE_ICON_STATUS_OFF' => 'Status - Disabled',
    'IMAGE_ICON_LINKED' => 'Product is Linked',
    'IMAGE_REMOVE_SPECIAL' => 'Remove Special Price Info',
    'IMAGE_REMOVE_FEATURED' => 'Remove Featured Product Info',
    'IMAGE_INSTALL_SPECIAL' => 'Add Special Price Info',
    'IMAGE_INSTALL_FEATURED' => 'Add Featured Product Info',
    'TEXT_VERSION_CHECK_BUTTON' => 'Check for New Version',
    'TEXT_BUTTON_RESET_ACTIVITY_LOG' => 'View Activity Log',
    'ICON_COPY_TO' => 'Copy to',
    'ICON_CROSS' => 'False',
    'ICON_DELETE' => 'Delete',
    'ICON_EDIT' => 'Edit',
    'ICON_EDIT_METATAGS' => 'Edit Meta Tags',
    'ICON_ERROR' => 'Error',
    'ICON_FOLDER' => 'Folder',
    'ICON_MOVE' => 'Move',
    'ICON_PREVIEW' => 'Preview',
    'ICON_STATISTICS' => 'Statistics',
    'ICON_SUCCESS' => 'Success',
    'ICON_TICK' => 'True',
    'ICON_WARNING' => 'Warning',
    'TEXT_RESULT_PAGE' => 'Page %s of %d',
    'TEXT_DISPLAY_NUMBER_OF_GENERIC' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Entries)',
    'TEXT_DISPLAY_NUMBER_OF_BANNERS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Banners)',
    'TEXT_DISPLAY_NUMBER_OF_CATEGORIES' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Categories)',
    'TEXT_DISPLAY_NUMBER_OF_COUNTRIES' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Countries)',
    'TEXT_DISPLAY_NUMBER_OF_CUSTOMERS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Customers)',
    'TEXT_DISPLAY_NUMBER_OF_CURRENCIES' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Currencies)',
    'TEXT_DISPLAY_NUMBER_OF_FEATURED' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Featured Products)',
    'TEXT_DISPLAY_NUMBER_OF_LANGUAGES' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Languages)',
    'TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Manufacturers)',
    'TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Newsletters)',
    'TEXT_DISPLAY_NUMBER_OF_OPTIONS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Option Names)',
    'TEXT_DISPLAY_NUMBER_OF_ORDERS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Orders)',
    'TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Order Statuses)',
    'TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Pricing Groups)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Products)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Product Types)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Products Expected)',
    'TEXT_DISPLAY_NUMBER_OF_REVIEWS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Product Reviews)',
    'TEXT_DISPLAY_NUMBER_OF_SALES' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Sales)',
    'TEXT_DISPLAY_NUMBER_OF_SPECIALS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Products on Special)',
    'TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Tax Classes)',
    'TEXT_DISPLAY_NUMBER_OF_TEMPLATES' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Template Associations)',
    'TEXT_DISPLAY_NUMBER_OF_TAX_ZONES' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Tax Zones)',
    'TEXT_DISPLAY_NUMBER_OF_TAX_RATES' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Tax Rates)',
    'TEXT_DISPLAY_NUMBER_OF_ZONES' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Zones)',
    'PREVNEXT_TITLE_PREVIOUS_PAGE' => 'Previous Page',
    'PREVNEXT_TITLE_NEXT_PAGE' => 'Next Page',
    'PREVNEXT_TITLE_PAGE_NO' => 'Page %d',
    'PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE' => 'Previous Set of %d Pages',
    'PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE' => 'Next Set of %d Pages',
    'PREVNEXT_BUTTON_PREV' => '[&laquo;&nbsp;Prev]',
    'PREVNEXT_BUTTON_NEXT' => '[Next&nbsp;&raquo;]',
    'TEXT_DEFAULT' => 'default',
    'TEXT_SET_DEFAULT' => 'Set as default',
    'TEXT_FIELD_REQUIRED' => '&nbsp;<span class="fieldRequired">*</span>',
    'ERROR_NO_DEFAULT_CURRENCY_DEFINED' => 'Error: There is currently no default currency set. Please set one at: Administration Tools->Localization->Currencies',
    'TEXT_NONE' => '--none--',
    'TEXT_TOP' => 'Top',
    'PLEASE_SELECT' => 'Please select ...',
    'TEXT_CUSTOMER' => 'Customer',
    'ERROR_DESTINATION_DOES_NOT_EXIST' => 'Error: Destination does not exist %s',
    'ERROR_DESTINATION_NOT_WRITEABLE' => 'Error: Destination not writeable %s',
    'ERROR_FILE_NOT_SAVED' => 'Error: File upload not saved.',
    'ERROR_FILETYPE_NOT_ALLOWED' => 'Error: File upload type not allowed (%s). See &quot;Maximum Values&quot; settings.',
    'ERROR_FILE_TOO_BIG' => 'Warning: File is larger than allowed sizes. See &quot;Maximum Values&quot; settings.',
    'SUCCESS_FILE_SAVED_SUCCESSFULLY' => 'Success: File upload saved successfully %s',
    'WARNING_NO_FILE_UPLOADED' => 'Warning: No file uploaded.',
    'WARNING_FILE_UPLOADS_DISABLED' => 'Warning: File uploads are disabled in the php.ini configuration file.',
    'ERROR_ADMIN_SECURITY_WARNING' => 'Warning: Your Admin login is not secure ... either you still have default login settings for: Admin admin or have not removed or changed: demo demoonly<br>The login(s) should be changed as soon as possible for the Security of your shop.',
    'WARNING_DATABASE_VERSION_OUT_OF_DATE' => 'Your database appears to need patching to a higher level. See Tools->' . '%%BOX_TOOLS_SERVER_INFO%%' . ' to review patch levels.',
    'WARN_DATABASE_VERSION_PROBLEM' => 'true',
    'WARNING_ADMIN_DOWN_FOR_MAINTENANCE' => '<strong>WARNING:</strong> Site is currently set to Down for Maintenance ...<br>NOTE: You cannot test most Payment and Shipping Modules in Maintenance mode',
    'WARNING_INSTALL_DIRECTORY_EXISTS' => 'SECURITY WARNING: Installation directory exists at: %s. Please remove this directory for security reasons.',
    'WARNING_CONFIG_FILE_WRITEABLE' => 'Warning: Your configuration file: %s is writeable. This is a potential security risk - please set the right user permissions on this file (read-only, CHMOD 644 or 444 are typical). You may need to use your webhost control panel/file-manager to change the permissions effectively. Contact your webhost for assistance. <a href="https://docs.zen-cart.com/user/miscellaneous/configure/" rel="noopener" target="_blank">See this FAQ</a>',
    'WARNING_COULD_NOT_LOCATE_LANG_FILE' => 'WARNING: Could not locate language file: ',
    'ERROR_MODULE_REMOVAL_PROHIBITED' => 'ERROR: Module removal prohibited: ',
    'WARNING_REVIEW_ROGUE_ACTIVITY' => 'ALERT: Please review for possible XSS activity:',
    'ERROR_FILE_NOT_REMOVEABLE' => 'Error: Could not remove the file specified. You may have to use FTP to remove the file, due to a server-permissions configuration limitation.',
    'ERROR_DIRECTORY_NOT_REMOVEABLE' => 'Error: Could not remove the directory specified. You may have to use FTP to remove the directory, due to a server-permissions configuration limitation.',
    'WARNING_SESSION_AUTO_START' => 'Warning: session.auto_start is enabled - please disable this PHP feature in php.ini (restarting your webserver may be necessary to activate the change).',
    'WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT' => 'Warning: The downloadable products directory does not exist: ' . DIR_FS_DOWNLOAD . '. Downloadable products will not work until this directory is valid.',
    'WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT' => 'Warning: The SQL cache directory does not exist: ' . DIR_FS_SQL_CACHE . '. SQL caching will not work until this directory is created.',
    'WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE' => 'Warning: I am not able to write to the SQL cache directory: ' . DIR_FS_SQL_CACHE . '. SQL caching will not work until the right user permissions are set.',
    'ERROR_UNABLE_TO_DISPLAY_SERVER_INFORMATION' => 'Sorry, your PHP configuration cannot be displayed because your hosting company has specified that [phpinfo] should be disabled as part of [disable_functions] in php.ini settings.',
    '_JANUARY' => 'January',
    '_FEBRUARY' => 'February',
    '_MARCH' => 'March',
    '_APRIL' => 'April',
    '_MAY' => 'May',
    '_JUNE' => 'June',
    '_JULY' => 'July',
    '_AUGUST' => 'August',
    '_SEPTEMBER' => 'September',
    '_OCTOBER' => 'October',
    '_NOVEMBER' => 'November',
    '_DECEMBER' => 'December',
    'TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Gift Vouchers)',
    'TEXT_DISPLAY_NUMBER_OF_COUPONS' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Coupons)',
    'TEXT_VALID_CATEGORIES_ID' => 'Category ID',
    'DEFINE_LANGUAGE' => 'Choose Language:',
    'BOX_ENTRY_COUNTER_DATE' => 'Hit Counter Started:',
    'BOX_ENTRY_COUNTER' => 'Hit Counter:',
    'NOT_INSTALLED_TEXT' => 'Not Installed',
    'BOX_CATALOG_PRODUCT_OPTIONS_VALUES' => 'Option Value Sorter ',
    'TEXT_UPDATE_SORT_ORDERS_OPTIONS' => '<strong>Update Attribute Sort Order from Option Value Defaults</strong> ',
    'TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES' => '<strong>Update All Products\' Attribute Sort Orders</strong><br>to match Option Value Default Sort Orders:<br>',
    'BOX_CATALOG_PRODUCT_OPTIONS_NAME' => 'Option Name Sorter',
    'BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER' => 'Attributes Controller',
    'TEXT_MODEL' => 'Model:',
    'TEXT_PRODUCTS_MODEL' => 'Products Model:',
    'TABLE_HEADING_PRODUCTS_MODEL' => 'Model',
    'TABLE_HEADING_MODEL' => 'Model',
    'BOX_TOOLS_LAYOUT_CONTROLLER' => 'Layout Boxes Controller',
    'TEXT_SHOW_GV_QUEUE' => '%s waiting approval ',
    'IMAGE_GIFT_QUEUE' => '%%TEXT_GV_NAME%%' . ' Queue',
    'IMAGE_ORDER' => 'Order',
    'IMAGE_DISPLAY' => 'Display',
    'IMAGE_EDIT_PRODUCT' => 'Edit Product',
    'IMAGE_EDIT_ATTRIBUTES' => 'Edit Attributes',
    'TEXT_NEW_PRODUCT' => 'Product in Category: %s',
    'DEDUCTION_TYPE_DROPDOWN_0' => 'Deduct amount',
    'DEDUCTION_TYPE_DROPDOWN_1' => 'Percent',
    'DEDUCTION_TYPE_DROPDOWN_2' => 'New Price',
    'PRODUCTS_QUANTITY_MIN_TEXT_LISTING' => 'Min:',
    'PRODUCTS_QUANTITY_UNIT_TEXT_LISTING' => 'Units:',
    'TEXT_PRODUCTS_MIX_OFF' => '*No Mixed Options',
    'TEXT_PRODUCTS_MIX_ON' => '*Yes Mixed Options',
    'TEXT_INFO_SEARCH_DETAIL_FILTER' => 'Search Filter: ',
    'HEADING_TITLE_SEARCH_DETAIL' => 'Search: ',
    'HEADING_TITLE_SEARCH_DETAIL_REPORTS' => 'Search for Product IDs (Delimited by commas)',
    'HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL' => 'Search for Product Name/Model',
    'PREV_NEXT_PRODUCT' => 'Products: ',
    'TEXT_CATEGORIES_STATUS_INFO_OFF' => '<span class="alert">*Category is Disabled</span>',
    'TEXT_PRODUCTS_STATUS_INFO_OFF' => '<span class="alert">*Product is Disabled</span>',
    'TEXT_VERSION_CHECK_NEW_VER' => '<span class="alertVersionNew">New Version Available:</span> v',
    'TEXT_VERSION_CHECK_NEW_PATCH' => '<span class="alertVersionNew">New PATCH Available:</span> v',
    'TEXT_VERSION_CHECK_PATCH' => 'patch',
    'TEXT_VERSION_CHECK_DOWNLOAD' => 'Download Here',
    'TEXT_VERSION_CHECK_CURRENT' => 'Your version of Zen Cart&reg; appears to be current.',
    'ERROR_CONTACTING_PROJECT_VERSION_SERVER' => 'Error: Could not contact Project Version Server',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER' => 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Downloads)',
    'BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER' => 'Downloads Manager',
    'BOX_CATALOG_FEATURED' => 'Featured Products',
    'ERROR_NOTHING_SELECTED' => 'Nothing was selected ... No changes have been made',
    'TEXT_STATUS_WARNING' => '<strong>NOTE:</strong> status is auto enabled/disabled when dates are set',
    'TEXT_LEGEND_LINKED' => 'Linked Product',
    'TEXT_MASTER_CATEGORIES_ID' => 'Product Master Category:',
    'TEXT_LEGEND' => 'LEGEND: ',
    'TEXT_LEGEND_STATUS_OFF' => 'Status OFF ',
    'TEXT_LEGEND_STATUS_ON' => 'Status ON ',
    'TEXT_INFO_MASTER_CATEGORIES_ID' => '<strong>NOTE: Master Category is used for pricing purposes where the product category affects the pricing on linked products, example: Sales</strong>',
    'TEXT_YES' => 'Yes',
    'TEXT_NO' => 'No',
    'TEXT_CANCEL' => 'Cancel',
    'ERROR_SHIPPING_CONFIGURATION' => '<strong>Shipping Configuration errors!</strong>',
    'ERROR_SHIPPING_ORIGIN_ZIP' => '<strong>Warning:</strong> Store Zip Code is not defined. See Configuration | Shipping/Packaging to set it.',
    'ERROR_ORDER_WEIGHT_ZERO_STATUS' => '<strong>Warning:</strong> 0 weight is configured for Free Shipping and Free Shipping Module is not enabled',
    'ERROR_USPS_STATUS' => '<strong>Warning:</strong> USPS shipping module is either missing the username, or it is set to TEST rather than PRODUCTION and will not work.<br>If you cannot retrieve USPS Shipping Quotes, contact USPS to activate your Web Tools account on their production server. 1-800-344-7779 or icustomercare@usps.com',
    'ERROR_SHIPPING_MODULES_NOT_DEFINED' => 'NOTE: You have no shipping modules activated. Please go to Modules->Shipping to configure.',
    'ERROR_PAYMENT_MODULES_NOT_DEFINED' => 'NOTE: You have no payment modules activated. Please go to Modules->Payment to configure.',
    'TEXT_CHARGES_WORD' => 'Calculated Charge:',
    'TEXT_PER_WORD' => '<br>Price per word: ',
    'TEXT_WORDS_FREE' => ' Word(s) free ',
    'TEXT_CHARGES_LETTERS' => 'Calculated Charge:',
    'TEXT_PER_LETTER' => '<br>Price per letter: ',
    'TEXT_LETTERS_FREE' => ' Letter(s) free ',
    'TABLE_ATTRIBUTES_QTY_PRICE_QTY' => 'QTY',
    'TABLE_ATTRIBUTES_QTY_PRICE_PRICE' => 'PRICE',
    'TEXT_CATEGORIES_PRODUCTS' => 'Select a Category with products (indicated by an asterisk) / move between the products',
    'TEXT_PRODUCT_TO_VIEW' => 'Select a Product to View and Press Display ...',
    'TEXT_INFO_SET_MASTER_CATEGORIES_ID' => 'Invalid Master Category ID',
    'TEXT_INFO_ID' => ' ID# ',
    'PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT' => 'Product is Call for Price',
    'PRODUCTS_PRICE_IS_FREE_TEXT' => 'Product is Free',
    'TEXT_PRODUCT_WEIGHT_UNIT' => 'lbs',
    'PRODUCTS_QUANTITY_MAX_TEXT_LISTING' => 'Max:',
    'PRODUCT_PRICE_DISCOUNT_PREFIX' => 'Save:&nbsp;',
    'PRODUCT_PRICE_DISCOUNT_PERCENTAGE' => '% off',
    'PRODUCT_PRICE_DISCOUNT_AMOUNT' => '&nbsp;off',
    'PRODUCT_PRICE_SALE' => 'Sale:&nbsp;',
    'TEXT_PRICED_BY_ATTRIBUTES' => 'Priced by Attributes',
    'TEXT_WARNING_HTML_DISABLED' => '<span class = "main">Note: You are using TEXT only email. If you would like to send HTML you need to enable "Enable HTML Emails" under Email Options</span>',
    'ENTRY_EMAIL_PREFERENCE' => 'Email Format Pref:',
    'ENTRY_EMAIL_HTML_DISPLAY' => 'HTML',
    'ENTRY_EMAIL_TEXT_DISPLAY' => 'TEXT-Only',
    'ENTRY_NOTHING_TO_SEND' => 'You haven\'t entered any content for your message',
    'EMAIL_SEND_FAILED' => 'ERROR: Failed sending email to: "%s" <%s> with subject: "%s"',
    'EMAIL_SALUTATION' => 'Dear',
    'EDITOR_NONE' => 'Plain Text',
    'TEXT_EDITOR_INFO' => 'Text Editor',
    'ERROR_EDITORS_FOLDER_NOT_FOUND' => 'You have an HTML editor selected in \'My Store\' but the \'/editors/\' folder cannot be located. Please disable your selection or move your editor files into the \'' . DIR_WS_CATALOG . 'editors/\' folder',
    'TEXT_PRODUCT_POPUP_BUTTON' => '<i class="fa fa-commenting"></i>',
    'TEXT_PRODUCT_POPUP_TITLE' => 'Products Ordered',
    'TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO' => 'Categories/Product Display Order: ',
    'TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME' => 'Products Sort Order, Products Name',
    'TEXT_SORT_PRODUCTS_NAME' => 'Products Name',
    'TEXT_SORT_PRODUCTS_MODEL' => 'Products Model',
    'TEXT_SORT_PRODUCTS_QUANTITY' => 'Products Qty+, Products Name',
    'TEXT_SORT_PRODUCTS_QUANTITY_DESC' => 'Products Qty-, Products Name',
    'TEXT_SORT_PRODUCTS_PRICE' => 'Products Price+, Products Name',
    'TEXT_SORT_PRODUCTS_PRICE_DESC' => 'Products Price-, Products Name',
    'TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME' => 'Categories Sort Order, Categories Name',
    'TEXT_SORT_CATEGORIES_NAME' => 'Categories Name',
    'TABLE_HEADING_YES' => 'Yes',
    'TABLE_HEADING_NO' => 'No',
    'TEXT_PRODUCTS_IMAGE_MANUAL' => '<br><strong>Or, use an existing image file from server, filename:</strong>',
    'TEXT_IMAGES_OVERWRITE' => '<br><strong>Overwrite Existing Image on Server?</strong>',
    'TEXT_IMAGE_OVERWRITE_WARNING' => 'WARNING: FILENAME was updated but not overwritten ',
    'TEXT_IMAGES_DELETE' => '<strong>Remove Image?</strong> Note: Removes image from product (image is NOT deleted/removed from server):',
    'TEXT_IMAGE_CURRENT' => 'Image Name: ',
    'TEXT_IMAGE_NONEXISTENT' => 'IMAGE FILE IS MISSING',
    'ERROR_DEFINE_OPTION_NAMES' => 'Warning: No Option Names have been defined',
    'ERROR_DEFINE_OPTION_VALUES' => 'Warning: No Option Values have been defined',
    'ERROR_DEFINE_PRODUCTS' => 'Warning: No Products have been defined',
    'ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID' => 'Warning: No Master Category ID has been set for this Product',
    'BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON' => 'Add include SubCategories',
    'BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF' => 'Add without SubCategories',
    'BUTTON_PREVIOUS_ALT' => 'Previous Product',
    'BUTTON_NEXT_ALT' => 'Next Product',
    'BUTTON_PRODUCTS_TO_CATEGORIES' => 'Multiple Categories Link Manager',
    'TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS' => 'All Global Copy, Add and Delete Features Status is currently OFF',
    'TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON' => 'Display Global Features - ON',
    'TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF' => 'Display Global Features - OFF',
    'ERROR_CANNOT_LINK_TO_SAME_CATEGORY' => 'Error: a linked product cannot be created in the same category.',
    'ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE' => 'Error: Catalog images directory is not writeable: ' . DIR_FS_CATALOG_IMAGES,
    'ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST' => 'Error: Catalog images directory does not exist: ' . DIR_FS_CATALOG_IMAGES,
    'ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT' => 'Error: Category cannot be moved into a child category.',
    'ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF' => 'Error: Cannot move product to the same category or into a category where it already exists.',
    'ERROR_CATEGORY_HAS_PRODUCTS' => 'Error: Category has Products!<br><br>While this can be done temporarily to build your Categories ... Categories hold either Products or Categories but never both!',
    'SUCCESS_CATEGORY_MOVED' => 'Success! Category has successfully been moved ...',
    'ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF' => 'Error: Cannot move Category to the same Category! ID#',
    'WARNING_ATTRIBUTE_COPY_SAME_ID' => 'Warning: Attribute Copy aborted. Cannot copy from Product ID#%u to Product ID#%u (same ID).',
    'WARNING_ATTRIBUTE_COPY_NO_ATTRIBUTES' => 'Warning: Attribute Copy aborted. No Attributes found for source Product ID#%u, "%s".',
    'WARNING_ATTRIBUTE_COPY_INVALID_ID' => 'Warning: Attribute Copy to Product ID#%u aborted. Invalid ID',
    'TEXT_ATTRIBUTE_COPY_SKIPPING' => 'Skipping Attribute ID#%u for Product ID#%u',
    'TEXT_ATTRIBUTE_COPY_INSERTING' => 'Attribute ID#%u copied from Product ID#%u to Product ID#%u',
    'TEXT_ATTRIBUTE_COPY_UPDATING' => 'Attribute ID#%u updated for Product ID#%u',
    'TEXT_EZPAGES_STATUS_HEADER_ADMIN' => 'WARNING: EZ-PAGES HEADER - On for Admin IP Only',
    'TEXT_EZPAGES_STATUS_FOOTER_ADMIN' => 'WARNING: EZ-PAGES FOOTER - On for Admin IP Only',
    'TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN' => 'WARNING: EZ-PAGES SIDEBOX - On for Admin IP Only',
    'TEXT_VIRTUAL_PREVIEW' => 'Warning: This product is marked - Free Shipping and Skips Shipping Address<br>No shipping will be requested when all products in the order are Virtual Products',
    'TEXT_VIRTUAL_EDIT' => 'Warning: This product is marked - Free Shipping and Skips Shipping Address<br>No shipping will be requested when all products in the order are Virtual Products',
    'TEXT_FREE_SHIPPING_PREVIEW' => 'Warning: This product is marked - Free Shipping, Shipping Address Required<br>Free Shipping Module is required when all products in the order are Always Free Shipping Products',
    'TEXT_FREE_SHIPPING_EDIT' => 'Warning: Yes makes the product - Free Shipping, Shipping Address Required<br>Free Shipping Module is required when all products in the order are Always Free Shipping Products',
    'WARNING_ADMIN_ACTIVITY_LOG_DATE' => 'WARNING: The Admin Activity Log table has records over 2 months old and should be archived to conserve space ... ',
    'WARNING_ADMIN_ACTIVITY_LOG_RECORDS' => 'WARNING: The Admin Activity Log table has over 50,000 records and should be archived to conserve space ... ',
    'RESET_ADMIN_ACTIVITY_LOG' => 'You can view and archive Admin Activity details via the Admin Access Management menu, if you have appropriate permissions.',
    'TEXT_ACTIVITY_LOG_ACCESSED' => 'Admin Activity Log accessed. Output format: %s. Filter: %s. %s',
    'TEXT_ERROR_FAILED_ADMIN_LOGIN_FOR_USER' => 'Failed admin login attempt: ',
    'TEXT_ERROR_ATTEMPTED_TO_LOG_IN_TO_LOCKED_ACCOUNT' => 'Attempted to log into locked account:',
    'TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_CSRF_TOKEN' => 'Attempted login without CSRF token.',
    'TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_USERNAME' => 'Attempted login without username.',
    'TEXT_ERROR_INCORRECT_PASSWORD_DURING_RESET_FOR_USER' => 'Incorrect password while attempting a password reset for: ',
    'CATEGORY_HAS_SUBCATEGORIES' => 'NOTE: Category has SubCategories<br>Products cannot be added',
    'WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN' => 'WARNING! Welcome Email Discount Coupon expires in %s days',
    'WARNING_EMAIL_SYSTEM_DISABLED' => 'WARNING: The email subsystem is disabled. No emails will be sent until it is re-enabled in Admin->Configuration->Email Options.',
    'WARNING_EMAIL_SYSTEM_DEVELOPER_OVERRIDE' => 'WARNING: The sending of emails has been disabled as developer switch "DEVELOPER_OVERRIDE_EMAIL_STATUS" is set to "false".',
    'WARNING_EMAIL_SYSTEM_DEVELOPER_EMAIL' => 'WARNING: ALL emails will be sent to %s (as defined in "DEVELOPER_OVERRIDE_EMAIL_ADDRESS").',
    'TEXT_CURRENT_VER_IS' => 'You are presently using: ',
    'ERROR_NO_DATA_TO_SAVE' => 'ERROR: The data you submitted was found to be empty. YOUR CHANGES HAVE *NOT* BEEN SAVED. You may have a problem with your browser or your internet connection.',
    'TEXT_HIDDEN' => 'Hidden',
    'TEXT_VISIBLE' => 'Visible',
    'TEXT_HIDE' => 'Hide',
    'TEXT_EMAIL' => 'Email',
    'TEXT_NOEMAIL' => 'No Email',
    'BOX_HEADING_PRODUCT_TYPES' => 'Product Types',
    'ERROR_DATABASE_MAINTENANCE_NEEDED' => '<a href="https://docs.zen-cart.com/user/troubleshooting/error_71_maintenance_required/" rel="noopener" target="_blank">ERROR 0071 There appears to be a problem with the database. Maintenance is required.</a>',
    'TEXT_INFO_CURRENCY_UPDATED' => 'The exchange rate for %s (%s) was updated successfully to %s via %s.',
    'ERROR_CURRENCY_INVALID' => 'Error: The exchange rate for %s (%s) was not updated via %s. Is it a valid currency code?',
    'WARNING_PRIMARY_SERVER_FAILED' => 'Warning: The primary exchange rate server (%s) failed for %s (%s) - trying the secondary exchange rate server.',
    'MENU_CATEGORIES_TO_SORT_BY_NAME' => 'reports,tools',
    'PLUGIN_INSTALL_SQL_FAILURE' => 'one or more database errors occured',
    'ARIA_PAGINATION_ROLE_LABEL_GENERAL' => 'Pagination',
    'ARIA_PAGINATION_ROLE_LABEL_FOR' => '%s Pagination',
    'ARIA_PAGINATION_PREVIOUS_PAGE' => 'Go to Previous Page',
    'ARIA_PAGINATION_NEXT_PAGE' => 'Go to Next Page',
    'ARIA_PAGINATION_CURRENT_PAGE' => 'Current Page',
    'ARIA_PAGINATION_CURRENTLY_ON' => ', now on page %s',
    'ARIA_PAGINATION_GOTO' => 'Go to ',
    'ARIA_PAGINATION_PAGE_NUM' => 'Page %s',
    'ARIA_PAGINATION_ELLIPSIS_PREVIOUS' => 'Get previous group of pages',
    'ARIA_PAGINATION_ELLIPSIS_NEXT' => 'Get next group of pages',
    'ARIA_PAGINATION_' => '',
    'TEXT_EMAIL_ADDRESS_VALIDATE' => 'The text entered does not resolve to an acceptable email address. (I.e. Name &lt;email@domain&gt; or &lt;email@domain&gt; or email@domain or any combination of these separated by a comma.)',
    'TEXT_BOOLEAN_VALIDATE' => 'The value is required to be a boolean value or equivalent.',
];

return $define;
