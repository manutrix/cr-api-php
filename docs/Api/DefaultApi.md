# Swagger\Client\DefaultApi

All URIs are relative to *https://api.cr-api.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClan**](DefaultApi.md#getClan) | **GET** /clan/{tag_id} | Get clan information
[**getProfile**](DefaultApi.md#getProfile) | **GET** /profile/{tag_id} | Get profile information


# **getClan**
> \Swagger\Client\Model\ClanItem getClan($tag_id)

Get clan information

By passing the clan tag id, you'll receive all available infirmation about a clan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$tag_id = "tag_id_example"; // string | This parameter represents the clan tag that you can find in the application

try {
    $result = $api_instance->getClan($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getClan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| This parameter represents the clan tag that you can find in the application |

### Return type

[**\Swagger\Client\Model\ClanItem**](../Model/ClanItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProfile**
> \Swagger\Client\Model\ProfileItem getProfile($tag_id)

Get profile information

By passing the profile tag id, you'll receive all available infirmation about a profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$tag_id = "tag_id_example"; // string | This parameter represents the profile tag that you can find in the application

try {
    $result = $api_instance->getProfile($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| This parameter represents the profile tag that you can find in the application |

### Return type

[**\Swagger\Client\Model\ProfileItem**](../Model/ProfileItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

