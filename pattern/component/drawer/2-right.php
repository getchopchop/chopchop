<?php /*
Title: Right Drawer
Class: .drawer.drawer--right
Description: The right drawer is hidden off screen by default. <a href="#" data-cc-toggle-target="#drawer-right-1" data-cc-toggle-action="activate">Active right drawer</a>.
*/ ?>

<div class="drawer drawer--right" id="drawer-right" data-cc-toggle-target-callback="#overlay">
    <div class="drawer__dialog">

        <div id="drawer-right-1" class="u-toggle" data-cc-toggle-target="#drawer-right" data-cc-toggle-group="drawer-right-contents">
            <div class="card">
                <div class="card__header">
                    <h2>Right Drawer Panel 1</h2>
                </div>
                <div class="u-block">
                    <p><a href="#" data-cc-toggle-target="#drawer-right-2" data-cc-toggle-action="activate">Right Drawer Panel 2</a></p>
                    <p>Vestibulum varius sem vitae diam venenatis porttitor. Pellentesque nec quam eget eros tincidunt mattis non ac nunc. Vivamus tristique, turpis vitae efficitur laoreet, eros tellus lobortis nulla, ac auctor neque velit at risus. Sed volutpat dolor erat, placerat malesuada quam tempor eu. Morbi a tellus sit amet lectus tincidunt imperdiet a tincidunt est. Cras vel volutpat mauris. Sed consectetur felis vel maximus elementum. Proin sed nisl lectus. Nunc non est ac ipsum gravida commodo vel quis nunc.</p>
                    <p>In convallis sem quis risus suscipit efficitur. Vivamus neque nisl, aliquam ac auctor nec, dignissim ac elit. Vivamus et enim augue. Cras mauris ex, pretium eget erat in, hendrerit tempus elit. Nam nisl tortor, vestibulum at arcu sit amet, posuere tincidunt enim. Nunc luctus sagittis sapien, quis tempor ligula mattis scelerisque. Quisque condimentum justo massa, vel egestas enim tempus et. Cras iaculis ex a velit molestie tempor. Aliquam aliquet faucibus rutrum. Aenean pharetra mattis imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque cursus risus non magna lobortis fermentum. Nulla accumsan nulla ac elit blandit, sed porta quam condimentum.</p>
                    <p>Ut malesuada felis pulvinar nulla tempor tempus. Donec at quam scelerisque, egestas augue dignissim, gravida mi. Cras at pellentesque mi, quis tristique felis. In auctor vel mauris at tempus. Fusce fermentum vel mi sit amet faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer pretium, mauris et imperdiet pulvinar, velit elit rhoncus lacus, nec volutpat turpis elit non arcu. Curabitur vel lorem ac lacus consectetur consequat. Ut nulla justo, viverra nec urna et, pharetra varius orci. Aenean sit amet lorem nunc. Vivamus sagittis accumsan justo, id luctus leo facilisis eget. Aliquam bibendum erat commodo, consectetur erat non, varius neque.</p>
                </div>
                <div class="card__footer">
                    <p><a href="#" data-cc-toggle-action="deactivate" data-cc-toggle-target="#drawer-right" class="btn">Close</a></p>
                </div>
            </div>
        </div>

        <div id="drawer-right-2" class="u-toggle" data-cc-toggle-target="#drawer-right" data-cc-toggle-group="drawer-right-contents">
            <div class="card">
                <div class="card__header">
                    <h2>Right Drawer Panel 2</h2>
                </div>
                <div class="u-block">
                    <p><a href="#" data-cc-toggle-target="#drawer-right-1" data-cc-toggle-action="activate">Back to Right Drawer Panel 1</a></p>
                </div>
                <div class="card__footer">
                    <p><a href="#" data-cc-toggle-action="deactivate" data-cc-toggle-target="#drawer-right" class="btn">Close Drawer</a></p>
                </div>
            </div>
        </div>

    </div>
</div>
