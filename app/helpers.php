<?php

use Illuminate\Support\Carbon;

function timestamp_to_tanggal($timestap)
{
  $tanggal = date('Y-m-d', strtotime($timestap));
  $bulan = array (1 =>   'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Agust',
        'Sept',
        'Okt',
        'Nov',
        'Des'
      );
  $split = explode('-', $tanggal);
  return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}

/**
 * @param pregnancy_start
 * @return weeks_of_age_pregnancy
 */
function get_age_of_pregnancy($pregnancy_start) {
  return intval(floor(Carbon::now()->diffInDays($pregnancy_start) / 7));
}

function get_alert_in_statuses($pregnancy_alert_id, $statuses) {
  foreach($statuses as $item) {
      if($item["pregnancy_alert_id"] == $pregnancy_alert_id) {
          return $item["pregnancy_alert_id"];
      }
  }
  return NULL;
}

function get_alert_by_weeks($alerts, $weeks) {
  $new_array = [];
  foreach ($alerts as $alert) {
      if($alert["weeks"] == $weeks) {
          array_push($new_array, $alert);
      }
  }

  return $new_array;
}

function get_miseed_pregnnacy($alerts, $user, $agePregnancy) {
  $results = 0;
  
  foreach($alerts as $alert) {
    if($user->age_pregnancy && ($alert->weeks >= $user->age_pregnancy->age_when_join)) {
      if(!get_alert_in_statuses($alert->id, $user->pregnancy_statuses)) {
        if($agePregnancy > $alert->weeks) {
          $results++;
        }
      }
    }
  }

  return $results;
}