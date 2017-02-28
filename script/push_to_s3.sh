#!/bin/bash

set -e # fail immediately on bad command
set -x # echo all commands

SCRIPT_DIR=$(dirname "$0")
cd "$SCRIPT_DIR/.."

aws --profile nutapp s3 sync people s3://join.nutshell.com/people/ --acl public-read --exclude .DS_Store
