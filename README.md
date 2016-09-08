# Chop Chop

## Atomic
- atoms – high level elements such as inputs, headings
- molecules – something containing multiple atoms or a very reusable flexible
pattern
- organism – something very specific to it's use that contains multiple
molecules

## Get Started

To get going with it here are the commands.

_You can copy this entire block into the command line and it will process it
all for you._
```
cd ~/sites
git clone git@github.com:getchopchop/chopchop.git chopchop/public_html
cd chopchop/public_html
npm i
npm run build
```

## Working on the project

_Make sure you're running the commands from the project root where the
gulpfile.js lives._  

```
cd ~/Sites/chopchop/public_html
```

### NPM Scripts

`npm run build`  
Builds all assets.
- Merges SVGs into a sprite
- JSHint javascript files
- Compile sass to css
- Sass sourcemaps
- Autoprefixes css
- Combines media queries in css
- Moves processed to build directory

*Errors will log to the command line and not fail the build*

`npm run build:production`  
Builds all assets in production mode. Does the same as above with the following
differences
- Minifies scripts and styles
- Compresses images
- Disables sourcemaps and JSHint

*Errors will fail the build in production mode for the benefit of CI
pipelines*

`npm run watch`  
Builds all assets (Not in production mode), then watches directories for
changes.
