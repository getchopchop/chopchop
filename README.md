# Chop Chop

## Wiki Link
https://gitlab.iweb.co.uk/labs/chopchop/wikis/pages


## Atomic
- atoms – high level elements such as inputs, headings
- molecules – something containing multiple atoms or a very reusable flexible pattern
- organism – something very specific to it's use that contains multiple molecules

See [wiki](https://gitlab.iweb.co.uk/labs/chopchop/wikis/best-practices) for more

## Get Started

To get going with it here are the commands  
_You can copy this entire block into the command line and it will process it all for you._
```
mkdir ~/Sites/chopchop;
cd ~/Sites/chopchop;
git clone git@gitlab.iweb.co.uk:labs/chopchop.git public_html;
cd public_html;
npm install;
./node_modules/.bin/gulp build;
```

## Working on the project

_Make sure you're running the commands from the project root where the gulpfile.js lives._  

```
cd ~/Sites/chopchop/public_html
```

### Gulp Tasks

- `gulp` or `./node_modules/.bin/gulp`  
Runs gulp build and once finished starts gulp watch.

- `gulp --dev` or `./node_modules/.bin/gulp --dev`  
Runs gulp build and once finished starts gulp watch. Both are run in development mode (linting & browsersync).

- `gulp watch` or `./node_modules/.bin/gulp watch`  
Watches the directories (_src/img_, _src/js/_, _src/scss/_, _src/vendor_) for changes. Runs the related task on file change.

- `gulp watch --dev` or `./node_modules/.bin/gulp watch --dev`  
Watches the directories (_src/img_, _src/js/_, _src/scss/_, _src/vendor_) for changes. Runs the related task in development mode (linting & browsersync) on file change.

- `gulp build` or `./node_modules/.bin/gulp build`  
Runs _clean_ to destroy the build directory, then runs _scss_, _js_, _vendor_, _fonts_, _img_ to re-compile the build directory.

- `gulp build --production` or `./node_modules/.bin/gulp build --production`  
Runs _clean_ to destroy the build directory, then runs _scss_, _js_, _vendor_, _fonts_, _img_ in production mode (HARD Errors, minifies & other optimisations) to re-compile the build directory. This is the task which the CI task uses.

_HARD Errors means an error in the task (sass / js etc) will cause the build to fail. By default errors are logged to the console but would not break the build._
