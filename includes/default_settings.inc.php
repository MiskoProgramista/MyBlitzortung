<?php

/*
    MyBlitzortung - a tool for participants of blitzortung.org
	to display lightning data on their web sites.

    Copyright (C) 2011  Tobias Volgnandt

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


/*******************************************************************/
/* IMPORTANT: DO NOT EDIT THIS FILE!                               */
/* Use config.php for individual setting!                          */
/* Copy the desired line, without the trailing @                   */
/*                                                                 */
/* Info: This file is included AFTER config.php                    */
/*******************************************************************/


	

/*******************************************************************/
/*** Your Region                                                 ***/
/*     1 = Europe                                                  */
/*     2 = Oceania                                                 */
/*     3 = North America                                           */
/*     4 = Japan                                                   */                             

@define('BO_REGION', 1);




/*** Main file for creating graphs and images (URL!).            ***/
/*   You can use relative or absolute (with leading "/") paths:    */
/*   Only "blitzortung.php" should be ok in most cases.            */
/*   You can also use http://.../blitzortung.php                   */
/*                                                                 */
/*   Example: http://myhomepage.com/strikes/blitzortung.php        */
/*             ==> BO_FILE = "/strikes/blitzortung.php"            */

@define('BO_FILE', 'blitzortung.php');


/*** No-cookie URL                                                 */
/*   For faster retrieving of tiles and images                     */
/*   Enter complete URL with http://...                            */
/*                                                                 */
/*   Example: http://nocookie.domain.com/path/blitzortung.php       */

@define('BO_FILE_NOCOOKIE', '');



/*******************************************************************/
/*** UTF8-Encoding                                               ***/
/*   Most Content-Management-Systems use UTF8-encoding.            */
/*   Set it to false, when including with php into your            */
/*   own page and wrong characters appear                          */

@define('BO_UTF8', true);


/*******************************************************************/
/*** Update secret                                               ***/

@define('BO_UPDATE_SECRET', '');


/*******************************************************************/
/*** Default timezone                                            ***/

@define('BO_TIMEZONE', 'Europe/Berlin');



/*******************************************************************/
/*** Default Port for MySQL                                      ***/

@define('BO_DB_PORT', null);



/*******************************************************************/
/*** Number of Antennas of your Station                          ***/
/*** only "1" or "2" is possible !                               ***/

@define('BO_ANTENNAS', 2);



/*******************************************************************/
/*** Copyright footer                                            ***/
/*** your own copyright/web-address in images/graphs/footer      ***/

//Text, i.e. 'MyWeatherSite www.example.com'
@define('BO_OWN_COPYRIGHT', '');

//Textsize for graphs
@define('BO_OWN_COPYRIGHT_SIZE', 7);

//Text for graphs
@define('BO_OWN_COPYRIGHT_GRAPHS', ''); //empty string -> use above / false -> disable

//Text for maps
@define('BO_OWN_COPYRIGHT_MAPS', ''); //empty string -> use above / false -> disable


/*******************************************************************/
/*** Update intervals (Minutes!)                                 ***/

//strikes update interval
@define('BO_UP_INTVL_STRIKES', 5);

//stations update interval
@define('BO_UP_INTVL_STATIONS', 15);

//signal update interval
@define('BO_UP_INTVL_RAW', 15);



/*******************************************************************/
/*** Language settings                                           ***/

//main locale
@define('BO_LOCALE', 'en');

//shows translation in this language, if main language doesn't exist ('en' if nothing is set)
@define('BO_LOCALE2', '');

//available locales
@define('BO_LANGUAGES', 'de,en,fr,hu');

//show links in the footer   
@define('BO_SHOW_LANGUAGES', true); 

//show flags
@define('BO_SHOW_LANG_FLAGS', true);

//force default language in maps (true)
//otherwise an extra map for each language will be generated and saved in cache!
@define('BO_FORCE_MAP_LANG', true); 



/*******************************************************************/
/*** User / Login                                                ***/

//show the login link at the bottom
@define('BO_LOGIN_SHOW', true);

//allow login to
@define('BO_LOGIN_ALLOW', 2); //0=nobody, 1=you, 2=all

// days where automatic login cookie is valid. set to false to disable auto login
@define('BO_LOGIN_COOKIE_TIME', 60); 



/*******************************************************************/
/*** Session handling                                            ***/

//close sessions before output
//so the browser use more that one concurrent connection at once
//hint: set it to 0 or 1 if you have problems
//0: never close (let php do it)
//1: late
//2: early
@define('BO_SESSION_CLOSE', 2); 




/*******************************************************************/
/*** Warn with email if station/tracker sends no signals         ***/

//Warnings enabled?
@define('BO_TRACKER_WARN_ENABLED', true);

//Warn after given when no signals were send (plus 60 minutes due to stations.txt statistics)
@define('BO_TRACKER_WARN_AFTER_HOURS', 0);

//resent warning after given hours if problem persists
@define('BO_TRACKER_WARN_RESEND_HOURS', 6);



/*******************************************************************/
/*** Import error handling                                       ***/

// min count, error occured (0 disables reporting)
@define('BO_UP_ERR_MIN_COUNT',   1);     

// time in minutes in which the error occurs
@define('BO_UP_ERR_MIN_MINUTES', 30);    

// if error persits, send mail max. every defined minutes
@define('BO_UP_ERR_SEND_INTERVAL', 720);  

// if new station count is too low -> don't read new data
@define('BO_UP_STATION_DIFFER',   0.9);     




/*******************************************************************/
/*** Enable automatic rewriting of status files                  ***/
/*** See /status/status.cfg for more information                 ***/

@define('BO_ENABLE_STATUS_FILES', false);



