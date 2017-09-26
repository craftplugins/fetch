<img src="https://rawgit.com/joshuabaker/craft-fetch/master/resources/icon.svg" width="72">

# Fetch plugin for Craft CMS

`file_get_contents` for Craft CMS templates.

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

| Parameter      | Description                                                                        | Default |
|----------------|------------------------------------------------------------------------------------|---------|
| cache          | Whether to cache the contents.                                                     | `true`  |
| suppressErrors | Whether to suppress any PHP Notices/Warnings/Errors (usually permissions related). | `true`  |
