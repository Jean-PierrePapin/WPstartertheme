var path            =   require( 'path' )

var config          =   {
    entry:          './app/index.js',
    output:         {
        path:       path.resolve( __dirname, 'dist' ),
        filename:    'bundled.js'
    },
    mode:           'development'
};

module.exports      =   config;