/*******************************************************************/
/*** URLs                                                        ***/
/*   These have only to be changed if you use the PHP include      */
/*   feature. The URLs should end with an "?" if they have no      */
/*   query                                                         */

@define('BO_MAP_URL', 'index.php?bo_page=map');
@define('BO_ARCHIVE_URL', 'index.php?bo_page=archive');
@define('BO_STATISTICS_URL', 'index.php?bo_page=statistics');
@define('BO_INFO_URL', 'index.php?bo_page=info');
@define('BO_LOGIN_URL', 'index.php?bo_page=login');




/*******************************************************************/
/*** Experimental Polarity                                       ***/

//enable the experiment ;-)
//be sure to "calibrate" your antennas in the user area
//the electrical orientation is important!
@define('BO_EXPERIMENTAL_POLARITY_CHECK', true);

//maximum distance in kilometers from your station where polarities
//should be not too far, as polarity of the wave changes 
//after some hundrets of kilometers
@define('BO_EXPERIMENTAL_POLARITY_MAX_DIST', 300);

//polarity is displayed beginning from given zoom-level
@define('BO_EXPERIMENTAL_POLARITY_ZOOM', 8);

//size of the +/- symbol in strike on map
@define('BO_MAP_STRIKE_POLARITY_SIZE', 5);




/*******************************************************************/
/*** The file cache                                              ***/

//when true, disables caching of maps and map tiles (you should leave it on false!)
@define('BO_CACHE_DISABLE', false); 

//create subdirs for faster access (may not work with php safemode ON)
@define('BO_CACHE_SUBDIRS', true);  

//purges tiles when older that specified value (hours)
@define('BO_CACHE_PURGE_TILES_HOURS', 24); 

//how often the purge should start (0 = never, 1 = every call, 2 = ever 2nd call...)
@define('BO_CACHE_PURGE_TILES_RAND',  5000); 

//purges maps when older that specified value (hours)
@define('BO_CACHE_PURGE_MAPS_HOURS', 24 * 4); 

//how often the purge should start (0 = never, 1 = every call, 2 = ever 2nd call...)
@define('BO_CACHE_PURGE_MAPS_RAND',  1000); 

//purges density maps when older that specified value (hours)
@define('BO_CACHE_PURGE_DENS_HOURS', 24 * 10); 

//how often the purge should start (0 = never, 1 = every call, 2 = ever 2nd call...)
@define('BO_CACHE_PURGE_DENS_RAND',  100); 




/*******************************************************************/
/*** Statistics                                                  ***/


// Show GPS Info                                               
// You can set your BO_LAT, BO_LON to rough coordinates and     
// disable this option. So nobody can see your exact position.  
@define('BO_SHOW_GPS_INFO', true);


// Map type for GPS info
@define('BO_STATISTICS_GPS_MAPTYPE', 'HYBRID');


// Disable station statistics (for slow servers)
@define('BO_STATION_STAT_DISABLE', false);


// Mark stations offline after specified time with no signals  
@define('BO_STATION_OFFLINE_HOURS', 24);


// Show new stations                                           
@define('BO_STATISTICS_SHOW_NEW_STATIONS', 0);


// Show stations under construction
@define('BO_STATISTICS_SHOW_STATIONS_UNDER_CONSTR', 1);


// Statistics for all station                                  
@define('BO_STATISTICS_ALL_STATIONS', 0); // 0 = disable, 1 = with specific link, 2 = links from table for everyone


// Map type for station-statistic page
@define('BO_STATISTICS_STATION_MAPTYPE', 'HYBRID');


// Default order of stations table
// possible values: country,city,strikes,signals,signals_ratio,efficiency,distance
@define('BO_STATISTICS_STATIONS_SORT', 'distance');

//Time-ranges for network statistics (1h is always present)
@define('BO_STATISTICS_NETWORK_RANGES', ''); //hours, comma separated




/*******************************************************************/
/*** Image Maps: General settings                                ***/

// order your maps, comma separated ids like "4,2,12,34,2,0"
@define('BO_MAPS_ORDER', ''); 

//use true color images for internal drawing
//gives nicer transparency effects - higer CPU usage and bigger files size
@define('BO_IMAGE_USE_TRUECOLOR', true); 

//use truecolor images for drawing transparent images
@define('BO_IMAGE_USE_TRUECOLOR_TRANSPARENT', false); 

//use palette images for MAPS with defined colors for output (0 disables)
// --> reduces colors to defined for smaller file sizes
// may cause some problems with colors on different images!!!
@define('BO_IMAGE_PALETTE_COLORS_MAPS', 256);

//use palette images for DENSITY MAPS with defined colors for output (0 disables)
// --> reduces colors to defined for smaller file sizes
@define('BO_IMAGE_PALETTE_COLORS_DENSITIES', 0); 

//use palette images for TRANSPARENT MAPS with defined colors for output (0 disables)
// --> reduces colors to defined for smaller file sizes
@define('BO_IMAGE_PALETTE_COLORS_TRANSPARENT', 0); 

//automatically use true color if colorcount in palette image is above 256
//set BO_IMAGE_PALETTE_COLORS_MAPS to 256
//you will automatically get the smallest file, but also truecolor images when needed
@define('BO_IMAGE_PALETTE_AUTO', true); 

//PNG compression: the highter the slower!!!
@define('BO_IMAGE_PNG_COMPRESSION', 7); 

//Set it to PNG_ALL_FILTERS for better compression (doesn't seem to make any difference)
@define('BO_IMAGE_PNG_FILTERS', PNG_NO_FILTER); 

//Jpeg Quality 100 = best
@define('BO_IMAGE_JPEG_QUALITY', 90);





/*******************************************************************/
/*** Fonts: General settings                                     ***/

