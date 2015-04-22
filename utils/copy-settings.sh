#!/usr/bin/env bash
#
# Copy the example settings file to the repo root.

# Copy the local settings file.
if [ ! -f settings.local.php ]; then
  cp docroot/sites/default/settings.local-example.php ./settings.local.php
  echo "Local settings file has been created."
else
  echo "Local settings file exists."
fi
