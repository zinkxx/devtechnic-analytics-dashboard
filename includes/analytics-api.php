<?php
require_once plugin_dir_path(__FILE__) . '../vendor/autoload.php';

function devtechnic_get_analytics_data() {
    $client = new Google_Client();
    $client->setAuthConfig(plugin_dir_path(__FILE__) . '../config/client_secrets.json');
    $client->addScope(Google_Service_Analytics::ANALYTICS_READONLY);

    $analytics = new Google_Service_Analytics($client);
    $viewId = 'YOUR_VIEW_ID';

    $results = $analytics->data_ga->get(
        'ga:' . $viewId,
        '7daysAgo',
        'today',
        'ga:sessions,ga:pageviews'
    );

    return json_encode($results->getRows());
}
?>