// normal truetype font file
@define('BO_FONT_TTF_NORMAL', 'fonts/DejaVuSans.ttf'); 

// normal bold font file
@define('BO_FONT_TTF_BOLD', 'fonts/DejaVuSans-Bold.ttf');

// mono truetype font file 
@define('BO_FONT_TTF_MONO', 'fonts/DejaVuSansMono.ttf'); 

// set to false if fonts in pictures do not work
@define('BO_FONT_USE_FREETYPE2', true);



/*******************************************************************/
/*** Dynamic Map: General settings                               ***/
/*   Appearance of the dynamic map, colors, icons etc.             */


/*** WARNING ***/
/*** Do not raise the following two values,                      ***/
/*** otherwise autolinking will not work!                        ***/

// (kilometers) limits strike display to radius around station
@define('BO_RADIUS', 50);             

// (kilometers) radius for statistics
@define('BO_RADIUS_STAT', 50);             

// when zoom reaches this level, strike display is limited to max. distance around station (BO_RADIUS)
@define('BO_MAX_ZOOM_LIMIT', 8);      

//Completely disable the dynamic map
@define('BO_MAP_DISABLE', false);

// default zoom level
@define('BO_DEFAULT_ZOOM', 7);

// default zoom level for archive
@define('BO_DEFAULT_ZOOM_ARCHIVE', 10);        

// max. zoom level, even in the area of you station
@define('BO_MAX_ZOOM_IN', 15);        

// minimal zoom level
@define('BO_MIN_ZOOM_OUT', 4);

// the default map style (you can also use satellite, hybrid, street)
@define('BO_DEFAULT_MAP', 'TERRAIN'); 

//some default colors and sizes
@define('BO_MAP_CIRCLE_COLOR_LINE', '#FF0000');
@define('BO_MAP_CIRCLE_OPAC_LINE', '0.8');
@define('BO_MAP_CIRCLE_COLOR_FILL', '#FF0000');
@define('BO_MAP_CIRCLE_OPAC_FILL', '0.05');

//displaying of strikes
@define('BO_MAP_STRIKE_SHOW_CIRCLE_ZOOM', 9);
@define('BO_MAP_STRIKE_SHOW_DEVIATION_ZOOM', 12);
@define('BO_MAP_STRIKE_SIZE', 3);
@define('BO_MAP_STRIKE_CIRCLE_SIZE', 4);
@define('BO_MAP_STRIKE_CIRCLE_GROW', 0.5);
@define('BO_MAP_MAX_STRIKES_PER_TILE', 50000);

//some other values, sizes etc...
@define('BO_MAP_STATION_ICON', 'http://labs.google.com/ridefinder/images/mm_20_red.png');
@define('BO_MAP_STATIONS_ICON', 'http://maps.google.com/mapfiles/kml/pal4/icon24.png'); //Stations icon
@define('BO_MAP_LEGEND_WIDTH', 80);
@define('BO_MAP_LEGEND_HEIGHT', 10); //only colorbar
@define('BO_MAP_LEGEND_FONTSIZE', 2); //no TTF!
@define('BO_MAP_NA_FONTSIZE', 3); //no TTF!
@define('BO_MAP_COUNT_FONTSIZE', 8); 
@define('BO_MAP_COUNT_FONTBOLD', true); 
@define('BO_MAP_COUNT_STATIONS', 15);

//Manual time ranges
@define('BO_MAP_MANUAL_TIME_ENABLE', false); //enables for guests
@define('BO_MAP_MANUAL_TIME_MAX_HOURS', 6); //max. hours between start and end (YOU can always access as much as you want - be careful!)

//MyBlitzortung Stations display
@define('BO_MAP_MYBO_CIRCLE_COLOR_LINE', '#0000FF');
@define('BO_MAP_MYBO_CIRCLE_OPAC_LINE', '0.8');
@define('BO_MAP_MYBO_CIRCLE_COLOR_FILL', '#0000FF');
@define('BO_MAP_MYBO_CIRCLE_OPAC_FILL', '0.05');
@define('BO_MAP_MYBO_ICON', 'http://labs.google.com/ridefinder/images/mm_20_blue.png');

//Version of Google Maps API
@define('BO_GMAP_API_VERSION', 'v=3.6');


/*******************************************************************/
/*** Calculate tracks                                            ***/
/*   WARNING: This is currently very expermintal.                  */
/*   It may slow down your server!                                 */


//scan time in minutes (set to 0 to disable tracks)
@define('BO_TRACKS_SCANTIME', 0);  

//update tracks every x minutes
@define('BO_UP_INTVL_TRACKS', 5);  

//divide the scantime into given intervals (minimum 2 for tracks)
@define('BO_TRACKS_DIVISOR',  2);

//kilometers
@define('BO_TRACKS_RADIUS_SEARCH_STRIKES', 10);
@define('BO_TRACKS_RADIUS_SEARCH_NGBR_CELLS', 30);
@define('BO_TRACKS_RADIUS_SEARCH_OLD_CELLS', 30);

//display of cells/tracks
@define('BO_TRACKS_MAP_OPACITY', 0.7); 
@define('BO_TRACKS_MAP_ZOOM_MIN', 6); 
@define('BO_TRACKS_MAP_ZOOM_MAX', 10); 
@define('BO_TRACKS_MAP_ZOOM_INFO', 7);
@define('BO_TRACKS_MAP_TIME_FORCAST', 60);
@define('BO_TRACKS_MAP_MIN_STRIKES_DISPLAY', 10);
@define('BO_TRACKS_SHOW_UNTRACKED', false); 




/*******************************************************************/
/*** Archive                                                     ***/

//Completely disables archive
@define('BO_DISABLE_ARCHIVE', false); 

