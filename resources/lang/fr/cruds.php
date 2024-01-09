<?php

return [
    'userManagement' => [
        'title'          => 'Gestion des utilisateurs',
        'title_singular' => 'Gestion des utilisateurs',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Rôles',
        'title_singular' => 'Rôle',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Utilisateurs',
        'title_singular' => 'Utilisateur',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'country' => [
        'title'          => 'Countries',
        'title_singular' => 'Country',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'short_code'        => 'Short Code',
            'short_code_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'active'            => 'Active',
            'active_helper'     => ' ',
            'language'          => 'Languages',
            'language_helper'   => ' ',
            'currency'          => 'Currency',
            'currency_helper'   => ' ',
            'vat'               => 'Vat',
            'vat_helper'        => ' ',
        ],
    ],
    'brand' => [
        'title'          => 'Brands',
        'title_singular' => 'Brand',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'active'             => 'Active',
            'active_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'slug'               => 'URI',
            'slug_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
        ],
    ],
    'address' => [
        'title'          => 'Addresses',
        'title_singular' => 'Address',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'country'           => 'Country',
            'country_helper'    => ' ',
            'city'              => 'City',
            'city_helper'       => ' ',
            'first_name'        => 'First Name',
            'first_name_helper' => ' ',
            'last_name'         => 'Last Name',
            'last_name_helper'  => ' ',
            'company'           => 'Company',
            'company_helper'    => ' ',
            'address_1'         => 'Street address',
            'address_1_helper'  => ' ',
            'address_2'         => 'Apartment, suite, unit, etc. (optional)',
            'address_2_helper'  => ' ',
            'zip'               => 'Zip',
            'zip_helper'        => ' ',
            'phone'             => 'Phone',
            'phone_helper'      => ' ',
            'default'           => 'Default Address',
            'default_helper'    => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'state'             => 'State',
            'state_helper'      => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
    ],
    'language' => [
        'title'          => 'Languages',
        'title_singular' => 'Language',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'code'              => 'Code',
            'code_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'locale'            => 'Locale',
            'locale_helper'     => ' ',
        ],
    ],
    'productManagement' => [
        'title'          => 'Product Management',
        'title_singular' => 'Product Management',
    ],
    'contentManagement' => [
        'title'          => 'Content Management',
        'title_singular' => 'Content Management',
    ],
    'tag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'URI',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'URI',
            'slug_helper'       => ' ',
            'active'            => 'Active',
            'active_helper'     => ' ',
            'photo'             => 'Photo',
            'photo_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'page' => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'URI',
            'slug_helper'       => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'body'              => 'Body',
            'body_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'slug'               => 'URI',
            'slug_helper'        => ' ',
            'sku'                => 'SKU',
            'sku_helper'         => ' ',
            'category'           => 'Categories',
            'category_helper'    => ' ',
            'tag'                => 'Tags',
            'tag_helper'         => ' ',
            'active'             => 'Active',
            'active_helper'      => ' ',
            'in_stock'           => 'In Stock',
            'in_stock_helper'    => ' ',
            'price'              => 'Price',
            'price_helper'       => ' ',
            'prices'             => 'Prices',
            'prices_helper'      => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'photos'             => 'Photos',
            'photos_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'brand'              => 'Brand',
            'brand_helper'       => ' ',
            'trending'           => 'Trending',
            'trending_helper'    => ' ',
            'main'               => 'Main Product',
            'main_helper'        => 'Display product on top of the home page',
            'warehouse'          => 'Warehouse',
            'warehouse_helper'   => ' ',
            'sale_prices'        => 'Sale Prices',
            'sale_prices_helper' => ' ',
            'showcase'           => 'Showcase',
            'showcase_helper'    => 'Display on home page (отображать товар на главной странице в списке)',
            'on_sale'            => 'On Sale',
            'on_sale_helper'     => ' ',
            'discount'           => 'Discount %',
            'discount_helper'    => ' ',
        ],
    ],
    'currency' => [
        'title'          => 'Currency',
        'title_singular' => 'Currency',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'code'              => 'Code',
            'code_helper'       => ' ',
            'sign'              => 'Sign',
            'sign_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'order' => [
        'title'          => 'Orders',
        'title_singular' => 'Order',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'billing'           => 'Billing details',
            'billing_helper'    => ' ',
            'shipping'          => 'Shipping details',
            'shipping_helper'   => ' ',
            'payment'           => 'Payment details',
            'payment_helper'    => ' ',
            'total'             => 'Total',
            'total_helper'      => ' ',
            'currency'          => 'Currency',
            'currency_helper'   => ' ',
            'items'             => 'Items',
            'items_helper'      => ' ',
            'paid_at'           => 'Paid At',
            'paid_at_helper'    => ' ',
            'invoice'           => 'Invoice',
            'invoice_helper'    => ' ',
            'packing'           => 'Packing Slip',
            'packing_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'letter' => [
        'title'          => 'Email Templates',
        'title_singular' => 'Email Template',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'ID',
            'slug_helper'       => ' ',
            'subject'           => 'Subject',
            'subject_helper'    => ' ',
            'body'              => 'Body',
            'body_helper'       => '{user.firstname}, {user.name}, {user.email}, {app.url}, {app.profile}, {app.register}',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'message' => [
        'title'          => 'Get In Touch',
        'title_singular' => 'Get In Touch',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'parent'            => 'Parent message',
            'parent_helper'     => ' ',
            'firstname'         => 'Firstname',
            'firstname_helper'  => ' ',
            'lastname'          => 'Lastname',
            'lastname_helper'   => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'phone'             => 'Phone',
            'phone_helper'      => ' ',
            'country'           => 'Country',
            'country_helper'    => ' ',
            'language'          => 'Language',
            'language_helper'   => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'message'           => 'Message',
            'message_helper'    => ' ',
            'viewed'            => 'Viewed',
            'viewed_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'block' => [
        'title'          => 'Blocks',
        'title_singular' => 'Block',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'slug'              => 'ID',
            'slug_helper'       => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'body'              => 'Body',
            'body_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'property' => [
        'title'          => 'Site Settings',
        'title_singular' => 'Site Setting',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'key'               => 'Key',
            'key_helper'        => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'value'             => 'Value',
            'value_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'feature' => [
        'title'          => 'Features',
        'title_singular' => 'Feature',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'key'               => 'Key',
            'key_helper'        => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'options'           => 'Options',
            'options_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'unit'              => 'Unit',
            'unit_helper'       => ' ',
        ],
    ],
    'review' => [
        'title'          => 'Reviews',
        'title_singular' => 'Review',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'product'              => 'Product',
            'product_helper'       => ' ',
            'user'                 => 'User',
            'user_helper'          => ' ',
            'status'               => 'Status',
            'status_helper'        => ' ',
            'rating'               => 'Rating',
            'rating_helper'        => ' ',
            'advantages'           => 'Advantages',
            'advantages_helper'    => ' ',
            'disadvantages'        => 'Disadvantages',
            'disadvantages_helper' => ' ',
            'body'                 => 'Body',
            'body_helper'          => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'language'             => 'Language',
            'language_helper'      => ' ',
            'name'                 => 'Name',
            'name_helper'          => ' ',
        ],
    ],
    'subscription' => [
        'title'          => 'Subscriptions',
        'title_singular' => 'Subscription',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'email'               => 'Email',
            'email_helper'        => ' ',
            'unsubscribed'        => 'Unsubscribed',
            'unsubscribed_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'coupon' => [
        'title'          => 'Coupons',
        'title_singular' => 'Coupon',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'code'              => 'Code',
            'code_helper'       => ' ',
            'active'            => 'Active',
            'active_helper'     => ' ',
            'start_at'          => 'Start Date',
            'start_at_helper'   => ' ',
            'expiry_at'         => 'Expiry date',
            'expiry_at_helper'  => ' ',
            'discount'          => 'Discount',
            'discount_helper'   => ' ',
            'limit'             => 'Usage limit per coupon',
            'limit_helper'      => ' ',
            'limit_user'        => 'Usage limit per user',
            'limit_user_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'warehouse' => [
        'title'          => 'Warehouses',
        'title_singular' => 'Warehouse',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'country'           => 'Country',
            'country_helper'    => ' ',
            'language'          => 'Language',
            'language_helper'   => ' ',
            'address'           => 'Address',
            'address_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'user'              => 'Contact person',
            'user_helper'       => ' ',
        ],
    ],
    'deliverer' => [
        'title'          => 'Delivery Companies',
        'title_singular' => 'Delivery Company',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name'                => 'Name',
            'name_helper'         => ' ',
            'site'                => 'Site',
            'site_helper'         => ' ',
            'tracking_url'        => 'Tracking URL',
            'tracking_url_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'translation' => [
        'title'          => 'Translations',
        'title_singular' => 'Translation',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'section'           => 'Section',
            'section_helper'    => ' ',
            'key'               => 'Key',
            'key_helper'        => ' ',
            'value'             => 'Value',
            'value_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
