# West Hills College

Welcome to the project!

The primary scope of work for this codebase was to produce the HTML, CSS and JavaScript for the new West Hills Community College District.

To do that we used the following technologies:

* gulp
* npm
* sass
* vue.js
* php

PHP was used to allow for breaking code into smaller chunks and including them into other code snippets.

## Build Process

1. To install run 'npm install' on the command line, this will install the dependencies needed to use the build tools. This can take a little bit the first time you run it.
2. Gulp is our task management tool for this project. When you run `gulp`, it's going to start the default task, and begin looking for changes to SASS/SCSS and JavaScript. You can always look in the `gulpfile.js` to see the details around all the automation this project does.
3. After Gulp is running you can make changes to the SASS/SCSS and JavaScript files.
4. Gulp will see the changes and then compile them, and minimize them.

## Docker Base

This project uses Docker to help facilitate a local development environment that is consistent across different computers.

Defaults:
* PHP - 7.0 with FPM
* Nginx - latest version from docker hub

To use docker, you can run `docker-compose up`, and it will download what  it needs and start running. If you need to stop, you can hit `ctrl+c` and it will stop the server.

## Project Specifics

There's two key areas to focus on within this project. The `build/build_assets` and `web` directories.

### Build Assets

* This area contains useful variables configuring builds, as well as the fonts, images, icons, JavaScript, CSS and other assets the site needs to render things.
* This is where you make changes to these files, then Gulp will automatically process these and send them into the `web` directory.
* If you see a folder called "dist" this folder contains production ready files, while the "src" file is compiled, but raw code -- meant to assist in debugging efforts.

#### Icons

* Icons for this site are compiled into Icon Fonts.
* The font itself, is defined in the template file `./build/build_assets/fonts/iconFontTemplate.tmpl` -- it's recommended you do not change this unless you know what you are doing.
* There's a specific gulp task around this stuff:
```
/*****************************/
/*********** FONTS ***********/
/*****************************/

//compile icon font using all of our svgs so make sure to run svg-build first

gulp.task('font-compile', () => {
  return gulp.src(svgDir+'*.svg')
  .pipe(iconFont({
    fontName: prefix+'_icons',
    normalize: true,
    formats: ['woff', 'woff2'],
  }))
  .on( 'glyphs', function ( glyphs, options ) {
    gulp.src( buildDir+'fonts/iconFontTemplate.tmpl' )
      .pipe( consolidate( 'lodash', {
        glyphs: glyphs.map( function ( glyph ) {
          return { name: glyph.name, codepoint: glyph.unicode[ 0 ].charCodeAt( 0 ) };
        }),
        fontName: prefix+'_icons',
        fontPath: urlPath+'fonts/'
      }))
      .pipe( rename( '_icons.scss' ))
      .pipe( gulp.dest( buildDir+'sass/global/fonts' ));
  })
  .pipe( gulp.dest( fontDir ));
});
```
** Basically, this loads the aforementioned template file.
** Then after it obtains a list of all the svg files within the svg directory, it builds an Icon Font with that information.
** It takes that font which is now `woff` and `woff2` files, and throws them into the `./web/assets/fonts` folder.
** Then it also creates an SCSS file within `./build/build_assets/sass/global/fonts/_icons_.scss` and maps every font character to a value we can use with CSS.

That should be it!


### Web Directory

* If you are looking to re-arrange HTML or mess with more server-side code, this is where you want to make changes.
* The `assets` directory within here is where the compiled and processed files from the Build Assets directory end up.
* The partials directory is where we keep many of the patterns, and these files are purpose built snippets of code.  An example use of the files from that directory:

```
<?php
		require_once './partials/hero-section.php';
		require_once './partials/campus.php';
		require_once './partials/circles.php';
		require_once './partials/interests.php';
		require_once './partials/financing.php';
		require_once './partials/options.php';
		require_once './partials/news.php';
		require_once './partials/opportunity.php';
?>
```
