#!/bin/bash
#
# Create symlink to git hooks.

# Check for an existing symlink
if [ -h .git/hooks ]; then
  echo "Git hooks are linked."
  exit 1
else
  if [ -d "./.git/hooks" ]; then
    # Remove the old hooks dir if it still exists.
    rm -rf .git/hooks
  fi
fi

# Create the symlink
cd .git
ln -s ../.githooks hooks

echo "Git hooks are linked."
