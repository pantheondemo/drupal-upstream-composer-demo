<?php
// Install the Site
echo "Installing the site...\n";
passthru('drush site-install demo_umami --site-name=Demo');
echo "Site installation complete.\n";
//Clear all cache
echo "Rebuilding cache.\n";
passthru('drush cr');
echo "Rebuilding cache complete.\n";
