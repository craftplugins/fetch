> [!IMPORTANT]
>
> **This plugin is no longer maintained.**
> 
> We recommend using the (other) [Fetch plugin](https://plugins.craftcms.com/fetch) instead.

# Fetch plugin for Craft CMS

`file_get_contents` for Craft CMS templates.

Automatically decodes JSON.

## Usage

There’s three ways to use Fetch.

##### Variable

```twig
{{ craft.fetch.getFileContents(svgAsset.url) }}
```

##### Function

```twig
{{ fetch(svgAsset.url) }}
```

##### Filter

```twig
{{ svgAsset.url|fetch }}
```

### Parameters

It’s possible to pass parameters as a second argument.

```twig
{{ fetch(svgAsset.url, {
  cache: false
}) }}
```

| Parameter        | Description                                          | Default |
|------------------|------------------------------------------------------|---------|
| `cache`          | Whether to cache the contents.                       | `true`  |
| `suppressErrors` | Whether to suppress any PHP Notices/Warnings/Errors. | `true`  |
