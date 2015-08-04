<?php
/**
  * This script is for easily deploying updates to Github repos to your local server. It will automatically git clone or
  * git pull in your repo directory every time an update is pushed to your $BRANCH (configured below).
  *
  * INSTRUCTIONS:
  * 1. Edit the variables below
  * 2. Upload this script to your server somewhere it can be publicly accessed
  * 3. Make sure the apache user owns this script (e.g., sudo chown www-data:www-data webhook.php)
  * 4. (optional) If the repo already exists on the server, make sure the same apache user from step 3 also owns that
  *    directory (i.e., sudo chown -R www-data:www-data)
  * 5. Go into your Github Repo > Settings > Service Hooks > WebHook URLs and add the public URL
  *    (e.g., http://example.com/webhook.php)
  *
**/

// Set Variables
$LOCAL_ROOT         = "/public_html/dev";
$LOCAL_REPO_NAME    = "testproject";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "git@github.com:camigreen/testproject.git";
$BRANCH             = "master";
echo 'start</br>';
// if ( $_SERVER['HTTP_X_GITHUB_EVENT'] ) {
  // Only respond to POST requests from Github
 echo `ls`;
  var_dump(file_exists('index.html'));
  if( file_exists($LOCAL_REPO) ) {

    // If there is already a repo, just run a git pull to grab the latest changes
    echo `cd {$LOCAL_REPO} && git pull`;

    die("done Repo Pulled" . time());
  } else {

    // If the repo does not exist, then clone it into the parent directory
    echo `cd {$LOCAL_ROOT} && git clone {$REMOTE_REPO}`;

    die("done Repo Cloned" . time());
  }
//}
echo 'finish';

?>