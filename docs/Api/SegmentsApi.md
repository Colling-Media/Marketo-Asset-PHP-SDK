# Swagger\Client\SegmentsApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSegmentationUsingGET**](SegmentsApi.md#getSegmentationUsingGET) | **GET** /rest/asset/v1/segmentation.json | Get Segmentations
[**getSegmentsForSegmentationUsingGET**](SegmentsApi.md#getSegmentsForSegmentationUsingGET) | **GET** /rest/asset/v1/segmentation/{id}/segments.json | Get Segments For Segmentation


# **getSegmentationUsingGET**
> \CollingMedia\Client\Model\ResponseOfSegmentationResponse getSegmentationUsingGET($status)

Get Segmentations

Retrieves a list of accessible segmentations for the target instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SegmentsApi();
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getSegmentationUsingGET($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getSegmentationUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfSegmentationResponse**](../Model/ResponseOfSegmentationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegmentsForSegmentationUsingGET**
> \CollingMedia\Client\Model\ResponseOfSegmentsResponse getSegmentsForSegmentationUsingGET($id, $status, $offset, $max_return)

Get Segments For Segmentation

Retrieves a list of segments inside the target segmentation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SegmentsApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions
$offset = 56; // int | Integer offset for paging
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20

try {
    $result = $api_instance->getSegmentsForSegmentationUsingGET($id, $status, $offset, $max_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getSegmentsForSegmentationUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfSegmentsResponse**](../Model/ResponseOfSegmentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

