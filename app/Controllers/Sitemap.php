<?php

namespace App\Controllers;

class Sitemap extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $sqlQueries = array(
            "SELECT CONCAT('https://bestbizfinder.com/broker/', broker_id, '/', company, '/', address) AS url, 'monthly' AS changefreq, 0.8 AS priority FROM broker_details",
        );

        $xmlContent = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xmlContent .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

        foreach ($sqlQueries as $sqlQuery) {
            $result = $db->query($sqlQuery);

            if ($result->getResult()) {
                $rows = $result->getResultArray();

                if (count($rows) > 0) {
                    foreach ($rows as $row) {
                        $xmlContent .= '<url>' . PHP_EOL;
                        $xmlContent .= '<loc>' . htmlspecialchars($row['url']) . '</loc>' . PHP_EOL;
                        $xmlContent .= '<changefreq>' . htmlspecialchars($row['changefreq']) . '</changefreq>' . PHP_EOL;
                        $xmlContent .= '<priority>' . htmlspecialchars($row['priority']) . '</priority>' . PHP_EOL;
                        $xmlContent .= '</url>' . PHP_EOL;
                    }
                }
            } else {
                echo "No results found";
            }
        }

        $xmlContent .= '</urlset>' . PHP_EOL;

        header('Content-Type: application/xml');

        echo $xmlContent;
    }
}
