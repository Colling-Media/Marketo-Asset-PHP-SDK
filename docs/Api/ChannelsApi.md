# Swagger\Client\ChannelsApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllChannelsUsingGET**](ChannelsApi.md#getAllChannelsUsingGET) | **GET** /rest/asset/v1/channels.json | Get Channels
[**getChannelByNameUsingGET**](ChannelsApi.md#getChannelByNameUsingGET) | **GET** /rest/asset/v1/channel/byName.json | Get Channel by Name


# **getAllChannelsUsingGET**
> \CollingMedia\Client\Model\ResponseOfChannelResponse getAllChannelsUsingGET($max_return, $offset)

Get Channels

Retrieves all channels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ChannelsApi();
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $api_instance->getAllChannelsUsingGET($max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getAllChannelsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfChannelResponse**](../Model/ResponseOfChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelByNameUsingGET**
> \CollingMedia\Client\Model\ResponseOfChannelResponse getChannelByNameUsingGET($name)

Get Channel by Name

Retrieves channels based on the provided name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ChannelsApi();
$name = "name_example"; // string | Name of channel to retrieve

try {
    $result = $api_instance->getChannelByNameUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of channel to retrieve |

### Return type

[**\CollingMedia\Client\Model\ResponseOfChannelResponse**](../Model/ResponseOfChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

