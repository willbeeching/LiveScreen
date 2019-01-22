# Live Screen

A simple WordPress site that displays TV Show artwork of your choice in as a screensaver.

This is a personal project that I've decided to release, please do not sell or pass this off as your own. Other than that, you are free to do as you please.


## Getting Started

Clone the repository onto your computer/server. Create a host of your choice ie. screensaver.local. 

Open the wp-config.php file and change WP_HOME and WP_SITEURL to your host:

```
define('WP_HOME','http://screensaver.local');
define('WP_SITEURL','http://screensaver.local');
```

As with all WordPress sites you'll need to run a MySQL database. Create a database with a privileged user, and import the SQL file (in the root of the repo).

```
/** The name of the database for WordPress */
define('DB_NAME','YOUR_DATABASE_NAME');

/** MySQL database username */
define('DB_USER','YOUR_DATABASE_USER');

/** MySQL database password */
define('DB_PASSWORD','YOUR_DATABASE_PASSWORD');

/** MySQL hostname */
define('DB_HOST', 'localhost');
```

Point your browser to http://screensaver.local/login (or whatever you've called your host) and user the following credentials:

```
Username: screensaver
Password: d5KRFxtxKX-5?=VQ
```

## Add your TV Shows

Once you've hit the dashboard in the sidebar you will see TV Show's in the sidebar, click Add New and you can add the name of your TV Show, add as many photos as you would like into the Photo's repeater, and add the show logo (best to use an svg) on the right hand side. 

If the logo looks a bit small or the ratio is more squarish, change the ratio to square.


## Add your server logo

By default the site shows the Plex logo as the server logo, if you want to remove this or change it to your own go to Pages->Main. Under server you can turn off the logo entirely, or replace it with your own logo. 


## Serve a static site

I found it best to use WP2Static to create a static version of the site, meaning that rather than running the PHP everytime the screensaver loads it runs a flat HTML version. This also means there's no database calls.

To run this, click on WP2Static and follow the instructions.


## Best Practice

Rather than running this on a VPS or hosted as website I would recommend running this on a computer or NAS on your local network, that way the photos will load pretty much instantly.


## Liked this project?

If this project is useful to you, consider buying me a coffee: 
https://digitaltipjar.com/willbeeching



