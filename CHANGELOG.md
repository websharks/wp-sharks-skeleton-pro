## v170309.34722

- Enhancing defaults to make it easier to begin a new project.
- Enhancing security by removing `basename(__FILE__)` from direct access notices.

## v160829.8388

- Adding extra install/uninstall starter files.
- Enhancing menu page utility with better examples.
- `@since` tags now use `$%v`, which survives a build so they can be handled via `./prepare`.
- Enhancing `./prepare` script so that it can properly convert temporary `$%v` tokens into `$v`.
- Updating `.build.props` with Slack channel name for release/upload notifications.
