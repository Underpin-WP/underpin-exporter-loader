# Underpin Exporter Loader

Loader That assists with adding GDPR-compliant exporters to a WordPress website.

## Installation

### Using Composer

`composer require underpin/exporter-loader`

### Manually

This plugin uses a built-in autoloader, so as long as it is required _before_
Underpin, it should work as-expected.

`require_once(__DIR__ . '/underpin-exporters/exporters.php');`

## Setup

1. Install Underpin. See [Underpin Docs](https://www.github.com/underpin-wp/underpin)
1. Register new exporters menus as-needed.

## Example

A very basic example could look something like this.

```php
// Register exporter
underpin()->exporters()->add( 'exporter', [
	'id'                  => 'example-exporter',                    // required
	'name'                => __( 'translate-able name', 'domain' ), // required
	'get_data_callback'   => '__return_empty_array',                // Required. See Exporter::get_data
	'get_items_callback'  => '__return_true',                       // Required. See Exporter::get_items
] );
```

Alternatively, you can extend `Exporter` and reference the extended class directly, like so:

```php
underpin()->exporters()->add('exporter-key','Namespace\To\Class');
```