# Coin Combinations #

#### An application to practice BDD in PHP, September 13th, 2016

#### By Angie Smith and David Ayala

## Description ##

This application let's users enter an amount of cents and shows the smallest number of quarters, dimes, nickels, and pennies needed to make change.

## Setup/Installation Instructions ##

* Clone the repository
* Using the command line, navigate to the project's root directory
* Install dependencies by running $ composer install
* Navigate to the /web directory and start a local server with $ php -S localhost:8000
* Open a browser and go to the address http://localhost:8000 to view the application

## Specifications ##

* Return a nickel from 1 cent.
    * input: 1 cent
    * output: 1 penny

* Return one nickel and one penny from 6 cents.
    * input: 6 cents
    * output: one nickel, one penny

* Return several types of coins.
    * input: 66 cents
    * output: 2 quarters, 1 dime, 1 nickel, 1 penny



## Known Bugs ##

There are no known bugs at this time.

## Support and Contact Details ##

Please report any bugs or issues to mlawson3691@gmail.com.

## Languages/Technologies Used ##

* PHP
* Silex
* Twig

### License ###

*This application is licensed under the MIT license.*

Copyright (c) 2016 Angie Smith  & David Ayala
