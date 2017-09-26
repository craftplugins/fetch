<img src="https://cdn.rawgit.com/joshuabaker/craft-fetch/resources/icon.svg" width="72">

# Fetch plugin for Craft CMS

file_get_contents for Craft CMS templates.

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

It’s possible to pass parameters as a second argument to any of the above.

```twig
{{ fetch(svgAsset.url, {
  cache: false
}) }}
```

| Parameter      | Description                                                                        |
|----------------|------------------------------------------------------------------------------------|
| array          | Whether to return the contents of the file as an array or not.                     |
| cache          | Whether to cache the contents.                                                     |
| suppressErrors | Whether to suppress any PHP Notices/Warnings/Errors (usually permissions related). |