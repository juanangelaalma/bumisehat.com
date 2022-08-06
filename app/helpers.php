<?php

use Illuminate\Support\Carbon;


/**
 * It converts a timestamp to a date.
 * 
 * @param timestap The timestamp you want to convert.
 */
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

// testing every minute
// function get_age_of_pregnancy($pregnancy_start) {
//   $result = Carbon::now()->diffInMinutes($pregnancy_start);
//   return intval(strval(floor($result))[strlen($result)-1]);
// }

/**
 * If the pregnancy_alert_id in the statuses array is equal to the pregnancy_alert_id passed in, return
 * the pregnancy_alert_id. Otherwise, return NULL.
 * 
 * @param pregnancy_alert_id 1
 * @param statuses 
 * 
 * @return The pregnancy_alert_id
 */
function get_alert_in_statuses($pregnancy_alert_id, $statuses) {
  foreach($statuses as $item) {
      if($item["pregnancy_alert_id"] == $pregnancy_alert_id) {
          return $item["pregnancy_alert_id"];
      }
  }
  return NULL;
}

/**
 * It takes an array of alerts and a number of weeks, and returns an array of alerts that match the
 * number of weeks.
 * 
 * @param alerts The array of alerts
 * @param weeks the number of weeks to get alerts for
 * 
 * @return An array of alerts that have the same weeks value as the  parameter.
 */

function get_alert_by_weeks($alerts, $weeks) {
  $new_array = [];
  foreach ($alerts as $alert) {
      if($alert["weeks"] == $weeks) {
          array_push($new_array, $alert);
      }
  }

  return $new_array;
}

/**
 * If the user's age of pregnancy is greater than or equal to the alert's week, and the alert is not in
 * the user's pregnancy statuses, and the user's age of pregnancy is greater than the alert's week,
 * then increment the results.
 * 
 * @param alerts array of objects
 * @param user the user object
 * @param agePregnancy the current week of pregnancy
 * 
 * @return The number of alerts that have not been completed.
 */
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