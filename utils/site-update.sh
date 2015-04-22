#!/usr/bin/env bash
# Site update script

# Run the script to symlink the hooks directory
echo $(utils/symlink-hooks.sh)

# Copy the settings file.
echo $(utils/copy-settings.sh)
