PHP Example application for SimpleCalc library
==============================================

Application using `tdd-php/lib-simple-calc` library (https://github.com/tdd-php/lib-simple-calc).

Installation
------------

This is the only way to update dependencies by ordinary user:

    git pull
    composer install

You cannot issue:

    composer update
    composer update tdd-php/lib-simple-calc

Updating dependencies
---------------------

This is how the repo admin or owner updates dependencies:

    composer update
    composer update tdd-php/lib-simple-calc

After this, admin publishes updated repo:

    git add -A
    git commit -m Updated dependencies
    git push

Deployment
----------

[app.mathplate.pl](http://app.mathplate.pl)

    ssh -p1234 joe.doe@example.net

    rsync
        --chmod=a+rwx,g+rwx,o-wx  -azC --force --delete --progress
        --exclude-from=rsync_exclude.txt
        -e "ssh -p12345" ./ joe.doe@example.net:/some/dir
