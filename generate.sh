#!/usr/bin/env bash
rm -f *.pdf


for PHP_SCRIPT in $(ls ./v11.php);
do
    PDF_FILE=`echo "$PHP_SCRIPT" | sed -r 's/\.php/\.pdf/g' | sed -r 's/\.\//\.\.\//g'`
    echo "Example $PHP_SCRIPT => $PDF_FILE"
    php $PHP_SCRIPT > $PDF_FILE
done