//Enables archive (maps by date and animations) for guests
@define('BO_ENABLE_ARCHIVE_MAPS', false); 

//Enables densities for guests (set the also next option to true)
@define('BO_ENABLE_DENSITIES', false); 

//Enables strike search
@define('BO_ENABLE_ARCHIVE_SEARCH', true); 

//Enable signal page
@define('BO_ENABLE_ARCHIVE_SIGNALS', true); 

//Calculates Densities 
@define('BO_CALC_DENSITIES', false); 

//Calculates Densities for current year/month
@define('BO_CALC_DENSITIES_CURRENT', true); 

//When displaying densities, group max values (higher =>more grouping, 0=no)
@define('BO_DENSITIES_GROUP_MAX', 30); 

//maximum no. of strikes displayed when searching for them
@define('BO_ARCHIVE_SEARCH_STRIKECOUNT', 10);

//show the spectrum for each signal in table
@define('BO_ARCHIVE_SHOW_SPECTRUM', true);

//entries in strike table per page
@define('BO_ARCHIVE_TABLE_PER_PAGE', 10);


//Strike details
@define('BO_ARCHIVE_STR_DETAILS_LINECOLOR', '6f64');
@define('BO_ARCHIVE_STR_DETAILS_LINECOLOR_NOCALC', 'fa09');
@define('BO_ARCHIVE_STR_DETAILS_DEFAULT_POINT', 'stations_strikedetails');
@define('BO_ARCHIVE_STR_DETAILS_DEFAULT_POINT_STATION_CALC', 'stations_strikedetails_calc');
@define('BO_ARCHIVE_STR_DETAILS_HYPCOLOR', 'f7f7');
@define('BO_ARCHIVE_STR_DETAILS_STATION_COUNT_CALC', 4);

//Static map
@define('BO_SMAP_MAX_RANGE', 24);  //Maximum time range bewteen start and end time (hours)
@define('BO_SMAP_MIN_RANGE', 15);  //Maximum time range bewteen start and end time (minutes)
@define('BO_SMAP_RANGE_STEP', 6);  //Step time in select box (hours)

//Animations (not the gif-animations!)
@define('BO_ANIMATIONS_INTERVAL', 15); //Time in minutes between two frames - 0 disables animations
@define('BO_ANIMATIONS_STRIKE_TIME', 120); //Time range of displayed strikes per frame
@define('BO_ANIMATIONS_DEFAULT_RANGE', 2);  //Default time range bewteen start and end time (hours)
@define('BO_ANIMATIONS_MAX_RANGE', 24);  //Maximum time range bewteen start and end time (hours)
@define('BO_ANIMATIONS_WAITTIME', 100); //Wait time between frames during animation (milliseconds)
@define('BO_ANIMATIONS_WAITTIME_END', 1000); //Wait at the and of a loop (milliseconds)
@define('BO_ANIMATIONS_RANGE_STEP', 1);  //Step time in select box (hours)



/*******************************************************************/
/*** Automatic Data-Purging                                      ***/

//completely enable/disable
@define('BO_PURGE_ENABLE', true);

//main interval in hours
@define('BO_PURGE_MAIN_INTVL', 6);

//optimizes table if deleted rows are bigger than value (0 disables)
@define('BO_PURGE_OPTIMIZE_TABLES', 0); 

// min-age in hours, 0 disables
@define('BO_PURGE_SIG_NS', 24);     //signals with no strike assigned        
@define('BO_PURGE_SIG_ALL', 192);   //all signals
@define('BO_PURGE_STR_NP', 0);      //strikes not participated
@define('BO_PURGE_STR_ALL', 0);     //all strikes
@define('BO_PURGE_STR_DIST', 0);    //strikes farther than BO_PURGE_STR_DIST_KM
@define('BO_PURGE_STRSTA_ALL', 24); //strike <-> stations table (very important!)
@define('BO_PURGE_STA_OTHER',  96); //station statistics: other (not yours)
@define('BO_PURGE_STA_ALL', 0);     //station statistics: all
@define('BO_PURGE_STR_DIST_KM', 2000); //distance for BO_PURGE_STR_DIST in kilometers




/*******************************************************************/
/*** Strike alerts                                               ***/

//completely enable/disable
@define('BO_ALERTS', true);

//check every given minutes
@define('BO_ALERT_CHECK_INTERVAL', 15);

//after sending an alert, miniumum time to wait for next alert (minutes)
@define('BO_ALERT_SEND_INTERVAL', 45);





/*******************************************************************/
/*** SMS-Gateway URL                                             ***/
/*   Leave it blank, if you don't want to use that feature.                                                                      */
/*    - {text} will be replaced by the message text                                                                              */
/*    - {tel}  will be replaced by the telephone number                                                                          */
/*   Some examples. Of course you have to register yourself at the gateway provider and change USER/PASS to your values!         */
/*    - http://gateway.smstrade.de/?key=PASS&to={tel}&message={text}&from=MyBO&route=gold                                        */
/*    - http://gateway.sms77.de/?u=USER&p=PASS&to={tel}&text={text}&type=quality&from=MyBO                                       */
/*    - http://www.innosend.de/gateway/sms.php?id=USER&pw=PASS&absender=MyBO&empfaenger={tel}&text={text}&type=4                 */
@define('BO_SMS_GATEWAY_URL', ''); //do not edit here, put it in config.php file!!!




/*******************************************************************/
/*** Graphs                                                      ***/
/*   You can change the appearance of almost ever graph            */
/*   individually (color, lines, size etc...)                      */

//nicer graphs, but no thick lines
@define('BO_GRAPH_ANTIALIAS', false);



/***********************/
/*** Raw Data Graphs ***/

