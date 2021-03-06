<?php

return [
    /*
     * Addresses
     */
    'addresses' => [
        /*
         * Main table
         */
        'table' => 'addresses',

        /*
         * Flag columns to be added to table
         */
        'flags' => ['public', 'primary', 'billing', 'shipping'],


        /*
         * Extra columns to be stored in the table as fillable
         */
        'columns' => [],

        /*
         * Enable geocoding to add coordinates (lon/lat) to addresses
         */
        'geocode' => true,
    ],

    /*
     * Contacts
     */
    'contacts' => [
        /*
         * Main table
         */
        'table' => 'contacts',

        /*
         * Flag columns to be added to table
         */
        'flags' => ['public', 'primary'],
    ],
];