# Contributing

Looking to contribute something? **Here's how you can help.**

Please take a moment to review this document in order to make the contribution
process easy and effective for everyone involved.

Following these guidelines helps to communicate that you respect the time of
the developers managing and developing this open source project. In return,
they should reciprocate that respect in addressing your issue or assessing
patches and features.

## Using the issue tracker

The [issue tracker](https://github.com/jakecobley/gulpfile.js/issues) is
the preferred channel for bug reports, features requests and submitting
[pull requests](https://github.com/jakecobley/gulpfile.js/pulls), but please
respect the following restrictions:

* Please **do not** use the issue tracker for personal support requests.

* Please **do not** derail or troll issues. Keep the discussion on topic and
  respect the opinions of others.

* Please **do not** post comments consisting solely of "+1" or ":thumbsup:".
  Use [GitHub's "reactions" feature](https://github.com/blog/2119-add-reactions-to-pull-requests-issues-and-comments)
  instead. We reserve the right to delete comments which violate this rule.

* Please **do not** open issues or pull requests regarding the code in third
  party code i.e. Node Modules etc. Open them in their repository.

## Issues and labels

Our bug tracker utilises several labels to help organise and identify issues.
Here's what they represent and how we use them:
- `bug` - Issue with the project.
- `enhancement` - Issues asking for a new feature to be added, or an existing
one to be extended or modified. New features require a minor version bump
(e.g., `v3.0.0` to `v3.1.0`).
- `help wanted` - Issues we need or would love help from the community to
resolve.
- `question` - Issues/enhancements which need discussion.

For a complete look at our labels, see the [project labels page](https://github.com/jakecobley/gulpfile.js/labels).

## Feature requests

Feature requests are welcome. But take a moment to find out whether your idea
fits with the scope and aims of the project. It's up to *you* to make a strong
case to convince the project's developers of the merits of this feature. Please
provide as much detail and context as possible.

## Pull requests

Good pull requests; patches, improvements and new features are a fantastic
help. They should remain focused in scope and avoid containing unrelated
commits.

**Please ask first** before embarking on any significant pull request (e.g.
implementing features, refactoring code, porting to a different language),
otherwise you risk spending a lot of time working on something that the
project's developers might not want to merge into the project.

Please adhere to the coding guidelines, outlined below, used throughout the
project (indentation, accurate comments, etc).

Adhering to the following process is the best way to get your work
included in the project:

1. [Fork](https://help.github.com/fork-a-repo/) the project, clone your fork,
   and configure the remotes:

   ```bash
   # Clone your fork of the repo into the current directory
   git clone https://github.com/<your-username>/gulpfile.js.git
   # Navigate to the newly cloned directory
   cd bootstrap
   # Assign the original repo to a remote called "upstream"
   git remote add upstream https://github.com/jakecobley/gulpfile.js.git
   ```

2. If you cloned a while ago, get the latest changes from upstream:

   ```bash
   git checkout master
   git pull upstream master
   ```

3. Create a new topic branch (off the 'next' branch) to
   contain your feature, change, or fix:

   ```bash
   git checkout -b <topic-branch-name>
   ```

4. Commit your changes in logical chunks. Please adhere to these [git commit
   message guidelines](http://tbaggery.com/2008/04/19/a-note-about-git-commit-messages.html)
   or your code is unlikely be merged into the main project. Use Git's
   [interactive rebase](https://help.github.com/articles/interactive-rebase)
   feature to tidy up your commits before making them public.

5. Locally merge (or rebase) the upstream development branch into your topic
branch:

   ```bash
   git pull [--rebase] upstream master
   ```

6. Push your topic branch up to your fork:

   ```bash
   git push origin <topic-branch-name>
   ```

7. [Open a Pull Request](https://help.github.com/articles/using-pull-requests/)
    with a clear title and description against the `next` branch.

**IMPORTANT**: By submitting a pull request, you agree to allow the project
owners to license your work under the terms of the [MIT License](LICENSE).

## Code guidelines

### HTML

- [Adhere to the Code Guide.](http://codeguide.co/#html)
- 4 spaces (no tabs)
- Use tags and elements appropriate for an HTML5 doctype (e.g., self-closing tags).
- Use [WAI-ARIA](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA) attributes in documentation examples to promote accessibility.

### PHP

- [Adhere to PSR-2 Coding Style Guide](http://www.php-fig.org/psr/psr-2/)
- 4 spaces (no tabs)

### CSS

- [Adhere to the Code Guide.](http://codeguide.co/#css)
- 4 spaces (no tabs)
- [Adhere to BEM Naming Convention](http://getbem.com/naming/)

### JS

- 4 spaces (no tabs)
- strict mode
- "Attractive"

### JSON

- 2 spaces (no tabs)

### YAML

- 2 spaces (no tabs)

## License

By contributing your code, you agree to license your contribution under the [MIT License](https://github.com/getchopchop/chopchop/blob/next/LICENSE.md).
