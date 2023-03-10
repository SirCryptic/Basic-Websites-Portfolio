<?php
require_once __DIR__ . '/../vendor/autoload.php';
// Assuming you're in the tools folder
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();
if(isset($_GET['cve'])) {
  $cve = $_GET['cve'];
  $apiKey = $_ENV['SHODAN_API_KEY'];
  $url = 'https://exploits.shodan.io/api/search?key=' . $apiKey . '&query=' . urlencode($cve);

  $response = @file_get_contents($url);
  if(!$response){
      echo '<script>alert("Error: Could not connect to API.");</script>';
  }
  else {
    $data = json_decode($response, true);

    if(isset($data['matches']) && count($data['matches']) > 0){
      echo '<table style="border-collapse: collapse; width: 100%;">';
      echo '<tr style="background-color: #333; color: #fff;">';
      echo '<th style="padding: 10px; border: 1px solid #fff;">Vulnerability</th>';
      echo '</tr>';

      foreach ($data['matches'] as $match) {
          echo '<tr style="background-color: #555; color: #fff;">';
          echo '<td style="padding: 10px; border: 1px solid #fff;">' . $match['description'] . '</td>';
          echo '</tr>';
      }

      echo '</table>';
    }
    else {
      echo '<script>alert("No results found.");</script>';
    }
  }
}
  else if(isset($_GET['domain'])) {
    $domain = $_GET['domain'];                          
    $apiKey = $_ENV['WHOISXML_API_KEY'];                         
    $url = 'https://www.whoisxmlapi.com/whoisserver/WhoisService?apiKey=' . $apiKey . '&outputFormat=JSON&domainName=' . $domain;

  $response = @file_get_contents($url);
  if(!$response){
      echo '<script>alert("Error: Could not connect to API.");</script>';
  }
  else {
    $data = json_decode($response, true);

    echo '<pre>';
    print_r($data);
    echo '</pre>';
  }
}
else if(isset($_GET['number'])) {
  $number = $_GET['number'];
  $apiKey = $_ENV['NUMBER_VERIFICATION_API_KEY'];
  $url = 'https://api.apilayer.com/number_verification/validate?number=' . $number;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);          // replace with your apikey this is a example
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('apikey: $apiKey'));

  $response = curl_exec($ch);
  curl_close($ch);

  if(!$response){
      echo '<script>alert("Error: Could not connect to API.");</script>';
  }
  else {
      $data = json_decode($response, true);

      // Define table rows and corresponding data fields
      $rows = array(
          array('Valid', 'valid'),
          array('Number', 'number'),
          array('Local Format', 'local_format'),
          array('International Format', 'international_format'),
          array('Country Prefix', 'country_prefix'),
          array('Country Code', 'country_code'),
          array('Country Name', 'country_name'),
          array('Location', 'location'),
          array('Carrier', 'carrier'),
          array('Line Type', 'line_type')
      );

      // Generate HTML table
      echo '<table>';
      foreach ($rows as $row) {
          $label = $row[0];
          $field = $row[1];
          if (isset($data[$field])) {
              $value = $data[$field];
              echo '<tr><td>' . $label . '</td><td>' . $value . '</td></tr>';
          }
      }
      echo '</table>';
  }
}
else if(isset($_GET['ip'])) {
  $ip = $_GET['ip'];
  $url = 'https://json.geoiplookup.io/' . $ip;

  $response = @file_get_contents($url);
  if(!$response){
      echo '<script>alert("Error: Could not connect to API.");</script>';
  }
  else {
    $data = json_decode($response, true);
    
    // Define table rows and corresponding data fields
    $rows = array(
        array('IP Address', 'ip'),
        array('Hostname', 'hostname'),
        array('ISP', 'isp'),
        array('Organization', 'org'),
        array('City', 'city'),
        array('Region', 'region'),
        array('Country', 'country_name'),
        array('Continent', 'continent_name'),
        array('Latitude', 'latitude'),
        array('Longitude', 'longitude'),
        array('Postal Code', 'postal_code'),
        array('Timezone', 'timezone_name'),
        array('Connection Type', 'connection_type'),
        array('ASN Number', 'asn_number'),
        array('ASN Organization', 'asn_org'),
        array('Currency', 'currency_name')
    );
    
    // Generate HTML table
    echo '<table>';
    foreach ($rows as $row) {
        $label = $row[0];
        $field = $row[1];
        if (isset($data[$field])) {
            $value = $data[$field];
            echo '<tr><td>' . $label . '</td><td>' . $value . '</td></tr>';
        }
    }
    echo '</table>';
  }
}
else if(isset($_GET['q'])) {
    $query = $_GET['q'];
    $apiKey = $_ENV['SHODAN_API_KEY'];
    $url = 'https://api.shodan.io/shodan/host/search?key=' . $apiKey . '&query=' . urlencode($query);
  
    $response = file_get_contents($url);
    $data = json_decode($response, true);
  
    if (empty($data['matches'])) {
      echo '<p>No results found.</p>';
    } else {
      echo '<table style="border-collapse: collapse; width: 100%;">';
      echo '<tr style="background-color: #333; color: #fff;">';
      echo '<th style="padding: 10px; border: 1px solid #fff;">IP Address</th>';
      echo '<th style="padding: 10px; border: 1px solid #fff;">Product</th>';
      echo '</tr>';
  
      foreach ($data['matches'] as $match) {
          echo '<tr style="background-color: #555; color: #fff;">';
          echo '<td style="padding: 10px; border: 1px solid #fff;">' . $match['ip_str'] . '</td>';
          echo '<td style="padding: 10px; border: 1px solid #fff;">' . (isset($match['product']) ? $match['product'] : '') . '</td>';
          echo '</tr>';
      }
  
      echo '</table>';
    }
  }
  else {
    echo 'No query provided.';
  }
  
  ?>