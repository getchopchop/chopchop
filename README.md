# ChopChop
A front end framework and pattern library

## Wiki Documentation
Full [documentation can be found here](https://github.com/getchopchop/chopchop/wiki)

## Getting Started

1. Clone the project / Download the zip.
```
git clone git@github.com:getchopchop/chopchop.git chopchop
```
2. Navigation to the working directory
```
cd chopchop
```
3. Install npm modules
```
npm i
```
4. Update variables, paths, folders, extensions etc at top of the gulpfile.js
file to suite your project.
5. Build assets
```
npm run build
```

### NPM Scripts
* `$ npm run watch` - Builds assets and watches directories for changes.
* `$ npm run build` - Builds all assets.
* `$ npm run build:production` - Builds all assets for production (Minified CSS
  and JavaScript, compressed images etc).

### Example Project Structure
*This can be easily changed to suit your project.*
```
+-- build/
|   +-- css
|   +-- img
|   |   +-- icons
|   +-- js
+-- node_modules/
+-- inc/
+-- pattern/
+-- src/
|   +-- img
|   |   +-- vectors
|   +-- js
|   +-- scss
+-- .editorconfig
+-- .gitignore
+-- .htaccess
+-- gulpfile.js
+-- index.php
+-- LICENCE.md
+-- package.json
+-- README.md
```

## Bugs and feature requests

Have a bug or a feature request? Please first read the [contributing guidelines](https://github.com/getchopchop/chopchop/blob/next/.github/CONTRIBUTING.md)
document and search for existing and closed issues. If your problem or idea is
not addressed yet, please open a [new issue](https://github.com/getchopchop/chopchop/issues).

## Contributing

Please read through our [contributing guidelines](https://github.com/getchopchop/chopchop/blob/next/.github/CONTRIBUTING.md).
Included are directions for opening issues, coding standards, and notes on
development.

Editor preferences are available in the editor config for easy use in common
text editors. Read more and download plugins at http://editorconfig.org.

## Versioning

This project is maintained under the [Semantic Versioning guidelines](http://semver.org/).
Sometimes we screw up, but we'll adhere to those rules whenever possible.

See the [Releases](https://github.com/getchopchop/chopchop/releases) section
of our GitHub project for changelogs for each release.