@define('BO_GRAPH_RAW_W', 200);
@define('BO_GRAPH_RAW_H', 100);
@define('BO_GRAPH_RAW_COLOR1', '#f00@0.5');
@define('BO_GRAPH_RAW_COLOR2', '#0f0@0.5');
@define('BO_GRAPH_RAW_COLOR3', '#800@0.6');
@define('BO_GRAPH_RAW_COLOR_BOX', '#d0d0d0');
@define('BO_GRAPH_RAW_COLOR_BACK', '#fff');
@define('BO_GRAPH_RAW_COLOR_MARGIN','#fff');
@define('BO_GRAPH_RAW_COLOR_FRAME', '#fff');
@define('BO_GRAPH_RAW_COLOR_XGRID', '#eee');
@define('BO_GRAPH_RAW_COLOR_YGRID', '#eee');
@define('BO_GRAPH_RAW_COLOR_XAXIS', '#666');
@define('BO_GRAPH_RAW_COLOR_YAXIS', '#666');
@define('BO_GRAPH_RAW_SPEC_WIDTH', 1);
@define('BO_GRAPH_RAW_SPEC_MAX_X', 160); //kHz
@define('BO_GRAPH_RAW_SPEC_MAX_Y', 7);


/************************/
/*** Statistics Graph ***/


/*** (main settings for all graphs) ***/

//time settings
@define('BO_GRAPH_STAT_STRIKES_ADV_GROUP_MINUTES',  30); // interval between each data point
@define('BO_GRAPH_STAT_HOURS_BACK', 24);
@define('BO_GRAPH_STAT_HOURS_BACK_STATIONS', 72);

//main appearance
@define('BO_GRAPH_STAT_W', 550);
@define('BO_GRAPH_STAT_H', 300);
@define('BO_GRAPH_STAT_COLOR0', '#f00@0.5');
@define('BO_GRAPH_STAT_COLOR1', '#f00@0.5');
@define('BO_GRAPH_STAT_COLOR2', '#0f0@0.5');
@define('BO_GRAPH_STAT_COLOR3', '#800@0.6');
@define('BO_GRAPH_STAT_COLOR_BOX', '#d0d0d0');
@define('BO_GRAPH_STAT_COLOR_BACK', '#fff');
@define('BO_GRAPH_STAT_COLOR_CAPTION', '#666');
@define('BO_GRAPH_STAT_COLOR_MARGIN','#fff');
@define('BO_GRAPH_STAT_COLOR_FRAME', '#fff');
@define('BO_GRAPH_STAT_COLOR_XGRID', '#eee');
@define('BO_GRAPH_STAT_COLOR_YGRID', '#eee');
@define('BO_GRAPH_STAT_COLOR_XAXIS', '#666');
@define('BO_GRAPH_STAT_COLOR_YAXIS', '#666');
@define('BO_GRAPH_STAT_COLOR_XAXIS_TITLE', '#666');
@define('BO_GRAPH_STAT_COLOR_YAXIS_TITLE', '#666');
@define('BO_GRAPH_STAT_COLOR_LEGEND_FILL', '#fff@1');
@define('BO_GRAPH_STAT_COLOR_LEGEND_TEXT', '#666');
@define('BO_GRAPH_STAT_COLOR_LEGEND_FRAME', '#fff@1');
@define('BO_GRAPH_STAT_COLOR_TITLE', '#666');
@define('BO_GRAPH_STAT_FONTSIZE_TITLE', 8);
@define('BO_GRAPH_STAT_FONTSIZE_XAXIS', 7);
@define('BO_GRAPH_STAT_FONTSIZE_YAXIS', 7);


/*** Statistics Graph (individual settings for each graph) ***/

//Statistics-Graph: Strikes (now)
@define('BO_GRAPH_STAT_STRIKES_NOW_COLOR_L1', '#55f@1');
@define('BO_GRAPH_STAT_STRIKES_NOW_COLOR_F1', '#aaf@0.5');
@define('BO_GRAPH_STAT_STRIKES_NOW_WIDTH_1',  1);
@define('BO_GRAPH_STAT_STRIKES_NOW_COLOR_L2', '#66f@1');
@define('BO_GRAPH_STAT_STRIKES_NOW_COLOR_F2', '#77f@0.6');
@define('BO_GRAPH_STAT_STRIKES_NOW_WIDTH_2',  1);
@define('BO_GRAPH_STAT_STRIKES_NOW_GROUP_MINUTES',  15);

//Statistics-Graph: Strikes (Month, Year)
@define('BO_GRAPH_STAT_STRIKES_TIME_COLOR_L1', '#00f@1');
@define('BO_GRAPH_STAT_STRIKES_TIME_COLOR_F1', '#99f@0.2');
@define('BO_GRAPH_STAT_STRIKES_TIME_COLOR_L2', '#00f@1');
@define('BO_GRAPH_STAT_STRIKES_TIME_COLOR_F2', '#99f@0.6');
@define('BO_GRAPH_STAT_STRIKES_TIME_WIDTH', 0.5);

//Statistics-Graph: Strikes (Station)
@define('BO_GRAPH_STAT_STR_COLOR_L1', '#99f@1');
@define('BO_GRAPH_STAT_STR_COLOR_F1', '#aaf@0.5');
@define('BO_GRAPH_STAT_STR_WIDTH_1',  1);
@define('BO_GRAPH_STAT_STR_COLOR_L2', '#00f@1');
@define('BO_GRAPH_STAT_STR_COLOR_F2', '#77f@0.6');
@define('BO_GRAPH_STAT_STR_WIDTH_2',  2);
@define('BO_GRAPH_STAT_STR_COLOR_L3', '#00f@0.5');
@define('BO_GRAPH_STAT_STR_COLOR_F3', false);
@define('BO_GRAPH_STAT_STR_WIDTH_3',  1);

