<?php
if (!defined('ABSPATH')) {
    exit;
}

echo '<div class="wrap">';
echo '<h1>📊 Google Analytics Dashboard</h1>';
echo '<p>Bu sayfada web sitenizin Google Analytics verilerini görebilirsiniz.</p>';

echo '<div id="analytics-container">';
echo '<canvas id="analyticsChart"></canvas>';
echo '</div>';

echo '</div>';
?>
