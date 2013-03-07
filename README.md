PHP Example application for SimpleCalc library
==============================================

Application using `tdd-php/lib-simple-calc` library (https://github.com/tdd-php/lib-simple-calc).

Installation
------------

    composer install

Updating dependencies
---------------------

    composer update
    composer update tdd-php/lib-simple-calc


Deployment
----------

[app.mathplate.pl](http://app.mathplate.pl)

    ssh -p1234 joe.doe@example.net

    rsync
        --chmod=a+rwx,g+rwx,o-wx  -azC --force --delete --progress
        --exclude-from=rsync_exclude.txt
        -e "ssh -p12345" ./ joe.doe@example.net:/some/dir