//Statistics-Graph: Signals
@define('BO_GRAPH_STAT_SIG_COLOR_L1', '#fa0@1');
@define('BO_GRAPH_STAT_SIG_COLOR_F1', '#fa0@0.8');
@define('BO_GRAPH_STAT_SIG_WIDTH_1',  1);
@define('BO_GRAPH_STAT_SIG_COLOR_L2', '#fc3@0.2');
@define('BO_GRAPH_STAT_SIG_COLOR_F2', false);
@define('BO_GRAPH_STAT_SIG_WIDTH_2',  2);

//Statistics-Graph: Distance
@define('BO_GRAPH_STAT_DIST_COLOR_L1', '#fa0@1');
@define('BO_GRAPH_STAT_DIST_COLOR_F1', '#397@0.8');
@define('BO_GRAPH_STAT_DIST_WIDTH_1',  1);
@define('BO_GRAPH_STAT_DIST_COLOR_L2', '#077@0.3');
@define('BO_GRAPH_STAT_DIST_COLOR_F2', false);
@define('BO_GRAPH_STAT_DIST_WIDTH_2',  2);

//Statistics-Graph: Ratio
@define('BO_GRAPH_STAT_RAT_COLOR_L1', '#fa0@0.9');
@define('BO_GRAPH_STAT_RAT_COLOR_F1', '#fa0@0.7');
@define('BO_GRAPH_STAT_RAT_WIDTH_1',  1);
@define('BO_GRAPH_STAT_RAT_COLOR_L2', '#fa0@0.5');
@define('BO_GRAPH_STAT_RAT_COLOR_F2', false);
@define('BO_GRAPH_STAT_RAT_WIDTH_2',  2);
@define('BO_GRAPH_STAT_RAT_COLOR_L3', '#88f@0.9');
@define('BO_GRAPH_STAT_RAT_COLOR_F3', '#88f@0.7');
@define('BO_GRAPH_STAT_RAT_WIDTH_3',  1);
@define('BO_GRAPH_STAT_RAT_COLOR_L4', '#00f@0.5');
@define('BO_GRAPH_STAT_RAT_COLOR_F4', false);
@define('BO_GRAPH_STAT_RAT_WIDTH_4',  2);

//Statistics-Graph: Stations
@define('BO_GRAPH_STAT_STA_COLOR_L1', '#c00@0.98');
@define('BO_GRAPH_STAT_STA_COLOR_F1', '#c00@0.85');
@define('BO_GRAPH_STAT_STA_WIDTH_1',  1);
@define('BO_GRAPH_STAT_STA_COLOR_L2', '#fa0@0.1');
@define('BO_GRAPH_STAT_STA_WIDTH_2',  1);
@define('BO_GRAPH_STAT_STA_COLOR_L3', '#0cc@0.90');
@define('BO_GRAPH_STAT_STA_COLOR_F3', '#0cc@0.85');
@define('BO_GRAPH_STAT_STA_WIDTH_3',  1);
@define('BO_GRAPH_STAT_STA_COLOR_L4', '#0ac@0.1');
@define('BO_GRAPH_STAT_STA_WIDTH_4',  1);

//Statistics-Graph: Distance-Ratio
@define('BO_GRAPH_STAT_RATIO_DIST_DIV', 20);
@define('BO_GRAPH_STAT_RATIO_DIST_LINE', false);
@define('BO_GRAPH_STAT_RATIO_DIST_COLOR_L1', '#00f@1');
@define('BO_GRAPH_STAT_RATIO_DIST_COLOR_F1', '#ada@0.2');
@define('BO_GRAPH_STAT_RATIO_DIST_WIDTH1',  null);
@define('BO_GRAPH_STAT_RATIO_DIST_COLOR_L2', '#22f@0.8');
@define('BO_GRAPH_STAT_RATIO_DIST_COLOR_F2', '#22f@0.95');
@define('BO_GRAPH_STAT_RATIO_DIST_WIDTH2',  1);

//Statistics-Graph: Bearing-Ratio
@define('BO_GRAPH_STAT_RATIO_BEAR_DIV', 5);
@define('BO_GRAPH_STAT_RATIO_BEAR_LINE', false);
@define('BO_GRAPH_STAT_RATIO_BEAR_COLOR_L1', '#00f@1');
@define('BO_GRAPH_STAT_RATIO_BEAR_COLOR_F1', '#ada@0.2');
@define('BO_GRAPH_STAT_RATIO_BEAR_WIDTH1',  null);
@define('BO_GRAPH_STAT_RATIO_BEAR_COLOR_L2', '#22f@0.8');
@define('BO_GRAPH_STAT_RATIO_BEAR_COLOR_F2', '#22f@0.95');
@define('BO_GRAPH_STAT_RATIO_BEAR_WIDTH2',  1);
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE',  true);
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_SIZE',  550);
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_COLOR_BACKGROUND', 'fff');
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_COLOR1', 'cec');
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_COLOR2', '99f');
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_COUNT_WIDTH',  3);
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_ANTENNA_WIDTH',  2);
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_ANTENNA1_COLOR', 'f00');
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_ANTENNA2_COLOR', '0d0');
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_TITLE_SIZE', 0.45);
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_TITLE_COLOR', '000');
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_NUMBERS_SIZE', 0.4);
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_NUMBERS_COLOR1', '060');
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_NUMBERS_COLOR2', '00f');
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_NUMBERS_ANGLE1', 30);
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_NUMBERS_ANGLE2', 200);
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_FONTSIZE_BEAR', 0.7);
@define('BO_GRAPH_STAT_RATIO_BEAR_WINDROSE_FONTSIZE_OTHER', 0.4);

