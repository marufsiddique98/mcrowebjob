<?php

return [

    /*
     |
     | Settings for configuring the Page Builder.
     |
     */

    //Page manager layout settings
    'layout'                                => 'layouts.admin.app',               //layout for page manager
    'section'                               => 'content',                       //section variable name that yields from above layout
    'style_var'                             => 'styles',                        // push style variable for style css
    'script_var'                            => 'scripts',                       // push scripts variable for custom js and scripts files
    //End page manage layout settings

    //Site layout settings
    'site_layout'                           => 'layouts.app',                  //layout for site
    'site_section'                          => 'content',                       //section variable name that yields from above layout
    'site_style_var'                        => 'styles',                        //push style variable for style css
    'site_script_var'                       => 'scripts',                       //push scripts variable for custom js and scripts files
    //End site layout settings

    'db_prefix'                             => 'pagebuilder__',                 // prefix for database tables
    'url_prefix'                            => 'admin',                              // like /admin if you are using it in admin panel
    'route_middleware'                      => ['auth'],                              // route middlewares like auth, role etc

    // assets publishing
    'add_bootstrap'                         => 'yes',                            // yes/no to add/remove bootstrap assets from the package 
    'add_jquery'                            => 'yes',                            // yes/no to add/remove jquery js from the package

];
