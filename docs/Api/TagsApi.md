# CollingMedia\Client\TagsApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTagByNameUsingGET**](TagsApi.md#getTagByNameUsingGET) | **GET** /rest/asset/v1/tagType/byName.json | Get Tag By Name
[**getTagTypesUsingGET**](TagsApi.md#getTagTypesUsingGET) | **GET** /rest/asset/v1/tagTypes.json | Get Tag Types


# **getTagByNameUsingGET**
> \CollingMedia\Client\Model\ResponseOfTagResponse getTagByNameUsingGET($get_tag_by_name_request, $name)

Get Tag By Name

Retrieves a tag by its name.  This will also return the set of valid values for the tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\TagsApi();
$get_tag_by_name_request = new \CollingMedia\Client\Model\GetTagByNameRequest(); // \CollingMedia\Client\Model\GetTagByNameRequest | getTagByNameRequest
$name = "name_example"; // string | Name of the tag

try {
    $result = $api_instance->getTagByNameUsingGET($get_tag_by_name_request, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTagByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_tag_by_name_request** | [**\CollingMedia\Client\Model\GetTagByNameRequest**](../Model/\CollingMedia\Client\Model\GetTagByNameRequest.md)| getTagByNameRequest |
 **name** | **string**| Name of the tag |

### Return type

[**\CollingMedia\Client\Model\ResponseOfTagResponse**](../Model/ResponseOfTagResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTagTypesUsingGET**
> \CollingMedia\Client\Model\ResponseOfTagResponseGetAll getTagTypesUsingGET($max_return, $offset)

Get Tag Types

Retrieves a list of available tag types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\TagsApi();
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $api_instance->getTagTypesUsingGET($max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTagTypesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfTagResponseGetAll**](../Model/ResponseOfTagResponseGetAll.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