//Statistics-Graph: Strikes by no. of participants
@define('BO_GRAPH_STAT_PARTICIPANTS_COLOR_L1', '#00f@1');
@define('BO_GRAPH_STAT_PARTICIPANTS_COLOR_F1', '#66f@0.4');
@define('BO_GRAPH_STAT_PARTICIPANTS_COLOR_L2', '#00f@1');
@define('BO_GRAPH_STAT_PARTICIPANTS_COLOR_F2', '#aaf@0.4');
@define('BO_GRAPH_STAT_PARTICIPANTS_WIDTH', 0.5);
@define('BO_GRAPH_STAT_PARTICIPANTS_COLOR_L3', '#c0f@0.6');
@define('BO_GRAPH_STAT_PARTICIPANTS_COLOR_F3', false);
@define('BO_GRAPH_STAT_PARTICIPANTS_WIDTH2',  1);
@define('BO_GRAPH_STAT_PARTICIPANTS_LOG', true);

//Statistics-Graph: Strikes with specific participants
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_COLOR_L1', '#d00@0.4');
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_COLOR_F1', false);
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_WIDTH_1',  1);
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_COLOR_L2', '#f66@0.4');
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_COLOR_F2', false);
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_WIDTH_2',  1);
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_COLOR_L3', '#00f@0.9');
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_COLOR_F3', '#55f@0.9');
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_WIDTH_3',  0);

//Statistics-Graph: Strikes with participants
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_AVG_COLOR_L1', '#f00@0.4');
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_AVG_COLOR_F1', false);
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_AVG_WIDTH_1',  2);
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_AVG_COLOR_L2', '#f60@0.4');
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_AVG_COLOR_F2', false);
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_AVG_WIDTH_2',  1);
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_AVG_COLOR_L3', '#00f@0.9');
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_AVG_COLOR_F3', '#55f@0.9');
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_AVG_WIDTH_3',  0);
@define('BO_GRAPH_STAT_STRIKES_PARTICIPANTS_AVG_GROUP_MINUTES',  15);

//Statistics-Graph: Strikes by deviations
@define('BO_GRAPH_STAT_DEVIATIONS_COLOR_L1', '#00f@1');
@define('BO_GRAPH_STAT_DEVIATIONS_COLOR_F1', '#66f@0.4');
@define('BO_GRAPH_STAT_DEVIATIONS_COLOR_L2', '#00f@1');
@define('BO_GRAPH_STAT_DEVIATIONS_COLOR_F2', '#aaf@0.4');
@define('BO_GRAPH_STAT_DEVIATIONS_WIDTH', 0.5);
@define('BO_GRAPH_STAT_DEVIATIONS_COLOR_L3', '#c0f@0.6');
@define('BO_GRAPH_STAT_DEVIATIONS_COLOR_F3', false);
@define('BO_GRAPH_STAT_DEVIATIONS_WIDTH2',  1);
@define('BO_GRAPH_STAT_DEVIATIONS_LOG', false);

//Statistics-Graph: Strikes with specific deviations
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_COLOR_L1', '#d00@0.4');
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_COLOR_F1', false);
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_WIDTH_1',  1);
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_COLOR_L2', '#f66@0.4');
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_COLOR_F2', false);
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_WIDTH_2',  1);
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_COLOR_L3', '#00f@0.9');
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_COLOR_F3', '#55f@0.9');
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_WIDTH_3',  0);
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_GROUP_MINUTES',  15);

//Statistics-Graph: Strikes with average deviations
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_AVG_COLOR_L1', '#f00@0.4');
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_AVG_COLOR_F1', false);
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_AVG_WIDTH_1',  2);
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_AVG_COLOR_L2', '#f60@0.4');
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_AVG_COLOR_F2', false);
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_AVG_WIDTH_2',  1);
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_AVG_COLOR_L3', '#00f@0.9');
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_AVG_COLOR_F3', '#55f@0.9');
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_AVG_WIDTH_3',  0);
@define('BO_GRAPH_STAT_STRIKES_DEVIATIONS_AVG_GROUP_MINUTES',  15);

//Statistics-Graph: Evaluated Signals
@define('BO_GRAPH_STAT_EVALUATED_SIGNALS_COLOR_L1', '#fa0@0.3');
@define('BO_GRAPH_STAT_EVALUATED_SIGNALS_COLOR_F1', false);
@define('BO_GRAPH_STAT_EVALUATED_SIGNALS_WIDTH_1', 2);
@define('BO_GRAPH_STAT_EVALUATED_SIGNALS_COLOR_L2', '#f0f@0.3');
@define('BO_GRAPH_STAT_EVALUATED_SIGNALS_COLOR_F2', false);
@define('BO_GRAPH_STAT_EVALUATED_SIGNALS_WIDTH_2', 1);
@define('BO_GRAPH_STAT_EVALUATED_SIGNALS_COLOR_L3', '#0a0@1');
@define('BO_GRAPH_STAT_EVALUATED_SIGNALS_COLOR_F3', '#33f@0.9');
@define('BO_GRAPH_STAT_EVALUATED_SIGNALS_WIDTH_3',  1);

//Statistics-Graph: Spectrums
@define('BO_GRAPH_STAT_SPECTRUM_COLOR1', '#f55@0.5');
@define('BO_GRAPH_STAT_SPECTRUM_COLOR2', '#5f5@0.5');
@define('BO_GRAPH_STAT_SPECTRUM_WIDTH1', 2);
@define('BO_GRAPH_STAT_SPECTRUM_WIDTH2', 0.6);
@define('BO_GRAPH_STAT_SPECTRUM_COLOR3', '#c00@0.3');
@define('BO_GRAPH_STAT_SPECTRUM_WIDTH3', 2);
@define('BO_GRAPH_STAT_SPECTRUM_COLOR4', '#0c0@0.3');
@define('BO_GRAPH_STAT_SPECTRUM_WIDTH4', 2);

//Statistics-Graph: Empl/Freq by time
@define('BO_GRAPH_STAT_SIGNALS_TIME_COLOR_L1A', '#e22@0.5');
@define('BO_GRAPH_STAT_SIGNALS_TIME_COLOR_F1A', false);
@define('BO_GRAPH_STAT_SIGNALS_TIME_WIDTH_1A', 2);
@define('BO_GRAPH_STAT_SIGNALS_TIME_COLOR_L2A', '#2f2@0.5');
@define('BO_GRAPH_STAT_SIGNALS_TIME_COLOR_F2A', false);
@define('BO_GRAPH_STAT_SIGNALS_TIME_WIDTH_2A', 2);
@define('BO_GRAPH_STAT_SIGNALS_TIME_COLOR_L1B', '#f99@0.9');
@define('BO_GRAPH_STAT_SIGNALS_TIME_COLOR_F1B', '#f55@0.8');
@define('BO_GRAPH_STAT_SIGNALS_TIME_WIDTH_1B', 1);
@define('BO_GRAPH_STAT_SIGNALS_TIME_COLOR_L2B', '#9f9@0.9');
@define('BO_GRAPH_STAT_SIGNALS_TIME_COLOR_F2B', '#5f5@0.8');
@define('BO_GRAPH_STAT_SIGNALS_TIME_WIDTH_2B', 1);
@define('BO_GRAPH_STAT_SIGNALS_TIME_COLOR_L3', '#f0f@0.9');
@define('BO_GRAPH_STAT_SIGNALS_TIME_COLOR_F3', '#f0f@0.95');
@define('BO_GRAPH_STAT_SIGNALS_TIME_WIDTH_3', 1);





/*******************************************************************/
/*** Some special/expert settings                                ***/
/*** You shouldn't change them unless you know what you're doing ***/

// Fuzzy strike update to avoid duplicates
@define('BO_UP_STRIKES_FUZZY_NSEC', 400000);
@define('BO_UP_STRIKES_FUZZY_KM',   50);

// Timeouts (Seconds)
// If you your station sends a lot of signals or strike rate is very high
// and not all strikes are displayed set BO_UP_MAX_TIME higher (i.e 120)
// and lower BO_UP_MAX_SLEEP (i.e. 5).
@define('BO_UP_MAX_TIME',  55); // max. exec time
@define('BO_UP_MAX_SLEEP', 30); // max. sleep time in seconds before importing

// set to true, if you want to use "file_get_contents"
// you wouldn't be able to use partial downloads with setting "true"!
@define('BO_USE_PHPURLWRAPPER', false); 

// use experimental mysql key for faster strike search
// by time *and* latlon                                         
@define('BO_DB_USE_LATLON_TIME_INDEX', false);

//enable longtime statistics for all stations
//causes a LOT OF more load during importing
@define('BO_ENABLE_LONGTIME_ALL', false);





/*******************************************************************/
/*** Some special settings which shouldn't be changed            ***/

//Tile dimensions (pixels)
@define("BO_TILE_SIZE", 512);

//Tile dimensions for strike counter
@define("BO_TILE_SIZE_COUNT", 256);

//waits when another tile is created
define("BO_WAIT_SIM_TILE_CREATION", false); 

//Min and max count of participants - values are only used if
//automatic getting from participants.txt failed
@define('BO_MIN_PARTICIPANTS', 8);
@define('BO_MAX_PARTICIPANTS', 12);

//max. signal level
@define('BO_MAX_VOLTAGE', 2.5);

//trigger voltage
@define('BO_TRIGGER_VOLTAGE', 0.45);

//data in participants.txt can change for strikes younger
//than given minutes
@define('BO_MIN_MINUTES_STRIKE_CONFIRMED', 5);

//needed for auto linking stations
@define('BO_LINK_HOST', 'www.myblitzortung.de');
@define('BO_LINK_URL',  '/blitzortung/bo.php');

//for finding signal to strike
@define('BO_STR2SIG_C', 299792458); //speed of light
@define('BO_STR2SIG_FUZZ_SEC', 0.00001); //minimum fuzzy-seconds
@define('BO_STR2SIG_FUZZ_SECM', 0.0001); //fuzzy-seconds per meter
@define('BO_STR2SIG_FUZZ_OFFSET', 0); //fuzzy offset
@define('BO_STR2SIG_TRIGGER_FACTOR', 0.9); //factor for BO_TRIGGER_VOLTAGE 

//speed of light for runtime in archive table (and perhaps other display)
@define('BO_C', 299792458); // Blitzortung.org uses c/1.000198

//finding no of min participants / no of max. participants for calculation
@define('BO_FIND_MIN_PARTICIPANTS_HOURS', 2); //update and search intervall for min participants
@define('BO_FIND_MIN_PARTICIPANTS_COUNT', 4); //how often a new value has to be present to be saved
@define('BO_FIND_MAX_PARTICIPANTS_HOURS', 24); //update and search intervall for max participants

//when station deleted -> assign a new unique id from defined value and up (MySQL UNSIGNED SMALLINT!)
@define('BO_DELETED_STATION_MIN_ID', 50000);


/*******************************************************************/
/*** Settings for Developers                                     ***/

@define('BO_DEBUG', false); //enables PHP error reporting
@define('BO_LANG_AUTO_ADD', false); //automatically adds missing translations to the locale file if it is writeable



?>